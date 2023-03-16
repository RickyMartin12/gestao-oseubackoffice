<?php


require_once '../connect.php';

switch ($_POST['action']){


// Visualização

case '1':
$obter_comp=" SELECT * FROM admins WHERE 1";

$result = mysqli_query($conn, $obter_comp);
while($obj = mysqli_fetch_object($result)) 
{
$var[] = $obj;
    
}
echo json_encode($var);
break;

// Apagar

case '2':

$reg_del= "DELETE FROM admins WHERE id ='{$_POST['id']}'";
$result = mysqli_query($conn,$reg_del);
if ($result){
  echo 2; 
}
else {
  echo 0;
}

break;

case '3':

    $id= $_POST['id'];
    $nome = $_POST['col_1_'.$id];
    $email = $_POST['col_3_'.$id];
    $tipo = $_POST['col_4_'.$id];
    $privilegios=$_POST['col_5_'.$id];
    $pass=md5($_POST['col_2_'.$id]);
    
    
    
    $success='';
    
    $query=" SELECT nome FROM admins WHERE nome = '$nome'";
    	$result = mysqli_query($conn,$query);
    	$rowCount = mysqli_num_rows($result);
    	echo $rowCount;
    	if($rowCount>1) { 
    	$error_message = 9;
            $success .= 2;
    }
    
    
    	if ( !isset($error_message) ) {
    	    
    	 if ($_POST['col_2_'.$id] == '')
    	 {
    	     $query_upd=" UPDATE admins SET nome='$nome', privilegios='$privilegios', email= '$email', tipo='$tipo' WHERE id = $id ";
    	 }
    	 else
    	 {
    	     $query_upd=" UPDATE admins SET nome='$nome', pass ='$pass', privilegios='$privilegios', email= '$email', tipo='$tipo' WHERE id = $id ";
    	 }
     
    	$result_upd = mysqli_query($conn,$query_upd);
    		if ($result_upd)
    			 $success .=1;
    		else
    			 $success .= 2;
    	}
    
    echo $success;
    unset($error_message);
    break;


case '4':
    
    $table=" SELECT * FROM privilegios WHERE id >= 2 AND id <= 4 ";

    $result = mysqli_query($conn, $table);
    while($obj = mysqli_fetch_object($result)) {
    $var[] = $obj;}
    echo json_encode($var);
    
break;


case '5':
    

$estado = $_POST['estado'];

$tipo = $_POST['tipo'];


$arr_tipo = explode("-",$tipo);


$priv_a= " UPDATE privilegios SET  $arr_tipo[0] ='$estado' WHERE tipo = '$arr_tipo[1]' ";
$result = mysqli_query($conn,$priv_a);
 if ($result)
 {
     echo 1;   
 }
 else 
 {
     echo 0; 
 }

    
break;

}






mysqli_close($conn);
?>


