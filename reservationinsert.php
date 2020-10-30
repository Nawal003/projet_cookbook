<?php
// Les données en provenance du formulaire 
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$number = $_POST["number"];
$date = $_POST["date"];
$time = $_POST["time"];
$infosup = $_POST["infosup"];

// Connexion à la base de données
$conn = new PDO("mysql:host=$host;dbname=reservation;charset=utf8mb4", "Nawal", "F6f27jrb");


// Requête SQL
$sql = "INSERT INTO formulaire_de_reservation(nom,prenom,email,tel,number,date,time,infosup) VALUES(:nom, :prenom, :email, :tel, :number, :date, :time, :infosup)";

//Envoi de la requête SQL à la base de données
$stmt = $conn->prepare($sql);
$stmt->bindParam(":nom", $nom);
$stmt->bindParam(":prenom", $prenom);
$stmt->bindParam(":email", $email);
$stmt->bindParam(":tel", $tel);
$stmt->bindParam(":number", $date);
$stmt->bindParam(":time", $time);
$stmt->bindParam(":infosup", $infosup);
$stmt->execute();



if (!mysqli_query($conn,$sql))
    {
        die('Error: ' . mysqli_error($conn));
    }
    else
        echo "Values Stored in our Database!";
    mysqli_close($conn);


