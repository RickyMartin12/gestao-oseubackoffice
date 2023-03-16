<?php
 
// DataTables PHP library

include( "php/DataTables.php" );
 
use
DataTables\Database,
DataTables\Database\Query,
DataTables\Database\Result;



        $RAW_SQL_QUERY="SELECT pedido.id, pedido.data_ins, clientes_assistencia.nif, clientes_assistencia.cliente, pedido.link, pedido.descricao, pedido.estado, pedido.duracao, pedido.tipo_priodade FROM pedido, clientes_assistencia WHERE clientes_assistencia.id = pedido.cliente_id ORDER BY pedido.data_ins DESC";
        $r=$db->sql($RAW_SQL_QUERY)->fetchAll();

        $arr=array("data"=>$r,"options"=>'',"files"=>'');//DATATABLE CLIENT SIDE PARSES
        
        echo json_encode($arr);



exit();