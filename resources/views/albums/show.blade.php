@extends('layouts.app')
@section('content')

@if(Session::has('status'))
                  <div class="alert alert-success">
                  {{Session::get('status')}}
                  </div>
                  @endif
<h1>{{$album->name}}</h1>
<hr>
<br>
<a href="/"><button type="button" class="btn btn-dark">Go Back</button></a>
<a href="/photos/create/{{$album->id}}"><button type="button" class="btn btn-info">Upload Photo</button></a>
<hr>


@foreach($album->photos as $photo)
<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10 mb-5 text-center">
          <div class="card" style="width: 18rem;">
    			<img height="300" width="300" class="img-fluid" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="Colorlib Template">
          <div class="card-body">
            <div class="card-text">
              <h2>{{$photo->title}}</h2>   
              <p>{{$photo->description}}</p>
            </div>
          </div>
</div>
        </div>
    		</div>
    
    
 
 


   
</div>
@endforeach



@endsection