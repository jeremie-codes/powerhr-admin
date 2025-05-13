<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>CV de {{ $candidat->nom }}</title>
    <style>
        body { font-family: sans-serif; font-size: 14px; }
        h1 { font-size: 24px; margin-bottom: 0; }
        h2 { font-size: 18px; margin-top: 20px; }
        .section { margin-bottom: 10px; }
    </style>
</head>
<body>
    <h1>{{ $candidat->nom }}</h1>
    <p>Email : {{ $candidat->email }}</p>
    <p>Téléphone : {{ $candidat->telephone }}</p>

    <div class="section">
        <h2>Formation</h2>
        <p>{{ $candidat->formation }}</p>
    </div>

    <div class="section">
        <h2>Expérience</h2>
        <p>{{ $candidat->experience }}</p>
    </div>

    <div class="section">
        <h2>Compétences</h2>
        <p>{{ $candidat->competences }}</p>
    </div>
</body>
</html>
