<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">
    <title>Pixel Positions</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-black text-white">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-white/10">
            <div>
                <a href="">
                    <img src="{{ Vite::asset('resources/images/tvl.svg')}}" alt="">
                </a>
            </div>

            <div>
                <a href="">Jobs</a>
                <a href="">Careers</a>
                <a href="">Salaries</a>
                <a href="">Companies</a>
            </div>

            <div>
                <a href="">Post Job </a>
            </div>
        </nav>

        <main>
            {{ $slot }}
        </main>
    </div>

</body>
</html>
