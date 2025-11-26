<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectMedia;
use App\Models\ProjectDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ProjectAdminController extends Controller
{
    public function index()
    {
        $projects = Project::with(['media', 'documents'])->paginate(10);
        return view('projects.admin.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.admin.create');
    }

    public function store(Request $request)
    {
        Log::info('Requête reçue dans store project', $request->all());

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'year' => 'nullable|string|max:4',
            'domain' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'status' => 'nullable|in:En cours,Terminé,Planifié',
            'media.*' => 'nullable|file|mimes:jpg,jpeg,png,mp4|max:10240',
            'documents.*' => 'nullable|file|mimes:pdf,doc,docx|max:10240',
        ], [
            'title.required' => 'Le titre est obligatoire.',
            'title.max' => 'Le titre ne doit pas dépasser 255 caractères.',
            'description.required' => 'La description est obligatoire.',
            'year.max' => 'L’année doit être valide.',
            'domain.max' => 'Le domaine ne doit pas dépasser 255 caractères.',
            'country.max' => 'Le pays ne doit pas dépasser 255 caractères.',
            'status.in' => 'Le statut doit être En cours, Terminé ou Planifié.',
            'media.*.mimes' => 'Les médias doivent être des images (jpg, jpeg, png) ou des vidéos (mp4).',
            'media.*.max' => 'Chaque média ne doit pas dépasser 10MB.',
            'documents.*.mimes' => 'Les documents doivent être des fichiers PDF, DOC ou DOCX.',
            'documents.*.max' => 'Chaque document ne doit pas dépasser 10MB.',
        ]);

        try {
            $project = Project::create($request->only([
                'title', 'description', 'year', 'domain', 'country', 'status'
            ]));

            if ($request->hasFile('media')) {
                foreach ($request->file('media') as $file) {
                    $path = $file->store('project_media', 'public');
                    $type = in_array($file->getClientOriginalExtension(), ['jpg', 'jpeg', 'png']) ? 'image' : 'video';
                    ProjectMedia::create([
                        'project_id' => $project->id,
                        'type' => $type,
                        'path' => $path,
                        'caption' => $request->input('media_caption_' . $file->getClientOriginalName(), null),
                    ]);
                }
            }

            if ($request->hasFile('documents')) {
                foreach ($request->file('documents') as $file) {
                    $path = $file->store('project_documents', 'public');
                    ProjectDocument::create([
                        'project_id' => $project->id,
                        'name' => $file->getClientOriginalName(),
                        'path' => $path,
                    ]);
                }
            }

            Log::info('Projet créé avec succès', ['project_id' => $project->id]);

            return redirect()->route('admin.projects.index')->with('success', 'Projet créé avec succès.');
        } catch (\Exception $e) {
            Log::error('Erreur lors de la création du projet : ' . $e->getMessage());
            return back()->with('error', 'Une erreur est survenue lors de la création du projet.')->withInput();
        }
    }

    public function edit(Project $project)
    {
        $project->load(['media', 'documents']);
        return view('projects.admin.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        Log::info('Requête reçue dans update project', $request->all());

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'year' => 'nullable|string|max:4',
            'domain' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'status' => 'nullable|in:En cours,Terminé,Planifié',
            'media.*' => 'nullable|file|mimes:jpg,jpeg,png,mp4|max:10240',
            'documents.*' => 'nullable|file|mimes:pdf,doc,docx|max:10240',
            'delete_media.*' => 'nullable|integer|exists:project_media,id',
            'delete_documents.*' => 'nullable|integer|exists:project_documents,id',
        ]);

        try {
            $project->update($request->only([
                'title', 'description', 'year', 'domain', 'country', 'status'
            ]));

            // Supprimer les médias sélectionnés
            if ($request->has('delete_media')) {
                foreach ($request->input('delete_media', []) as $mediaId) {
                    $media = ProjectMedia::findOrFail($mediaId);
                    Storage::disk('public')->delete($media->path);
                    $media->delete();
                }
            }

            // Ajouter de nouveaux médias
            if ($request->hasFile('media')) {
                foreach ($request->file('media') as $file) {
                    $path = $file->store('project_media', 'public');
                    $type = in_array($file->getClientOriginalExtension(), ['jpg', 'jpeg', 'png']) ? 'image' : 'video';
                    ProjectMedia::create([
                        'project_id' => $project->id,
                        'type' => $type,
                        'path' => $path,
                        'caption' => $request->input('media_caption_' . $file->getClientOriginalName(), null),
                    ]);
                }
            }

            // Supprimer les documents sélectionnés
            if ($request->has('delete_documents')) {
                foreach ($request->input('delete_documents', []) as $documentId) {
                    $document = ProjectDocument::findOrFail($documentId);
                    Storage::disk('public')->delete($document->path);
                    $document->delete();
                }
            }

            // Ajouter de nouveaux documents
            if ($request->hasFile('documents')) {
                foreach ($request->file('documents') as $file) {
                    $path = $file->store('project_documents', 'public');
                    ProjectDocument::create([
                        'project_id' => $project->id,
                        'name' => $file->getClientOriginalName(),
                        'path' => $path,
                    ]);
                }
            }

            Log::info('Projet mis à jour avec succès', ['project_id' => $project->id]);

            return redirect()->route('admin.projects.index')->with('success', 'Projet mis à jour avec succès.');
        } catch (\Exception $e) {
            Log::error('Erreur lors de la mise à jour du projet : ' . $e->getMessage());
            return back()->with('error', 'Une erreur est survenue lors de la mise à jour du projet.')->withInput();
        }
    }

    public function destroy(Project $project)
    {
        try {
            // Supprimer les médias
            foreach ($project->media as $media) {
                Storage::disk('public')->delete($media->path);
                $media->delete();
            }

            // Supprimer les documents
            foreach ($project->documents as $document) {
                Storage::disk('public')->delete($document->path);
                $document->delete();
            }

            $project->delete();

            Log::info('Projet supprimé avec succès', ['project_id' => $project->id]);

            return redirect()->route('admin.projects.index')->with('success', 'Projet supprimé avec succès.');
        } catch (\Exception $e) {
            Log::error('Erreur lors de la suppression du projet : ' . $e->getMessage());
            return back()->with('error', 'Une erreur est survenue lors de la suppression du projet.');
        }
    }
}