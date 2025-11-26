<?php

namespace App\Http\Controllers;

use App\Models\news;
use App\Models\Country;
use App\Models\Slider;
use App\Models\Fipa;
use App\Models\Project;
use App\Models\Committee;
use App\Models\Event;
use App\Models\About;
use App\Models\OurStory;
use App\Models\SectionObama;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function index()
    {
        $all_news = news::orderBy('created_at', 'desc')->paginate(10);
        $slider_image = Slider::orderBy('created_at', 'desc')->get();
        $latestProjects = Project::with('media')->orderBy('created_at', 'desc')->take(3)->get();
        $countries = Country::all(); 
        $events = Event::orderBy('start_date')->limit(5)->get(); // Limite à 5 événements pour éviter un chargement excessif
        $ourStories = OurStory::where('is_active', true)->orderBy('order')->get();
        $sectionObamas = SectionObama::where('is_active', true)->orderBy('order')->get();

        return view('welcome', compact('all_news', 'slider_image', 'latestProjects', 'countries', 'events', 'ourStories', 'sectionObamas'));
    }

    
    public function projects()
    {
        $projects = Project::with('media')->orderBy('created_at', 'desc')->paginate(10);
        return view('projects', compact('projects'));
    }

    public function internationalization()
    {
        return view('internationalization');
    }
    public function small_businesses()
    {
        return view('small_businesses');
    }
    public function opportunities()
    {
        return view('opportunities');
    }
    public function mauritania_free_zone()
    {
        return view('mauritania_free_zone');
    }
    public function water()
    {
        $waters = \App\Models\WaterProject::all();
        return view('water', compact('waters'));
    }
    public function afwa()
    {
        $afwas = \App\Models\AfwaProject::all();
        return view('afwa', compact('afwas'));
    }
    public function wwc()
    {
        return view('wwc');
    }
    public function csw62()
    {
        return view('csw62');
    }
    public function women_empowerment()
    {
        return view('women_empowerment');
    }
    public function strategic_approach()
    {
        $strategicApproaches = \App\Models\StrategicApproach::all();
        return view('strategic_approach', compact('strategicApproaches'));
    }
    public function nourdign_actions()
    {
        $nourDigns = \App\Models\NourDignProject::all();
        return view('nourdign_actions', compact('nourDigns'));
    }
    public function ada()
    {
        return view('ada');
    }
    public function ada_nelson_mandela()
    {
        return view('ada_nelson_mandela');
    }
    public function ada_leopold_sedar_senghor()
    {
        return view('ada_leopold_sedar_senghor');
    }
    public function ada_houphouet_bagny()
    {
        return view('ada_houphouet_bagny');
    }
    public function ada_desmond_mpilo_tutu()
    {
        return view('ada_desmond_mpilo_tutu');
    }
    public function ada_colin_powell()
    {
        return view('ada_colin_powell');
    }
    public function ada_boutros_boutros_ghali()
    {
        return view('ada_boutros_boutros_ghali');
    }

   public function news()
    {
        $all_news = news::orderBy('created_at', 'desc')->paginate(10);
        return view('news', ['all_news' => $all_news]);
    }

   public function detail_news(string $id)
    {
        $new_details = news::where('id', $id)->firstOrFail();
        $related_news = news::where('id', '!=', $new_details->id)
            ->orderBy('published_at', 'desc')
            ->take(2)
            ->get();

        return view('detail_news', compact('new_details', 'related_news')); // Changement de 'news_details' à 'detail_news'
    }
    public function news_history()
    {
        return view('news_history');
    }
    public function ida_activities()
    {
        return view('ida_activities');
    }
    public function clubs_ida()
    {
        return view('clubs_ida');
    }

    public function fipa()
    {
        $fipa = Fipa::orderBy('created_at', 'desc')->paginate(2);
        return view('fipa', compact('fipa'));
    }
   public function fipa_details(string $id)
    {
        $fipa_detail = Fipa::where('id', $id)->firstOrFail();
        $related_fipa = Fipa::where('id', '!=', $fipa_detail->id)
            ->orderBy('created_at', 'desc')
            ->take(2)
            ->get();

        return view('fipa_detail', compact('fipa_detail', 'related_fipa'));
    }

    public function partnership()
    {
        $partners = \App\Models\Partner::all();
        return view('partnership', compact('partners'));
    }
    public function membership()
    {
        $benefits = \App\Models\MemberBenefit::orderBy('order')->get();
        return view('membership', compact('benefits'));
    }
    public function active_volunteers()
    {
        $volunteers = \App\Models\ActiveVolunteer::all();
        return view('active_volunteers', compact('volunteers'));
    }
    public function terms_and_conditions()
    {
        return view('terms_and_conditions');
    }
    public function contact_us()
    {
        return view('contact_us');
    }

    public function donation()
    {

        return view('donation');
    }

    public function about_us()
    {
        $abouts = About::all();
        return view('about', compact('abouts'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        $project = Project::with(['media', 'documents'])->findOrFail($id);
        return view('project_details', compact('project'));
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
