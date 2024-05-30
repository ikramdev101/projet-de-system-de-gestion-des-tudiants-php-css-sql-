<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Etudiant</title>
    <link rel="stylesheet" href="views/form.css">
</head>
<body>
    <div class="container">
        <form class="form" action='insert.php' method='POST'>
            <div class="form-group">
                <label for="code">Code</label>
                <input type="text" id="code" name="code" placeholder="Saisir Code..">
            </div>
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom" placeholder="Saisir nom..">
            </div>
            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" id="prenom" name="prenom" placeholder="Saisir prénom..">
            </div>
            <div class="form-group">
                <label for="classe">Classe</label>
                <input type="text" id="classe" name="classe" placeholder="Saisir Classe..">
            </div>
            <div class="form-group">
                <label for="adresse">Adresse</label>
                <textarea id="adresse" name="adresse" placeholder="Votre adresse ici.."></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn">Créer</button>
            </div>
        </form>
    </div>
</body>
</html>
