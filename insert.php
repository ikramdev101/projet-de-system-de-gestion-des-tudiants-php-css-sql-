<?php
$dsn = 'mysql:host=localhost;dbname=biblio';
$user = 'root';
$password = '';

try {
    // Connexion à la base de données
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Vérification de la méthode d'envoi des données
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $codeEdu = $_POST['code'];
        $nomEdu = $_POST['nom'];
        $prenomEdu = $_POST['prenom'];
        $adresseEdu = $_POST['adresse'];
        $classeEdu = $_POST['classe'];

        // Préparation et exécution de la requête d'insertion
        $stmt = $pdo->prepare("INSERT INTO Etudiant (codeEtudiant, Nom, Prenom, Adresse, Classe) VALUES (:code, :nom, :prenom, :adresse, :classe)");
        $stmt->bindParam(':code', $codeEdu);
        $stmt->bindParam(':nom', $nomEdu);
        $stmt->bindParam(':prenom', $prenomEdu);
        $stmt->bindParam(':adresse', $adresseEdu);
        $stmt->bindParam(':classe', $classeEdu);
        $stmt->execute();

        $msg = "Enregistrement réussi";
    }

    $stmt = $pdo->prepare("SELECT * FROM Etudiant");
    $stmt->execute();
    $etudiants = $stmt->fetchAll(PDO::FETCH_ASSOC);

if( $stmt->execute()){
    header('location: affichage.php');
}


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
        <h2>Liste des ETUDIANTS</h2>
        <?php if (isset($msg)) { echo "<p>$msg</p>"; } ?>
        <table class="student-table">
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
                <?php foreach ($etudiants as $etudiant) { ?>
                    <tr>
                        <td><?php echo htmlspecialchars($etudiant['codeEtudiant']); ?></td>
                        <td><?php echo htmlspecialchars($etudiant['Nom']); ?></td>
                        <td><?php echo htmlspecialchars($etudiant['Prenom']); ?></td>
                        <td><?php echo htmlspecialchars($etudiant['Adresse']); ?></td>
                        <td><?php echo htmlspecialchars($etudiant['Classe']); ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
