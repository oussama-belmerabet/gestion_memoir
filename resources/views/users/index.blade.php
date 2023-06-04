
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('paper') }}/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('paper') }}/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="canonical" href="https://www.creative-tim.com/product/paper-dashboard-laravel" />


    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Paper Dashboard Laravel by Creative Tim">
    <meta itemprop="description" content="Start your development with a Bootstrap 4 Admin Dashboard built for Laravel Framework 5.5 and Up.">

    <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/209/opt_pd_laravel_thumbnail.jpg">

    <!-- Open Graph data -->
    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Paper Dashboard Laravel by Creative Tim" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://www.creative-tim.com/live/paper-dashboard-laravel" />
    <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/209/opt_pd_laravel_thumbnail.jpg"/>
    <meta property="og:description" content="Start your development with a Bootstrap 4 Admin Dashboard built for Laravel Framework 5.5 and Up." />
    <meta property="og:site_name" content="Creative Tim" />


    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{ asset('paper') }}/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('paper') }}/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NKDMSK6');</script>
    <!-- End Google Tag Manager -->

    <script>
    // Facebook Pixel Code Don't Delete
        ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
        }(window,
        document, 'script', '//connect.facebook.net/en_US/fbevents.js');
        try {
        fbq('init', '111649226022273');
        fbq('track', "PageView");
        } catch (err) {
        console.log('Facebook Track Error:', err);
        }
    </script>

</head>


