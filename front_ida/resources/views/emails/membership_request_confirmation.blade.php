<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Confirmation de demande d'adhésion - IDA International</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: linear-gradient(135deg, #3498db, #2980b9);
            color: white;
            padding: 30px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }
        .content {
            background: #f8f9fa;
            padding: 30px;
            border-radius: 0 0 10px 10px;
        }
        .info-box {
            background: white;
            border-left: 4px solid #3498db;
            padding: 20px;
            margin: 20px 0;
            border-radius: 5px;
        }
        .btn {
            display: inline-block;
            background: #3498db;
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 5px;
            margin: 10px 0;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            color: #666;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>IDA International</h1>
        <p>Confirmation de votre demande d'adhésion</p>
    </div>
    
    <div class="content">
        <h2>Bonjour {{ $request->first_name }},</h2>
        
        <p>Nous avons bien reçu votre demande d'adhésion à IDA International. Nous vous remercions pour votre intérêt envers notre organisation.</p>
        
        <div class="info-box">
            <h3>Récapitulatif de votre demande :</h3>
            <ul>
                <li><strong>Nom :</strong> {{ $request->full_name }}</li>
                <li><strong>Email :</strong> {{ $request->email }}</li>
                <li><strong>Type d'adhésion :</strong> {{ $request->type_label }}</li>
                <li><strong>Profession :</strong> {{ $request->profession }}</li>
                <li><strong>Pays :</strong> {{ $request->country }}</li>
                <li><strong>Date de soumission :</strong> {{ $request->created_at->format('d/m/Y à H:i') }}</li>
            </ul>
        </div>
        
        <h3>Prochaines étapes :</h3>
        <ol>
            <li><strong>Examen :</strong> Notre équipe examinera votre demande sous 5-7 jours ouvrables</li>
            <li><strong>Contact :</strong> Nous pourrons vous contacter pour clarifier certains points si nécessaire</li>
            <li><strong>Décision :</strong> Vous recevrez notre réponse finale par email</li>
            <li><strong>Intégration :</strong> En cas d'approbation, nous vous guiderons dans les étapes d'intégration</li>
        </ol>
        
        <p>En attendant, nous vous invitons à :</p>
        <ul>
            <li>Consulter notre site web pour en savoir plus sur nos activités</li>
            <li>Suivre nos actualités sur les réseaux sociaux</li>
            <li>Participer à nos événements publics</li>
        </ul>
        
        <div style="text-align: center; margin: 30px 0;">
            <a href="{{ url('/') }}" class="btn">Visiter notre site web</a>
        </div>
        
        <p>Si vous avez des questions, n'hésitez pas à nous contacter à l'adresse email suivante : <strong>contact@ida-international.org</strong></p>
        
        <p>Cordialement,<br>
        <strong>L'équipe IDA International</strong></p>
    </div>
    
    <div class="footer">
        <p>Cet email a été envoyé automatiquement. Merci de ne pas y répondre directement.</p>
        <p>© {{ date('Y') }} IDA International. Tous droits réservés.</p>
    </div>
</body>
</html> 