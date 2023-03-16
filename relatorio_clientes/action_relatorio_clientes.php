<?php




require_once '../connect.php';

switch ($_POST['action']){


// Graficos - Consulta

case '1':
    
 $clientes = $_POST['clientes'];  


$obter_comp = "SELECT DISTINCT count(bugs.link) as count_bugs FROM clientes_assistencia, bugs WHERE clientes_assistencia.cliente = '$clientes' AND bugs.estado != 'Concluido' AND bugs.cliente_id = clientes_assistencia.id";
$obter_comp2 = "SELECT DISTINCT count(sugestao.link) as count_sugestao FROM clientes_assistencia, sugestao WHERE clientes_assistencia.cliente = '$clientes' AND sugestao.estado != 'Concluido' AND sugestao.cliente_id = clientes_assistencia.id";
$obter_comp3 = "SELECT DISTINCT count(pedido.link) as count_pedido FROM clientes_assistencia, pedido WHERE clientes_assistencia.cliente = '$clientes' AND pedido.estado != 'Concluido' AND pedido.cliente_id = clientes_assistencia.id";

$obter_comp4 = "SELECT SUM(sugestao.duracao) as sum_sugestao FROM clientes_assistencia, sugestao WHERE clientes_assistencia.cliente = '$clientes' AND sugestao.cliente_id = clientes_assistencia.id";
$obter_comp5 = "SELECT SUM(bugs.duracao) as sum_bugs FROM clientes_assistencia, bugs WHERE clientes_assistencia.cliente = '$clientes'  AND bugs.cliente_id = clientes_assistencia.id";
$obter_comp6 = "SELECT SUM(pedido.duracao) as sum_pedido FROM clientes_assistencia, pedido WHERE clientes_assistencia.cliente = '$clientes' AND pedido.cliente_id = clientes_assistencia.id";
$obter_comp7 = "SELECT SUM(suporte.duracao) as sum_suporte FROM clientes_assistencia, suporte WHERE clientes_assistencia.cliente = '$clientes' AND suporte.id_cliente_assistencia = clientes_assistencia.id";

$result3 = mysqli_query($conn, $obter_comp);
if (mysqli_num_rows($result3) > 0) {
while($row = mysqli_fetch_assoc($result3)) 
                {
             		$arr3[] = array('count_bugs'=> $row['count_bugs']);
             	}
}

$result4 = mysqli_query($conn, $obter_comp2);
if (mysqli_num_rows($result4) > 0) {
while($row = mysqli_fetch_assoc($result4)) 
                {
             		$arr4[] = array('count_sugestao'=> $row['count_sugestao']);
             	}
}

$result5 = mysqli_query($conn, $obter_comp3);
if (mysqli_num_rows($result5) > 0) {
while($row = mysqli_fetch_assoc($result5)) 
                {
             		$arr5[] = array('count_pedido'=> $row['count_pedido']);
             	}
}


// Contar a Duração Total dos Valores

$result6 = mysqli_query($conn, $obter_comp4);
if (mysqli_num_rows($result6) > 0) {
while($row = mysqli_fetch_assoc($result6)) 
                {
             		$sum_sugestao = $row['sum_sugestao'];
             	}
}

$result7 = mysqli_query($conn, $obter_comp5);
if (mysqli_num_rows($result7) > 0) {
while($row = mysqli_fetch_assoc($result7)) 
                {
             		$sum_bugs = $row['sum_bugs'];
             	}
}


$result8 = mysqli_query($conn, $obter_comp6);
if (mysqli_num_rows($result8) > 0) {
while($row = mysqli_fetch_assoc($result8)) 
                {
             		$sum_pedido = $row['sum_pedido'];
             	}
}

$result9 = mysqli_query($conn, $obter_comp7);
if (mysqli_num_rows($result9) > 0) {
while($row = mysqli_fetch_assoc($result9)) 
                {
             		$sum_suporte = $row['sum_suporte'];
             	}
}



//$sum_total_duracao = $sum_sugestao + $sum_bugs + $sum_pedido + $sum_suporte;
$sum_total_duracao = $sum_suporte;

$arr2[] = array('duracao_total'=> $sum_total_duracao);



$arr = array_merge($arr2, $arr3, $arr4, $arr5);


echo json_encode($arr);
break;

case '2':
    
 $nif = $_POST['nif'];  
 
 
 


$obter_comp = "SELECT DISTINCT count(bugs.link) as count_bugs FROM clientes_assistencia, bugs WHERE clientes_assistencia.nif = $nif AND bugs.estado != 'Concluido' AND bugs.cliente_id = clientes_assistencia.id";
$obter_comp2 = "SELECT DISTINCT count(sugestao.link) as count_sugestao FROM clientes_assistencia, sugestao WHERE clientes_assistencia.nif = $nif AND sugestao.estado != 'Concluido' AND sugestao.cliente_id = clientes_assistencia.id";
$obter_comp3 = "SELECT DISTINCT count(pedido.link) as count_pedido FROM clientes_assistencia, pedido WHERE clientes_assistencia.nif = $nif AND pedido.estado != 'Concluido' AND pedido.cliente_id = clientes_assistencia.id";


$obter_comp4 = "SELECT SUM(sugestao.duracao) as sum_sugestao FROM clientes_assistencia, sugestao WHERE clientes_assistencia.nif = $nif AND sugestao.cliente_id = clientes_assistencia.id";
$obter_comp5 = "SELECT SUM(bugs.duracao) as sum_bugs FROM clientes_assistencia, bugs WHERE clientes_assistencia.nif = $nif AND bugs.cliente_id = clientes_assistencia.id";
$obter_comp6 = "SELECT SUM(pedido.duracao) as sum_pedido FROM clientes_assistencia, pedido WHERE clientes_assistencia.nif = $nif AND pedido.cliente_id = clientes_assistencia.id";
$obter_comp7 = "SELECT SUM(suporte.duracao) as sum_suporte FROM clientes_assistencia, suporte WHERE clientes_assistencia.nif = $nif AND suporte.id_cliente_assistencia = clientes_assistencia.id";



$result3 = mysqli_query($conn, $obter_comp);
if (mysqli_num_rows($result3) > 0) {
while($row = mysqli_fetch_assoc($result3)) 
                {
             		$arr3[] = array('count_bugs'=> $row['count_bugs']);
             	}
}

$result4 = mysqli_query($conn, $obter_comp2);
if (mysqli_num_rows($result4) > 0) {
while($row = mysqli_fetch_assoc($result4)) 
                {
             		$arr4[] = array('count_sugestao'=> $row['count_sugestao']);
             	}
}

$result5 = mysqli_query($conn, $obter_comp3);
if (mysqli_num_rows($result5) > 0) {
while($row = mysqli_fetch_assoc($result5)) 
                {
             		$arr5[] = array('count_pedido'=> $row['count_pedido']);
             	}
}

// Contar a Duração Total dos Valores

$result6 = mysqli_query($conn, $obter_comp4);
if (mysqli_num_rows($result6) > 0) {
while($row = mysqli_fetch_assoc($result6)) 
                {
             		$sum_sugestao = $row['sum_sugestao'];
             	}
}

$result7 = mysqli_query($conn, $obter_comp5);
if (mysqli_num_rows($result7) > 0) {
while($row = mysqli_fetch_assoc($result7)) 
                {
             		$sum_bugs = $row['sum_bugs'];
             	}
}


$result8 = mysqli_query($conn, $obter_comp6);
if (mysqli_num_rows($result8) > 0) {
while($row = mysqli_fetch_assoc($result8)) 
                {
             		$sum_pedido = $row['sum_pedido'];
             	}
}

$result9 = mysqli_query($conn, $obter_comp7);
if (mysqli_num_rows($result9) > 0) {
while($row = mysqli_fetch_assoc($result9)) 
                {
             		$sum_suporte = $row['sum_suporte'];
             	}
}



//$sum_total_duracao = $sum_sugestao + $sum_bugs + $sum_pedido + $sum_suporte;
$sum_total_duracao = $sum_suporte;

$arr2[] = array('duracao_total'=> $sum_total_duracao);



$arr = array_merge($arr2, $arr3, $arr4, $arr5);


echo json_encode($arr);
break;


case '3':
    
 $nif = $_POST['nif'];  
 $clientes = $_POST['clientes'];  

$obter_comp = "SELECT DISTINCT count(bugs.link) as count_bugs FROM clientes_assistencia, bugs WHERE clientes_assistencia.nif = $nif AND clientes_assistencia.cliente = '$clientes' AND bugs.estado != 'Concluido' AND bugs.cliente_id = clientes_assistencia.id";
$obter_comp2 = "SELECT DISTINCT count(sugestao.link) as count_sugestao FROM clientes_assistencia, sugestao WHERE clientes_assistencia.nif = $nif AND clientes_assistencia.cliente = '$clientes' AND sugestao.estado != 'Concluido' AND sugestao.cliente_id = clientes_assistencia.id";
$obter_comp3 = "SELECT DISTINCT count(pedido.link) as count_pedido FROM clientes_assistencia, pedido WHERE clientes_assistencia.nif = $nif AND clientes_assistencia.cliente = '$clientes' AND pedido.estado != 'Concluido' AND pedido.cliente_id = clientes_assistencia.id";

$obter_comp4 = "SELECT SUM(sugestao.duracao) as sum_sugestao FROM clientes_assistencia, sugestao WHERE clientes_assistencia.nif = $nif AND clientes_assistencia.cliente = '$clientes' AND sugestao.cliente_id = clientes_assistencia.id";
$obter_comp5 = "SELECT SUM(bugs.duracao) as sum_bugs FROM clientes_assistencia, bugs WHERE clientes_assistencia.nif = $nif AND clientes_assistencia.cliente = '$clientes'  AND bugs.cliente_id = clientes_assistencia.id";
$obter_comp6 = "SELECT SUM(pedido.duracao) as sum_pedido FROM clientes_assistencia, pedido WHERE clientes_assistencia.nif = $nif AND clientes_assistencia.cliente = '$clientes' AND pedido.cliente_id = clientes_assistencia.id";
$obter_comp7 = "SELECT SUM(suporte.duracao) as sum_suporte FROM clientes_assistencia, suporte WHERE clientes_assistencia.nif = $nif AND clientes_assistencia.cliente = '$clientes' AND suporte.id_cliente_assistencia = clientes_assistencia.id";


$result3 = mysqli_query($conn, $obter_comp);
if (mysqli_num_rows($result3) > 0) {
while($row = mysqli_fetch_assoc($result3)) 
                {
             		$arr3[] = array('count_bugs'=> $row['count_bugs']);
             	}
}

$result4 = mysqli_query($conn, $obter_comp2);
if (mysqli_num_rows($result4) > 0) {
while($row = mysqli_fetch_assoc($result4)) 
                {
             		$arr4[] = array('count_sugestao'=> $row['count_sugestao']);
             	}
}

$result5 = mysqli_query($conn, $obter_comp3);
if (mysqli_num_rows($result5) > 0) {
while($row = mysqli_fetch_assoc($result5)) 
                {
             		$arr5[] = array('count_pedido'=> $row['count_pedido']);
             	}
}

// Contar a Duração Total dos Valores

$result6 = mysqli_query($conn, $obter_comp4);
if (mysqli_num_rows($result6) > 0) {
while($row = mysqli_fetch_assoc($result6)) 
                {
             		$sum_sugestao = $row['sum_sugestao'];
             	}
}

$result7 = mysqli_query($conn, $obter_comp5);
if (mysqli_num_rows($result7) > 0) {
while($row = mysqli_fetch_assoc($result7)) 
                {
             		$sum_bugs = $row['sum_bugs'];
             	}
}


$result8 = mysqli_query($conn, $obter_comp6);
if (mysqli_num_rows($result8) > 0) {
while($row = mysqli_fetch_assoc($result8)) 
                {
             		$sum_pedido = $row['sum_pedido'];
             	}
}

$result9 = mysqli_query($conn, $obter_comp7);
if (mysqli_num_rows($result9) > 0) {
while($row = mysqli_fetch_assoc($result9)) 
                {
             		$sum_suporte = $row['sum_suporte'];
             	}
}



//$sum_total_duracao = $sum_sugestao + $sum_bugs + $sum_pedido + $sum_suporte;
$sum_total_duracao = $sum_suporte;

$arr2[] = array('duracao_total'=> $sum_total_duracao);

$arr = array_merge($arr2, $arr3, $arr4, $arr5);


echo json_encode($arr);
break;


//------------------------------------------------------------------------------------------


// Edição de Datatables da Assistencia do Suporte de Clientes

case '4':
    
    $id = $_POST['id'];

$date_array = explode('/',trim($_POST['data_suporte']));
$data = strtotime($date_array[2].'-'.$date_array[1].'-'.$date_array[0].'-00');

$ass_tecnica = $_POST['ass_tecnica'];

$obs_assitencia = $_POST['obs_assitencia'];

$duracao = explode(':', $_POST['duracao']);

$time_duracao = ($duracao[0]*3600 * 1000) + ($duracao[1]*60 * 1000) + ($duracao[2] * 1000);

$nome_operador = $_POST['nome_operador'];

$solucao_problema = $_POST['solucao_problema'];

$date_array2 = explode('/',trim($_POST['proxima_data']));
$data1 = strtotime($date_array2[2].'-'.$date_array2[1].'-'.$date_array2[0].'-00');

$nome_pessoa = $_POST['nome_pessoa'];

$telefone = $_POST['telefone'];

$obs_suporte = $_POST['obs_suporte'];

$estado = $_POST['estado'];

$username = $_POST['username'];

$sql1 = "SELECT id FROM admins WHERE nome='$username'";
$result1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_assoc($result1);


$id_username = $row1['id'];



$sql ="UPDATE suporte SET data_hora_suporte = $data, assistencia_nome = '$ass_tecnica' ,assistencia_obs = '$obs_assitencia', duracao = $time_duracao, nome_operador = '$nome_operador', solucao_problema = '$solucao_problema', proxima_data = $data1, nome_pessoa = '$nome_pessoa', telefone = $telefone, obs_suporte = '$obs_suporte', estado = '$estado', user_id = $id_username  WHERE id = $id";

 $result = mysqli_query($conn,$sql);
  if ($result)
  echo 1;
else  
  echo 0;
    
break;

// Apagar campos de Assistencia do Suporte de Clientes

case '5':
    
$reg_del= "DELETE FROM suporte WHERE id ='{$_POST['id']}'";
$result = mysqli_query($conn,$reg_del);
if ($result){
  echo 2; 
}
else {
  echo 0;
}

    
break;

case '6':
    
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

$tipo_prioridade_bug = $_POST['tipo_prioridade_bug'];



$sql =" UPDATE bugs SET data_ins = $data, link = '$link' ,descricao = '$descricao', estado = '$estado', user_id = $id_username, duracao = $time_duracao, tipo_priodade = '$tipo_prioridade_bug' WHERE id = $id";

 $result = mysqli_query($conn,$sql);
  if ($result)
  echo 1;
else  
  echo 0;
    
break;

// Apagar campos de Assistencia do Suporte dos Bugs


case '7':
    
$reg_del= "DELETE FROM bugs WHERE id ='{$_POST['id']}'";
$result = mysqli_query($conn,$reg_del);
if ($result){
  echo 2; 
}
else {
  echo 0;
}

    
break;


// Edicao de Sugestao de Assistencia


case '8':
    
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

$tipo_prioridade_sugestao = $_POST['tipo_prioridade_sugestao'];

$sql =" UPDATE sugestao SET data_ins = $data, link = '$link' ,descricao = '$descricao', estado = '$estado', user_id = $id_username, duracao = $time_duracao, tipo_priodade = '$tipo_prioridade_sugestao' WHERE id = $id";

 $result = mysqli_query($conn,$sql);
  if ($result)
  echo 1;
else  
  echo 0;    
    
break;




// Apagar campos de Assistencia do Suporte das Sugestões


case '9':
    
$reg_del= "DELETE FROM sugestao WHERE id ='{$_POST['id']}'";
$result = mysqli_query($conn,$reg_del);
if ($result){
  echo 2; 
}
else {
  echo 0;
}

    
break;

// Edicao de Pedido de Orcamentos de Assistencia

case '10':
    
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



$sql =" UPDATE pedido SET data_ins = $data, link = '$link' ,descricao = '$descricao', estado = '$estado', duracao = $time_duracao, tipo_priodade = '$tipo_prioridade_pedido', user_id = $id_username WHERE id = $id";

 $result = mysqli_query($conn,$sql);
  if ($result)
  echo 1;
else  
  echo 0;

break;

    
break;




// Apagar campos de Assistencia do Suporte dos Pedidos de Orcamento


case '11':
    
$reg_del= "DELETE FROM pedido WHERE id ='{$_POST['id']}'";
$result = mysqli_query($conn,$reg_del);
if ($result){
  echo 2; 
}
else {
  echo 0;
}

    
break;


}






mysqli_close($conn);
?>


