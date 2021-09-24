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
    
    <form>
        <fieldset class="uk-fieldset">

            <legend class="uk-legend">📖 Ajouter un livre</legend>

            <div class="uk-margin">
                <input class="uk-input" type="text" placeholder="Nom du livre">
            </div>

            <div class="uk-margin">
                <input class="uk-input" type="text" placeholder="Auteur du livre">
            </div>

            <div class="uk-margin">
                <textarea class="uk-textarea" rows="5" placeholder="Description"></textarea>
            </div>

        </fieldset>

        <button class="uk-button uk-button-default uk-width-1-1 uk-margin-small-bottom"><a href="create_book"> 🎉 Créer le livre</a></button>
    </form>

    <!-- Load script from uikit -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/js/uikit-icons.min.js"></script>

</body>
</html>