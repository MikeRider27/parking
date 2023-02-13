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
        <h3 class="box-title">REGISTRAR CLIENTE</h3>
    </div>
    <!-- /.box-header -->
    <a class="btn btn-warning btn-print" href="https://programacionparacompartir.com/parking/pages/cliente/cliente.php" role="button">Regresar</a>

    <div class="box-body">
        <form id="form">
            <div class="row">
                <div class="col-md-3 btn-print">
                    <div class="form-group">
                        <label for="date">Nombres </label>
                    </div>
                    <!-- /.form group -->
                </div>
                <div class="col-md-4 btn-print">
                    <div class="form-group">
                        <input type="text" class="form-control pull-right" id="nombre" name="nombre" required="" placeholder="Nombre"/>
                    </div>
                </div>
                <div class="col-md-4 btn-print"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3 btn-print">
                    <div class="form-group">
                        <label for="date">Apellidos </label>
                    </div>
                    <!-- /.form group -->
                </div>
                <div class="col-md-4 btn-print">
                    <div class="form-group">
                        <input type="text" class="form-control pull-right" id="apellido" name="apellido" required="" placeholder="Apellido"/>
                    </div>
                </div>
                <div class="col-md-4 btn-print"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3 btn-print">
                    <div class="form-group">
                        <label for="date">Ruc</label>
                    </div>
                    <!-- /.form group -->
                </div>
                <div class="col-md-4 btn-print">
                    <div class="form-group">
                        <input type="text" class="form-control pull-right" id="ruc" name="ruc" placeholder="RUC"/>
                    </div>
                </div>
                <div class="col-md-4 btn-print"></div>
            </div>

            <div class="row">
                <div class="col-md-3 btn-print">
                    <div class="form-group">
                        <label for="date">Cédula/Nro. Documento</label>
                    </div>
                    <!-- /.form group -->
                </div>
                <div class="col-md-4 btn-print">
                    <div class="form-group">
                        <input type="text" class="form-control pull-right" id="cedula" name="cedula" placeholder="Cédula/Nro. Documento"/>
                    </div>
                </div>
                <div class="col-md-4 btn-print"></div>
            </div>

            <div class="row">
                <div class="col-md-3 btn-print">
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
            <input type="hidden" name="accion" value="agregar">
            <button id="guardar" type="submit" class="btn btn-primary">Registrar</button>

            <div class="modal-footer"></div>
        </form>
    </div>
    <!-- /.box-body -->
</div>
<?php include "../home/footer.php"; ?>