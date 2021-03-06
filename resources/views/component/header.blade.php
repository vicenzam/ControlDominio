<header class="header">
		<div class="container">			
			<div class="row header__content">
				<div class="col-6 col-md-4 col-lg-3">
					<a class="enlace__logo" href="#">
						<img class="img-fluid" src="{{ asset('img/logo-horizontal-negro.png') }}" alt="">
					</a>
				</div>
				
				<div class="col-6 col-md-8 d-lg-none d-xl-none">
					<span id="btn-menu" class="icono-menu fa fa-bars"></span>
				</div>			
				
				<nav class="nav col-12 col-lg-9" id="nav">
					<ul class="menu">
						<li class="menu__item">
							<a class="menu__link" href="{{ route('dominios.index') }}">Inicio</a>
						</li>
						<li class="menu__item">
							<a class="menu__link" href="{{ route('clientes.index') }}">Clientes</a>
						</li>
						<li class="menu__item">
							<a class="menu__link" href="{{ route('dominios.index') }}">Dominios</a>
						</li>
						<li class="menu__item">
							<a class="menu__link" href="{{ route('proveedores.index') }}">Proveedores</a>
						</li>
						<li class="menu__item">
							<a class="menu__link" href="{{ route('cuentas.index') }}">Cuentas</a>
						</li>
					</ul>
				</nav>
			</div>

		</div>
	</header>