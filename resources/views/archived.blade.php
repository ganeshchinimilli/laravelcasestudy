

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
                        <h1 class="mt-4">Posts</h1>
                       
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                               All posts 
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Operations</th>
                                        </tr>
                                        
                                    </thead><tbody>
                                        @foreach ($main as $delete)
                                        <td>{{$delete['title']}}</td>
                                        
            <td>{{$delete['description']}}</td>
            
            <td>   <img  style="width:200px"src="/uploads/{{$delete->image}}"  alt="hello "></td>
            <td><a href={{"/restore/".$delete['id'] }} class="btn btn-secondary">
                                Restore
                            </a></td>
                        <td><a href={{"/permanent/".$delete['id'] }} class="btn btn-danger">
                                Permanent Delete
                            </a></td>
                                            
                                        @endforeach
                                    </tbody>
                              
                
          
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
               
            </div>
        </div>
   
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>


        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{asset('js/backpaneljs/datatables-simple-demo.js')}}" ></script>
    </body>


    

