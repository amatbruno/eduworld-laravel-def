<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eduworld</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>

<body class="font-sans antialiased">
    <div class="bg-gray-50">
        <div
            class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-[1300px] px-6 lg:max-w-7xl">
                <header class="flex justify-between items-center gap-2 py-5">
                    <div class="flex items-center gap-7 font-normal text-lg lg:justify-center lg:col-start-2">
                        <a class="hover:underline hover:transition-all" href="{{ url('/') }}"><img
                                src="/images/logo.png" width="60" alt="logo"></a>
                        <a class="hover:underline hover:transition-all" href="{{ url('/') }}">About</a>
                        <a class="hover:underline hover:transition-all" href="{{ url('/') }}">Contact</a>
                    </div>
                    @if (Route::has('login'))
                        <nav class="-mx-3 flex flex-1 gap-6 justify-end text-lg font-normal">
                            @auth
                                <a href="{{ url('/dashboard') }}"
                                    class="px-7 py-1 rounded-full bg-[#007CC0] text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20">
                                    Dashboard
                                </a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="px-7 py-1 rounded-full bg-[#007CC0] text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20">
                                    Log in
                                </a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="px-7 py-1 rounded-full bg-[#007CC0] text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20">
                                        Register
                                    </a>
                                @endif
                            @endauth
                        </nav>
                    @endif
                </header>

                <main class="mt-6">
                    <div class='flex flex-col justify-center items-center gap-16'>
                        <h1 class='text-center mt-12 text-xl'>Welcome to Lareduca, where learning knows no bounds.
                            Our platform serves as the ultimate bridge between students and teachers, creating a
                            seamless
                            and engaging educational experience like never before. Whether you're seeking
                            to master a new skill, explore a passion, or enhance your academic performance.</h1>
                        <img src="/images/intro-img.png" draggable="false" alt="intro_img" />
                    </div>

                    <section class='mt-24'>
                        <h1 class='text-center text-4xl font-semibold'>Discover Lareduca services</h1>
                        <div class='flex justify-center items-center gap-16 mt-10'>
                            <article class='shadow-2xl hover:translate-y-[-10px] hover:transition-all transition-all'>
                                <img width="300" draggable="false" src="/images/card-img.png" alt="card_img" />
                                <div class='bg-[#007CC0] w-[300px] mt-[-5px] rounded-md'>
                                    <h1 class='text-white font-bold text-xl py-2 px-2'>Texto de ejemplo</h1>
                                    <p class='text-white font-medium py-2 px-2'>Texto de ejemploTexto de
                                        ejemploTexto de ejemploTexto de ejemploTexto de ejemplo</p>
                                    <div class='flex justify-end'>
                                        <button class='bg-white text-black font-medium m-5 px-3 py-1 rounded-lg'>Know
                                            More</button>
                                    </div>
                                </div>
                            </article>
                            <article class='shadow-2xl hover:translate-y-[-10px] hover:transition-all transition-all'>
                                <img width="300" draggable="false" src="/images/card-img-2.png" alt="card_img" />
                                <div class='bg-[#007CC0] w-[300px] mt-[-5px] rounded-md'>
                                    <h1 class='text-white font-bold text-xl py-2 px-2'>Texto de ejemplo</h1>
                                    <p class='text-white font-medium py-2 px-2'>Texto de ejemploTexto de
                                        ejemploTexto de ejemploTexto de ejemploTexto de ejemplo</p>
                                    <div class='flex justify-end'>
                                        <button class='bg-white text-black font-medium m-5 px-3 py-1 rounded-lg'>Know
                                            More</button>
                                    </div>
                                </div>
                            </article>
                            <article class='shadow-2xl hover:translate-y-[-10px] hover:transition-all transition-all'>
                                <img width="300" draggable="false" src="/images/card-img-3.png" alt="card_img" />
                                <div class='bg-[#007CC0] w-[300px] mt-[-5px] rounded-md'>
                                    <h1 class='text-white font-bold text-xl py-2 px-2'>Texto de ejemplo</h1>
                                    <p class='text-white font-medium py-2 px-2'>Texto de ejemploTexto de
                                        ejemploTexto de ejemploTexto de ejemploTexto de ejemplo</p>
                                    <div class='flex justify-end'>
                                        <button class='bg-white text-black font-medium m-5 px-3 py-1 rounded-lg'>Know
                                            More</button>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </section>
                </main>

                <footer class="py-16 text-center text-md text-black font-light">
                    Bruno Amat © [2024] - Crafting Creativity with Care
                </footer>
            </div>
        </div>
    </div>
</body>

</html>
