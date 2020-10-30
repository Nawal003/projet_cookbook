<?php

//connexion à la base de données
$conn = new PDO("mysql:host=$host;dbname=reservation;charset=utf8mb4", "Nawal", "F6f27jrb");

// Requête SQL + envoi
$stmt = $conn->prepare("SELECT * FROM formulaire_de_reservation");
$stmt->execute();

// Récupération de tous les enregistrements sous forme de tableau associatif
$formulaire_de_reservation = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($formulaire_de_reservation);

?>