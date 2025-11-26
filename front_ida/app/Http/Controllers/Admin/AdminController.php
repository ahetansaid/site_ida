<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function register()
    {
        return view('admin.auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:password_confirm',
            'password_confirm' => 'required'
        ], [
            'name.required' => 'Le nom est obligatoire',
            'email.required' => 'L\'email est obligatoire',
            'email.email' => 'L\'email doit etre valide',
            'email.unique' => 'Cet email est déjà utilisé',
            'password.required' => 'Le mot de passe est obligatoire',
            'password_confirm.required' => 'La confirmation du mot de passe est obligatoire',
            'password.same' => 'Les mots de passe ne correspondent pas'
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        return redirect()->route('admin.login');
    }
    public function login()
    {
        // dd('ok');
        return view('admin.auth.login');
    }

    public function authenticate(Request $request)
    {
    \Log::info('Tentative d’authentification', $request->only('email'));

    $request->validate([
        'email' => 'required|email|exists:users,email',
        'password' => 'required'
    ], [
        'email.required' => 'L\'email est obligatoire',
        'email.email' => 'L\'email doit être valide',
        'email.exists' => 'Cet email n\'existe pas',
        'password.required' => 'Le mot de passe est obligatoire'
    ]);

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        \Log::info('Authentification réussie pour ' . $request->email);
        $request->session()->regenerate();
        return redirect()->intended(route('admin.dashboard'));
    }

    \Log::warning('Échec de l’authentification pour ' . $request->email);
    return back()->with('error', 'Les informations d’identification ne correspondent pas.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }


    //Les fonctions concernant la partie new
    public function news()
    {
        return view('pages.new.create');
    }
}
