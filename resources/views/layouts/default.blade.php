<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
@include('includes.head')
</head>
<body>
	
	@include('includes.header')	
  
<div class="main">
	
@include('includes.categories')
	<div class="fullcontainer">	
		<div class="container">
		@yield('content')
		</div>
	</div>
	
</div>

	<footer id="footer">
	@include('includes.footer')
	</footer>
</body>
</html>