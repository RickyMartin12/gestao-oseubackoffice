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

        $RAW_SQL_QUERY="SELECT suporte.id, suporte.data_hora_suporte, suporte.assistencia_nome, suporte.assistencia_obs, suporte.duracao, suporte.nome_operador, suporte.solucao_problema, suporte.proxima_data, suporte.nome_pessoa, suporte.telefone, suporte.obs_suporte, suporte.estado, clientes_assistencia.cliente, clientes_assistencia.nif  FROM clientes_assistencia, suporte WHERE clientes_assistencia.cliente = '$clientes' AND clientes_assistencia.id = suporte.id_cliente_assistencia ORDER BY suporte.data_hora_suporte DESC";
        $r=$db->sql($RAW_SQL_QUERY)->fetchAll();

        $arr=array("data"=>$r,"options"=>'',"files"=>'');//DATATABLE CLIENT SIDE PARSES
        
        echo json_encode($arr);
        
        break;
        
         case '2':

        $nif = $_GET['nif'];

        $RAW_SQL_QUERY="SELECT suporte.id, suporte.data_hora_suporte, suporte.assistencia_nome, suporte.assistencia_obs, suporte.duracao, suporte.nome_operador, suporte.solucao_problema, suporte.proxima_data, suporte.nome_pessoa, suporte.telefone, suporte.obs_suporte, suporte.estado, clientes_assistencia.cliente, clientes_assistencia.nif FROM clientes_assistencia, suporte WHERE clientes_assistencia.nif = $nif AND clientes_assistencia.id = suporte.id_cliente_assistencia ORDER BY suporte.data_hora_suporte DESC";
        $r=$db->sql($RAW_SQL_QUERY)->fetchAll();

        $arr=array("data"=>$r,"options"=>'',"files"=>'');//DATATABLE CLIENT SIDE PARSES
        
        echo json_encode($arr);
        
        break;
        
        
        case '3':

        $nif = $_GET['nif'];
        $clientes = $_GET['clientes'];

        $RAW_SQL_QUERY="SELECT suporte.id, suporte.data_hora_suporte, suporte.assistencia_nome, suporte.assistencia_obs, suporte.duracao, suporte.nome_operador, suporte.solucao_problema, suporte.proxima_data, suporte.nome_pessoa, suporte.telefone, suporte.obs_suporte, suporte.estado, clientes_assistencia.cliente, clientes_assistencia.nif FROM clientes_assistencia, suporte WHERE clientes_assistencia.nif = $nif AND clientes_assistencia.cliente = '$clientes' AND clientes_assistencia.id = suporte.id_cliente_assistencia ORDER BY suporte.data_hora_suporte DESC";
        $r=$db->sql($RAW_SQL_QUERY)->fetchAll();

        $arr=array("data"=>$r,"options"=>'',"files"=>'');//DATATABLE CLIENT SIDE PARSES
        
        echo json_encode($arr);
        
        break;
        
}



exit();

?>