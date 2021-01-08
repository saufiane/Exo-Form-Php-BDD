<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <form action="reception.php" method="post" enctype="multipart/form-data">

        <input type="text" name="prenom" placeholder="Entrez votre prénom">
        <br><br>
        
        <input type="text" name="nom"placeholder="Entrez votre nom">
        <br><br>
        <input type="email" name="email"placeholder="Entrez votre email">
        <br><br>
        <input type="password" name="password"placeholder="Entrez votre password">
        <br><br>
        <input type="file" name="photo">
        <br><br>

        <input type="submit" value="envoyer">

    </form>
</body>
</html>