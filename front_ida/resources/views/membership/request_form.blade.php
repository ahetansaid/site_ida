@extends('layouts.default')

@section('content')
<style>
.form-section {
    background: #f8f9fa;
    padding: 30px;
    border-radius: 10px;
    margin-bottom: 30px;
}
.form-section h3 {
    color: #2c3e50;
    margin-bottom: 20px;
    border-bottom: 2px solid #3498db;
    padding-bottom: 10px;
}
.form-group {
    margin-bottom: 20px;
}
.form-control {
    border-radius: 8px;
    border: 1px solid #ddd;
    padding: 12px 15px;
}
.form-control:focus {
    border-color: #3498db;
    box-shadow: 0 0 0 0.2rem rgba(52, 152, 219, 0.25);
}
.btn-submit {
    background: linear-gradient(135deg, #3498db, #2980b9);
    border: none;
    padding: 15px 30px;
    border-radius: 8px;
    color: white;
    font-weight: bold;
    transition: all 0.3s ease;
}
.btn-submit:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(52, 152, 219, 0.4);
}
.alert {
    border-radius: 8px;
    padding: 15px;
    margin-bottom: 20px;
}
</style>

<!-- Titre de la page -->
<section class="page-title centred" style="background-image: url({{ asset('assets/images/partnership/membership/New-membership.jpg') }});">
    <div class="auto-container">
        <div class="content-box clearfix">
            
            <ul class="bread-crumb clearfix">
                <li><a href="/">Accueil</a></li>
                <li><a href="{{ route('pages.membership') }}">Adhésion</a></li>
                <li>Demande d'Adhésion</li>
            </ul>
        </div>
    </div>
</section>

<!-- Formulaire de demande d'adhésion -->
<section class="skills-section">
    <div class="auto-container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-12">
                <div class="content-box">
                    <div class="sec-title-two text-center">
                        <h2>Formulaire de Demande d'Adhésion</h2>
                        <p>Rejoignez IDA International et participez à nos missions de développement en Afrique</p>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('membership.request.store') }}" method="POST">
                        @csrf
                        
                        <!-- Informations personnelles -->
                        <div class="form-section">
                            <h3><i class="fas fa-user"></i> Informations Personnelles</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="first_name">Prénom *</label>
                                        <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name') }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="last_name">Nom *</label>
                                        <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name') }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email *</label>
                                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Téléphone *</label>
                                        <input type="tel" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Adresse -->
                        <div class="form-section">
                            <h3><i class="fas fa-map-marker-alt"></i> Adresse</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="country">Pays *</label>
                                        <input type="text" class="form-control" id="country" name="country" value="{{ old('country') }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="city">Ville *</label>
                                        <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address">Adresse complète *</label>
                                <textarea class="form-control" id="address" name="address" rows="3" required>{{ old('address') }}</textarea>
                            </div>
                        </div>

                        <!-- Profession -->
                        <div class="form-section">
                            <h3><i class="fas fa-briefcase"></i> Profession</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="profession">Profession *</label>
                                        <input type="text" class="form-control" id="profession" name="profession" value="{{ old('profession') }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="organization">Organisation (optionnel)</label>
                                        <input type="text" class="form-control" id="organization" name="organization" value="{{ old('organization') }}">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Type d'adhésion -->
                        <div class="form-section">
                            <h3><i class="fas fa-users"></i> Type d'Adhésion</h3>
                            <div class="form-group">
                                <label>Choisissez votre type d'adhésion *</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="type" id="type_member" value="member" {{ old('type') == 'member' ? 'checked' : '' }} required>
                                            <label class="form-check-label" for="type_member">
                                                <strong>Membre</strong><br>
                                                <small>Adhésion en tant que membre de l'organisation</small>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="type" id="type_volunteer" value="volunteer" {{ old('type') == 'volunteer' ? 'checked' : '' }} required>
                                            <label class="form-check-label" for="type_volunteer">
                                                <strong>Volontaire</strong><br>
                                                <small>Participation bénévole aux activités</small>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Motivation -->
                        <div class="form-section">
                            <h3><i class="fas fa-heart"></i> Motivation</h3>
                            <div class="form-group">
                                <label for="motivation">Pourquoi souhaitez-vous rejoindre IDA International ? *</label>
                                <textarea class="form-control" id="motivation" name="motivation" rows="5" required>{{ old('motivation') }}</textarea>
                                <small class="form-text text-muted">Veuillez expliquer vos motivations en détail (minimum 50 caractères)</small>
                            </div>
                        </div>

                        <!-- Compétences et expérience -->
                        <div class="form-section">
                            <h3><i class="fas fa-star"></i> Compétences et Expérience</h3>
                            <div class="form-group">
                                <label for="skills">Compétences (optionnel)</label>
                                <textarea class="form-control" id="skills" name="skills" rows="3">{{ old('skills') }}</textarea>
                                <small class="form-text text-muted">Décrivez vos compétences qui pourraient être utiles à l'organisation</small>
                            </div>
                            <div class="form-group">
                                <label for="experience">Expérience (optionnel)</label>
                                <textarea class="form-control" id="experience" name="experience" rows="3">{{ old('experience') }}</textarea>
                                <small class="form-text text-muted">Décrivez votre expérience professionnelle ou associative</small>
                            </div>
                        </div>

                        <!-- Bouton de soumission -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-submit">
                                <i class="fas fa-paper-plane"></i> Envoyer ma demande d'adhésion
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection 