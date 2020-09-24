<!DOCTYPE html>
<html>
<head>
<title>Gallery </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" ></link>
</head>
<body>
<div>
<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="{{url('/')}}">Home</a></li>
  <li role="presentation"><a href="{{url('/createAlbum')}}">Create Album</a></li>
  <li role="presentation"><a href="#">Messages</a></li>
</ul>
<div>
<div class="section">
@yield('content')
</div>

</body>
</html>



