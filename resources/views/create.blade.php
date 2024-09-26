<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste des Chats</title>
    <!-- Lien vers le CDN Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
<div class="container mx-auto mt-10 p-5 bg-white rounded shadow-lg max-w-lg">
    <h1 class="text-2xl font-bold text-center mb-5">Bonjour</h1>


    <form action="/cats" method="POST" class="space-y-4">
        @csrf
        <div>
            <label for="price" class="block text-sm font-medium text-gray-700">Prix</label>
            <input  value ="{{old('price')}}" type="text" id="price" name="price"
                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        @error('price') {{$message}} @enderror
        </div>

        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Nom</label>
            <input value ="{{old('name')}}" type="text" id="name" name="name"
                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>

        <div>
            <label for="desc" class="block text-sm font-medium text-gray-700">Description</label>
            <input value ="{{old('desc')}}" type="text" id="desc" name="desc"
                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>

        <div>
            <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
            <input value ="{{old('image')}}" type="text" id="image" name="image"
                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>

        <div>
            <label for="birth_date" class="block text-sm font-medium text-gray-700">Date d'anniversaire</label>
            <input value ="{{old('birth_date')}}" type="date" id="birth_date" name="birth_date"
                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>

        <div>
            <input type="submit" value="Ajouter"
                   class="w-full bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded-md cursor-pointer">
        </div>
    </form>
</div>
</body>
</html>
