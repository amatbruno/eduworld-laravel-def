<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eduworld - Games</title>
    @viteReactRefresh
    @vite(['resources/css/app.css', 'resources/js/app.jsx'])
</head>

<body class="mx-auto">
    <header class="border-b shadow-lg py-5 mx-auto w-full">
        <div class="w-1/2 mx-auto flex justify-start items-center gap-16">
            <a class="font-semibold text-xl text-white" href={{ route('dashboard') }}><-- Dashboard </a>
        </div>
    </header>
    <div class="flex flex-col justify-center items-center pt-5">
        <h2 class="text-center font-semibold text-xl text-white leading-tight">Training Zone - Menu</h2>
        <div class="mt-[-100px]" id="root"></div>
    </div>

</body>

</html>
