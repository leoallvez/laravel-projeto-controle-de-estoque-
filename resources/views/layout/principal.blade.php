<html>
	<head>
		<!--Bootstrap do próprio Laraval -->
		<link rel='stylesheet' type='text/css' href='http://localhost/Estoque/public/css/app.css'>
		<link rel='stylesheet' type='text/css' href='http://localhost/Estoque/public/css/custom.css'>
		<title>Controle de Estoque</title>
	</head>
	<body>
		<div class="container">
			<nav class='navbar navbar-default'>
				<div class='container-fluid'>
					<div class='navbar-header'>
						<a class='navbar-brand' href='{{action('ProdutoController@index')}}'>Estoque Laravel</a>	
					</div>
					<ul class='nav navbar-nav navbar-right'>
						<li><a href='{{action('ProdutoController@index')}}'>Listagem</a></li>
						<li><a href='{{action('ProdutoController@create')}}'>Novo</a></li>
					</ul>
				</div>
			</nav>

			@yield('conteudo')

			<footer class='footer'>
				<p>© Estoque Laravel</p>
			</footer>
		</div>
		
	</body>
</html>