<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        body {
            padding: 20px;
            background-color: gray;
        }

        .not-a-logo {
            max-width: 30px;
        }

        .container {
            margin: 10px;
        }

        .top-header {
            border: 1px solid red;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
        }

        .main-container {
            border: 1px solid orange;
            height: 100vh;
        }
    </style>
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div class="container">
        <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <header class="top-header">
                    <div class="flex lg:justify-center lg:col-start-2">
                        <img class="not-a-logo" src="/svg/not_nstagram_logo.png">
                    </div>
                    @if (Route::has('login'))
                    <nav class="navbar">
                        @auth
                        <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Dashboard
                        </a>
                        @else
                        <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Log in
                        </a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Register
                        </a>
                        @endif
                        @endauth
                    </nav>
                    @endif
                </header>

                <main class="mt-6">
                    <div class="main-container">123</div>
                </main>

                <footer class="footer-style">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </footer>
            </div>
        </div>
    </div>
</body>

</html>