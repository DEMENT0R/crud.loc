<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<title>Hello, world!</title>
</head>

<body>
	<div class="container">
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
					<a class="navbar-brand" href="#">Hidden brand</a>
					<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
						<li class="nav-item active">
							<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Link</a>
						</li>
						<li class="nav-item">
							<a class="nav-link disabled" href="#">Disabled</a>
						</li>
					</ul>
					<form class="form-inline my-2 my-lg-0">
						<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					</form>
				</div>
			</nav>
		</header>
		<form method="POST">
			date: <input type="text" name="date" value="<?=e($row['date'])?>"><br>
			name: <input type="text" name="name" value="<?=e($row['name'])?>"><br>
			kpowner: <input type="text" name="kpowner" value="<?=e($row['kpowner'])?>"><br>
			phone: <input type="text" name="phone" value="<?=e($row['phone'])?>"><br>
			address: <input type="text" name="address" value="<?=e($row['address'])?>"><br>
			percentage: <input type="text" name="percentage" value="<?=e($row['percentage'])?>"><br>
			acctype: <input type="text" name="acctype" value="<?=e($row['acctype'])?>"><br>
			haul: <input type="text" name="haul" value="<?=e($row['haul'])?>"><br>
			tujuan: <input type="text" name="tujuan" value="<?=e($row['tujuan'])?>"><br>
			amount: <input type="text" name="amount" value="<?=e($row['amount'])?>"><br>
			consultantid: <input type="text" name="consultantid" value="<?=e($row['consultantid'])?>"><br>
			method: <input type="text" name="method" value="<?=e($row['method'])?>"><br>
			asnafLuar: <input type="text" name="asnafLuar" value="<?=e($row['asnafLuar'])?>"><br>
			status: <input type="text" name="statusstatus'])?>"><br>
			<input type="hidden" name="id" value="<?=e($row['id'])?>">
			<input type="submit"><br>
		</form>
		<a href="?">Return to the list</a>

		<?php if ($row['id']): ?>
			<form method="POST">
				<input type="hidden" name="delete" value="<?=e($row['id'])?>">
				<input type="submit" value="Delete"><br>
			</form>
		<? endif ?>
		<!-- Footer -->
		<footer class="page-footer pt-4">

			<!-- Footer Links -->
			<div class="container text-center text-md-left">

				<!-- Grid row -->
				<div class="row">

					<!-- Grid column -->
					<div class="col-md-6 mt-md-0 mt-3">

						<!-- Content -->
						<h5 class="text-uppercase">Footer Content</h5>
						<p>Here you can use rows and columns here to organize your footer content.</p>

					</div>
					<!-- Grid column -->

					<hr class="clearfix w-100 d-md-none pb-3">

					<!-- Grid column -->
					<div class="col-md-3 mb-md-0 mb-3">

						<!-- Links -->
						<h5 class="text-uppercase">Links</h5>

						<ul class="list-unstyled">
							<li>
								<a href="#!">Link 1</a>
							</li>
							<li>
								<a href="#!">Link 2</a>
							</li>
							<li>
								<a href="#!">Link 3</a>
							</li>
						</ul>

					</div>
					<!-- Grid column -->

					<!-- Grid column -->
					<div class="col-md-3 mb-md-0 mb-3">

						<!-- Links -->
						<h5 class="text-uppercase">Links</h5>

						<ul class="list-unstyled">
							<li>
								<a href="#!">Link 1</a>
							</li>
							<li>
								<a href="#!">Link 2</a>
							</li>
							<li>
								<a href="#!">Link 3</a>
							</li>
						</ul>

					</div>
					<!-- Grid column -->

				</div>
				<!-- Grid row -->

			</div>
			<!-- Footer Links -->

			<!-- Copyright -->
			<div class="footer-copyright text-center py-3"><a href="http://bezrukavnikov.ru">bezrukavnikov.ru</a> © 2018
			</div>
			<!-- Copyright -->

		</footer>
		<!-- Footer -->

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>

	</html>