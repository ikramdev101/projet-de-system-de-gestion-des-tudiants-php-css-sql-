<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <!-- <link rel="stylesheet" href="views/menu.css"> -->
    <style>body {
    font-family: Arial, sans-serif;
}

.menu {
    width: 200px; 
    height: 60vh;
    border: 1px solid #ddd;
}

.section {
    margin-bottom:5px;
}

.section-title {
    background-color: #800080;
    color: white;
    padding: 10px;
    text-align: center;
    font-weight: bold;
}

.menu-item {
    display: flex;
    align-items: center;
    padding: 10px;
    border-bottom: 1px solid #ddd;
    text-decoration: none;
    color: black;
}

.menu-item:hover {
    background-color: #f0f0f0;
}

.icon {
    margin-right: 10px;
}
</style>
</head>
<body>
    <div class="menu">
        <div class="section">
            <div class="section-title">Gestion Etudiant</div>
            <a href="neaveauEtud.php" class="menu-item"><span class="icon">🔵</span>Nouveau Etudiant</a>
            <a href="suppression.php" class="menu-item"><span class="icon">🗑️</span>Suppression Etudiant</a>
            <a href="modification.php" class="menu-item"><span class="icon">✏️</span>Modification Etudiant</a>
            <a href="#" class="menu-item"><span class="icon">🔍</span>Recherche Etudiant</a>
            <a href="affichage.php" class="menu-item"><span class="icon">📋</span>Liste Etudiant</a>
        </div>
        <div class="section">
            <div class="section-title">Gestion Livre</div>
            <a href="#" class="menu-item"><span class="icon">🔵</span>Nouveau Livre</a>
            <a href="#" class="menu-item"><span class="icon">🗑️</span>Suppression Livre</a>
            <a href="#" class="menu-item"><span class="icon">✏️</span>Modification Livre</a>
            <a href="#" class="menu-item"><span class="icon">🔍</span>Recherche Livre</a>
            <a href="#" class="menu-item"><span class="icon">📋</span>Liste Livre</a>
        </div>
        <div class="section">
            <div class="section-title">Gestion des Emprunts</div>
            <a href="#" class="menu-item"><span class="icon">🔵</span>Emprunter un livre</a>
            <a href="#" class="menu-item"><span class="icon">🔴</span>Retour d'un Livre</a>
            <a href="#" class="menu-item"><span class="icon">📋</span>Liste des Livres</a>
        </div>
    </div>
</body>
</html>
