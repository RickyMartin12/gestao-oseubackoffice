<?php


require_once '../connect.php';

switch ($_POST['action']){



case '1':

$sql1 = "SELECT DISTINCT count(estado) as pendente FROM pedido, clientes_assistencia WHERE clientes_assistencia.id = pedido.cliente_id AND pedido.estado = 'Pendente'";

$result3 = mysqli_query($conn, $sql1);
if (mysqli_num_rows($result3) > 0) {
while($row = mysqli_fetch_assoc($result3)) 
                {
             		$arr1[] = array('pendente'=> $row['pendente']);
             	}
}

$sql2 = "SELECT DISTINCT count(estado) as analise FROM pedido, clientes_assistencia WHERE clientes_assistencia.id = pedido.cliente_id AND pedido.estado = 'Analise'";

$result4 = mysqli_query($conn, $sql2);
if (mysqli_num_rows($result4) > 0) {
while($row = mysqli_fetch_assoc($result4)) 
                {
             		$arr2[] = array('analise'=> $row['analise']);
             	}
}

$sql3 = "SELECT DISTINCT count(estado) as teste FROM pedido, clientes_assistencia WHERE clientes_assistencia.id = pedido.cliente_id AND pedido.estado = 'Teste'";

$result5 = mysqli_query($conn, $sql3);
if (mysqli_num_rows($result5) > 0) {
while($row = mysqli_fetch_assoc($result5)) 
                {
             		$arr3[] = array('teste'=> $row['teste']);
             	}
}

$sql4 = "SELECT DISTINCT count(estado) as concluido FROM pedido, clientes_assistencia WHERE clientes_assistencia.id = pedido.cliente_id AND pedido.estado = 'Concluido'";

$result6 = mysqli_query($conn, $sql4);
if (mysqli_num_rows($result6) > 0) {
while($row = mysqli_fetch_assoc($result6)) 
                {
             		$arr4[] = array('concluido'=> $row['concluido']);
             	}
}

$arr = array_merge($arr1, $arr2, $arr3, $arr4);

echo json_encode($arr);



break;


case '2':

$reg_del= "DELETE FROM pedido WHERE id ='{$_POST['id']}'";
$result = mysqli_query($conn,$reg_del);
if ($result){
  echo 2; 
}
else {
  echo 0;
}

break;


case '3':

$id = $_POST['id'];

$date_array = explode('/',trim($_POST['data_ins']));
$data = strtotime($date_array[2].'-'.$date_array[1].'-'.$date_array[0].'-00');

$link = $_POST['link'];

$descricao = $_POST['descricao'];

$estado = $_POST['estado'];

$username = $_POST['username'];

$sql1 = "SELECT id FROM admins WHERE nome='$username'";
$result1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_assoc($result1);


$id_username = $row1['id'];

$duracao = explode(':', $_POST['duracao']);

$time_duracao = ($duracao[0]*3600 * 1000) + ($duracao[1]*60 * 1000) + ($duracao[2] * 1000);

$tipo_prioridade_pedido = $_POST['tipo_prioridade_pedido'];



$sql =" UPDATE pedido SET data_ins = $data, link = '$link' ,descricao = '$descricao', estado = '$estado', duracao = $time_duracao, user_id = $id_username, tipo_priodade = '$tipo_prioridade_pedido' WHERE id = $id";

 $result = mysqli_query($conn,$sql);
  if ($result)
  echo 1;
else  
  echo 0;

break;


case '4':
    
$id = $_POST['id'];
    
$obter_comp="SELECT admins.nome FROM admins, pedido WHERE pedido.user_id = admins.id AND pedido.id = $id";

$result = mysqli_query($conn, $obter_comp);
while($obj = mysqli_fetch_object($result)) {
$var[] = $obj;}
echo json_encode($var);
break;

}






mysqli_close($conn);
?>


