<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel Positions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap" rel="stylesheet">
    @vite('resources/js/app.js')
</head>

<body class="bg-[#060606] text-white pb-20">

    <div class="px-10">

        <nav class="flex justify-between items-center py-4 border-b border-white/10">

            <!-- logo -->
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
                </a>
            </div>

            <!-- nav links -->
            <div class="space-x-6 font-bold">
                <a href="/">Jobs</a>
                <a href="/careers">Careers</a>
                <a href="/salaries">Salaries</a>
                <a href="/companies">Companies</a>
            </div>

            <!-- create a job -->
            @auth
                <div class="space-x-6 font-bold flex">
                    <a href="/jobs/create">Create a Job</a>


                    <form method="POST" action="/logout">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 ml-6 cursor-pointer">
                            Log Out
                        </button>
                    </form>
                </div>
            @endauth

            @guest
                <div class="space-x-6 font-bold">
                    <a href="/register">Sign Up</a>
                    <a href="/login">Log In</a>
                </div>
            @endguest

        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>

    </div>




</body>

</html>
