<?php include "../home/header.php"; ?>
<?php
include('../../core/conexion.php');
$dbconn = getConnection();
// cliente
$cliente =$_GET['cliente'];
$stmt = $dbconn->prepare('SELECT * FROM cliente WHERE id_cliente = :cliente');
$stmt->bindValue(":cliente", $cliente);
$stmt->execute();
$cliente = $stmt->fetch(PDO::FETCH_ASSOC);

if($cliente == FALSE){
    echo 'No hay registro de cliente con el número enviado.';
    exit();
}



?>
<div class="right_col" role="main" style="min-height: 821px">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x-panel"></div>
    </div>
    <!--end of modal-dialog-->
  </div>

  <div class="panel-heading"></div>

  <!--end of modal-->

  <div class="box-header">
    <h3 class="box-title">MODIFICAR CLIENTE</h3>
  </div>
  <!-- /.box-header -->
  <a class="btn btn-warning btn-print" href="" role="button">Regresar</a>

  <div class="box-body">

    <form id="form" class="form-horizontal">
      <div class="row">
      <input type="hidden" class="form-control pull-right" id="id" name="id"/>
        <div class="col-md-4 btn-print">
          <div class="form-group">
            <label for="date">Nombres </label>
          </div>
          <!-- /.form group -->
        </div>
        <div class="col-md-4 btn-print">
          <div class="form-group">
            <input type="text" class="form-control pull-right" id="nombre" name="nombre" placeholder="Nombre" />
          </div>
        </div>
        <div class="col-md-4 btn-print"></div>
      </div>

      <div class="row">
        <div class="col-md-4 btn-print">
          <div class="form-group">
            <label for="date">Apellidos </label>
          </div>
          <!-- /.form group -->
        </div>
        <div class="col-md-4 btn-print">
          <div class="form-group">
            <input type="text" class="form-control pull-right" id="apellido" name="apellido" placeholder="Apellido" />
          </div>
        </div>
        <div class="col-md-4 btn-print"></div>
      </div>
      <div class="row">
        <div class="col-md-4 btn-print">
          <div class="form-group">
            <label for="date">Ruc</label>
          </div>
          <!-- /.form group -->
        </div>
        <div class="col-md-4 btn-print">
          <div class="form-group">
            <input type="text" class="form-control pull-right" id="ruc" name="ruc" placeholder="RUC" />
          </div>
        </div>
        <div class="col-md-4 btn-print"></div>
      </div>

      <div class="row">
        <div class="col-md-4 btn-print">
          <div class="form-group">
            <label for="date">Cédula/Nro. Documento</label>
          </div>
          <!-- /.form group -->
        </div>
        <div class="col-md-4 btn-print">
          <div class="form-group">
            <input type="text" class="form-control pull-right" id="cedula" name="cedula" placeholder="Cédula/Nro. Documento" />
          </div>
        </div>
        <div class="col-md-4 btn-print"></div>
      </div>

      <div class="row">
        <div class="col-md-4 btn-print">
          <div class="form-group">
            <label for="date">Telefono</label>
          </div>
          <!-- /.form group -->
        </div>
        <div class="col-md-4 btn-print">
          <div class="form-group">
            <input type="text" class="form-control pull-right" id="telefono" name="telefono" placeholder="Telefono" />
          </div>
        </div>
        <div class="col-md-4 btn-print"></div>
      </div>
      <input type="hidden" name="accion" value="modificar">
      <button id="guardar" type="submit" class="btn btn-primary">Registrar</button>

      <div class="modal-footer"></div>
    </form>
  </div>
  <!-- /.box-body -->
</div>
<?php include "../home/footer.php"; ?>

<script>
  $(function() {

    $('#nombre').val('<?= $cliente['nombre']; ?>');
    $('#apellido').val('<?= $cliente['apellido']; ?>');
    $('#ruc').val('<?= $cliente['ruc']; ?>');
    $('#cedula').val('<?= $cliente['cedula']; ?>');
    $('#telefono').val('<?= $cliente['telefono']; ?>');
    $('#id').val('<?= $cliente['id_cliente']; ?>');




    $('#form').submit(function(e) {
      e.preventDefault();
      if ($('#nombre').val() == "" || $('#apellido').val() == "") {
        toastr.warning('Favor registrar un Nombre y Apellido para el cliente.');
      } else if ($('#ruc').val() == "") {
        toastr.warning('Favor registrar un RUC para el cliente.');
      } else if ($('#cedula').val() == "") {
        toastr.warning('Favor registrar un Nro. de Documento para el cliente.');
      } else if ($('#telefono').val() == "") {
        toastr.warning('Favor registrar un Telefono para el cliente.');
      } else {
        $('#guardar').attr("disabled", "disabled");
        $.ajax({
          url: '../../backend/cliente.php',
          method: 'POST',
          data: $('#form').serialize(),
          success: function(data) {
            try {
              response = JSON.parse(data);
              if (response.status == "success") {
                toastr.success(response.message);
                setTimeout(function() {
                  window.location.href = "index.php";
                }, 3000);
              } else if (response.status == "error" && response.message == "No autorizado") {
                toastr.error('Su sesión ha expirado, favor vuelva a iniciar sesión en el sistema.');
                setTimeout(function() {
                  window.location.href = "../../index";
                }, 2000);
              } else {
                toastr.error(response.message)
                $('#guardar').removeAttr("disabled");
              }
            } catch (error) {
              toastr.error('Ocurrio un error intentado resolver la solicitud. Por favor contacte con el administrador del sistema');
              console.log(error);

            }
          },
          error: function(error) {
            toastr.error('Ocurrio un error intentado resolver la solicitud. Por favor contacte con el administrador de la red')
            console.log(error);
          }
        });
      }
    });








  });
</script>