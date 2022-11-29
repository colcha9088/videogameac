<legend class="text-center">
  <i class="glyphicon glyphicon-user "></i><br>
  <b>Gestion de Usuarios</b><hr>
  <center>
    <a href=" <?php echo site_url("usuarios/nuevo_usuario") ?>" class="btn btn-success">
      <i class="glyphicon glyphicon-plus"></i>
      Agregar Nuevo
    </a>
  </center>
</legend>

<hr>
<br>
<br>

<?php if ($listadoUsuarios): ?>
  <table class="table table-stripe table-border table-hover">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">CEDULA</th>
        <th class="text-center">APELLIDO</th>
        <th class="text-center">NOMBRE</th>
        <th class="text-center">TELEFONO</th>
        <th class="text-center">DIRECCION</th>
        <th class="text-center">CORREO ELECTRONICO</th>
        <th class="text-center">FECHA DE NACIMIENTO</th>
        <th class="text-center">ACCCIONES</th>
      </tr>
    </thead>
    <tbody class="text-center">
      <?php foreach ($listadoUsuarios->result() as $usuarioTemporal): ?>
        <tr>
            <td class="tex-center">
              <?php echo $usuarioTemporal->id_usu; ?>
            </td>
            <td class="tex-center">
              <?php echo $usuarioTemporal->cedula_usu; ?>
            </td>
            <td class="tex-center">
              <?php echo $usuarioTemporal->apellido_usu; ?>
            </td>
            <td class="tex-center">
              <?php echo $usuarioTemporal->nombre_usu; ?>
            </td>
            <td class="tex-center">
              <?php echo $usuarioTemporal->telefono_usu; ?>
            </td>
            <td class="tex-center">
              <?php echo $usuarioTemporal->direccion_usu; ?>
            </td>
            <td class="tex-center">
              <?php echo $usuarioTemporal->corre_electronico_usu; ?>
            </td>
            <td class="tex-center">
              <?php echo $usuarioTemporal->fecha_nacimiento_usu; ?>
            </td>

            <td class="text-center">
            <a href="<?php echo site_url("usuarios/editar"); ?>/<?php echo $usuarioTemporal->id_usu; ?>"  class="btn btn-warning"  >
              <i class="glyphicon glyphicon-pencil">Editar</i>
              </a>
              <a href="<?php echo site_url("usuarios/borrar"); ?>/<?php echo $usuarioTemporal->id_usu; ?>" class="btn btn-danger " onclick="return confirm('¿Estas seguro de eliminar?);">
                <i class="glyphicon glyphicon-trash">Eliminar</i>
              </a>
            </td>

        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php else: ?>
  <h3><b>No existen usuarios</b></h3>
<?php endif; ?>
