<!-- View Master - Base para outras View construidas por extenção desta. -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('titulo')</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
	<a class="navbar-brand" href="/">
		<img src="/pneuLogo.png" width="30" height="30" class="d-inline-block align-top" alt="">
		Oficina
	</a>
		<ul class="navbar-nav mr-auto">
		<li class="nav-item">
			<a class="nav-link" href="/cliente">Clientes</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="/mecanico">Mecânicos</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="/carro">Carros</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="/problema">Problemas</a>
		</li>
		</ul>
	</div>
	</nav>
	@yield('corpo')
</body>
</html>