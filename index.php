<?php

//connexion à la base de données
$conn = new PDO("mysql:host=$host;dbname=formulaire_contact;charset=utf8mb4", "Nawal", "F6f27jrb");

// Requête SQL + envoi
$stmt = $conn->prepare("SELECT * FROM formulaire");
$stmt->execute();

// Récupération de tous les enregistrements sous forme de tableau associatif
$formulaire = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($formulaire);

?>


