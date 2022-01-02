<link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
    
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


  <body cz-shortcut-listen="true">
    <div class="container">

    <main role="main">
     
      <div class="album py-5 bg-light">
        <div class="container">

        <div class="row">
    @forelse($members as $post)
    <div class="col-md-4">
        <div class="card mb-4 box-shadow">
        <h3 class="card-head-"><div class="card text-center">{{ $post->title }}</div></h3>
        <img class="card-img-top" src="uploads/{{$post->image}}" alt="Card image cap">
            <div class="card-body">
              
                <div class="d-flex justify-content-between align-items-center">
                 
                        <a class="btn btn-sm btn-outline-secondary">{{ $post->description}}</a>
                   
                   
                </div>
            </div>
        </div>
    </div>
    @empty
        <p>No Posts Currently</p>
    @endforelse
</div>
          
{{$members->links('pagination::bootstrap-4') }}
            
        
        
        </div>
      </div>
    </main>
    </div>

    
  </body>
  

