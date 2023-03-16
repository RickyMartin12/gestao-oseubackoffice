<?php

    require_once '../connect.php';
    session_start();

          $err='';
          $err_login = '';
          $success = '';


          if (!$_POST['utilizador'])
            $err .= '- Utilizador * <br>';
          else 
            $utilizador = $_POST['utilizador']; 

          if (!$_POST['password'])
            $err .= '- Password * <br>';
          else 
            $password=$_POST['password']; 
  if($_SERVER["REQUEST_METHOD"] == "POST") 
  {
     if($err == '')
     {
          $utilizador = $_POST['utilizador'];
          $password = md5(trim($_POST['password']));
          $sql = "SELECT * FROM admins WHERE nome='$utilizador' AND pass='$password'";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
          $rowcount=mysqli_num_rows($result);
          if ($rowcount == 1)
          {
            $_SESSION['pr_uid']=$row['id'];
            $id = $row['id'];
            $_SESSION['name']=$row['nome'];
            $name = $row['nome'];
            $_SESSION['privilegios'] = $row['tipo'];
            $privilegios = $row['tipo'];
            $s = $_SESSION['privilegios'];
            $setpriv = "SELECT * FROM privilegios WHERE tipo= '$s' ";
            $res = mysqli_query($conn, $setpriv);
            if (mysqli_num_rows($result) > 0) 
            {
              while($row = mysqli_fetch_assoc($res)) 
              {
                 $_SESSION['agenda_pri'] = $row['agenda_pri'];
                 $_SESSION['suporte_pri'] = $row['suporte_pri'];
                 $_SESSION['clientes_pri'] = $row['clientes_pri'];
                 $_SESSION['relatorios_pri'] = $row['relatorios_pri'];


                 $agenda_pri = $row['agenda_pri'];
                 $suporte_pri = $row['suporte_pri'];
                 $clientes_pri = $row['clientes_pri'];
                 $relatorios_pri = $row['relatorios_pri'];



              }
            }
            //$_SESSION['start'] = time();


            setcookie("name", $_SESSION['name'], time() + (86400 * 30), "/"); 
            setcookie("id", $_SESSION['pr_uid'], time() + (86400 * 30), "/");
            setcookie("privilegios", $_SESSION['privilegios'], time() + (86400 * 30), "/");
            setcookie("agenda_pri", $_SESSION['agenda_pri'], time() + (86400 * 30), "/");
            setcookie("suporte_pri", $_SESSION['suporte_pri'], time() + (86400 * 30), "/");
            setcookie("clientes_pri", $_SESSION['clientes_pri'], time() + (86400 * 30), "/");
            setcookie("relatorios_pri", $_SESSION['relatorios_pri'], time() + (86400 * 30), "/");


            

            $success='gestao/index.php';
            $arr = array('error'=>'', 'id'=>$_SESSION['pr_uid'], 'success'=>$success);

          }
          else
          {
            $err_login = 'Utilizador ou Password incorretos';
            $arr = array('error'=>$err_login, 'id'=>'', 'success'=>'');
          }
      }
      else
      {
          $arr = array('error'=>$err, 'id'=>'', 'success'=>'');
      }
    }

      mysqli_close($conn);
      echo json_encode($arr);
?>
