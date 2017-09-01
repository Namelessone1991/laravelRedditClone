<!DOCTYPE html>
<html lang = "es">
<head>
<title>
Reddit Clone
</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<div class = "container">

   <div class = "row">
   

   <div class = "col-md-12">
      <h1> Reddit clone 
      
      <div class ="pull-right">
      
      <a href = "{{route('create_post_path')}}">Create Post</a>
      
      </div>
      
      
      </h1> 

   </div>

   </div>

   @include ('layouts._errors')
   @include('posts._messages')

@yield('content')


</div>

</body>

</html>