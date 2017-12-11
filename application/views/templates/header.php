<html>
	<head>
		<title>My lala</title>
		<link href="https://bootswatch.com/4/darkly/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
		<script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-expand-sm bg-secondary navbar-light sticky-top">

			<div class="container">
				<ul class="navbar-nav navbar-left">
					<li class="nav-item">
						<a class="nav-link navbar-light" href="<?php echo base_url(); ?>about">About</a>
					</li>
					<li class="nav-item navbar-light">
						<a class="nav-link" href="<?php echo base_url(); ?>posts">Go Post</a>
					</li>
					<li class="nav-item navbar-light">
						<a class="nav-link" href="<?php echo base_url(); ?>categories">Categories</a>
					</li>
				</ul>
					<a class="navbar-brand" href="<?php echo base_url(); ?>">Home</a>
				
					<ul class="navbar-nav">
					
					<?php if(!$this->session->userdata('logged_in')) : ?>
					<li class="nav-item">
						<a class="nav-link navbar-light" href="<?php echo base_url(); ?>users/register">Register </a>
					</li>
					<li class="nav-item">
						<a class="nav-link navbar-light" href="<?php echo base_url(); ?>users/login">Login </a>
					</li>
					<?php endif; ?>
						<?php if($this->session->userdata('logged_in')) : ?>
							<li class="nav-item">
						<a class="nav-link navbar-light" href="<?php echo base_url(); ?>posts/create">Create Post</a>
					</li>
					<li class="nav-item">
						<a class="nav-link navbar-light" href="<?php echo base_url(); ?>categories/create">Create Category</a>
					</li>
					<li class="nav-item">
						<a class="nav-link navbar-light" href="<?php echo base_url(); ?>users/logout">Logout </a>
					</li>
					<?php endif; ?>
				</ul>
			</div>
	</nav>

	<div class="container">

		<!-- flash msg -->
		<?php if($this->session->flashdata('user_registered')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered'). '</p>'; ?>

		<?php endif; ?>


		<?php if($this->session->flashdata('post_created')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created'). '</p>'; ?>

		<?php endif; ?>

		<?php if($this->session->flashdata('post_updated')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated'). '</p>'; ?>

		<?php endif; ?>

		<?php if($this->session->flashdata('category_created')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created'). '</p>'; ?>

		<?php endif; ?>

		<?php if($this->session->flashdata('post_deleted')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted'). '</p>'; ?>

		<?php endif; ?>

		<?php if($this->session->flashdata('login_failed')): ?>
			<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed'). '</p>'; ?>

		<?php endif; ?>

		<?php if($this->session->flashdata('user_loggedin')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin'). '</p>'; ?>

		<?php endif; ?>

		<?php if($this->session->flashdata('logged_out')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('logged_out'). '</p>'; ?>

		<?php endif; ?>

		<?php if($this->session->flashdata('category_deleted')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_deleted'). '</p>'; ?>

		<?php endif; ?>