<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Load style from uikit -->
    <!-- https://getuikit.com/ -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/css/uikit.min.css" />
</head>
<body>
    <h1> Vous avez bien créé un livre</h1>
    <h2> Résumé de votre création :</h2>

    <p> Name : {{name}}</p>
    <p> Auteur : {{author}}</p>

    <p uk-margin>
        <button class="uk-button uk-button-default"><a href="/"> 🏠 Revenir à l'accueil </a></button>
    </p>

    <!-- Load script from uikit -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/js/uikit-icons.min.js"></script>
</body>
</html>