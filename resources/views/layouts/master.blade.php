<!DOCTYPE html>
<html>
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Laravel Ajax</title>

	<link rel="stylesheet" type="text/css" href="{{ url('assets/css/bootstrap.min.css') }}">

	<script src="{{ url('assets/js/jquery.min.js') }}"></script>
	<script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">LARAJAX</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			</div>
		</div>
	</nav>

	<div class="container">
		<div class="row">
			@yield('content')
		</div>
	</div>

	<script type="text/javascript">
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	</script>

</body>
</html>
