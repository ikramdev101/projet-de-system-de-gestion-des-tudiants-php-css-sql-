<?php
$dsn = 'mysql:host=localhost';
$user = 'root';
$password = '';

try {
    // La connexion à MySQL
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Création de la base de données
    $sql = 'CREATE DATABASE IF NOT EXISTS biblio;';
    $pdo->exec($sql);

    // Sélection et utilisation de la base de données
    $pdo->exec('USE biblio');

    // Création des tables
    $sql = '
    CREATE TABLE IF NOT EXISTS Etudiant (
        codeEtudiant INT(20) NOT NULL PRIMARY KEY,
        Nom VARCHAR(50),
        Prenom VARCHAR(50),
        Adresse VARCHAR(50),
        Classe VARCHAR(50)
    );
    CREATE TABLE IF NOT EXISTS Livre (
        codeLivre INT(20) NOT NULL PRIMARY KEY,
        Titre VARCHAR(50),
        Auteur VARCHAR(50),
        DateEdition DATE
    );
    CREATE TABLE IF NOT EXISTS Emprunter (
        codeEmprunt INT AUTO_INCREMENT PRIMARY KEY,
        codeEtudiant INT(20),
        codeLivre INT(20),
        DateEmprunt DATE,
        FOREIGN KEY (codeEtudiant) REFERENCES Etudiant(codeEtudiant),
        FOREIGN KEY (codeLivre) REFERENCES Livre(codeLivre)
    );';

    $pdo->exec($sql);

    echo 'Tables have been created successfully!';

} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
}
?>
