<?php
session_start();
include('../core/conexion.php');
$dbconn = getConnection();

/*
* Add a new client
*/

// Check if user is logged
if ($_SESSION['id_usuario']) {

    // Check if the form was sent and the action is SAVE
    if (isset($_POST['accion']) and $_POST['accion'] == "agregar") {
        $result = 0;
        $nombres = trim($_POST['nombre']);
        $apellidos = trim($_POST['apellido']);
        $ruc = trim($_POST['ruc']);
        $cedula = trim($_POST['cedula']);
        $telefono = trim($_POST['telefono']);


        try {
            // start transaction
            $dbconn->beginTransaction();

            $stmt = $dbconn->prepare("SELECT cedula FROM cliente WHERE cedula = :cedula");
            $stmt->bindValue(':cedula', $cedula);
            $stmt->execute();
            $cliente = $stmt->fetch(PDO::FETCH_ASSOC);
            if (!empty($cliente['cedula'])) {
                $message = "Ya existe un cliente con el mismo Nro. de Documento.";
                $status = "error";
                print json_encode(array("status" => $status, "message" => $message));
                exit();
            }
            $sql = 'INSERT INTO cliente(nombre, apellido, cedula, ruc, telefono) VALUES (:nombres, :apellidos, :cedula, :ruc, :telefono)'; 
            $stmt = $dbconn->prepare($sql);
            $stmt->bindParam(':nombres', $nombres);
            $stmt->bindParam(':apellidos', $apellidos);
            $stmt->bindParam(':cedula', $cedula);
            $stmt->bindParam(':ruc', $ruc);
            $stmt->bindParam(':telefono', $telefono);
            $result = $stmt->execute();

            // commit transaction
            $dbconn->commit();

            $message = $result ? "El registo fue exitoso." : "Ocurrio un error intentado resolver la solicitud, " .
                "por favor complete todos los campos o recargue de vuelta la pagina";

            $status = $result ? "success" : "error";
            print json_encode(array("status" => $status, "message" => $message));
        } catch (Exception $e) {
            $result = FALSE;
            var_dump($e->getMessage());
        }
    } else if (isset($_POST['accion']) and $_POST['accion'] == "modificar") {
        $result = 0;
        $id = $_POST['id'];
        $nombres = trim($_POST['nombre']);
        $apellidos = trim($_POST['apellido']);
        $ruc = trim($_POST['ruc']);
        $cedula = trim($_POST['cedula']);
        $telefono = trim($_POST['telefono']);
        
        try {
            // start transaction
            $dbconn->beginTransaction();
            // update cliente
            $sql = 'UPDATE cliente SET nombre = :nombres, apellido = :apellidos, cedula = :cedula, ruc = :ruc, telefono = :telefono WHERE id_cliente = :id';
            $stmt = $dbconn->prepare($sql);
            $stmt->bindParam(':nombres', $nombres);
            $stmt->bindParam(':apellidos', $apellidos);
            $stmt->bindParam(':cedula', $cedula);
            $stmt->bindParam(':ruc', $ruc);
            $stmt->bindParam(':telefono', $telefono);
            $stmt->bindParam(':id', $id);
            $result = $stmt->execute();
            // commit transaction
            $dbconn->commit();
        } catch (Exception $e) {
            $result = FALSE;
            // rollback transaction
            $dbconn->rollBack();
            var_dump($e->getMessage());
        }

        $message = $result ? "Se actualizó correctamente el cliente" : "Ocurrio un error intentado resolver la solicitud, " .
            "por favor complete todos los campos o recargue de vuelta la pagina";

        $status = $result ? "success" : "error";
        print json_encode(array("status" => $status, "message" => $message));
    } else if (isset($_POST['accion']) and $_POST['accion'] == "eliminar") {
        $result = 0;
        $id = $_POST['id'];      
      
        try {
            // start transaction
            $dbconn->beginTransaction();
            // delete from cliente
            $sql = 'DELETE FROM cliente WHERE id_cliente = :id';
            $stmt = $dbconn->prepare($sql);
            $stmt->bindValue(':id', $id);
            $result = $stmt->execute();
            // commit transaction
            $dbconn->commit();
        } catch (Exception $e) {
            $result = FALSE;
            // rollback transaction
            $dbconn->rollBack();
            var_dump($e->getMessage());
        }

        $message = $result ? "Se eliminado correctamente el registro" : "Ocurrio un error intentado resolver la solicitud, " .
            "por favor complete todos los campos o recargue de vuelta la pagina";

        $status = $result ? "success" : "error";
        print json_encode(array("status" => $status, "message" => $message));
    } else // FORM NOT SENT
    {
        print json_encode(array("status" => "error", "message" => "Formulario no enviado"));
    }
} else // NOT LOGGED
{
    print json_encode(array("status" => "error", "message" => "No autorizado"));
}
