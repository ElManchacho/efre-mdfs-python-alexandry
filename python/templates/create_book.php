<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Book</title>

    <!-- Load style from uikit -->
    <!-- https://getuikit.com/ -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/css/uikit.min.css" />
</head>
<body>
    
    <!-- FORM WITH ACTION TO NEW URL AND SUBMIT FOR CREATE BOOK -->
    <form method="POST" action="{{ url_for('create_book') }}">
        <fieldset class="uk-fieldset">

            <legend class="uk-legend">📖 Ajouter un livre</legend>

            <div class="uk-margin">
                <input class="uk-input" type="text" placeholder="Nom du livre" name='name'>
            </div>

            <div class="uk-margin">
                <input class="uk-input" type="text" placeholder="Auteur du livre" name='author'>
            </div>

        </fieldset>

        <!-- INPUT TO SUBMIT FOR ACTION CREATE BOOK -->
        <input class="uk-button uk-button-default uk-width-1-1 uk-margin-small-bottom" type="submit" value="🎉 Valider le formulaire">
    </form>

    <!-- INPUT TO BACK TO HOME -->
    <p uk-margin>
        <button class="uk-button uk-button-default"><a href="/"> 🏠 Revenir à l'accueil </a></button>
    </p>

    <!-- Load script from uikit -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/js/uikit-icons.min.js"></script>

</body>
</html>