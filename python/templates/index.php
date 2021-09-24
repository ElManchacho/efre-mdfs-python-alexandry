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
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Auteur</th>
            </tr>
        </thead>
        <tbody>
            
    {% for book in data %}
        <tr>
        {% for attr in book %}
                <td>{{book[attr]}}</td>
            {% endfor %}
        </tr>
    {% endfor %}
        </tbody>
    </table>



    <!-- Load script from uikit -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/js/uikit-icons.min.js"></script>
</body>
</html>