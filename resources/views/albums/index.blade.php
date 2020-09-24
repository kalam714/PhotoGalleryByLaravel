@extends('layouts.app')
@section('content')
<style>
.grid-container {
  display: grid;
  justify-content: space-evenly;
  grid-template-columns: 50px 50px 50px; /*Make the grid smaller than the container*/
  grid-gap: 10px;
  background-color: #2196F3;
  padding: 10px;
}

.grid-container > div {
 
  text-align: center;
  padding: 20px 0;
  font-size: 30px;
}
</style>


<h1>Album</h1>
               @if(Session::has('status'))
                  <div class="alert alert-success">
                  {{Session::get('status')}}
                  </div>
                  @endif

@foreach($albums as $album)
<div class="container-fluid">
  
  <div class="row">
  <div class="col-md-6 col-lg-3 ftco-animate">
   <a href="/album/{{$album->id}}"> <img height="200" width="300" src="storage/cover_images/{{$album->cover_image}}"></a>
    <h4>{{$album->name}}</h4>
    </div>
   
  
    
    
  </div>
</div>
 
    


   
</div>
@endforeach




    
  

@endsection