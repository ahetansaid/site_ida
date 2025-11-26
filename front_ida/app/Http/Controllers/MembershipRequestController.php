<?php

namespace App\Http\Controllers;

use App\Models\MembershipRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MembershipRequestController extends Controller
{
    public function showForm()
    {
        return view('membership.request_form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:membership_requests,email',
            'phone' => 'required|string|max:20',
            'country' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'address' => 'required|string',
            'profession' => 'required|string|max:255',
            'organization' => 'nullable|string|max:255',
            'motivation' => 'required|string|min:50',
            'skills' => 'nullable|string',
            'experience' => 'nullable|string',
            'type' => 'required|in:member,volunteer',
        ], [
            'first_name.required' => 'Le prénom est obligatoire',
            'last_name.required' => 'Le nom est obligatoire',
            'email.required' => 'L\'email est obligatoire',
            'email.email' => 'L\'email doit être valide',
            'email.unique' => 'Cet email a déjà été utilisé pour une demande d\'adhésion',
            'phone.required' => 'Le téléphone est obligatoire',
            'country.required' => 'Le pays est obligatoire',
            'city.required' => 'La ville est obligatoire',
            'address.required' => 'L\'adresse est obligatoire',
            'profession.required' => 'La profession est obligatoire',
            'motivation.required' => 'La motivation est obligatoire',
            'motivation.min' => 'La motivation doit contenir au moins 50 caractères',
            'type.required' => 'Le type d\'adhésion est obligatoire',
            'type.in' => 'Le type d\'adhésion doit être membre ou volontaire',
        ]);

        $membershipRequest = MembershipRequest::create($validated);

        // Envoyer un email de confirmation
        try {
            Mail::send('emails.membership_request_confirmation', ['request' => $membershipRequest], function($message) use ($membershipRequest) {
                $message->to($membershipRequest->email, $membershipRequest->full_name)
                        ->subject('Confirmation de votre demande d\'adhésion - IDA International');
            });
        } catch (\Exception $e) {
            // Log l'erreur mais ne pas bloquer le processus
            \Log::error('Erreur lors de l\'envoi de l\'email de confirmation: ' . $e->getMessage());
        }

        return redirect()->route('membership.request.success')
                        ->with('success', 'Votre demande d\'adhésion a été envoyée avec succès. Nous vous contacterons bientôt.');
    }

    public function success()
    {
        return view('membership.request_success');
    }
}
