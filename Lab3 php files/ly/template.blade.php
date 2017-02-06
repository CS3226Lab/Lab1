<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Lab 3</title>
	</head>
	<body>
	<div class="container-fluid">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="{{ url('/')}}">CS3226</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="{{ url('help')}}">Help</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		<br>
	@yield('main') <!-- Blade command: include section from child file -->
	</div>
    @include('footer') <!-- Blade command: include other blade file -->
</body>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ URL::asset('css/myStyle.css')}}">
<!-- Optional theme -->
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap-theme.min.css')}}">
<!-- lab 2: tables and highlights -->
<link rel="stylesheet" href="{{ URL::asset('css/lab2.css')}}">  
<!-- Latest compiled and minified JavaScript -->
<script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
<script src="{{ URL::asset('js/TableSorter.js')}}"></script>
<script src="{{ URL::asset('js/highlight_table.js')}}"></script>
<script src="{{ URL::asset('js/lab2_driver.js')}}"></script>
<script src="{{ URL::asset('js/RowHeight.js')}}"></script>
<script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
</html>