@extends('layouts.default')

@section('content')
<style>
.success-section {
    background: linear-gradient(135deg, #f8f9fa, #e9ecef);
    padding: 60px 0;
    min-height: 60vh;
    display: flex;
    align-items: center;
}
.success-card {
    background: white;
    border-radius: 15px;
    padding: 40px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    text-align: center;
    max-width: 600px;
    margin: 0 auto;
}
.success-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #28a745, #20c997);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 30px;
    color: white;
    font-size: 40px;
}
.success-title {
    color: #28a745;
    margin-bottom: 20px;
}
.success-message {
    color: #6c757d;
    line-height: 1.6;
    margin-bottom: 30px;
}
.next-steps {
    background: #f8f9fa;
    border-radius: 10px;
    padding: 25px;
    margin-top: 30px;
    text-align: left;
}
.next-steps h4 {
    color: #495057;
    margin-bottom: 15px;
}
.next-steps ul {
    margin-bottom: 0;
    padding-left: 20px;
}
.next-steps li {
    margin-bottom: 8px;
    color: #6c757d;
}
.btn-home {
    background: linear-gradient(135deg, #3498db, #2980b9);
    border: none;
    padding: 12px 25px;
    border-radius: 8px;
    color: white;
    text-decoration: none;
    display: inline-block;
    margin-top: 20px;
    transition: all 0.3s ease;
}
.btn-home:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(52, 152, 219, 0.4);
    color: white;
    text-decoration: none;
}
</style>

<!-- Section de succès -->
<section class="success-section">
    <div class="auto-container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-12">
                <div class="success-card">
                    <div class="success-icon">
                        <i class="fas fa-check"></i>
                    </div>
                    
                    <h2 class="success-title">Demande Envoyée avec Succès !</h2>
                    
                    <div class="success-message">
                        <p>Merci pour votre demande d'adhésion à IDA International. Nous avons bien reçu votre candidature et nous l'examinerons avec attention.</p>
                        <p>Vous recevrez une confirmation par email dans les prochaines minutes.</p>
                    </div>

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="next-steps">
                        <h4><i class="fas fa-list-check"></i> Prochaines étapes :</h4>
                        <ul>
                            <li><strong>Vérification :</strong> Notre équipe examinera votre demande sous 5-7 jours ouvrables</li>
                            <li><strong>Contact :</strong> Nous vous contacterons par email ou téléphone pour clarifier certains points si nécessaire</li>
                            <li><strong>Décision :</strong> Vous recevrez notre réponse finale par email</li>
                            <li><strong>Intégration :</strong> En cas d'approbation, nous vous guiderons dans les étapes d'intégration</li>
                        </ul>
                    </div>

                    <div class="text-center">
                        <a href="{{ route('home') }}" class="btn-home">
                            <i class="fas fa-home"></i> Retour à l'accueil
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section d'informations supplémentaires -->
<section class="skills-section">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="text-center mb-4">
                    <i class="fas fa-clock fa-3x text-primary mb-3"></i>
                    <h4>Délai de traitement</h4>
                    <p>Nous traitons généralement les demandes sous 5-7 jours ouvrables</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="text-center mb-4">
                    <i class="fas fa-envelope fa-3x text-primary mb-3"></i>
                    <h4>Communication</h4>
                    <p>Nous communiquons principalement par email pour les mises à jour</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="text-center mb-4">
                    <i class="fas fa-users fa-3x text-primary mb-3"></i>
                    <h4>Communauté</h4>
                    <p>Rejoignez notre communauté de membres et volontaires engagés</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection 