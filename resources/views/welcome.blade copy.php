<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-light">
	<div id="app">

		<nav class="navbar navbar-expand navbar-light bg-light py-0">
			<div class="container">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
					aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link" href="#">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Blog</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Template
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Contact</a>
						</li>
					</ul>
					<span class="navbar-text text-dark d-block">
						<i>Call us today:</i> <strong>800-123-456</strong>
					</span>
				</div>
			</div>
		</nav>

		<div class="bg-white py-3">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-8 col-sm d-flex align-items-center">
						<img width="80" height="80" src="https://via.placeholder.com/80">
						<div class="ml-4">
							<h2>Heading Large</h2>
							<p class="lead mb-0">Tagline</p>
						</div>
					</div>
					<div class="col-sm">
						<nav class="navbar navbar-expand navbar-light p-0">
							<button class="navbar-toggler" type="button" data-toggle="collapse"
								data-target="#navbarText" aria-controls="navbarText" aria-expanded="false"
								aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarText">
								<ul class="navbar-nav py-2 mx-auto">
									<li class="nav-item active">
										<a class="nav-link" href="#">Home</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Features</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Pricing</a>
									</li>
									<li class="nav-item">
										<a class="btn btn-primary ml-3" href="#">Pricing</a>
									</li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>

		<nav class="navbar navbar-expand-sm navbar-dark bg-primary" style="background: navy">
			<div class="container">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
					aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="#">About</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Admission</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Events</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Video</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Woocommerce
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
						</li>
					</ul>
					<span class="navbar-text">
						search
					</span>
				</div>
			</div>
		</nav>

		<main class="container my-3">
			<div class="row">
				<div class="col-md-4 col-lg-3">

					<div class="card mb-3">
						<div class="card-header">latest posts</div>
						<div class="card-body">
							<p class="card-text">
								Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt illum harum
								voluptatibus odit error tempore. Modi beatae architecto quis assumenda mollitia. Rem
								adipisci, saepe facere vitae natus magnam distinctio possimus?
							</p>
						</div>
					</div>

					<div class="card bg-warning">
						<div class="card-header">latest posts</div>
						<div class="card-body">
							<p class="card-text">
								Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt illum harum
								voluptatibus odit error tempore. Modi beatae architecto quis assumenda mollitia. Rem
								adipisci, saepe facere vitae natus magnam distinctio possimus?
							</p>
						</div>
					</div>

				</div>
				<div class="col-md-8 col-lg-9">

					<img class="w-100 mb-3" src="https://via.placeholder.com/800x400">

					<div class="card">
						<div class="card-body">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem repellat ipsum neque ex
							nihil
							tempore odio dolorem culpa minus excepturi vel error, magnam expedita corporis
							perferendis?
							Et est possimus molestiae sunt ad iure cupiditate enim illum consectetur natus. Modi
							vero
							nisi voluptate sit quos odio corrupti, quasi exercitationem error ex delectus itaque
							iure
							sunt minima eum? Adipisci aperiam laudantium facere esse velit. Qui quia dolore
							voluptatibus
							distinctio nostrum nobis reiciendis aliquam similique, officiis, architecto pariatur sit
							impedit consequuntur? Molestias, eaque. Veniam, accusamus. Commodi maiores iusto
							explicabo
							assumenda mollitia enim iure minus ipsa quasi doloribus, sapiente facere maxime
							voluptatum
							rem deleniti veritatis molestias et animi expedita nemo tempore impedit accusantium cum
							nihil? Culpa adipisci quibusdam deleniti a tenetur ratione labore reprehenderit pariatur
							eos! Atque molestias saepe sapiente autem delectus qui, quasi itaque id, ut quo tempora
							eveniet quod aliquam, nobis earum nemo dolorum aliquid consequatur expedita? Numquam
							maxime
							optio nemo similique eos provident minus officia, cumque, dolorem aliquid id natus odio
							at!
							Reiciendis aliquid blanditiis, aut eveniet amet eum voluptate sint, dicta dolorum
							distinctio
							quos architecto esse quisquam, quo beatae maiores? Quibusdam, soluta? Laudantium ratione
							fuga numquam dolore ut perferendis perspiciatis, error odit veritatis amet, distinctio
							facere vel hic voluptate, aperiam earum at repudiandae. Nemo distinctio officiis,
							reiciendis
							consequuntur adipisci inventore labore. Distinctio saepe deleniti eaque aut quibusdam
							necessitatibus explicabo similique illum mollitia impedit magnam asperiores, sequi dolor
							quaerat quae nam ea incidunt laboriosam cupiditate labore! Esse quaerat suscipit quo
							voluptas iure exercitationem, accusantium, tempora magni expedita consectetur eveniet
							maxime
							sequi necessitatibus fugit doloribus, hic minus? Sequi iste tempore animi? Aliquam eius
							cupiditate amet autem impedit! Perferendis illo, consequuntur alias totam eius
							doloremque
							tempore nobis culpa, accusantium excepturi vitae officia. Reiciendis sint placeat
							eveniet
							nulla soluta magni quidem quibusdam, est esse, provident rem? Amet laborum quae animi
							eius
							in totam quisquam.
						</div>
					</div>

				</div>
			</div>
		</main>


		<footer class="text-light py-3 bg-primary" style="background: navy">
			<div class="container">
				<div class="row">
					<div class="col-sm">
						Lorem ipsum dolor sit, amet consectetur adipisicing elit. At voluptatem earum unde blanditiis!
						Perferendis aliquid, molestiae facere voluptatum nemo laborum doloribus sint ab dolores,
						suscipit eius unde, enim iste similique.
					</div>
					<div class="col-sm">
						Lorem ipsum dolor sit, amet consectetur adipisicing elit. At voluptatem earum unde blanditiis!
						Perferendis aliquid, molestiae facere voluptatum nemo laborum doloribus sint ab dolores,
						suscipit eius unde, enim iste similique.
					</div>
					<div class="col-sm">
						Lorem ipsum dolor sit, amet consectetur adipisicing elit. At voluptatem earum unde blanditiis!
						Perferendis aliquid, molestiae facere voluptatum nemo laborum doloribus sint ab dolores,
						suscipit eius unde, enim iste similique.
					</div>
					<div class="col-sm">
						Lorem ipsum dolor sit, amet consectetur adipisicing elit. At voluptatem earum unde blanditiis!
						Perferendis aliquid, molestiae facere voluptatum nemo laborum doloribus sint ab dolores,
						suscipit eius unde, enim iste similique.
					</div>
				</div>
				<hr>
				<p class="text-center mb-0">copyright abc company</p>
			</div>
		</footer>

	</div>
</body>

</html>