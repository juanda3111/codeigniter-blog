<html>
	<head>
		<title>ciBlog</title>
        <link rel="stylesheet" href="https://bootswatch.com/4/slate/bootstrap.min.css">
 			<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
 			<!--para el editor de texto ckeditor q uso en la pagina-->
			<script src="//cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
	<body>

<nav class="navbar navbar-inverse">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="/">ciBlog</a>			
		</div>
		<div id="navbar">
			<ul class="nav navbar ">
			<li><a href="<?php echo base_url(); ?>">Home &nbsp; </a></li>
            <li><a href="<?php echo base_url(); ?>about">Acerca &nbsp;</a></li>
            <li><a href="<?php echo base_url(); ?>posts">Blog &nbsp;</a></li>
			<li><a href="<?php echo base_url(); ?>categories">Categorias &nbsp;</a></li>
			
				<!--dejo esta monda aqui por q no supe como meterlo en el navbar-right de abajo sin q se putee-->
				<li><a href="<?php echo base_url(); ?>posts/create ">Crear Post &nbsp; </a></li> 
				<li><a href="<?php echo base_url(); ?>categories/create ">Crear Categorias &nbsp; </a></li> 
				<li><a href="<?php echo base_url(); ?>users/login ">iniciar sesión &nbsp;</a></li>
				<li><a href="<?php echo base_url(); ?>users/register ">registrarse &nbsp;</a></li> 
				 
			
				
			</ul>
				
				<ul class="nav navbar-nav navbar-right">
				
				</ul>

			
	
			
			

		</div>

	</div>
	
</nav>

<div class="container">

	<!--Mensaje de registro-->
	
  <?php if($this->session->flashdata('user_registered')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('post_created')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('post_updated')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('category_created')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('post_deleted')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('login_failed')): ?>
        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('user_loggedin')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
      <?php endif; ?>

       <?php if($this->session->flashdata('user_loggedout')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('category_deleted')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_deleted').'</p>'; ?>
<?php endif; ?>