<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="CSS/materialize.css">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <title>Questionnaire - SocialNetwork</title>
</head>
<body class="pink lighten-4">

    <h1 class="title">Questionnaire</h1>


    <form method="post" action="add_questionnaire.php" class="container">

        <p class="color_radio">Vous etes :</p>

        <label>
            <input type="radio" name="sex_name" id="sex_id" class="with-gap">
            <span class="color_radio">Un homme</span>
        </label>
        <label>
            <input type="radio" name="sex_name" id="sex_id" class="with-gap">
            <span class="color_radio">Une femme</span>
        </label>
        <label>
            <input type="radio" name="sex_name" id="sex_id" class="with-gap">
            <span class="color_radio">Non-binaire</span>
        </label>

        <p class="color_radio">Vous chercher :</p>

        <label>
            <input type="radio" name="search_name" id="search_id" class="with-gap">
            <span class="color_radio">Un homme</span>
        </label>
        <label>
            <input type="radio" name="search_name" id="search_id" class="with-gap">
            <span class="color_radio">Une femme</span>
        </label>
        <label>
            <input type="radio" name="search_name" id="search_id" class="with-gap">
            <span class="color_radio">Non binaire</span>
        </label>
        <label>
            <input type="radio" name="search_name" id="search_id" class="with-gap">
            <span class="color_radio">Sans préférence</span>
        </label>

        <p class="color_radio">Pour vous, le physique est-il important? </p>

        <label>
            <input type="radio" name="search_name" id="search_id" class="with-gap">
            <span class="color_radio">Oui</span>
        </label>
        <label>
            <input type="radio" name="search_name" id="search_id" class="with-gap">
            <span class="color_radio">Un peu</span>
        </label>
        <label>
            <input type="radio" name="search_name" id="search_id" class="with-gap">
            <span class="color_radio">Non</span>
        </label>

    </form>
</body>
</html>