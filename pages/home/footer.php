</div><!-- /.row -->
    </div><!-- /.box-body -->

    <!-- /page content -->
    <!-- footer content -->
    <footer>
        <div class="pull-right">
            Sistema de parqueo <a href="#"></a>
        </div>
        <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
    <script src="../../public/layout/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../public/layout/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../../public/layout/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../../public/layout/vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../../public/layout/vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../../public/layout/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../../public/layout/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../../public/layout/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../public/layout/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../../public/layout/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../../public/layout/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../../public/layout/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../../public/layout/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../../public/layout/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../../public/layout/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../public/layout/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../../public/layout/vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script src="../../public/layout/vendors/jszip/dist/jszip.min.js"></script>
    <script src="../../public/layout/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../../public/layout/vendors/pdfmake/build/vfs_fonts.js"></script>
    <!-- Toastr -->
    <script src="../../public/toastr/toastr.min.js"></script>
    <!-- SweetAlert -->
    <script src="../../public/js/sweetalert.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../../public/layout/build/js/custom.min.js"></script>
    <!-- Datatables -->
    <script>
        $(document).ready(function() {
            var handleDataTableButtons = function() {
                if ($("#datatable-buttons").length) {
                    $("#datatable-buttons").DataTable({
                        dom: "Bfrtip",
                        buttons: [{
                                extend: "copy",
                                className: "btn-sm"
                            },
                            {
                                extend: "csv",
                                className: "btn-sm"
                            },
                            {
                                extend: "excel",
                                className: "btn-sm"
                            },
                            {
                                extend: "pdfHtml5",
                                className: "btn-sm"
                            },
                            {
                                extend: "print",
                                className: "btn-sm"
                            },
                        ],
                        responsive: true
                    });
                }
            };

            TableManageButtons = function() {
                "use strict";
                return {
                    init: function() {
                        handleDataTableButtons();
                    }
                };
            }();

            $('#datatable').dataTable();

            $('#datatable-keytable').DataTable({
                keys: true
            });

            $('#datatable-responsive').DataTable();

            $('#datatable-scroller').DataTable({
                ajax: "js/datatables/json/scroller-demo.json",
                deferRender: true,
                scrollY: 380,
                scrollCollapse: true,
                scroller: true
            });

            $('#datatable-fixed-header').DataTable({
                fixedHeader: true
            });

            var $datatable = $('#datatable-checkbox');

            $datatable.dataTable({
                'order': [
                    [1, 'asc']
                ],
                'columnDefs': [{
                    orderable: false,
                    targets: [0]
                }]
            });
            $datatable.on('draw.dt', function() {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_flat-green'
                });
            });

            TableManageButtons.init();
        });
    </script>


   
    <!-- /gauge.js -->
</body>

</html>