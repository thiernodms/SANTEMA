<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-success elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/home')}}" class="brand-link">
        <img src="{{asset('img/santema_logo.png')}}" alt="SANTEMA Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SANTEMA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->


        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                @if(Auth::user()->role_id == 1)
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            AGENTS
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('add_doctor_view')}}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ajouter un agent</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('showagent')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Liste des agents</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            RENDEZ-VOUS
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('show_rdv')}}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Liste des rendez-vous</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            UTILISATEUR
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('showuser')}}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Liste des utilisateurs</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @else
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            RENDEZ-VOUS
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('show_rdv')}}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Liste des rendez-vous</p>
                            </a>
                        </li>
                    </ul>
                </li>

                @endif
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>