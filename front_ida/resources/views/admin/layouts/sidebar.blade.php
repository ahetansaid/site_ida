<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <!-- <div class="sidebar-brand-text mx-3 "><img src="{{ asset('assets/images/ada/Logo_ida_nuovo-header-ada.png') }}" alt=""></div> -->
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Pages
    </div>

    <!-- Nav Item - home -->
    
    <!-- Nav Item - About -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo00"
            aria-expanded="true" aria-controls="collapseTwo00">
            <i class="fas fa-fw fa-cog"></i>
            <span>Accueil</span>
        </a>
        <div id="collapseTwo00" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                
                <a class="collapse-item" href="{{ route('admin.add_slider') }}">Ajouter slider</a>
                <a class="collapse-item" href="{{ route('admin.events.index') }}">Ajouter evenement</a>
               
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>About</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">About - Section</h6>
                <a class="collapse-item" href="/admin/about">À propos</a>
                <a class="collapse-item" href="{{ route('section-obama.index') }}">Section Obama</a>
              
            </div>
        </div>
    </li>

    <!-- Nav Item - IDA activities -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Activités IDA</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Activités - Section</h6>
                <a class="collapse-item" href="{{ route('admin.fipa.index') }}">FIPA</a>
                <a class="collapse-item" href="{{ route('admin.clubs_ida.index') }}">Clubs IDA</a>
                <a class="collapse-item" href="{{ route('admin.infinity_circle.index') }}">IDA Infinity Africa Circle</a>
            </div>
        </div>
    </li>
    <!-- Nav Item - Projects -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Projets</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Projets - Section</h6>
                <a class="collapse-item" href="/admin/projects">Projets</a>
                <a class="collapse-item" href="/admin/small-businesses">Petites entreprises</a>
                <a class="collapse-item" href="/admin/mauritania-free-zone">Zones franches Mauritanie</a>
                <a class="collapse-item" href="/admin/project-opportunities">Opportunités de projets</a>
                <a class="collapse-item" href="{{ route('admin.afwa.index') }}">AFWA</a>
                <a class="collapse-item" href="{{ route('admin.water.index') }}">Projets Eau</a>
                <a class="collapse-item" href="{{ route('admin.nourdign.index') }}">NourDign</a>
                <a class="collapse-item" href="{{ route('admin.strategic-approach.index') }}">Approche Stratégique</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - ADA -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseADA"
            aria-expanded="true" aria-controls="collapseADA">
            <i class="fas fa-fw fa-folder"></i>
            <span>ADA</span>
        </a>
        <div id="collapseADA" class="collapse" aria-labelledby="headingADA" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">ADA - Section</h6>
                <a class="collapse-item" href="/ada">ADA</a>
                <a class="collapse-item" href="/ada-nelson-mandela">Nelson Mandela</a>
                <a class="collapse-item" href="/ada-leopold-sedar-senghor">Léopold Sédar Senghor</a>
                <a class="collapse-item" href="/ada-houphouet-bagny">Houphouët-Boigny</a>
                <a class="collapse-item" href="/ada-desmond-mpilo-tutu">Desmond Mpilo Tutu</a>
                <a class="collapse-item" href="/ada-colin-powell">Colin Powell</a>
                <a class="collapse-item" href="/ada-boutros-boutros-ghali">Boutros Boutros-Ghali</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - News -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNews"
            aria-expanded="true" aria-controls="collapseNews">
            <i class="fas fa-fw fa-folder"></i>
            <span>News</span>
        </a>
        <div id="collapseNews" class="collapse" aria-labelledby="headingNews" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">News - Section</h6>
                <a class="collapse-item" href="/admin/news/index">Liste des News</a>
                <a class="collapse-item" href="/admin/news/create">Ajouter une News</a>
                <!-- <a class="collapse-item" href="/news">Voir les News Publiques</a>
                <a class="collapse-item" href="login.html">News-history</a> -->
            </div>
        </div>
    </li>

    <!-- Nav Item - Events -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEvents"
            aria-expanded="true" aria-controls="collapseEvents">
            <i class="fas fa-fw fa-calendar"></i>
            <span>Événements</span>
        </a>
        <div id="collapseEvents" class="collapse" aria-labelledby="headingEvents" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Événements - Section</h6>
                <a class="collapse-item" href="{{ route('admin.events.index') }}">Liste des événements</a>
                <a class="collapse-item" href="{{ route('admin.events.create') }}">Ajouter un événement</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Partenaires -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePartenaires"
            aria-expanded="true" aria-controls="collapsePartenaires">
            <i class="fas fa-fw fa-folder"></i>
            <span>Partenaires</span>
        </a>
        <div id="collapsePartenaires" class="collapse" aria-labelledby="headingPartenaires" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Partenaires - Section</h6>
                <a class="collapse-item" href="{{ route('admin.partnership.index') }}">Partenaires</a>
                <a class="collapse-item" href="{{ route('admin.active_volunteers.index') }}">Volontaires actifs</a>
                <a class="collapse-item" href="{{ route('admin.member_benefit.index') }}">Membership</a>
                <a class="collapse-item" href="{{ route('admin.membership_requests.index') }}">Demandes d'adhésion</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Our Story -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOurStory"
            aria-expanded="true" aria-controls="collapseOurStory">
            <i class="fas fa-fw fa-book-open"></i>
            <span>Our Story</span>
        </a>
        <div id="collapseOurStory" class="collapse" aria-labelledby="headingOurStory" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Our Story - Section</h6>
                <a class="collapse-item" href="{{ route('admin.our-story.index') }}">Liste des Our Stories</a>
                <a class="collapse-item" href="{{ route('admin.our-story.create') }}">Ajouter Our Story</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Contact -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Contact</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    

</ul>
