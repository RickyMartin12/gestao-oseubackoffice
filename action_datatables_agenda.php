<?php
 
// DataTables PHP library

include( "php/DataTables.php" );
 
use
DataTables\Database,
DataTables\Database\Query,
DataTables\Database\Result;

switch ($_GET['action']) {

        case '1':

        $date_array=explode('/',trim($_GET['data_pesquisa']));
        $di=strtotime($date_array[2].'-'.$date_array[1].'-'.$date_array[0].'-00');

        $RAW_SQL_QUERY="select suporte.id, suporte.proxima_data, clientes_assistencia.cliente, suporte.nome_pessoa, suporte.obs_suporte, suporte.telefone, clientes_assistencia.nif, suporte.estado FROM suporte, clientes_assistencia WHERE suporte.id_cliente_assistencia = clientes_assistencia.id AND proxima_data = $di ORDER BY proxima_data DESC";
        $r=$db->sql($RAW_SQL_QUERY)->fetchAll();

        $arr=array("data"=>$r,"options"=>'',"files"=>'');//DATATABLE CLIENT SIDE PARSES
        
        echo json_encode($arr);
        
        break;
        
         case '2':

        $date_array=explode('/',trim($_GET['data_pesquisa']));
        $di=strtotime($date_array[2].'-'.$date_array[1].'-'.$date_array[0].'-00');

        $RAW_SQL_QUERY="select * FROM suporte WHERE proxima_data = $di";
        $r=$db->sql($RAW_SQL_QUERY)->fetchAll();

        $arr=array("data"=>$r,"options"=>'',"files"=>'');//DATATABLE CLIENT SIDE PARSES
        
        echo json_encode($arr);
        
        break;
        
}


?>