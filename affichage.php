<?php
$server = 'localhost';
$user = 'root';
$password = '';
$dbname = 'biblio';

try {
    // Nouvelle connexion à la base de données
    $pdo = new PDO("mysql:host=$server;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Préparer et exécuter la requête SQL pour récupérer les données
    $stmt = $pdo->prepare("SELECT * FROM Etudiant");
    $stmt->execute();

    // Récupérer toutes les lignes de résultats
    $Etudiants = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Étudiants</title>
    <link rel="stylesheet" href="views/table.css">
</head>
<body>
    <div class="container">
        <h2 class="title">Liste des ETUDIANTS</h2>
        <table border='1' class="student-table">
            <thead>
                <tr>
                    <th>Code Etudiant</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Adresse</th>
                    <th>Classe</th>
                </tr>
            </thead>
            <tbody>
            <?php if (count($Etudiants) > 0): ?>
                <?php foreach ($Etudiants as $Etudiant): ?>
                <tr>
                    <td><?php echo $Etudiant['codeEtudiant']; ?></td>
                    <td><?php echo $Etudiant['Nom']; ?></td>
                    <td><?php echo $Etudiant['Prenom']; ?></td>
                    <td><?php echo $Etudiant['Adresse']; ?></td>
                    <td><?php echo $Etudiant['Classe']; ?></td>
                </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">Aucun étudiant trouvé.</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
