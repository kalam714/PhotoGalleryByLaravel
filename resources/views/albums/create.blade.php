@extends('layouts.app')
@section('content')
<h3>Create Album</h3>


                  @if(count($errors) >0)
				  <div class="alert alert-danger">
					<ul>
					   @foreach($errors->all() as $error)
					   <li>{{$error}}</li>
					   @endforeach
					<ul>
				  </div>
				  @endif

{!! Form::open(['action' => '\App\Http\Controllers\AlbumsController@store','method'=>'POST', 'enctype'=>'multipart/form-data'])!!}

{{csrf_field()}}
                
                   <div class="form-group">
                   {{Form::label('', 'Album Name',['for'=>'cname'])}}
                     {{Form::text('name','',['class'=>'form-control'])}}
                   </div>
                   <div class="form-group">
                   {{Form::label('', 'Description',['for'=>'cname'])}}
                     {{Form::textarea('description','',['class'=>'form-control'])}} 
                   </div>
                   
                   <div class="form-group">
                   {{Form::label('', 'Cover Image',['for'=>'cname'])}}
                   {{Form::file('cover_image',['class'=>'form-control'])}}
                   
                   </div>
                  

                    {{Form::submit('submit',['class'=>'btn btn-primary'])}}
  
{!! Form::close() !!}





@endsection