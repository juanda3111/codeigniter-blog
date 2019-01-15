<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>

<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<h2> <?= $title; ?> </h2>
			<div class="form-group">
				<label>Nombre</label>
				<input type="text" class="form-control" name="name" placeholder="Nombre">
			</div>

			<div class="form-group">
				<label>Codigo Postal</label>
				<input type="text" class="form-control" name="zipcode" placeholder="Codigo Postal">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" name="email" placeholder="Email">
			</div>

			<div class="form-group">
				<label>Usuario</label>
				<input type="text" class="form-control" name="username" placeholder="Usuario">
			</div>
			<div class="form-group">
				<label>Contraseña</label>
				<input type="password" class="form-control" name="password" placeholder="Contraseña">
			</div>
			<div class="form-group">
				<label>Confirmar contraseña</label>
				<input type="password" class="form-control" name="password2" placeholder="Confirmar Contraseña">
			</div>
			<button type="submit" class="btn btn-primary btn-block">Agregar</button>
	</div>
</div>

<?php echo form_close(); ?>