<?php
session_start();
include('../core/conexion.php');
$dbconn = getConnection();

/*
* LOGIN
*/

// Check if the form was sent and the action is LOGIN
if (isset($_POST['accion']) and $_POST['accion'] == "ingresar") {
	$nick = $_POST['nick'];
	$password = sha1($_POST['password']);


	$sql = "SELECT u.id_usuario, u.nombre, u.apellido, u.nick, u.correo, u.id_rol, u.id_estado, r.descripcion AS rol, e.descripcion AS estado
	FROM usuario u INNER JOIN roles r ON u.id_rol= r.id_rol
	INNER JOIN estado e ON u.id_estado = e.id_estado WHERE u.nick = :nick AND u.password = :password";


	// prepare statement for search user
	$stmt = $dbconn->prepare($sql);
	// bind value to the :id parameter
	$stmt->bindValue(':nick', $nick);
	$stmt->bindValue(':password', $password);
	// execute the statement
	$stmt->execute();
	// return the result set as an object
	$user = $stmt->fetchObject();

	if ($user != FALSE) {	// Authorized access
		$_SESSION['id_usuario'] = $user->id_usuario;
        $_SESSION['nombre'] = $user->nombre;
        $_SESSION['apellido'] = $user->apellido;
        $_SESSION['nick'] = $user->nick;
        $_SESSION['correo'] = $user->correo;
        $_SESSION['id_rol'] = $user->id_rol;
        $_SESSION['rol'] = $user->rol;
        $_SESSION['id_estado'] = $user->id_estado;
        $_SESSION['estado'] = $user->estado;

        // extraer el primer nombre
		$nombre = explode(" ", $_SESSION['nombre']);
		$nombre = $nombre[0];

		// extraer el primer apellido
		$apellido = explode(" ", $_SESSION['apellido']);
		$apellido = $apellido[0];

		// extraer el primer nombre y apellido
		$_SESSION['nombres'] = $nombre . " " . $apellido;




		if ($_SESSION['id_estado'] == 1) {
			$response = array('status' => 'success');
		} else {
			$response = array('status' => 'desactivado');
		}
	} else // User not authorized
	{
		$response = array('status' => 'error');
	}
	print json_encode($response);
} else // FORM NOT SENT
{
	print json_encode(array("status" => "error", "message" => "Formulario no enviado"));
}