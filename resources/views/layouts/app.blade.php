<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite('resources/js/app.js')

    

    
</head>

<style>
    @media only screen and (max-width:400px){

        ul a{
            display:block;
            text-decoration: none;
        }
    }
    </style>
<body>

    <div>
    

    @csrf
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                 

                 @auth('admin')
                     
                
                    <ul class="navbar-nav me-auto">

                       
                        <div class="flex items-center">

                            
                              <a href="/emp/register" class="text-decoration-none text-success " style="padding:5px">Add Employee </a>
                              <a href="/employee" class="text-text-gray-600  py-2 hover:cursor-pointer hover:text-indigo-900  m-5px p-0.5" style="margin: 5px;">List of Employee</a>
                               <a href="/employee/update" class="text-text-gray-600  py-2 hover:cursor-pointer hover:text-indigo-900 p-0.5" style="margin: 5px;">Update Employee</a> 
                              <a href="#" class="text-text-gray-600  py-2 hover:cursor-pointer hover:text-indigo-900 text-md p-0.5 no-underline hover:underline" style="margin: 5px;">Products</a>
                              <a href="#" class=" no-underline hover:underline  " style="margin: 5px;">Contact</a>
                          
                        </div>                    
                    </ul>
                  @endauth
                   
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
    </div>
</div>
</body>
</html>
