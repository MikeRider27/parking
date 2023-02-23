<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="public/js/jquery.min.js"></script>
    <title>Login - ParqueamientoSys</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="public/bootstrap/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <!-- Theme style -->
    <link rel="stylesheet" href="public/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="public/dist/css/skins/_all-skins.min.css">
    <title>Sistema de parqueamiento</title>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="sistema de parqueamiento, parqueo,codigo fuente parqueo, sistema de parqueamiento con codigo fuente" />
    <!-- /meta tags -->
    <!-- custom style sheet -->
    <link href="public/css/style.css" rel="stylesheet" type="text/css" />
    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    <link href="public/layout/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <!-- /fontawesome css -->
    <!-- google fonts-->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- /google fonts-->

</head>

<head>
    <script src="public/js/jquery.min.js"></script>
</head>

<body>
    <h1>Sistema de parqueamiento</h1>
    <div class=" w3l-login-form">
        <h2>Login </h2>
        <form id="login" class="user">
            <div class=" w3l-form-group">
                <label>Usuario:</label>
                <div class="group">
                <i class="glyphicon glyphicon-user"></i> 
                    <input type="text" class="form-control" placeholder="Usuario" name="nick" id="nick" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Password:</label>
                <div class="group">
                    <i class="glyphicon glyphicon-lock"></i>
                    <input type="password" class="form-control" placeholder="Password" name="password" id="password" required="required" />
                </div>
            </div>
            <div class="forgot">

            </div>
            <input type="hidden" name="accion" value="ingresar">
            <button id="ingresar" type="submit">Login</button>
        </form>
        <!--<p class=" w3l-register-p">Mas sistemas aqui<a href="https://ventadecodigofuente.com/" class="register"> mas Codigo fuente aqui</a></p>-->
    </div>
    <footer>

    </footer>



    <script src="public/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="public/bootstrap/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="public/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="public/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="public/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="public/dist/js/demo.js"></script>
    <script>
        $(document).ready(function() {

            $('#login').submit(function(e) {
                e.preventDefault();
                var t;
                $('#ingresar').attr("disabled", "disabled");
                loginRequest = $.ajax({
                    url: './backend/ingreso.php',
                    method: 'POST',
                    data: $('#login').serialize(),
                    success: function(data) {
                        try {
                            clearTimeout(t); // cancelamos el temporizador
                            response = JSON.parse(data);
                            if (response.status == "success") {
                                location.href = './pages/home/';
                            } else {
                                alert(response.message);
                               
                            }
                        } catch (error) {
                            swal("Advertencia", "Ocurrio un error intentado resolver la solicitud. Por favor contacte con el administrador del sistema", "warning");
                            console.log(error);
                        }
                    },
                    error: function(error) {
                        swal("Advertencia", "Ocurrio un error intentado comunicarse con el servidor. Por favor contacte con el administrador de la red", "warning");
                        console.log(error);
                    }
                });

                // Chequeamos el tiempo que tarda en resolverse la solicitud
                t = setTimeout(function() {
                    // Si la solicitud no fue resuelta en 10 segundos entonces la cancelamos
                    if (loginRequest.readyState != 4) {
                        loginRequest.abort();
                        swal("Advertencia", "Ocurrio un error intentado comunicarse con el servidor. Por favor contacte con el administrador de la red", "warning");
                        $('#ingresar').removeAttr("disabled");
                    }
                }, 10000);
            });

        });
    </script>
</body>

</html>