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

    <h1 class="title">SocialNetwork</h1>

    <form action="check_connection.php" method="post" class="container col s3 form-connection">
        <label for="username_name">Pseudo
            <input type="text" name="username_name" id="username_id">
        </label>
        <label for="password_name">Mot de passe
            <input type="password" name="password_name" id="password_id">
        </label>
        <button type="submit" class="waves-effect waves-light red darken-1 btn margin_boutton"><i class="material-icons left">check</i>Se Connecter</button>
        <a href="inscription.php" class="waves-effect waves-light pink darken-1 btn margin_boutton"><i class="material-icons left">chevron_right</i>S'inscrire</a>
    </form>
</body>

<?php
    include("CONFIG/footer.php")
?>

</html>