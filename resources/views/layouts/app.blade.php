{{-- Registration and login only temporary--}}

<!DOCTYPE html>
<html lang="en" class="minimal-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="admin/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="admin/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="admin/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="admin/assets/css/bootstrap-extended.css" rel="stylesheet" />
    <link href="admin/assets/css/style.css" rel="stylesheet" />
    <link href="admin/assets/css/icons.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <!-- loader-->
    <link href="admin/assets/css/pace.min.css" rel="stylesheet" />

    <!--Theme Styles-->
    <link href="admin/assets/css/dark-theme.css" rel="stylesheet" />
    <link href="admin/assets/css/light-theme.css" rel="stylesheet" />
    <link href="admin/assets/css/semi-dark.css" rel="stylesheet" />
    <link href="admin/assets/css/header-colors.css" rel="stylesheet" />

    <title>Skodash - Bootstrap 5 Admin Template</title>
</head>

<body class="bg-surface">
            <div class="wrapper">

                <header>
                   <nav class="navbar navbar-expand-lg navbar-light bg-white rounded-0 border-bottom">
                     <div class="container">
                       <a class="navbar-brand" href="#"><img src="admin/assets/images/brand-logo-2.png" width="140" alt=""/></a>
                       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                       </button>
                       <div class="collapse navbar-collapse" id="navbarSupportedContent">
                         <ul class="navbar-nav mb-2 mb-lg-0 align-items-center">
                           <li class="nav-item">
                             <a class="nav-link" href="#">Home</a>
                           </li>
                           <li class="nav-item">
                             <a class="nav-link" href="javascript:;">About</a>
                           </li>
                           <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                                Services <i class="bi bi-chevron-down align-middle ms-2"></i>
                             </a>
                             <ul class="dropdown-menu">
                               <li><a class="dropdown-item" href="#">Action</a></li>
                               <li><a class="dropdown-item" href="#">Another action</a></li>
                               <li><hr class="dropdown-divider"></li>
                               <li><a class="dropdown-item" href="#">Something else here</a></li>
                             </ul>
                           </li>
                           <li class="nav-item">
                             <a class="nav-link" href="javascript:;">Contact Us</a>
                           </li>
                         </ul>

                         <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                           <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                               English
                             </a>
                             <ul class="dropdown-menu">
                               <li><a class="dropdown-item" href="#">Action</a></li>
                               <li><a class="dropdown-item" href="#">Another action</a></li>
                               <li><hr class="dropdown-divider"></li>
                               <li><a class="dropdown-item" href="#">Something else here</a></li>
                             </ul>
                           </li>
                           <li class="nav-item">
                             <a class="nav-link" href="javascript:;">Support</a>
                           </li>
                         </ul>


                         @guest
                         <div class="d-flex ms-3 gap-3">

                            @if (Route::has('login'))
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @endif
                            @if (Route::has('register'))
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                            @else
                            <div class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                         </div>
                         @endguest
                       </div>
                     </div>





                   </nav>
                </header>

            <main class="py-4">
                @yield('content')
            </main>
        </div>

        <!--end page main-->

        <footer class="bg-white border-top p-3 text-center fixed-bottom">
            <p class="mb-0">Copyright © 2021. All right reserved.</p>
        </footer>

    </div>
    <!--end wrapper-->

<!-- Bootstrap bundle JS -->
<script src="admin/assets/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="admin/assets/js/jquery.min.js"></script>
<script src="admin/assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="admin/assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="admin/assets/js/pace.min.js"></script>
<!--app-->
<script src="admin/assets/js/app.js"></script>

</body>

</html>
