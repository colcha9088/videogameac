<div class="row">
  <div class="col-md-12 text-center well">

    <h3>ACTUALIZAR USUARIOS</h3>

  </div>
</div>

<div class="row">
<div class="col-md-12">
  <?php if ($usuarioEditar): ?>
  <!-- <?php print_r ($usuarioEditar);?> -->
  <form class="" action="<?php echo site_url("usuarios/procesarEditar") ?>" method="post" required>
    <center>
    <input type="hidden" name="id_usu" value="<?php echo $usuarioEditar->id_usu ?>">
    </center>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">CEDULA:</label>
      </div>
      <div class="col-md-7">
        <input type="number" class="form-control" name="cedula_usu" value="<?php echo $usuarioEditar->cedula_usu; ?>" placeholder="Ingresar el numero de cedula papu" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">APELLIDO:</label>
      </div>
      <div class="col-md-7">
        <input type="text" class="form-control" name="apellido_usu" value="<?php echo $usuarioEditar->apellido_usu ?>" placeholder="Ingresar su APELLIDO" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">NOMBRE:</label>
      </div>
      <div class="col-md-7">
        <input type="text" class="form-control" name="nombre_usu" value="<?php echo $usuarioEditar->nombre_usu ?>" placeholder="Ingresar el NOMBRE" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">TELEFONO:</label>
      </div>
      <div class="col-md-7">
        <input type="number" class="form-control" name="telefono_usu" value="<?php echo $usuarioEditar->telefono_usu ?>" placeholder="Ingresar el numero de TELEFONO" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">DIRECCION:</label>
      </div>
      <div class="col-md-7">
        <input type="text" class="form-control" name="direccion_usu" value="<?php echo $usuarioEditar->direccion_usu ?>" placeholder="Ingresar la DIRECCION" required>
      </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4 text-right">
          <label for="">CORREO ELECTRONICO:</label>
        </div>
        <div class="col-md-7">
          <input type="text" class="form-control" name="corre_electronico_usu" value="<?php echo $usuarioEditar->corre_electronico_usu ?>" placeholder="Ingresar el CORREO ELECTRONICO" required>
        </div>
      </div>
      <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">FECHA DE NACIMIENTO:</label>
      </div>
      <div class="col-md-7">
        <input type="date" class="form-control" name="fecha_nacimiento_usu" value="<?php echo $usuarioEditar->fecha_nacimiento_usu ?>" placeholder="Ingresar el FECHA DE NACIMIENTO" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-7">
        <button type="submit" name="button" class="btn btn-success">
          <i class="glyphicon glyphicon-ok"></i>
          Actualizar
        </button>
        <a href=" <?php echo site_url("usuarios/usuario") ?>" class="btn btn-warning ">
          <i class="glyphicon glyphicon-remove"></i>
          Regresar
        </a>
      </div>
    </div>
  </form>
  <?php  else: ?>
  <div class="alert alert-danger">
    <b>No se encontro al usuario</b>
  </div>
  <?php endif; ?>
</div>
</div>
