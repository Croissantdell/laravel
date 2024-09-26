<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="styles.css" type="text/css"/>


    </head>

    <table>
        <thead>
        <tr>
            <th>photo chat</th>
            <th>Id</th>
            <th>Nom</th>
            <th>Prix</th>
            <th>Description</th>
            <th>Date de Naissance</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="{{ $cat->image }}" height="200"/></td>
                <td>{{ $cat->id }}</td>
                <td>{{ $cat->name }}</td>
                <td>{{ $cat->price }}</td>
                <td>{{ $cat->desc }}</td>
                <td>{{ $cat->birth_date }}</td>
                <td>
                    <a href="/cats">retour</a>
                </td>

            </tr>
        </tbody>
    </table>


    </body>
</html>
