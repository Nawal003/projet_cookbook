<?php
// Les données en provenance du formulaire 
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$message = $_POST["message"];

// Connexion à la base de données
$conn = new PDO("mysql:host=$host;dbname=formulaire_contact;charset=utf8mb4", "Nawal", "F6f27jrb");


// Requête SQL
$sql = "INSERT INTO formulaire(nom,prenom,email,message) VALUES(:nom, :prenom, :email, :message)";

//Envoi de la requête SQL à la base de données
$stmt = $conn->prepare($sql);
$stmt->bindParam(":nom", $nom);
$stmt->bindParam(":prenom", $prenom);
$stmt->bindParam(":email", $email);
$stmt->bindParam(":message", $message);
$stmt->execute();




