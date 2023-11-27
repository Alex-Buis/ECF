<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <title>Literie3000</title>
</head>
<body class="flex flex-col justify-between h-screen">
    <div class="bg-blue-800 text-gray-300 py-8 shadow-xl">
        <div class="max-w-5xl mx-auto px-3">
            <div class="flex justify-between items-center">
        <h1>
            <a href="/"><img src="/img/logo fond transparent.png" alt=""></a>
        </h1>
        <nav>
            <a href="/index" class="text-xl font-bold text-yellow-500">Matelas</a>
        </nav>
            </div>
        </div>
    </div>
@yield('content')
    <footer class="bg-white py-8">
        <div class="max-w-5xl mx-auto px-3 text-center">
        <h5 class="font-bold mb-4">Suite du catalogue à venir...</h5>
        <h5 class="font-bold">Vous y découvrirez toutes nos dimensions :</h5>
        <p>90x190, 140x190 , 160x200, 180x200, 200x200</p>
        <h5 class="font-bold">et toutes nos marques de matelas:</h5>
        <p>Epeda, Dreamway, Bultex, Dorsoline, MemoryLine</p>
        </div>
    </footer>
</body>
</html>