<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="" />
		<meta
			name="author"
			content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
		/>
		<meta name="generator" content="Hugo 0.84.0" />
		<title>Website Freelancer - Show Your Skills</title>

		<link
			rel="canonical"
			href="https://getbootstrap.com/docs/4.3/examples/navbar-fixed/"
		/>

		<!-- Bootstrap core CSS -->
		<link href="/assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<!-- Font Awesome CSS -->
		<link rel="stylesheet" href="/assets/libs/fontawesome/css/all.min.css" />
		<!-- Custom styles for this template -->
		<link rel="stylesheet" href="/assets/css/app.css" />
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">WEBFREE</a>
				<button
					class="navbar-toggler"
					type="button"
					data-bs-toggle="collapse"
					data-bs-target="#navbarCollapse"
					aria-controls="navbarCollapse"
					aria-expanded="false"
					aria-label="Toggle navigation"
				>
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<ul class="navbar-nav me-auto mb-2 mb-md-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#">Home</a>
						</li>
						<li class="nav-item dropdown">
							<a
								href="#"
								class="nav-link dropdown-toggle"
								id="dropdown-1"
								data-bs-toggle="dropdown"
								aria-haspopup="true"
								aria-expanded="false"
							>
								Manage
							</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-1">
								<a href="/admin-category.html" class="dropdown-item"
									>Kategori</a
								>
								<a href="/admin-product.html" class="dropdown-item">Produk</a>
								<a href="/admin-users.html" class="dropdown-item">Pengguna</a>
							</div>
						</li>
					</ul>
					<ul class="navbar-nav">
						<li class="nav-item">
							<a href="/login.html" class="nav-link">Login</a>
						</li>
						<li class="nav-item">
							<a href="/register.html" class="nav-link">Register</a>
						</li>
						<li class="nav-item dropdown">
							<a
								href="#"
								class="nav-link dropdown-toggle"
								id="dropdown-2"
								data-bs-toggle="dropdown"
								aria-haspopup="true"
								aria-expanded="false"
							>
								Admin
							</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-2">
								<a href="/profile.html" class="dropdown-item">Profile</a>
								<a href="#" class="dropdown-item">Logout</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>

          <!-- Content -->
          <?php $this->load->view($page); ?>
          <!-- End Content -->
		<script src="/assets/libs/jquery/jquery-3.7.1.min.js"></script>
		<script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
	</body>
</html>
