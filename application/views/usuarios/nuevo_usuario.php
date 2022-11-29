<legend class="text-center">
  <i class="glyphicon glyphicon-plus-sign "></i><br>
  <b>Nuevo Usuario</b>
</legend>
<hr>
<form class="" action="<?php echo site_url("usuarios/guardarUsiarios") ?>" method="post" required>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">CEDULA:</label>
    </div>
    <div class="col-md-7">
      <input type="number" class="form-control" name="cedula_usu" value="" placeholder="Ingresar el numero de cedula" required>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">APELLIDO:</label>
    </div>
    <div class="col-md-7">
      <input type="text" class="form-control" name="apellido_usu" value="" placeholder="Ingresar su APELLIDO" required>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">NOMBRE:</label>
    </div>
    <div class="col-md-7">
      <input type="text" class="form-control" name="nombre_usu" value="" placeholder="Ingresar el NOMBRE" required>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">TELEFONO:</label>
    </div>
    <div class="col-md-7">
      <input type="number" class="form-control" name="telefono_usu" value="" placeholder="Ingresar el numero de TELEFONO" required>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">DIRECCION:</label>
    </div>
    <div class="col-md-7">
      <input type="text" class="form-control" name="direccion_usu" value="" placeholder="Ingresar la DIRECCION" required>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">CORREO ELECTRONICO:</label>
    </div>
    <div class="col-md-7">
      <input type="text" class="form-control" name="corre_electronico_usu" value="" placeholder="Ingresar la CORREO ELECTRONICO" required>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">FECHA DE NACIMIENTO:</label>
    </div>
    <div class="col-md-7">
      <input type="date" class="form-control" name="fecha_nacimiento_usu" value="" placeholder="Ingresar el FECHA DE NACIMIENTO" required>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-7">
      <button type="submit" name="button" class="btn btn-primary">
        <i class="glyphicon glyphicon-ok"></i>
        Ok
      </button>
      <a href=" <?php echo site_url("usuarios/usuario") ?>" class="btn btn-danger ">
        <i class="glyphicon glyphicon-remove"></i>
        Cancelar
      </a>
    </div>
  </div>
</form>
