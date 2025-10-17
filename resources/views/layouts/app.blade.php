<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MRRPS') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css'])
    <!-- Scripts -->
    @vite(['resources/js/app.js'])
 
</head>
    <style>
        :root{
            --primary-blue:#2563eb;
            --primary-orange:#FFA500;
            --primary-dark:#1d4ed8;
            --primary-light:#3b82f6;
            /* secondary/accent */
            --accent1:#0d9488;

        }
        .navbar {
            border-bottom: 2px solid var(--primary-blue) !important; /* Orange bottom border */
        }
        .navbar-brand {
            color:var(--primary-blue) !important; /* Blue color for MRRPS */
            font-weight: bold;
            font-size: 1.5rem;
        }
        .nav-link {
            color: var(--primary-dark) !important; /* Blue color for Login/Register */
            font-weight: 500;
            margin: 0 10px;
        }
        .nav-link:hover {
            color: #0056b3 !important; /* Darker blue on hover */
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top">
            <div class="container">
                <a class="navbar-brand " href="{{ url('/') }}">
                    {{ config('app.name', 'MRRPS') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="bg-dark-navy text-white py-4 mt-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h5 class="fw-bold mb-2">MRRPS</h5>
                <p class="mb-0 fw-light text-gray-medium">Marks Registration and Result Publication System</p>
            </div>
            <div class="col-md-6 text-md-end">
                <p class="mb-0 fw-light text-gray-medium">&copy; 2025 MRRPS. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>
    </div>
    
</body>
</html>
