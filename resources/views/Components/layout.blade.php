<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-black text-white font-hanken-grotesk pb-20">
    {{-- <body class="bg-black text-white/70"> --}} {{-- IGNORE --}}

    {{-- <body style="background: black;"> --}}
    <div class="px-10">
        <nav class="rounded-sm bg-slate-800 flex justify-between items-center py-4 border-b border-white/10">
            <div class="ml-1">
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
                </a>
            </div>

            <div class="space-x-18 font-old">
                <a href="/jobs">Jobs</a>
                <a href="">Careers</a>
                <a href="">Salaries</a>
                <a href="">Companies</a>
            </div>

            @auth
                <div class="space-x-6 font-bold flex mr-2">
                    <a href="/jobs/create">Post a Job </a>

                    <form method="POST" action="/logout">
                        @csrf
                        @method('DELETE')

                        <button class="">Log Out</button>
                    </form>
                </div>
            @endauth

            @guest
                <div class="space-x-18 font-old">
                    <a href="/register">Sign Up</a>
                    <a href="/login">Log In</a>
                </div>
            @endguest

        </nav>

        <main class="mt-10 max-w-[986x] mx-auto">
            {{ $slot }}
        </main>
    </div>

</body>

</html>
