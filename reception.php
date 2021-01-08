<?php

// connexion à la base de donnée avec require
require_once('libraries/database.php');
$pdo = new PDO('mysql:host=localhost;dbname=saufiane;charset=utf8','root','');

// utilisation de var dump pour voir ce qu'il y a dans array

// variables dans la base de donnée avec $_POST
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$email = $_POST['email'];
$password = $_POST['password'];
$photo = $_FILES['photo'];
// $photo = $fichier;

// var_dump($_FILES);
// var_dump($_POST);

$photot = $_FILES['photo']['name'];
$rep = 'img/';
$fichier = $rep. basename($photot);
move_uploaded_file($_FILES['photo']['tmp_name'], $fichier);



$query = $pdo->prepare('INSERT INTO clients (prenom, nom, email,photo,password) VALUES (?, ?, ?, ?, ?)');
$query->execute(array($prenom,$nom,$email,$fichier,$password));
// createUser($prenom,$nom,$email,$password,$photo);
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="<?= $fichier?>" alt="">
</body>
</html>








