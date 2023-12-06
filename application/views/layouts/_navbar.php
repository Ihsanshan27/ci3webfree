<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">WEBFREE</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
			aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="navbar-nav me-auto mb-2 mb-md-0">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="#">Home</a>
				</li>
				<li class="nav-item dropdown">
					<a href="#" class="nav-link dropdown-toggle" id="dropdown-1" data-bs-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false">
						Manage
					</a>
					<div class="dropdown-menu" aria-labelledby="dropdown-1">
						<a href="/admin-category.html" class="dropdown-item">Kategori</a>
						<a href="/admin-product.html" class="dropdown-item">Produk</a>
						<a href="/admin-users.html" class="dropdown-item">Pengguna</a>
					</div>
				</li>
			</ul>
			<ul class="navbar-nav">
				<?php if(!$this->session->userdata('is_login')): ?>
					<li class="nav-item">
						<a href="<?= base_url('/index.php/login') ?>" class="nav-link">Login</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('/index.php/register') ?>" class="nav-link">Register</a>
					</li>
				<?php else: ?>
					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" id="dropdown-2" data-bs-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">
							<?= $this->session->userdata('name') ?>
						</a>
						<div class="dropdown-menu" aria-labelledby="dropdown-2">
							<a href="/profile.html" class="dropdown-item">Profile</a>
							<a href="<?= base_url('/index.php/logout') ?>" class="dropdown-item">Logout</a>
						</div>
					</li>
				<?php endif ?>
			</ul>
		</div>
	</div>
</nav>