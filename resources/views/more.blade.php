

<div class="container">
    <div class="row justify-content-center">
    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
     @endif    

</div>
           
        
   

</div>

    <head>
      
        <script src="{{ asset('js/backpaneljs/scripts.js') }}" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
        <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
        <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{asset('css/backapp.css')}}" rel="stylesheet">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
      <style>
          card-image {
    width: 50%;
    height: 15px;
    object-fit: cover;
}
      </style>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Admin panel</a>
            <!-- Sidebar Toggle -->
        
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                       
                       
                        
                    
                   
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

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                          
                            <a class="nav-link" href="{{url('admin/home')}}" default>
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                             User Posts
                            </a>
                        
                    
                            
          
                         
                        </div>
                        <div class="nav">
                          
                          <a class="nav-link" href="{{url('admin/archived')}}" default>
                              <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                          Archived
                          </a>
                      
                  
                          
        
                       
                      </div>
                    </div>
                
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <a href={{url('admin/home')}}>
                    <button type="button" class="btn btn-info" style="margin-top: 3px;">Back</button></a>
                    <h1 class="mt-4">Post Details</h1>
             
                      
            
                       
                            @foreach ($one as $post )
                                
                       
                            <div class="card w-100">
                            <div class="card h-100">
  <div class="card-body card bg-primary text-white ">
    <h5 class="card-title">{{$post['title']}}</h5>
    <div  class="card-image">
    <img  src="/uploads/{{$post->image}}"  alt="hello ">
    </div>
    <p class="card-text">{{$post['description']}}</p>
   
  </div>
</div>
</div>
@endforeach

                        </div>
                      
                    </div>
                </main>
               
            </div>
        </div>
  
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>


        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{asset('js/backpaneljs/datatables-simple-demo.js')}}" ></script>
    </body>


    

