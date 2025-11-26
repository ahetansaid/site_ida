<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\news;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest('published_at')->paginate(8);
        return view('pages.new.index', compact('news'));
    }

    public function create()
    {
        return view('pages.new.create');
    }

    public function store(Request $request)
    {

        // dd('ok');
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'required|string|max:255',
            'published_at' => 'required|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'category' => 'required|string',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $img_url = "news_" . Carbon::now()->format('d-m-Y_H-i-s');
            $extention = $request->file('image')->getClientOriginalExtension();
            $fileName = $img_url . "." . $extention;
            $imagePath = $request->file('image')->storeAs('news', $fileName, 'public');
        }

        News::create([
            'title' => $request->title,
            'content' => $request->content,
            'author' => $request->author,
            'published_at' => $request->published_at,
            'image' => $imagePath,
            'category' => $request->category,
        ]);

        Alert::success('news bien ajouter ', 'success');
        return redirect()->back();
    }

    public function show(News $news)
    {
        return view('pages.new.show', compact('news'));
    }

    public function edit(News $news)
    {
        return view('pages.new.edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'required|string|max:255',
            'published_at' => 'required|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'category' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image si elle existe
            if ($news->image) {
                Storage::disk('public')->delete($news->image);
            }

            $img_url = "news_" . Carbon::now()->format('d-m-Y_H-i-s');
            $extention = $request->file('image')->getClientOriginalExtension();
            $fileName = $img_url . "." . $extention;
            $imagePath = $request->file('image')->storeAs('news', $fileName, 'public');
            $news->image = $imagePath;
        }

        $news->update([
            'title' => $request->title,
            'content' => $request->content,
            'author' => $request->author,
            'published_at' => $request->published_at,
            'category' => $request->category,
        ]);

        Alert::success('Article mis à jour avec succès', 'success');

        return redirect('/admin/news/index');
    }

    public function destroy(news $news)
    {
        if ($news->image) {
            Storage::disk('public')->delete($news->image);
        }
        $news->delete();
        return redirect()->back()->with('success', 'Article supprimé avec succès');
    }
}
