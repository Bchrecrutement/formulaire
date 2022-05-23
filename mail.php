<?php

$Nom = $_POST['Nom'];
$Prenom = $_POST['Prenom'];
$email = $_POST['email'];
$Diplomes = $_POST['Diplomes'];
$upload = $_POST['upload'];
$message = $_POST['message'];

$mailheader = "From:".$Nom."<".$email.">\r\n";

$recipient = "mlb.hdc@gmail.com";

mail($recipient, $mailheader) or die("Error!");

echo'

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Merci pour votre candidature, nous l'avons bien reçue. Nous la traiterons le plus rapidement possible et reviendrons vers toi avec une réponse.!</h1>
        <p class="back">Go back to the <a href="index.html">homepage</a>.</p>
        
    </div>
</body>
</html>



';


?>
