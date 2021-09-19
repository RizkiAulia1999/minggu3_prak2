<html>
<head>
    <title> @yield('title')</title>
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="{{asset('css/templatemo-style.css')}}">   

    
     <!-- load JS files -->
        <script src="{{asset('js/jquery-1.11.3.min.js')}}"></script>            
        <script src="{{asset('https://www.atlasestateagents.co.uk/javascript/tether.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>              
</head>
<body>
    @section('header')
       <div class="tm-header">
            <div class="container-fluid">
                <div class="tm-header-inner">
                    <a href="#" class="navbar-brand tm-site-name">
                        @yield('navbar-brand')
                    </a>                   
                    <!-- navbar -->
                    <nav class="navbar tm-main-nav">
                        <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                            &#9776;
                        </button>  
                        <div class="collapse navbar-toggleable-sm" id="tmNavbar">
                            <ul class="nav navbar-nav">
                                <li class="nav-item active">
                                    <a href="" class="nav-link">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">Profil</a>
                                </li>
                            </ul>                        
                        </div>                      
                    </nav>  
                </div>                                  
            </div>            
        </div>

        @section('main')      
        <section class="tm-section">
            <div class="container-fluid">
                <div class="row">
                    @yield('content')
                </div>                     
            </div>
        </section>

        @section('footer')
        <footer class="tm-footer">
            <div class="container-fluid">
                <div class="row">
                    <h1 style="text-align: center;">POLITEKNIK NEGERI MALANG</h1>
                </div>
            </div>
        </footer>
</body>
</html> 