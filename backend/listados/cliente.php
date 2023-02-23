<?php
session_start();
include('../../core/conexion.php');
$dbconn = getConnection();

/*
* List users
*/

// Check if user is logged
if($_SESSION['id_usuario']){

  /****** BEGIN - VARIABLES DEFINITION ******/
  $request = $_REQUEST;
  $recordsTotal = 0;
  $recordsFiltered = 0;
  $column = array(); // array de columnas de la tabla
  $column[0] = "id_cliente";
  $column[1] = "nombre";
  /****** FINISH - VARIABLES DEFINITION ******/

  /****** BEGIN - FOR PAGINATION ******/
  // GET TOTAL


    $sql_total = "SELECT count(*) as total FROM cliente WHERE 1=1";


 
  if(!empty($request['search']['value'])){
    $sql_total .= " AND (id_cliente::text LIKE '".$request['search']['value']."%' OR
                lower(nombre) LIKE '".strtolower($request['search']['value'])."%' OR
                lower(apellido) LIKE '".strtolower($request['search']['value'])."%' OR
                lower(cedula) LIKE '".strtolower($request['search']['value'])."%' OR
                lower(ruc) LIKE '".strtolower($request['search']['value'])."%')";
  }
  $query_total = $dbconn->query($sql_total);
  $result_total = $query_total->fetch(PDO::FETCH_ASSOC);
  $recordsTotal = $result_total['total'];
  $recordsFiltered = $recordsTotal;
  /****** FINISH - FOR PAGINATION ******/

  /****** BEGIN - TABLE RECORDS AND FILTERING ******/
    $sql = 'SELECT id_cliente, nombre, apellido, cedula, ruc, telefono FROM cliente WHERE 1=1'; 


 
 
  
  // SEARCH
  if(!empty($request['search']['value'])){
    $sql .= " AND (id_cliente::text LIKE '".$request['search']['value']."%' OR
            lower(nombre) LIKE '".strtolower($request['search']['value'])."%' OR
            lower(apellido) LIKE '".strtolower($request['search']['value'])."%' OR
            lower(cedula) LIKE '".strtolower($request['search']['value'])."%' OR
            lower(ruc) LIKE '".strtolower($request['search']['value'])."%')";
  }
  // ORDER
  if(isset($request['order'][0]['column'])){
    $sql .= " ORDER BY ".$column[$request['order'][0]['column']]." ".$request['order'][0]['dir'];
  }
  // LIMIT
  if(isset($request['start'])){
    $sql .= " LIMIT ".$request['length']." OFFSET ".$request['start'];
  }
  // EXECUTE QUERY
  $stmt = $dbconn->query($sql);
  $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $data = array();
  /****** FINISH - TABLE RECORDS AND FILTERING ******/
  
  if($clientes == FALSE)
  {
    // RESULT FALSE
    $result = FALSE;
  }
  else
  {
    // RESULT TRUE
    $result = TRUE;
    foreach ($clientes as $cliente) {
        // SETTING UP COLUMNS FOR TABLE
        $row = array();

        $row['id_cliente'] = $cliente['id_cliente'];
        $row['nombre'] = $cliente['nombre'];
        $row['apellido'] = $cliente['apellido'];
        $row['cedula'] = $cliente['cedula'];
        $row['ruc'] = $cliente['ruc'];
        $row['telefono'] = $cliente['telefono'];
        array_push($data, $row);
    }
  }

  // RESULT MESSAGE
  $message = $result ? "success" : "Ocurrio un error intentado resolver la solicitud, por favor complete todos los campos o recargue de vuelta la pagina";
  $status = $result ? "success" : "error";
  echo json_encode(
    array(
      "status" => $status,
      "message" => $message,
      //"draw" => intval($request['draw']),
      "recordsTotal" => $recordsTotal,
      "recordsFiltered" => $recordsFiltered,
      "data" => $data)
  );

}
else // NOT LOGGED
{
	print json_encode(array("status" => "error", "message" => "No autorizado"));
}

?>