<body>

    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

            <div class="wrapper">

                <div class="sidebar text-black font-bold" data-color="white" data-active-color="black">
                    <div class="logo">
                        <a href="#" class="simple-text logo-normal">
                            {{ __('Gestion memoir') }}
                        </a>
                    </div>
                    <div class="sidebar-wrapper">
                        <ul class="nav">
                            <li>
                                <a href="{{ route('page.index', 'dashboard') }}">
                                    <i class="nc-icon nc-bank"></i>
                                    <p>{{ __('Dashboard') }}</p>
                                </a>
                            </li>
                            <li >
                                <a data-toggle="collapse" aria-expanded="true" href="#laravelExamples">
                                    <p>
                                            {{ __('Acounts ') }}
                                        <b class="caret"></b>
                                    </p>
                                </a>
                                <div class="collapse show text-black font-bold " id="laravelExamples">
                                    <ul class="nav text-slate-900">
                                        <li >
                                            <a href="{{ route('profile.edit') }}">
                                                <span class="sidebar-normal">{{ __(' List Etudiant ') }}</span>
                                            </a>
                                        </li>
                                        <li class="active">
                                            <a href="{{ route('page.index', 'user') }}">
                                                <span class="sidebar-normal">{{ __('  List Responsable ') }}</span>
                                            </a>
                                        </li>
                                        <li class="active">
                                            <a href="{{ route('page.index', 'user') }}">
                                                <span class="sidebar-normal">{{ __('  List Enseignant ') }}</span>
                                            </a>
                                        </li>
                                        <li class="active">
                                            <a href="{{ route('page.index', 'user') }}">
                                                <span class="sidebar-normal">{{ __('  List des sujets ') }}</span>
                                            </a>
                                        </li>
                                        <li class="active">
                                            <a href="{{ route('page.index', 'user') }}">
                                                <span class="sidebar-normal">{{ __('  List Des Reclamation ') }}</span>
                                            </a>
                                        </li>
                                        <li class="active">
                                            <a href="{{ route('page.index', 'user') }}">
                                                <span class="sidebar-normal">{{ __('  List Des affectation ') }}</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li >
                                <a href="{{ route('page.index', 'map') }}">
                                    <p>{{ __('Maps') }}</p>
                                </a>
                            </li>
                                <a href="{{ route('page.index', 'tables') }}">
                                    <i class="nc-icon nc-tile-56"></i>
                                    <p>{{ __('Table List') }}</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

    <div class="main-panel">
        <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
            <div class="container-fluid">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                    aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <form>
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="nc-icon nc-zoom-split"></i>
                                </div>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link btn-magnify" href="#pablo">
                                <i class="nc-icon nc-layout-11"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">{{ __('Stats') }}</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item btn-rotate dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="nc-icon nc-bell-55"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">{{ __('Some Actions') }}</span>
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">{{ __('Action') }}</a>
                                <a class="dropdown-item" href="#">{{ __('Another action') }}</a>
                                <a class="dropdown-item" href="#">{{ __('Something else here') }}</a>
                            </div>
                        </li>
                        <li class="nav-item btn-rotate dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="nc-icon nc-settings-gear-65"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">{{ __('Account') }}</span>
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink2">
                                <form class="dropdown-item" action="{{ route('logout') }}" id="formLogOut" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" onclick="document.getElementById('formLogOut').submit();">{{ __('Log out') }}</a>
                                    <a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('My profile') }}</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @if( auth()->user()->id == $rsm->id_RSM)

        <div class="content">
            <div class="container-fluid mt--7">
                <div class="row">
                    <div class="col">
                        <div class="card shadow">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-8">

                                    <h3 class="mb-0">Les Etudiant</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="/em" class="btn btn-sm p-2 bg-green-400 border-gray-600">Ajouter Etudiant</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                                                    </div>

                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Prenom</th>
                                        <th scope="col">Spécialité</th>
                                        <th></th><th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($em as $e)
                                        <tr>

                                            <td>{{ $e->nom }}</td>
                                            <td>
                                                {{ $e->prenom }}
                                            </td>
                                            <td>{{ $e->spécialité }}</td>

                                            <td class="p-0">
                                                <div class="col-4 text-right">
                                                <a href="/supremeEm/{{$e->num_et}}" class="btn btn-sm p-2 btn-danger">Supremer</a>
                                            </div></td>
                                            <td class="p-0">
                                                <div class="col-4 text-right">
                                                <a href="/modifier/{{$e->num_et}}" class="btn btn-sm btn-success">modifier
                                                </a>
                                            </div></td>

                                        </tr>
                                        @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer py-4">
                            <nav class="d-flex justify-content-end" aria-label="...">

                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="container-fluid mt--7">
                <div class="row">
                    <div class="col">
                        <div class="card shadow">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-8">

                                    <h3 class="mb-0">Les Enseignant</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="/enseignant" class="btn btn-sm p-2 bg-green-400 border-gray-600">Ajouter Enseignant</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                                                    </div>

                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Prenom</th>
                                        <th scope="col">grade</th>
                                        <th>domaine</th>
                                        <th>année_r</th>
                                        <th>nbr_sujet</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($enseignants as $e)
                                        <tr>

                                            <td>{{ $e->user->name }}</td>
                                            <td>
                                                {{ $e->prenom }}
                                            </td>
                                            <td>{{ $e->grade }}</td>
                                            <td>{{$e->domaine}}</td>
                                            <td>{{ $e->année_r }}</td>
                                            <td>{{ $e->nbr_sujet }}</td>

                                            <td class="p-0">
                                                <div class="col-4 text-right">
                                                <a href="/suprimer/enseignant/{{$e->num_es}}" class="btn btn-sm p-2 btn-danger">Supremer</a>
                                            </div></td>
                                            <td class="p-0">
                                                <div class="col-4 text-right">
                                                <a href="/modifier/{{$e->num_es}}" class="btn btn-sm btn-success">modifier
                                                </a>
                                            </div></td>

                                        </tr>
                                        @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer py-4">
                            <nav class="d-flex justify-content-end" aria-label="...">

                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="content">
            <div class="container-fluid mt--7">
                <div class="row">
                    <div class="col">
                        <div class="card shadow">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-8">

                                    <h3 class="mb-0">Les Responsable Assistant</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="/addRa" class="btn btn-sm p-2 bg-green-400 border-gray-600">Ajouter Ra</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                                                    </div>

                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Prenom</th>
                                        <th scope="col">Spécialité</th>
                                        <th></th><th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($ra as $e)
                                        <tr>

                                            <td>{{dd($e)  }}</td>
                                            <td>
                                                {{ $e->enseignant}}
                                            </td>
                                            <td>{{ $e->spécialité }}</td>

                                            <td class="p-0">
                                                <div class="col-4 text-right">
                                                <a href="/supremeEm/{{$e->num_et}}" class="btn btn-sm p-2 btn-danger">Supremer</a>
                                            </div></td>
                                            <td class="p-0">
                                                <div class="col-4 text-right">
                                                <a href="/modifier/{{$e->num_et}}" class="btn btn-sm btn-success">modifier
                                                </a>
                                            </div></td>

                                        </tr>
                                        @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer py-4">
                            <nav class="d-flex justify-content-end" aria-label="...">

                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="content">
            <div class="container-fluid mt--7">
                <div class="row">
                    <div class="col">
                        <div class="card shadow">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-8">

                                    <h3 class="mb-0">Les Etudiant</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="/em" class="btn btn-sm p-2 bg-green-400 border-gray-600">Ajouter Etudiant</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                                                    </div>

                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Prenom</th>
                                        <th scope="col">Spécialité</th>
                                        <th></th><th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($em as $e)
                                        <tr>

                                            <td>{{ $e->nom }}</td>
                                            <td>
                                                {{ $e->prenom }}
                                            </td>
                                            <td>{{ $e->spécialité }}</td>

                                            <td class="p-0">
                                                <div class="col-4 text-right">
                                                <a href="/supremeEm/{{$e->num_et}}" class="btn btn-sm p-2 btn-danger">Supremer</a>
                                            </div></td>
                                            <td class="p-0">
                                                <div class="col-4 text-right">
                                                <a href="/modifier/{{$e->num_et}}" class="btn btn-sm btn-success">modifier
                                                </a>
                                            </div></td>

                                        </tr>
                                        @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer py-4">
                            <nav class="d-flex justify-content-end" aria-label="...">

                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="content">
            <div class="container-fluid mt--7">
                <div class="row">
                    <div class="col">
                        <div class="card shadow">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-8">

                                    <h3 class="mb-0">Les Etudiant</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="/em" class="btn btn-sm p-2 bg-green-400 border-gray-600">Ajouter Etudiant</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                                                    </div>

                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Prenom</th>
                                        <th scope="col">Spécialité</th>
                                        <th></th><th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($em as $e)
                                        <tr>

                                            <td>{{ $e->nom }}</td>
                                            <td>
                                                {{ $e->prenom }}
                                            </td>
                                            <td>{{ $e->spécialité }}</td>

                                            <td class="p-0">
                                                <div class="col-4 text-right">
                                                <a href="/supremeEm/{{$e->num_et}}" class="btn btn-sm p-2 btn-danger">Supremer</a>
                                            </div></td>
                                            <td class="p-0">
                                                <div class="col-4 text-right">
                                                <a href="/modifier/{{$e->num_et}}" class="btn btn-sm btn-success">modifier
                                                </a>
                                            </div></td>

                                        </tr>
                                        @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer py-4">
                            <nav class="d-flex justify-content-end" aria-label="...">

                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        @endif



        <form class="w-full max-w-lg">
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                </div>
            </div>
        </form>

    </div>


    <!--   Core JS Files   -->
    <script src="{{ asset('paper') }}/js/core/jquery.min.js"></script>
    <script src="{{ asset('paper') }}/js/core/popper.min.js"></script>
    <script src="{{ asset('paper') }}/js/core/bootstrap.min.js"></script>
    <script src="{{ asset('paper') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="{{ asset('paper') }}/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('paper') }}/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('paper') }}/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{ asset('paper') }}/demo/demo.js"></script>
    <!-- Sharrre libray -->
    <script src="{{ asset('paper') }}/demo/jquery.sharrre.js"></script>

    @stack('scripts')

    @include('layouts.navbars.fixed-plugin-js')
</body>

</html>
