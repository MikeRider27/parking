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
            class="btn btn-warning btn-print"
            href="https://programacionparacompartir.com/parking/pages/cliente/cliente_agregar.php"
           
            role="button"
            >REGISTRAR</a
          >

          <div class="box-body">
            <!--end of modal-->

            <div class="box-header">
              <h3 class="box-title">Vehiculos registrados</h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <div
                id="example2_wrapper"
                class="dataTables_wrapper form-inline dt-bootstrap no-footer"
              >
                <div class="row">
                  <div class="col-sm-6">
                    <div class="dataTables_length" id="example2_length">
                      <label
                        >Show
                        <select
                          name="example2_length"
                          aria-controls="example2"
                          class="form-control input-sm"
                        >
                          <option value="10">10</option>
                          <option value="25">25</option>
                          <option value="50">50</option>
                          <option value="-1">All</option>
                        </select>
                        entries</label
                      >
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div id="example2_filter" class="dataTables_filter">
                      <label
                        >Buscar:<input
                          type="search"
                          class="form-control input-sm"
                          placeholder=""
                          aria-controls="example2"
                      /></label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <table
                      id="example2"
                      class="table table-bordered table-striped dataTable no-footer"
                      role="grid"
                      aria-describedby="example2_info"
                    >
                      <thead>
                        <tr role="row">
                          <th
                            class="sorting_asc"
                            tabindex="0"
                            aria-controls="example2"
                            rowspan="1"
                            colspan="1"
                            aria-sort="ascending"
                            aria-label="#: activate to sort column descending"
                            style="width: 48px"
                          >
                            #
                          </th>
                          <th
                            class="sorting"
                            tabindex="0"
                            aria-controls="example2"
                            rowspan="1"
                            colspan="1"
                            aria-label="Nombres: activate to sort column ascending"
                            style="width: 139px"
                          >
                            Nombres
                          </th>
                          <th
                            class="sorting"
                            tabindex="0"
                            aria-controls="example2"
                            rowspan="1"
                            colspan="1"
                            aria-label="Apellidos: activate to sort column ascending"
                            style="width: 143px"
                          >
                            Apellidos
                          </th>
                          <th
                            class="sorting"
                            tabindex="0"
                            aria-controls="example2"
                            rowspan="1"
                            colspan="1"
                            aria-label="Telefono: activate to sort column ascending"
                            style="width: 133px"
                          >
                            Telefono
                          </th>
                          <th
                            class="sorting"
                            tabindex="0"
                            aria-controls="example2"
                            rowspan="1"
                            colspan="1"
                            aria-label="Ruc: activate to sort column ascending"
                            style="width: 129px"
                          >
                            Ruc
                          </th>
                          <th
                            class="sorting"
                            tabindex="0"
                            aria-controls="example2"
                            rowspan="1"
                            colspan="1"
                            aria-label="DNI: activate to sort column ascending"
                            style="width: 88px"
                          >
                            DNI
                          </th>
                          <th
                            class="btn-print sorting"
                            tabindex="0"
                            aria-controls="example2"
                            rowspan="1"
                            colspan="1"
                            aria-label=" Accion : activate to sort column ascending"
                            style="width: 314px"
                          >
                            Accion
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <!--end of modal-->

                        <tr role="row" class="odd">
                          <td class="sorting_1">1</td>

                          <td>Consumidor</td>
                          <td>Final</td>
                          <td>12345678</td>
                          <td>11111111222</td>
                          <td>11111111</td>

                          <td>
                            <a
                              class="btn btn-success btn-print"
                              href="https://programacionparacompartir.com/parking/pages/cliente/modificar_cliente.php?id_cliente=1"
                              role="button"
                              >Modificar</a
                            >
                            <a
                              class="btn btn-danger btn-print"
                              href="https://programacionparacompartir.com/parking/pages/cliente/eliminar_cliente.php?id_cliente=1"
                              role="button"
                              >Eliminar</a
                            >
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-5">
                    <div
                      class="dataTables_info"
                      id="example2_info"
                      role="status"
                      aria-live="polite"
                    >
                      Showing 1 to 1 of 1 entries
                    </div>
                  </div>
                  <div class="col-sm-7">
                    <div
                      class="dataTables_paginate paging_simple_numbers"
                      id="example2_paginate"
                    >
                      <ul class="pagination">
                        <li
                          class="paginate_button previous disabled"
                          id="example2_previous"
                        >
                          <a
                            href="https://programacionparacompartir.com/parking/pages/cliente/cliente.php#"
                            aria-controls="example2"
                            data-dt-idx="0"
                            tabindex="0"
                            >anterior</a
                          >
                        </li>
                        <li class="paginate_button active">
                          <a
                            href="https://programacionparacompartir.com/parking/pages/cliente/cliente.php#"
                            aria-controls="example2"
                            data-dt-idx="1"
                            tabindex="0"
                            >1</a
                          >
                        </li>
                        <li
                          class="paginate_button next disabled"
                          id="example2_next"
                        >
                          <a
                            href="https://programacionparacompartir.com/parking/pages/cliente/cliente.php#"
                            aria-controls="example2"
                            data-dt-idx="2"
                            tabindex="0"
                            >posterior</a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.col -->
        </div>
<?php include "../home/footer.php"; ?>