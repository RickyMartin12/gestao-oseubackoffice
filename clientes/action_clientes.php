<?php
require_once '../connect.php';



switch ($_POST['action']){

/*GRAVAR NOVO REGISTO*/
  case '1':

  	/*GRAVAR NOVO UTILIZADOR*/

    $err='';

    // Topico 1 - Serviços

    // Data de Serviços

    if (!$_POST['data_cl'])
      $err .= "- Data do Cliente <span class='w3-text-red'> *</span><br>";
    else{
      $date_array=explode('/',trim($_POST['data_cl']));
      $data_cl=strtotime($date_array[2].'-'.$date_array[1].'-'.$date_array[0].'-00'); 
    }

    // Horas

    if ($_POST['categoria']){
      $categoria = $_POST['categoria'];
    }
    else
    {
      $err .= "- Categoria <span class='w3-text-red'> *</span><br>";
    }

    // Nome do Cliente

    if ($_POST['cliente']){
      $cliente = $_POST['cliente'];
    }
    else
    {
      $err .= "- Nome da Empresa <span class='w3-text-red'> *</span><br>";
    }

    

    // NIF

    if ($_POST['nif']){
      
      if (is_numeric($_POST["nif"]))
      {
        if (strlen($_POST["nif"]) == 9)
        {
          $n = $_POST['nif'];
          $nif_sql = "SELECT * FROM clientes_assistencia where (nif = $n)";

          $nif_sql_row = mysqli_query($conn,$nif_sql);
          if (mysqli_num_rows($nif_sql_row) > 0) {
            $err .= "- Numero do Contribuinte nao podem ser iguais <span class='w3-text-red'> *</span><br>";
          }
          else
          {
            $nif = $_POST['nif'];
          }
          

        }
        else
        {
          $err .= "- Numero do Contribuinte deve conter 9 numeros <span class='w3-text-red'> *</span><br>";
        }
      }
      else
      {
        $err .= "- Numero do Contribuinte tem que ser um número inteiro <span class='w3-text-red'> *</span><br>";
      }
    }
    else
    {
      $err .= "- Numero do Contribuinte <span class='w3-text-red'> *</span><br>";
    }

    
    // Responsavel

      

      if ($_POST['responsavel'])
      {
        $responsavel = $_POST['responsavel'];
      }
      else
      {
        $responsavel = "-/-";
      }

    
    // Telemovel 1

      if ($_POST["tel1"])
      {
        if (is_numeric($_POST["tel1"]))
        {
          if (strlen($_POST['tel1']) >= 9 && strlen($_POST['tel1']) <= 15)
          {
            $tel1 = $_POST['tel1'];
          }
          else
          {
            $err .= "- O Numero de Telefone do Cliente deve conter pelo menos entre 9 e 15 numeros <span class='w3-text-red'> *</span><br>";
          }
        }
        else
        {
          $err .= "- Numero de Telefone do Cliente deve ser um numero <span class='w3-text-red'> *</span><br>";
        }

        
      }
      else
      {
       $tel1 = 0;
      }

      
      // Tel 2

      if ($_POST["tel2"])
      {
        if (is_numeric($_POST["tel2"]))
        {
          if (strlen($_POST['tel2']) >= 9 && strlen($_POST['tel2']) <= 15)
          {
            $tel2 = $_POST['tel2'];
          }
          else
          {
            $err .= "- O Segundo Numero de Telefone do Cliente deve conter pelo menos entre 9 e 15 numeros <span class='w3-text-red'> *</span><br>";
          }
        }
        else
        {
          $err .= "- O Segundo Numero de Telefone do Cliente deve ser um numero <span class='w3-text-red'> *</span><br>";
        }   
      }
      else
      {
        $tel2 = 0;
      }

      // Tel 3

      if ($_POST["tel3"])
      {
        if (is_numeric($_POST["tel3"]))
        {
          if (strlen($_POST['tel3']) >= 9 && strlen($_POST['tel3']) <= 15)
          {
            $tel3 = $_POST['tel3'];
          }
          else
          {
            $err .= "- O Terceiro Numero de Telefone do Cliente deve conter pelo menos entre 9 e 15 numeros <span class='w3-text-red'> *</span><br>";
          }
        }
        else
        {
          $err .= "- O Terceiro Numero de Telefone do Cliente deve ser um numero <span class='w3-text-red'> *</span><br>";
        }   
      }
      else
      {
        $tel3 = 0;
      }


      
      // Email

      if ($_POST["email"])
      {
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) 
        {
             $email = $_POST["email"];
          } else 
          {
            $err .= "- Correio Electrónico (Email) inválido<span class='w3-text-red'> *</span><br>";
          }
      }
      else
      {
        $email = '-/-';
      }
      
      
      // Email Secundário
      
      if ($_POST["email_secundario"])
      {
        if (!filter_var($_POST["email_secundario"], FILTER_VALIDATE_EMAIL) === false) 
        {
            $email_secundario = $_POST["email_secundario"];
          } else 
          {
            $err .= "- Correio Electrónico Secundário (Email) inválido<span class='w3-text-red'> *</span><br>";
          }
      }
      else
      {
        $email_secundario = '-/-';
      }

      // Web Site

      if ($_POST["dominio"])
      {
            $dominio = $_POST["dominio"];
      }
      else
      {
        $dominio = "-/-";
      }

      $perfil = $_POST['perfil'];
      
      
      

      
    
    

      

if (!$err) 
{

$sql =" INSERT INTO clientes_assistencia (data,categoria,cliente,nif,responsavel,tel1,tel2,tel3,email,dominio,perfil,email_secundario) VALUES ($data_cl,'$categoria','$cliente',$nif,'$responsavel',$tel1,$tel2,$tel3,'$email','$dominio','$perfil','$email_secundario')";

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


case '2':

$reg_del= "DELETE FROM clientes_assistencia WHERE id ='{$_POST['id']}'";
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

$cliente = $_POST['cliente'];

$categoria = $_POST['categoria'];

$nif = $_POST['nif'];

$responsavel = $_POST['responsavel'];

$tel1 = $_POST['tel1'];
$tel2 = $_POST['tel2'];
$tel3 = $_POST['tel3'];

$email = $_POST['email'];
$dominio = $_POST['dominio'];

$email_secundario = $_POST['email_secundario'];


$date_array = explode('/',trim($_POST['data_cl']));
$data = strtotime($date_array[2].'-'.$date_array[1].'-'.$date_array[0].'-00');

$perfil = $_POST['perfil'];


$sql =" UPDATE clientes_assistencia SET data = $data, categoria = '$categoria' ,cliente = '$cliente', nif = $nif, responsavel = '$responsavel', tel1 = $tel1, tel2 = $tel2, tel3 = $tel3, email = '$email', dominio = '$dominio', perfil = '$perfil', email_secundario = '$email_secundario' WHERE id = $id";

 $result = mysqli_query($conn,$sql);
  if ($result)
  echo 1;
else  
  echo 0;

break;


}

mysqli_close($conn);


?>