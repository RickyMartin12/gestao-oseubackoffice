<?php
require_once '../connect.php';



switch ($_POST['action']){

case '1':

$id = $_POST['id'];

$date_array = explode('/',trim($_POST['data_agenda']));
$data = strtotime($date_array[2].'-'.$date_array[1].'-'.$date_array[0].'-00');

$obs_suporte = $_POST['obs_suporte'];

$estado = $_POST['estado'];

$telefone = $_POST['telefone'];

$cliente = $_POST['cliente'];

$sql =" UPDATE suporte SET proxima_data = $data, nome_pessoa = '$cliente', telefone = $telefone ,obs_suporte = '$obs_suporte' ,estado = '$estado' WHERE id = $id";

 $result = mysqli_query($conn,$sql);
  if ($result)
  echo 1;
else  
  echo 0;

break;

case '2':

$id = $_POST['id'];

$date_array = explode('/',trim($_POST['data_agenda']));
$data = strtotime($date_array[2].'-'.$date_array[1].'-'.$date_array[0].'-00');


$obter_comp="SELECT DISTINCT bugs.id, bugs.link, bugs.descricao, bugs.data_ins, bugs.estado from suporte, clientes_assistencia, bugs WHERE suporte.id_cliente_assistencia = clientes_assistencia.id AND bugs.cliente_id = clientes_assistencia.id AND suporte.id = $id AND bugs.data_ins = $data";
//$obter_comp="SELECT DISTINCT bugs.id, bugs.link, bugs.descricao from suporte, clientes_assistencia, bugs WHERE suporte.id_cliente_assistencia = clientes_assistencia.id AND bugs.cliente_id = clientes_assistencia.id AND suporte.proxima_data = $data AND suporte.id = $id";


$result = mysqli_query($conn, $obter_comp);
while($obj = mysqli_fetch_object($result)) {
$var[] = $obj;}
echo json_encode($var);


break;



}

mysqli_close($conn);


?>
