<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="CSS/materialize.css">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <title>SocialNetwork</title>
</head>
<body class="pink lighten-4">

<h1 class="title">Inscription</h1>

<a href="index.php" class="waves-effect waves-light pink darken-1 btn-small margin_boutton"><i class="material-icons left">chevron_right</i>Retour à la connexion</a>

<form action="check_inscription.php" method="post" class="container col s3 form-connection">
    <label for="username_name">Pseudo
        <input type="text" name="username_name" id="username_id">
    </label>

    <label for="password_name">Mot de passe
        <input type="password" name="password_name" id="password_id">
    </label>

    <label for="password2_name">Répéter le mot de passe
        <input type="password" name="password2_name" id="password2_id">
    </label>

    <label for="email">Email
        <input type="email" name="email_name" id="email_id">
    </label>

    <label for="firstname_name">Prenom
        <input type="text" name="firstname_name" id="firstname_id">
    </label>

    <label for="lastname_name">Nom
        <input type="text" name="lastname_name" id="lastname_id">
    </label>

    <label for="phone_name">Téléphone
        <input type="tel" name="phone_name" id="phone_id">
    </label>

    <button type="submit" class="waves-effect waves-light red darken-1 btn-small margin_boutton"><i class="material-icons left">check</i>S'inscrire</button>
</form>
</body>

<?php
include("CONFIG/footer.php")
?>

</html>