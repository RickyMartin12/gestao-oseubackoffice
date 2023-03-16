<?php
require_once '../connect.php';



switch ($_POST['action']){

  // Pesquisa do NIF

  case '1':

    
    // NIF

    $nif = $_POST['nif'];
        
     
      $obter_clientes=" SELECT * FROM clientes_assistencia WHERE nif = $nif LIMIT 1";
        $result = mysqli_query($conn, $obter_clientes);
        while($obj = mysqli_fetch_object($result)) 
        {
          $var[] = $obj;
        }
        echo json_encode($var);
  

break;

// Actualização do Perfil do Cliente

case '2':

$nif = $_POST['nif'];

$perfil = $_POST['perfil'];

$sql =" UPDATE clientes_assistencia SET perfil = '$perfil' WHERE nif = $nif";

 $result = mysqli_query($conn,$sql);
  if ($result)
  echo 1;
else  
  echo 0;

break;


// Adicionar Bug no Sistema de Suporte

/*GRAVAR NOVO REGISTO*/
  case '3':

    /*GRAVAR NOVO UTILIZADOR*/

    $err='';


    // Link do Bug

    if (!$_POST['bugs_link'])
      $err .= "- Link do Bug <span class='w3-text-red'> *</span><br>";
    else{
      $bugs_link = $_POST['bugs_link'];
    }
    
    // estado
    
    

    

    $bugs_descricao = $_POST['bugs_descricao'];

    $referencia = $_POST['referencia'];

    $date_hour_array=explode(' ',trim($_POST['data_hora_suporte']));
    $date_array = explode('/', $date_hour_array[0]);

    $date_actual=strtotime($date_array[2].'-'.$date_array[1].'-'.$date_array[0].'-00');
    
    $cliente_id = $_POST['cliente_id'];
    
    $duracao = explode(':', $_POST['duracao']);

    $time_duracao = ($duracao[0]*3600 * 1000) + ($duracao[1]*60 * 1000) + ($duracao[2] * 1000);
    
    
    $username = $_POST['username'];

    $sql1 = "SELECT id FROM admins WHERE nome='$username'";
    $result1 = mysqli_query($conn,$sql1);
    $row1 = mysqli_fetch_assoc($result1);
    
    
    $id_username = $row1['id'];
    
    if (!$_POST['tipo_prioridade_bug'])
      $err .= "- Tipo de Priodade de Bugs <span class='w3-text-red'> *</span><br>";
    else{
      $tipo_prioridade_bugs = $_POST['tipo_prioridade_bug'];
    }
    
    


if (!$err) 
{

    $sql =" INSERT INTO bugs (link,descricao,referencia,data_ins,cliente_id,estado, duracao, user_id, tipo_priodade) VALUES ('$bugs_link','$username - $bugs_descricao\n','$referencia',$date_actual,$cliente_id,'Pendente',$time_duracao,$id_username,'$tipo_prioridade_bugs')";

    $result = mysqli_query($conn,$sql);
      if ($result) {
        $response = 1; 
        $last_id = mysqli_insert_id($conn);
      }  
      else {
        $response = 0;
        $last_id = 0; 
      }

      $r=array('error'=>'','success' => $response,'id' => $last_id);
      echo json_encode($r);
     }
     else{
      $r = array('error' =>$err, 'success' =>'','id' =>'');
      echo json_encode($r);
    }

break;


// Obter os valores dos bugs nos sistemas de suporte

case '4':


      $cliente_id = $_POST['cliente_id'];
            
      
    
      $obter_clientes=" SELECT * FROM bugs WHERE cliente_id = $cliente_id ORDER BY data_ins DESC";
        $result = mysqli_query($conn, $obter_clientes);
        while($obj = mysqli_fetch_object($result)) 
        {
          $var[] = $obj;
        }
        echo json_encode($var);

break;

// Adicionar uma nova sugestão ao sistema de suporte

case '5':

    /*GRAVAR NOVO UTILIZADOR*/

    $err='';

    if (!$_POST['link_sugestao'])
      $err .= "- Link de Sugestão <span class='w3-text-red'> *</span><br>";
    else{
      $link_sugestao = $_POST['link_sugestao'];
    }

    

    $descricao_sugestao = $_POST['descricao_sugestao'];

    $referencia = $_POST['referencia'];
    
    $date_hour_array=explode(' ',trim($_POST['data_hora_suporte']));
    $date_array = explode('/', $date_hour_array[0]);

    $date_actual=strtotime($date_array[2].'-'.$date_array[1].'-'.$date_array[0].'-00');
    
    $cliente_id = $_POST['cliente_id'];
    
    $username = $_POST['username'];

    $sql1 = "SELECT id FROM admins WHERE nome='$username'";
    $result1 = mysqli_query($conn,$sql1);
    $row1 = mysqli_fetch_assoc($result1);
    
    
    $id_username = $row1['id'];
    
    $duracao = explode(':', $_POST['duracao']);

    $time_duracao = ($duracao[0]*3600 * 1000) + ($duracao[1]*60 * 1000) + ($duracao[2] * 1000);
    
    if (!$_POST['tipo_prioridade_sugestao'])
      $err .= "- Tipo de Priodade de Sugestão <span class='w3-text-red'> *</span><br>";
    else{
      $tipo_prioridade_sugestao = $_POST['tipo_prioridade_sugestao'];
    }


if (!$err) 
{

    $sql =" INSERT INTO sugestao (link,descricao,referencia,data_ins,cliente_id,estado,duracao,user_id,tipo_priodade) VALUES ('$link_sugestao','$username - $descricao_sugestao\n','$referencia',$date_actual,$cliente_id,'Pendente',$time_duracao,$id_username,'$tipo_prioridade_sugestao')";

    $result = mysqli_query($conn,$sql);
      if ($result) {
        $response = 1; 
        $last_id = mysqli_insert_id($conn);
      }  
      else {
        $response = 0;
        $last_id = 0; 
      }

      $r=array('error'=>'','success' => $response,'id' => $last_id);
      echo json_encode($r);
     }
     else{
      $r = array('error' =>$err, 'success' =>'','id' =>'');
      echo json_encode($r);
    }

break;

// Obter os valores das sugestões de suporte por referencia 

case '6':


      $cliente_id = $_POST['cliente_id'];
            
      
    
      $obter_clientes=" SELECT * FROM sugestao WHERE cliente_id = $cliente_id ORDER BY data_ins DESC";
      
        $result = mysqli_query($conn, $obter_clientes);
        while($obj = mysqli_fetch_object($result)) 
        {
          $var[] = $obj;
        }
        echo json_encode($var);

break;


// Adicionar um novo pedido de orcamento de sugestão ao sistema de suporte

case '7':

    /*GRAVAR NOVO UTILIZADOR*/

    $err='';

    if (!$_POST['link_pedido'])
      $err .= "- Link do Pedido de Orcamento <span class='w3-text-red'> *</span><br>";
    else{
      $link_pedido = $_POST['link_pedido'];
    }

    

    $descricao_pedido = $_POST['descricao_pedido'];

    $referencia = $_POST['referencia'];
    
    $date_hour_array=explode(' ',trim($_POST['data_hora_suporte']));
    $date_array = explode('/', $date_hour_array[0]);

    $date_actual=strtotime($date_array[2].'-'.$date_array[1].'-'.$date_array[0].'-00');
    
    $cliente_id = $_POST['cliente_id'];
    
    
    $username = $_POST['username'];

    $sql1 = "SELECT id FROM admins WHERE nome='$username'";
    $result1 = mysqli_query($conn,$sql1);
    $row1 = mysqli_fetch_assoc($result1);
    
    
    $id_username = $row1['id'];
    
    $duracao = explode(':', $_POST['duracao']);

    $time_duracao = ($duracao[0]*3600 * 1000) + ($duracao[1]*60 * 1000) + ($duracao[2] * 1000);
    
    if (!$_POST['tipo_prioridade_pedido'])
      $err .= "- Tipo de Priodade do Pedido de Orcamento <span class='w3-text-red'> *</span><br>";
    else{
      $tipo_prioridade_pedido = $_POST['tipo_prioridade_pedido'];
    }


if (!$err) 
{

    $sql =" INSERT INTO pedido (link,descricao,referencia,data_ins,cliente_id,estado,duracao,user_id, tipo_priodade) VALUES ('$link_pedido','$username - $descricao_pedido\n','$referencia',$date_actual,$cliente_id, 'Pendente',$time_duracao,$id_username,'$tipo_prioridade_pedido')";

    $result = mysqli_query($conn,$sql);
      if ($result) {
        $response = 1; 
        $last_id = mysqli_insert_id($conn);
      }  
      else {
        $response = 0;
        $last_id = 0; 
      }

      $r=array('error'=>'','success' => $response,'id' => $last_id);
      echo json_encode($r);
     }
     else{
      $r = array('error' =>$err, 'success' =>'','id' =>'');
      echo json_encode($r);
    }

break;

// Obter os valores de pedido de orcamento de suporte por referencia 

case '8':


      $cliente_id = $_POST['cliente_id'];
            
      
    
      $obter_clientes=" SELECT * FROM pedido WHERE cliente_id = $cliente_id ORDER BY data_ins DESC";
        $result = mysqli_query($conn, $obter_clientes);
        while($obj = mysqli_fetch_object($result)) 
        {
          $var[] = $obj;
        }
        echo json_encode($var);

break;




// Adição de um novo suporte


case '9':

$err='';

// Data e Hora Actual

$date_hour_array=explode(' ',trim($_POST['data_hora_suporte']));
$date_array = explode('/', $date_hour_array[0]);

$date_valor=strtotime($date_array[2].'-'.$date_array[1].'-'.$date_array[0].'-00');


// Nome de Assistencia do Suporte

if (!$_POST['assistencia'])
{
  $err .= "- Nome de Assistencia do Suporte <span class='w3-text-red'> *</span><br>";

}
else
{
  $assistencia = $_POST['assistencia'];
}


// Observacoes da Assistencia de Suporte

$assistencia_obs = $_POST['assistencia_obs'];

// Nome do Operador


if (!$_POST['nome_operador'])
{
  $err .= "- Nome do Operador de Suporte <span class='w3-text-red'> *</span><br>";

}
else
{
  $nome_operador = $_POST['nome_operador'];
}

// Duração

$duracao = explode(':', $_POST['duracao']);

$time_duracao = ($duracao[0]*3600 * 1000) + ($duracao[1]*60 * 1000) + ($duracao[2] * 1000);

// Soluccionado o Prolema

$solucao_problema = $_POST['solucao_problema'];

// Proxima Data para ser contactado

if ($_POST['proxima_data'])
{
  $date_array=explode('/',trim($_POST['proxima_data']));
  $data_proximo_operator=strtotime($date_array[2].'-'.$date_array[1].'-'.$date_array[0].'-00');
}
else
{
  $data_proximo_operator = 0;
}





// Nome da Pessoa a Contactar

if ($_POST['proxima_data'])
{
  $nome_pessoa = $_POST['nome_pessoa'];
}
else
{
  $nome_pessoa = '';
}





// Telefone a contactar



if ($_POST['telefone'])
{
  $telefone = $_POST['telefone'];
}
else
{
  $telefone = 0;
}


// Observações finais do suporte

if ($_POST['obs_suporte'])
{
  $obs_suporte = $_POST['obs_suporte'];
}
else
{
  $obs_suporte = '';
}

// ID do cliente de assistencia

$cliente_id = $_POST['cliente_id'];

// Referencia 

$referencia = $_POST['referencia'];

// Perfil do Cliente 

$perfil = $_POST['perfil'];

// Bugs


$bugs_link = $_POST['bugs_link'];

$bugs_descricao = $_POST['bugs_descricao'];

$tipo_prioridade_bug = $_POST['tipo_prioridade_bug'];


// Sugestoes

 $link_sugestao = $_POST['link_sugestao'];


 $descricao_sugestao = $_POST['descricao_sugestao'];
 
 $tipo_prioridade_sugestao = $_POST['tipo_prioridade_sugestao'];

// Pedidos

$link_pedido = $_POST['link_pedido'];

$descricao_pedido = $_POST['descricao_pedido'];

$tipo_prioridade_pedido = $_POST['tipo_prioridade_pedido'];

$username = $_POST['username'];

$sql1 = "SELECT id FROM admins WHERE nome='$username'";
$result1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_assoc($result1);
    
    
$id_username = $row1['id'];
    

if (!$err) 
{
    
if ($solucao_problema == 'Não')
{
    $sql =" INSERT INTO suporte (data_hora_suporte,assistencia_nome,assistencia_obs,nome_operador,duracao,solucao_problema,proxima_data,nome_pessoa,telefone,obs_suporte,id_cliente_assistencia,referencia,estado,user_id) VALUES ($date_valor,'$assistencia','$assistencia_obs','$nome_operador',$time_duracao,'$solucao_problema',$data_proximo_operator,'$nome_pessoa',$telefone, '$obs_suporte',$cliente_id, '$referencia','Pendente',$id_username)";

}
else
{
    $sql =" INSERT INTO suporte (data_hora_suporte,assistencia_nome,assistencia_obs,nome_operador,duracao,solucao_problema,proxima_data,nome_pessoa,telefone,obs_suporte,id_cliente_assistencia,referencia,estado,user_id) VALUES ($date_valor,'$assistencia','$assistencia_obs','$nome_operador',$time_duracao,'$solucao_problema',$data_proximo_operator,'$nome_pessoa',$telefone, '$obs_suporte',$cliente_id, '$referencia','Resolvido',$id_username)";

}

$result = mysqli_query($conn,$sql);


if ($perfil !='')
{
    $sql2 =" UPDATE clientes_assistencia SET perfil = '$perfil' WHERE id = $cliente_id";
    $result2 = mysqli_query($conn,$sql2);
}
if (($bugs_link != '') && ($bugs_descricao == '' || $bugs_descricao != ''))
{
    $sql3 =" INSERT INTO bugs (link,descricao,referencia,data_ins,cliente_id,estado,duracao,user_id,tipo_priodade) VALUES ('$bugs_link','$username - $bugs_descricao\n','$referencia',$date_valor,$cliente_id,'Pendente',$time_duracao,$id_username,'$tipo_prioridade_bug')";
    $result3 = mysqli_query($conn,$sql3);
}
if (($link_sugestao != '') && ($descricao_sugestao == '' || $descricao_sugestao != ''))
{
    $sql4 =" INSERT INTO sugestao (link,descricao,referencia,data_ins,cliente_id,estado,duracao,user_id,tipo_priodade) VALUES ('$link_sugestao','$username - $descricao_sugestao\n','$referencia',$date_valor,$cliente_id,'Pendente',$time_duracao,$id_username,'$tipo_prioridade_sugestao')";
    $result4 = mysqli_query($conn,$sql4);
}
if (($link_pedido != '') && ($descricao_pedido == '' || $descricao_pedido != ''))
{
    $sql5 =" INSERT INTO pedido (link,descricao,referencia,data_ins,cliente_id,estado,duracao,user_id,tipo_priodade) VALUES ('$link_pedido','$username - $descricao_pedido\n','$referencia',$date_valor,$cliente_id, 'Pendente',$time_duracao,$id_username,'$tipo_prioridade_pedido')";
    $result5 = mysqli_query($conn,$sql5);
}



 if ($result) {
    $response = 1; 
    $last_id = mysqli_insert_id($conn);
  } 
 
  
  else {
    $response = 0;
    $last_id = 0; 
  }

  $r=array('error'=>'','success' => $response, 'id' => $last_id);
  echo json_encode($r);
 }
 else{
  $r = array('error' =>$err, 'success' =>'', 'id' => '');
  echo json_encode($r);
}


break;


case '10':


      $nif = $_POST['nif'];
      $cliente = $_POST['clientes'];
            
      $sql1 = "SELECT id FROM clientes_assistencia WHERE nif=$nif AND cliente='$cliente'";
        $result1 = mysqli_query($conn,$sql1);
        $row1 = mysqli_fetch_assoc($result1);
        
        
        $cliente_id = $row1['id'];
      
      
    
      $obter_suporte=" SELECT * FROM suporte WHERE id_cliente_assistencia = $cliente_id ORDER BY data_hora_suporte DESC";
        $result = mysqli_query($conn, $obter_suporte);
        while($obj = mysqli_fetch_object($result)) 
        {
          $var[] = $obj;
        }
        echo json_encode($var);

break;

  case '11':

    
    // NIF

    $clientes = $_POST['clientes'];
        
     
      $obter_clientes=" SELECT * FROM clientes_assistencia WHERE cliente = '$clientes' LIMIT 1";
        $result = mysqli_query($conn, $obter_clientes);
        while($obj = mysqli_fetch_object($result)) 
        {
          $var[] = $obj;
        }
        echo json_encode($var);
  

break;

}


mysqli_close($conn);


?>