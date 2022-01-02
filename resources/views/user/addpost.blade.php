    
        <link href="{{asset('front-panel/css/styles.css')}}" rel="stylesheet" />
@include('user.nav');


<div class="col-md-6 offset-md-3 mt-5">

        <form action="/submitee" method="POST"  enctype="multipart/form-data" >
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-group">
            <label for="exampleInputName">Title</label>
            <input type="text" name="title" class="form-control" id="exampleInputtitle" placeholder="Enter your Title" required="required">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1" required="required">Description</label>
            <Textarea type="email" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter description"></Textarea>
          </div>
        
          <hr>
          <div class="form-group mt-3">
            <label class="mr-2">Upload your pic</label>
            <input type="file" name="photo">
          </div>
          <hr>
          <button type="submit" class="btn btn-primary" >Submit</button>
        </form>
    </div> 
    
