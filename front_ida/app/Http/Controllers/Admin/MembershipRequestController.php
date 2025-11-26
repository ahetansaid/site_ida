<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MembershipRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MembershipRequestController extends Controller
{
    public function index()
    {
        $requests = MembershipRequest::with('processedBy')
            ->orderBy('created_at', 'desc')
            ->paginate(15);
        
        return view('admin.membership_requests.index', compact('requests'));
    }

    public function show(MembershipRequest $membershipRequest)
    {
        return view('admin.membership_requests.show', compact('membershipRequest'));
    }

    public function approve(MembershipRequest $membershipRequest, Request $request)
    {
        $validated = $request->validate([
            'admin_notes' => 'nullable|string',
        ]);

        $membershipRequest->update([
            'status' => 'approved',
            'admin_notes' => $validated['admin_notes'],
            'processed_at' => now(),
            'processed_by' => auth()->id(),
        ]);

        // Envoyer un email de notification
        try {
            Mail::send('emails.membership_request_approved', ['request' => $membershipRequest], function($message) use ($membershipRequest) {
                $message->to($membershipRequest->email, $membershipRequest->full_name)
                        ->subject('Votre demande d\'adhésion a été approuvée - IDA International');
            });
        } catch (\Exception $e) {
            \Log::error('Erreur lors de l\'envoi de l\'email d\'approbation: ' . $e->getMessage());
        }

        return redirect()->route('admin.membership_requests.index')
                        ->with('success', 'La demande d\'adhésion a été approuvée avec succès.');
    }

    public function reject(MembershipRequest $membershipRequest, Request $request)
    {
        $validated = $request->validate([
            'admin_notes' => 'required|string|min:10',
        ], [
            'admin_notes.required' => 'Les notes sont obligatoires pour refuser une demande',
            'admin_notes.min' => 'Les notes doivent contenir au moins 10 caractères',
        ]);

        $membershipRequest->update([
            'status' => 'rejected',
            'admin_notes' => $validated['admin_notes'],
            'processed_at' => now(),
            'processed_by' => auth()->id(),
        ]);

        // Envoyer un email de notification
        try {
            Mail::send('emails.membership_request_rejected', ['request' => $membershipRequest], function($message) use ($membershipRequest) {
                $message->to($membershipRequest->email, $membershipRequest->full_name)
                        ->subject('Réponse à votre demande d\'adhésion - IDA International');
            });
        } catch (\Exception $e) {
            \Log::error('Erreur lors de l\'envoi de l\'email de refus: ' . $e->getMessage());
        }

        return redirect()->route('admin.membership_requests.index')
                        ->with('success', 'La demande d\'adhésion a été refusée.');
    }

    public function destroy(MembershipRequest $membershipRequest)
    {
        $membershipRequest->delete();
        
        return redirect()->route('admin.membership_requests.index')
                        ->with('success', 'La demande d\'adhésion a été supprimée.');
    }

    public function statistics()
    {
        $stats = [
            'total' => MembershipRequest::count(),
            'pending' => MembershipRequest::where('status', 'pending')->count(),
            'approved' => MembershipRequest::where('status', 'approved')->count(),
            'rejected' => MembershipRequest::where('status', 'rejected')->count(),
            'members' => MembershipRequest::where('type', 'member')->count(),
            'volunteers' => MembershipRequest::where('type', 'volunteer')->count(),
        ];

        return view('admin.membership_requests.statistics', compact('stats'));
    }
}
