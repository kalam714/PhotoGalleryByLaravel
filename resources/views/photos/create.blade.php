@extends('layouts.app')
@section('content')
<h3>Upload Photo</h3>
               

{!! Form::open(['action' => '\App\Http\Controllers\PhotosController@store','method'=>'POST', 'enctype'=>'multipart/form-data'])!!}

{{csrf_field()}}
                
                   <div class="form-group">
                   {{Form::hidden('album_id',$album_id)}}
                   {{Form::label('', 'title',['for'=>'cname'])}}
                     {{Form::text('title','',['class'=>'form-control'])}}
                   </div>
                   <div class="form-group">
                   {{Form::label('', 'Description',['for'=>'cname'])}}
                     {{Form::textarea('description','',['class'=>'form-control'])}} 
                   </div>
                   
                   <div class="form-group">
                   {{Form::label('', 'Image',['for'=>'cname'])}}
                   {{Form::file('photo',['class'=>'form-control'])}}
                   
                   </div>
                  

                    {{Form::submit('submit',['class'=>'btn btn-primary'])}}
  
{!! Form::close() !!}





@endsection