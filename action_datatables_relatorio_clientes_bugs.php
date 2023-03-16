<?php
 
// DataTables PHP library

include( "php/DataTables.php" );
 
use
DataTables\Database,
DataTables\Database\Query,
DataTables\Database\Result;

$action = $_GET['action'];

switch ($action) {

        case '1':

        $clientes = $_GET['clientes'];

        $RAW_SQL_QUERY="SELECT bugs.id, bugs.data_ins, clientes_assistencia.nif, clientes_assistencia.cliente, bugs.link, bugs.descricao, bugs.estado, bugs.duracao, bugs.tipo_priodade FROM bugs, clientes_assistencia WHERE clientes_assistencia.id = bugs.cliente_id AND clientes_assistencia.cliente = '$clientes' ORDER BY bugs.data_ins DESC";
        $r=$db->sql($RAW_SQL_QUERY)->fetchAll();

        $arr=array("data"=>$r,"options"=>'',"files"=>'');//DATATABLE CLIENT SIDE PARSES
        
        echo json_encode($arr);
        
        break;
        
         case '2':

        $nif = $_GET['nif'];

        $RAW_SQL_QUERY="SELECT bugs.id, bugs.data_ins, clientes_assistencia.nif, clientes_assistencia.cliente, bugs.link, bugs.descricao, bugs.estado, bugs.duracao, bugs.tipo_priodade FROM bugs, clientes_assistencia WHERE clientes_assistencia.id = bugs.cliente_id AND clientes_assistencia.nif = $nif ORDER BY bugs.data_ins DESC";
        $r=$db->sql($RAW_SQL_QUERY)->fetchAll();

        $arr=array("data"=>$r,"options"=>'',"files"=>'');//DATATABLE CLIENT SIDE PARSES
        
        echo json_encode($arr);
        
        break;
        
        
        case '3':

        $nif = $_GET['nif'];
        $clientes = $_GET['clientes'];

        $RAW_SQL_QUERY="SELECT bugs.id, bugs.data_ins, clientes_assistencia.nif, clientes_assistencia.cliente, bugs.link, bugs.descricao, bugs.estado, bugs.duracao, bugs.tipo_priodade FROM bugs, clientes_assistencia WHERE clientes_assistencia.id = bugs.cliente_id AND clientes_assistencia.nif = $nif AND clientes_assistencia.cliente = '$clientes' ORDER BY bugs.data_ins DESC";
        $r=$db->sql($RAW_SQL_QUERY)->fetchAll();

        $arr=array("data"=>$r,"options"=>'',"files"=>'');//DATATABLE CLIENT SIDE PARSES
        
        echo json_encode($arr);
        
        break;
        
}



exit();

?>