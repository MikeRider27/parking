<?php include "../home/header.php"; ?>
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
            <h3 class="box-title"></h3>
          </div>
          <!-- /.box-header -->
          <a
            class="btn btn-success btn-print"
            href="https://programacionparacompartir.com/parking/pages/cliente/cliente.php"
            onclick="window.print()"
            ><i class="glyphicon glyphicon-print"></i> Impresión</a
          >
          <a
            class="btn btn-info btn-print"
            href="create.php"
           
            role="button"
            ><i class="glyphicon glyphicon-plus"></i>  Registrar</a
          >

          <div class="box-body">
            <!--end of modal-->

            <div class="box-header">
              <h3 class="box-title">Clientes Registrados</h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <div
                id="example2_wrapper"
                class="dataTables_wrapper form-inline dt-bootstrap no-footer"
              >

                <div class="row">
                  <div class="col-sm-12">
                    <table id="listado" class="table table-bordered table-striped dataTable no-footer">
                      <thead>
                        <tr role="row">
                          <th>#</th>
                          <th>Nombres</th>
                          <th>Apellidos</th>
                          <th>Telefono</th>
                          <th>Ruc</th>
                          <th>Cedula</th>
                          <th>Accion</th>
                        </tr>
                      </thead>
                    
                    </table>
                  </div>
                </div>
               
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.col -->
        </div>
<?php include "../home/footer.php"; ?>
<script>
  $(function() {


    function handleAjaxError(xhr, textStatus, error) {
      if (textStatus === "timeout") {
        toastr.warning('Ocurrió un error intentado comunicarse con el servidor. Por favor contacte con el administrador de la red.');      
        document.getElementById("listado_processing").style.display = "none";
      } else {
        toastr.warning('Ocurrió un error intentado comunicarse con el servidor. Por favor contacte con el administrador del sistema.');   
        document.getElementById("listado_processing").style.display = "none";
      }
    }
    var table = $('#listado').DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "ajax": {
        url: "../../backend/listados/cliente.php",
        timeout: 15000,
        error: handleAjaxError
      },
      "columns": [{
          "data": "id_cliente"
        }, // first column of table
        {
          "data": "nombre"
        }, // first column of table
        {
          "data": "apellido"
        },
        {
          "data": "telefono"
        },
        {
          "data": "ruc"
        },
        {
          "data": "cedula"
        },
        {
          "data": "id_cliente"
        } // last column of table
      ],
      "columnDefs": [{
        "render": function(number_row, type, row) {
          return '<button class="btn btn-warning btn-user" onclick="modificar(' + row.id_cliente + ');"> <i class="glyphicon glyphicon-edit"></i> </button>' + 
                '<button class="btn btn-danger btn-user" onclick="eliminar(' + row.id_cliente + ');"><i class="glyphicon glyphicon-trash"></i> </button>';
        },
        "orderable": false,
        "targets": 6 // columna modificar usuario
      }],
      "language": {
        "decimal": "",
        "emptyTable": "No hay registros en la tabla",
        "info": "Se muestran _START_ a _END_ de _TOTAL_ registros",
        "infoEmpty": "Se muestran 0 a 0 de 0 registros",
        "infoFiltered": "(filtrado de _MAX_ registros totales)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ registros",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Filtrar por (Nombre):",
        "zeroRecords": "No se encontraron registros que coincidan",
        "paginate": {
          "first": "Primero",
          "last": "Último",
          "next": "Siguiente",
          "previous": "Anterior"
        },
        "aria": {
          "sortAscending": ": activar para ordenar la columna ascendente",
          "sortDescending": ": activar para ordenar la columna descendente"
        }
      }
    });

    $('#form').submit(function(e) {
      e.preventDefault();
      if ($('#nombre').val() == "") {
        toastr.warning('Favor registrar una descripcion del cargo.');
      } else if ($('#id_categoria').val() == "") {
        toastr.warning('Favor registrar una categoria para el cargo.');
      } else {
        $('#guardar').attr("disabled", "disabled");
        $.ajax({
          url: '../../backend/cargos',
          method: 'POST',
          data: $('#form').serialize(),
          success: function(data) {
            try {
              response = JSON.parse(data);
              if (response.status == "success") {
                $('#modal-agregar').modal('hide');
                toastr.success(response.message);
                setTimeout(function() {
                  $('#nombre').val('');
                  $('#guardar').removeAttr("disabled");
                  table.ajax.reload();
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
    modificar = function(codigo, nombres, id) {
      $('#modal-editar').modal('toggle');
      $('#codigo').val(codigo);
      $('#nombres').val(nombres);    
      $('#id_categorias').val(id);
      $('#id_categorias').trigger('change');
    };

    $('#form_editar').submit(function(e) {
      e.preventDefault();
      if ($('#nombres').val() == "") {
        toastr.warning('Favor registrar una descripcion del cargo.');
      } else {
        $('#modificar').attr("disabled", "disabled");
        $.ajax({
          url: '../../backend/cargos',
          method: 'POST',
          data: $('#form_editar').serialize(),
          success: function(data) {
            try {
              response = JSON.parse(data);
              if (response.status == "success") {
                $('#modal-editar').modal('hide');
                toastr.success(response.message);
                setTimeout(function() {
                  table.ajax.reload();
                  $('#modificar').removeAttr("disabled");
                }, 3000);
              } else if (response.status == "error" && response.message == "No autorizado") {
                toastr.error('Su sesión ha expirado, favor vuelva a iniciar sesión en el sistema.');
                setTimeout(function() {
                  window.location.href = "../../index";
                }, 2000);
              } else {
                toastr.error(response.message)
                $('#modificar').removeAttr("disabled");
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

    eliminar = function(codigo) {
      swal({
        title: "Confirmar",
        text: "Está seguro que desea eliminar el registro?",
        type: "warning",
        confirmButtonText: "SI",
        confirmButtonColor: "#5cb85c",
        showCancelButton: true,
        cancelButtonText: "NO",
      }, function(isConfirm) {
        if (isConfirm) {
          $.ajax({
            url: '../../backend/cargos',
            method: 'POST',
            data: 'accion=eliminar&codigo=' + codigo,
            success: function(data) {
              try {
                response = JSON.parse(data);
                if (response.status == "success") {
                  toastr.success(response.message);
                  setTimeout(function() {
                    table.ajax.reload();
                  }, 3000);
                } else {
                  toastr.error(response.message);
                }
              } catch (error) {
                toastr.error('Ocurrio un error intentado resolver la solicitud. Por favor contacte con el administrador del sistema');
                console.log(error);
              }
            },
            error: function(data) {
              toastr.error('Ocurrio un error intentado resolver la solicitud. Por favor contacte con el administrador de la red')
              console.log(error);
            }
          });
        }
      });


    }



  });
</script>