<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eduworld - History</title>
    @viteReactRefresh
    @vite(['resources/css/app.css', 'resources/js/app.jsx'])
</head>

<body class="mx-auto">
    <header class="border-b shadow-lg py-5 mx-auto w-full">
        <div class="w-1/2 mx-auto flex justify-start items-center gap-16">
            <a class="font-semibold text-xl text-white" href={{ url('games') }}> <-- Games Menu </a>
        </div>
    </header>
    <div class="flex flex-col justify-center items-center pt-5">
        <h2 class="text-center font-semibold text-3xl text-white border-b-2 py-1 leading-tight">History Quiz Game - History📜
        </h2>
        <div id="root"></div>
    </div>

</body>

</html>
