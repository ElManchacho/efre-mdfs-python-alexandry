<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voir un livre</title>

    <!-- Load style from uikit -->
    <!-- https://getuikit.com/ -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/css/uikit.min.css" />

</head>
<body>

    <form>
        <fieldset class="uk-fieldset">

            <legend class="uk-legend">📖 {{data["nom"]}}</legend>

            <div class="uk-margin">
                <input class="uk-input" type="text" placeholder='{{data["auteur"]}}'>
            </div>

        </fieldset>

        <p uk-margin>
            <button class="uk-button uk-button-default"><a href=""> 💾 Modifier le livre </a></button>
        </p>
    </form>

    <p uk-margin>
            <button class="uk-button uk-button-default"><a href="delete_book?id={{data['id']}}"> 🗑 Supprimer le livre </a></button>
        </p>

    <!-- Load script from uikit -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/js/uikit-icons.min.js"></script>

</body>
</html>