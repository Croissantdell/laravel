<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste des Chats</title>
    <link rel="stylesheet" href="styles.css" type="text/css"/>
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center mb-4">Bonjour
    <a href="/cats/create">Ajouter un chat</a></h1>

    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prix</th>
            <th>Description</th>
            <th>Date de Naissance</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cats as $cat)
            <tr>
                <td>{{ $cat->id }}</td>
                <td>{{ $cat->name }}</td>
                <td>{{ $cat->price }}</td>
                <td>{{ $cat->desc }}</td>
                <td>{{ $cat->birth_date }}</td>
                <td>
                    <a href="/cats/{{$cat->id}}">Voir</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>


</body>
</html>
