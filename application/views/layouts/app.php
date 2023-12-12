<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="" />
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
	<meta name="generator" content="Hugo 0.84.0" />
	<title>
		<?= isset($title) ? $title : 'WEBFREE' ?> - Show Your Skills
	</title>

	<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-fixed" />

	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url('/assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet') ?>" />
	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="<?php echo base_url('/assets/libs/fontawesome/css/all.min.css') ?>" />
	<!-- Custom styles for this template -->
	<link rel="stylesheet" href="<?php echo base_url('/assets/css/app.css') ?>" />
</head>

<body>
	<!-- Navbar -->
	<?php $this->load->view('layouts/_navbar'); ?>
	<!-- EndNavbar -->

	<!-- Content -->
	<?php $this->load->view($page); ?>
	<!-- End Content -->
	<script src="<?php echo base_url('/assets/libs/jquery/jquery-3.7.1.min.js') ?>"></script>
	<script src="<?php echo base_url('/assets/libs/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
	<script src="<?php echo base_url('/assets/js/app.js') ?>"></script>
</body>

</html>