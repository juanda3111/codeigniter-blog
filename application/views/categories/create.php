<h2>Categorias </h2>

<?php echo validation_errors();?> 

<?php echo form_open_multipart('categories/create');?> 
	<div class="form-group">
	<label>Nombre</label>	
	<input type="text" class="form-control" name="name" placeholder="Ingrese Nombre">
	</div>
	<button type="submit" class="btn btn-default"> Ingresar</button>

</form> 