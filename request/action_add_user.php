<?php
require_once '../connect.php';



switch ($_POST['action']){

/*GRAVAR NOVO REGISTO*/
  case '1':

  	/*GRAVAR NOVO UTILIZADOR*/

    $err='';

    // Topico 1 - Serviços

    // Data de Serviços
    
    $password = '';
    
    $passord_conf = '';

    if (!$_POST['nome_utilizador'])
      $err .= "- Nome do Utilizador <span class='w3-text-red'> *</span><br>";
    else{
     $nome_utilizador = $_POST['nome_utilizador'];
    }

    // Password

    if ($_POST['password_utilizador']){
      $password = $_POST['password_utilizador'];
    }
    else
    {
      $err .= "- Password do Utilizador <span class='w3-text-red'> *</span><br>";
    }
    
    // Confirmar Password
    
    if ($_POST['password_utilizador_conf']){
      $password_conf = $_POST['password_utilizador_conf'];
    }
    else
    {
      $err .= "- Password do Utilizador Confirmada <span class='w3-text-red'> *</span><br>";
    }
    
    if ($_POST['password_utilizador_conf'] && $_POST['password_utilizador'])
    {
        if ($password == $password_conf)
        {
            $pass = $password;
        }
        else
        {
            $err .= "- As passwords devem ser iguais <span class='w3-text-red'> *</span><br>";
        }
    }

    // Tipo do Utilizador 

    if ($_POST['tipo_utilizador']){
      $tipo_utilizador= $_POST['tipo_utilizador'];
    }
    else
    {
      $err .= "- Tipo de Utilizador <span class='w3-text-red'> *</span><br>";
    }


    // Email
     $email = $_POST['email'];
     
     
     // Privilegios
     
     if ($_POST['privilegios']){
      $privilegios = $_POST['privilegios'];
    }
    else
    {
      $err .= "- Tipo de privilegios o utilizador <span class='w3-text-red'> *</span><br>";
    }
    
    
    
     

      
      

      
    
    

      

if (!$err) 
{

$sql =" INSERT INTO admins (nome, pass, tipo, email, privilegios) VALUES ('$nome_utilizador', MD5('".$pass."'), '$tipo_utilizador', '$email', '$privilegios')";

$result = mysqli_query($conn,$sql);
  if ($result) {
    $response = 1; 
    $last_id = mysqli_insert_id($conn);
  }  
  else {
    $response = 0;
    $last_id = 0; 
  }

  $r=array('error'=>'','success' => $response,'id' => $last_id, 'nome' => $nome_utilizador);
  echo json_encode($r);
 }
 else{
  $r = array('error' =>$err, 'success' =>'','id' =>'', 'nome' => '');
  echo json_encode($r);
}

break;

}

mysqli_close($conn);


?>
