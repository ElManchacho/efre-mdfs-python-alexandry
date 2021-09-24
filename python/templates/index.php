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
    <h1> 📚 Hello Alexandry  </h1>
    <table class="uk-table">
        <thead>
        {% for book in data %}
            <tr>
            {% for attr in book %}
                    <th> <a href="show_book"> {{attr}} </a></th>
                {% endfor %}
            </tr>
        {% endfor %}
        </thead>
        <tbody>

    {% for book in data %}
        <tr>
        {% for attr in book %}
                <td> <a href="show_book"> {{book[attr]}} </a></td>
            {% endfor %}
        </tr>
    {% endfor %}
        </tbody>
    </table>

    <button class="uk-button uk-button-default uk-width-1-1 uk-margin-small-bottom"><a href="create_book"> Ajouter un livre</a></button>


    <!-- Load script from uikit -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/js/uikit-icons.min.js"></script>
</body>
</html>