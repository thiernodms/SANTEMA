<header>
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 text-sm">
                    <div class="site-info">
                        <a href="#"><span class="mai-call text-primary"></span> +224 626 91 96 60</a>
                        <span class="divider">|</span>
                        <a href="#"><span class="mai-mail text-primary"></span> santemaguinee@gmail.com</a>
                    </div>
                </div>
                <div class="col-sm-4 text-right text-sm">
                    <div class="social-mini-button">
                        <a href="#"><span class="mai-logo-facebook-f"></span></a>
                        <a href="#"><span class="mai-logo-twitter"></span></a>
                        <a href="#"><span class="mai-logo-dribbble"></span></a>
                        <a href="#"><span class="mai-logo-instagram"></span></a>
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <img height="100" width="100" src="/img/santema_logo.png" alt="">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}"><span class="text-primary">SANTEMA</span>-Guinée</a>



            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupport">
                <ul class="navbar-nav ml-auto text-sm">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/')}}">Acceuil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">A propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nos Agents</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Actualités</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacts</a>
                    </li>

                    @if(Route::has('login'))

                    @auth
                    <ul class="nav-link text-center">

                        <li class="nav-link  text-sm">


                            <a class="nav-link" style="background-color: aquamarine;" href="{{url('mesrdv')}}">Mes Rendez-vous</a>


                            <x-app-layout>

                            </x-app-layout>
                        </li>

                    </ul>
                </ul>

                @else

                <ul>

                    <li class="nav-item">
                    </li>

                    <li class="nav-item">
                        <a class="btn btn-primary nav-link ml-lg-2 my-1 py-0" href="{{route('login')}}">Connexion</a>
                    </li>
                </ul>


                <ul>


                    <li class="nav-item mb-1">
                        <a class="btn btn-primary nav-link ml-lg-2" href="{{route('register_as_agent_view')}}">Devenir agent</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary nav-link ml-lg-2" href="{{route('register')}}">S'inscrire</a>
                    </li>
                </ul>



                @endauth

                @endif

            </div> <!-- .navbar-collapse -->
        </div> <!-- .container -->
    </nav>
</header>