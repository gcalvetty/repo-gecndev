<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GECN-Dev</title>
    <!-- GENCDev -->
    <link rel="shortcut icon" type="image/ico" href="{{ asset('favicon/favicon.ico') }}"/>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito';
            background: #f7fafc;
        }
    </style>
</head>
<body id="gecndev">
    <div class="container-fluid fixed-top p-4">
        <div class="col-12">
            <div class="d-flex justify-content-end">
                @if (Route::has('login'))
                    <div class="">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-muted">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-muted">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-muted">Register</a>
                            @endif
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="container-fluid my-5 pt-5 px-5 home">
        <div class="row justify-content-center px-4">
            <div class="col-md-12 col-lg-9">
                <object data="{{ asset('img/ico-txt.svg') }}" type="image/svg+xml" width="200px">
                    <img src="{{ asset('img/ico-txt.svg') }}" alt="Imagen PNG alternativa"> 
                </object>
                <div class="card shadow-sm">
                    <div class="row">
                        <div class="col-md-6 pr-0">
                            <div class="card-body border-right border-bottom p-3 h-100">
                                <div class="d-flex flex-row bd-highlight pt-2">
                                    <div>
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="text-muted" width="32"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                    </div>
                                    <div class="pl-3">
                                        <div class="mb-2">
                                            <a href="https://laravel.com/docs" class="h5 font-weight-bolder text-dark">More Information</a>
                                        </div>
                                        <p class="text-muted small">
                                            <ul>  
                                                <li>
                                                 <a href="https://gecn-dev.negocio.site/" target="_blank" rel="noopener noreferrer" class="text-muted">
                                                 <img src="https://img.shields.io/badge/google-0077B5?style=for-the-badge&logo=Google&logoColor=white&labelColor=101010" alt="">
                                                </a>    
                                                </li>
                                                <li><a href="https://gcalvetty.wordpress.com/" class="text-muted">
                                                <img src="https://img.shields.io/badge/Blogger-0077B5?style=for-the-badge&logo=blogger&logoColor=white&labelColor=101010" alt="">
                                            </a></li>

                                            </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pl-0">
                            <div class="card-body border-bottom p-3 h-100">
                                <div class="d-flex flex-row bd-highlight pt-2">
                                    <div>
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="text-muted" width="32"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                    </div>
                                    <div class="pl-3">
                                        <div class="mb-2">
                                            <a href="https://laracasts.com" class="h5 font-weight-bolder text-dark">Portafolio</a>
                                        </div>
                                        <p class="text-muted small">
                                            <ul>
                                                <li><a href="https://www.linkedin.com/in/gcalvetty/" class="text-muted">
                                                <img src="https://img.shields.io/badge/LinkedIn-0077B5?style=for-the-badge&logo=linkedin&logoColor=white&labelColor=101010" alt="">
                                                </a></li>
                                                <li>
                                                    <a href="https://www.upwork.com/o/profiles/users/~011a5486cbe6c73429/" target="_blank" rel="noopener noreferrer" class="text-muted">
                                                    <img src="https://img.shields.io/badge/upwork-0077B5?style=for-the-badge&logo=upwork&logoColor=white&labelColor=101010" alt="">
                                                    </a>
                                                </li>
                                                
                                            </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pr-0">
                            <div class="card-body border-right p-3 h-100">
                                <div class="d-flex flex-grow  bd-highlight pt-2">
                                    <div>
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="text-muted" width="32"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                    </div>
                                    <div class="pl-3 flex-grow " style="flex-grow: 1;">
                                        <div class="mb-2">
                                            <a href="https://laravel-news.com/" class="h5 font-weight-bolder text-dark">Networks</a>
                                        </div>
                                        <p class="text-muted small">
                                            <ul>
                                                <li><a href="https://github.com/gcalvetty" class="text-muted">
                                                <img src="https://img.shields.io/badge/GitHub-1877F2?style=for-the-badge&logo=github&logoColor=white&labelColor=101010" alt="">
                                            </a></li>
                                                <li>
                                                    <a href="https://www.facebook.com/GecnDev" class="text-muted">
                                                <img src="https://img.shields.io/badge/Facebook-1877F2?style=for-the-badge&logo=facebook&logoColor=white&labelColor=101010" alt="">
                                            </a>
                                            </li>
                                                <li>
                                                <a href="https://twitter.com/gcalvetty" class="text-muted">
                                                <img src="https://img.shields.io/badge/twitter-1877F2?style=for-the-badge&logo=twitter&logoColor=white&labelColor=101010" alt="">                                       </a>             
                                                </li>
                                            </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pl-0">
                            <div class="card-body p-3 h-100">
                                <div class="d-flex flex-row bd-highlight pt-2">
                                    <div>
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="text-muted" width="32"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    </div>
                                    <div class="pl-3">
                                        <div class="mb-2">
                                            <span class="h5 font-weight-bolder text-dark">Skills</span>
                                        </div>
                                        <p class="text-muted small">
                                            why is this happening to me?                                        
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pl-0">
                            <div class="card-body p-3 h-100">
                                <div class="d-flex flex-row bd-highlight pt-2">
                                    <div>
                                        <div>
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="text-muted" width="32"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        </div>
                                    </div>
                                    <div class="pl-3">
                                        <div class="mb-2">
                                            <span class="h5 font-weight-bolder text-dark">¿Looking WORK?</span>
                                        </div>
                                        <p class="text-muted small">
                                            <a href="https://lapieza.io/registro?promo_code=GNgc-56842">
                                                <img src="img/apoyos/Lapieza.png" alt="">
                                            </a>                                                          
                                        </p>                                        
                                    </div>   
                                    
                                    </div>
                                </div>
                            </div>
                        </div>                              
                    </div>
                </div>

                <div class="d-flex justify-content-between mt-3">
                    <div class="text-sm text-muted">
                        <div class="flex align-content-center">
                            <img src="https://img.shields.io/github/followers/gcalvetty?style=social" alt="">

                            <img src="https://img.shields.io/twitter/follow/gcalvetty?style=social" alt="">

                            <img src="https://img.shields.io/twitch/status/gcalvetty?style=social" alt="">




                        </div>
                    </div>

                    <div class="text-sm text-muted">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>

                
            </div>
        </div>
    </div>
    <!-- facebook -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v11.0&appId=392152662486858&autoLogAppEvents=1" nonce="xFRoaq6a"></script>
</body>
</html>
