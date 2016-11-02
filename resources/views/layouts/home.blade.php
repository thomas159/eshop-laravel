<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
@include('includes.head')
</head>
<body>
	
<div class="header">
E-SHOP
</div>
<div class="main">		
@yield('content')
	
  var_dump($categories);
@foreach($categories as $category)
 {{ $category->name }}
@endforeach

</div>

	<footer id="footer">
	</footer>
	@include('includes.footer')
	
</body>
</html>