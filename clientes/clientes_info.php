



<?php require ROOTDIR . '/header/head.php' ?>




    <title>Clientes de Assistencia Técnica</title>
</head>

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/> 
  <link href="css/select.dataTables.css" rel="stylesheet" type="text/css"/>
  <link href="css/buttons.dataTables.css" rel="stylesheet" type="text/css"/>
  <link href="css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>  
  <link href="css/mytables.css" rel="stylesheet" type="text/css"/>
  <link href="css/personalized.css" rel="stylesheet" type="text/css"/> 



<!-- Loader Header -->
<?php $menu ='clientes'; require ROOTDIR . '/header/header.php';?> 
    


<?php require 'modals.php' ?>


<!-- Line Page -->

<div class="boby_content" style="margin-top: 0px; ">







<div class="container-fluid">


<div class="panel panel-default my_black">
    <div class="panel-body"><span class="glyphicon glyphicon-user"></span>  Pesquisa de Clientes   <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#clientes__modal_add">Novo Cliente</button>
</div>
</div>


<!-- CRiação das Datatables -->



<div class="table-responsive">


<div class="row">
    <div class="col-xs-12 col-lg-offset-2 col-lg-4 col-md-offset-2 col-md-4 col-sm-offset-1 col-sm-5">
        <label style="width: auto;">NIF:</label> <select id="nif_search" class="form-control"></select>
        </div>
    <div class="col-xs-12 col-lg-4 col-md-4 col-sm-5">
        <label style="width: auto;">Empresa:</label> <select id="cliente_search" class="form-control"></select>
        </div>
</div>
<table id="example" class="display responsive nowrap table-striped dataTable" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>ID/Acções</th>
      <th>Data</th>
      <th>Categoria</th>
      <th>Empresa</th>
      <th>NIF</th>
      <th>Cliente</th>
      <th>Telefone</th>
      <th>Tlm. 1</th>
      <th>Tlm. 2</th>
      <th>Email</th>
      <th>Email Secundario</th>
      <th>Web Site</th>
      <th>Perfil</th>
      
    </tr>
  </thead>
  <tfoot>
    <tr>
      <th>ID/Acções</th>
      <th>Data</th>
      <th>Categoria</th>
      <th>Empresa</th>
      <th>NIF</th>
      <th>Cliente</th>
      <th>Telefone</th>
      <th>Tlm. 1</th>
      <th>Tlm. 2</th>
      <th>Email</th>
      <th>Email Secundario</th>
      <th>Web Site</th>
      <th>Perfil</th>
    </tr>
  </tfoot>
</table>
</div>
</div>


<!-- MOdelos das Popups -->

<?php require 'mymodals.php'; ?>




<!-- End Line Page -->


<script src="js/bootbox.min.js"></script>
<script src="js/momentjs/moment-with-locales.min.js"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<script src="js/dataTables.buttons.min.js"></script>
<script src="js/buttons.colVis.js"></script>
<script src="js/buttons.print.min.js"></script>
<script src="js/buttons.html5.min.js"></script>
<script src="js/pdfmake.min.js"></script>
<script src="js/vfs_fonts.js"></script>
<script src="js/jszip.min.js"></script>
<script src="js/dataTables.colReorder.min.js"></script>
<script src="js/select2.full.min.js"></script>
<script src="js/shopinfo.js"></script>



<script>
  setTimeout(function() {$(".back").fadeOut(); GetNIF(); GetEmpresa();});
</script>


<script>

GetEmpresa2();


function GetEmpresa2(){
  dataValue='action=66';
  $.ajax({ url:'https://backoffice-gestao-php.herokuapp.com/definitions/action_definitions.php',
    data:dataValue,
    type:'POST', 
    success:function(data){
      console.log(data);

      arr=[];
     arr =  JSON.parse(data);
    if (arr == null || arr.length < 1){
     console.log('0 - NADA');
    }
    else {
      for(i=0;i<arr.length;i++)
      {
        console.log(arr[i].nif_emp + '---' + arr[i].cliente);

      }
    }
    },
    error:function(){}
});
}




base64='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';

nome = 'Osb Unipessoal, Lda';
nif = '123123123';
ravt = '1234';
morada = 'Estrada Sta. Eulalia';
cod_postal = '8200-000 Albufeira';
tel = '00351289150167';
tlm = '00351914564564';
email = 'suporte@oseubackoffice.com';
dominio = 'oseubackoffice.com';


footer_txt = nome+' | NIF:'+nif+' | RNAVT:'+ravt+'\n '+morada+' '+cod_postal+' | TEL:'+tel+' - TLM:'+tlm+'\n EMAIL:'+email+' | URL:'+dominio; 



 arr = JSON.parse(localStorage.getItem("nif"));
  opt='<option selected value="">Pesquisar NIF</option>';   
  for (i=0;i<arr.length;i++){
    opt +='<option value="'+arr[i].nif+'">'+arr[i].nif+'</option>';
  }
  $('#nif_search').html(opt).select2();
  
   arr2 = JSON.parse(localStorage.getItem("empresa"));


  opt2 ='<option selected value="">Pesquisar Empresa</option>';   
  for (i=0;i<arr2.length;i++){
    opt2 +='<option value="'+arr2[i].cliente+'">'+arr2[i].cliente+'</option>';
  }
  $('#cliente_search').html(opt2).select2();


// Datas usando no datetimepicker

  $("#data_cliente").datetimepicker({ ignoreReadonly: true, format: 'DD/MM/YYYY', 
    locale: 'pt',widgetPositioning: {vertical: 'bottom'}});

  // Datas usando no datetimepicker

  $("#data_cliente_edit").datetimepicker({ ignoreReadonly: true, format: 'DD/MM/YYYY', 
    locale: 'pt',widgetPositioning: {vertical: 'bottom'}});


	// Apagar Registo nos Clientes de Assistncia

	function confirmDeleteAssistenceClients(id){
table = $('#example').DataTable();
bootbox.dialog({
  message: "Tem a certeza que pretende apagar o Cliente Assistente com o numero: #<strong>"+id+"</strong> ?",
  title: "<span style='color:#f0ad4e;'><span class='glyphicon glyphicon-exclamation-sign'></span> Confirmar</span>",
  buttons: {
    default: {
      label: "<span class='glyphicon glyphicon-remove-sign'></span> <span class='hidden-xs'>Fechar</span>",
      className: "btn-default",
    },
    danger: {
      label: "<span class='glyphicon glyphicon-trash'></span><span class='hidden-xs'> Apagar</span>",
      className: "btn-danger",
      callback: function() {
        dataValue='id='+id+'&action=2';
     $.ajax({
      type: "POST",
      cache:false,
      url: "clientes/action_clientes.php",
      data: dataValue,
      success: function(data){
        if(data == 2){
          table.row("#"+id).remove().draw();
          $('.debug-url').html('O Cliente Assistente com o numero: #<strong>'+id+'</strong> foi apagado com sucesso.');
          $("#mensagem_ok").trigger('click');
          setTimeout(function(){  $('#Modalok').modal('hide');}, 2500);
          setInterval( function () {table.ajax.reload();}, 1000 ); 
        }
        else{
          $('.debug-url').html('O Cliente Assistente com o numero: #<strong>'+id+'</strong> não foi apagado.');
          $("#mensagem_ko").trigger('click');
          setTimeout(function(){  $('#Modalko').modal('hide');}, 2500);

        }

      },
      error:function(data){
        $('.debug-url').html('O Cliente Assistente com o numero: #<strong>'+id+'</strong> não foi apagado, p.f. verifique a ligação Wi-Fi.');
        $("#mensagem_ko").trigger('click');
      }
   });

      }
    },
  }
});
}

	


	// Edição de Valores nos Clientes de Assistencia

	function editClientTable(arr)
	{
		var clientesModal = $('#clientes__modal');

        //Data do Cliente
        $("#data_cl_edit").val(moment(arr.data*1000).format("DD/MM/YYYY"));

        // Categoria

        $("#cat_edit").html('<option value="'+arr.categoria+'">'+arr.categoria+'</option><option value="Transfergest Light">Transfergest Light</option><option value="Transfergest Pro">Transfergest Pro</option><option value="Transfergest Pro Loja">Transfergest Pro+Loja</option><option value="Web Design">Web Design</option><option value="Design Gráfico">Design Gráfico</option>');

        // Nome do Cliente - Empresa
        $("#cliente_edit").val(arr.cliente);

        // NIF
        $("#nif_edit").val(arr.nif);

        // Responsavel
        $("#responsavel_edit").val(arr.responsavel);

        // Telemovel n1

        $("#tel1_edit").val(arr.tel1);

        // Telemovel n2

        $("#tel2_edit").val(arr.tel2);

        // Telemovel n3

        $("#tel3_edit").val(arr.tel3);

        // Email

        $("#email_edit").val(arr.email);

        // URL - Web Site

        $("#dominio_edit").val(arr.dominio);

        // Perfil

        $("#perfil_edit").val(arr.perfil);
        
        
        $("#email_secundario_edit").val(arr.email_secundario);

        



        clientesModal.modal('show');
	}

	function saveIt(vl){
		dataValue="action=3&id="+vl+"&cliente="+$('#cliente_edit').val()+"&data_cl="+$('#data_cl_edit').val()+"&categoria="+$('#cat_edit').val()+"&nif="+$('#nif_edit').val()+"&responsavel="+$('#responsavel_edit').val()+"&tel1="+$("#tel1_edit").val()+"&tel2="+$("#tel2_edit").val()+"&tel3="+$("#tel3_edit").val()+"&email="+$("#email_edit").val()+"&dominio="+$("#dominio_edit").val()+"&perfil="+escape($("#perfil_edit").val())+"&email_secundario="+$("#email_secundario_edit").val();


	//console.log(dataValue);

$.ajax({ url:'clientes/action_clientes.php',
    data:dataValue,
    type:'POST',
    cache:false,
    success: function(data){

     if (data == 1) {
     	$('.debug-url').html('O Numero do Cliente de Assistencia <strong class="cpt">'+vl+'</strong> foi modificado com sucesso');
          $("#mensagem_ok").trigger('click');
          $('html, body').animate({ scrollTop: 0 }, 500);
          setTimeout(function(){
          $('#Modalok').modal('hide');},2500);
          GetNIF(); GetEmpresa();
      reWriteRowTable(vl);
     }
     else if (data == 0){
       $('.cancel-edit').trigger('click');
       $('.debug-url').html('Cliente #<strong>'+vl+'</strong> não foi modificada!');
          $("#Modalko").modal();
          setTimeout(function(){  $('#Modalko').modal('hide');}, 2500);
     }
},
    error:function(){
        $('.cancel-edit').trigger('click');
        $('.debug-url').html('Cliente # <strong> ' +vl+ ' </strong> não foi modificada, p.f. verifique a ligação Wi-Fi.');
        $("#Modalko").modal();

}
  });

}

	// Escrever os dados alterados na datatable

	function reWriteRowTable(vl){

		var clientesModal = $('#clientes__modal');

		table = $('#example').DataTable();

		data = table.row("#"+vl ).data();

    myDate=$('#data_cl_edit').val().split("/");
    var newDate=myDate[1]+"/"+myDate[0]+"/"+myDate[2];
    x = new Date(newDate).getTime()/1000;

    $('#nif_edit').val();

		data['cliente'] = $("#cliente_edit").val();
    data['categoria'] = $('#cat_edit').val();

    data['data'] = x;

    data['nif'] = $('#nif_edit').val();

    data['responsavel'] = $('#responsavel_edit').val();

    data['tel1'] = $('#tel1_edit').val();
    data['tel2'] = $('#tel2_edit').val();
    data['tel3'] = $('#tel3_edit').val();

    data['email'] = $('#email_edit').val();
    data['email_secundario'] = $('#email_secundario_edit').val();
    data['dominio'] = $('#dominio_edit').val();

    data['perfil'] = $('#perfil_edit').val();


		table.row("#"+vl ).data(data).draw(false);

		
		$("#"+vl).addClass('blink').removeClass('selected');
		setTimeout(function(){ $("#"+vl).removeClass('blink'); }, 10000);
    table.ajax.reload();

    clientesModal.modal('hide');
    
    

	}
	


	// Novo Cliente

	$('#clientes__modal_add').on('submit',function(e){
		e.preventDefault();
		dataValue=$(this).serialize()+'&action=1';
		//console.log(dataValue);
  	$.ajax({ url:'clientes/action_clientes.php',
    data:dataValue,
    type:'POST', 

    success: function(data){
           arr=[];
      arr =  JSON.parse(data);
      //console.log(data);
      if (arr.error){
        $('.debug-url').html('Por favor, verifique:<br><br>'+arr.error+'<br> e tente novamente.');
        $('#Modalko').modal();
        $('#clientes__modal_add').modal('hide');
      }

      else if (arr.success == 0){
        $('.debug-url').html('Surgiu um erro, o registo do cliente de assistencia, não foi criado!');
        $('#Modalko').modal();
        $('#clientes__modal_add').modal('hide');
      }

      else if(arr.success == 1){
          $('.debug-url').html('O Numero do Cliente de Assistencia <strong class="cpt">'+arr.id+'</strong> foi criado com sucesso');
          $("#mensagem_ok").trigger('click');
          $('html, body').animate({ scrollTop: 0 }, 500);
          setTimeout(function(){
          $('#Modalok').modal('hide');},2500);
          
          $('#clientes__modal_add').modal('hide');
          setInterval( function () {table.ajax.reload();}, 1000 );   
          $('#clientes__modal_add')[0].reset();
          GetNIF(); 
          GetEmpresa();
      }
    },
    error: function(){
      $('.debug-url').html('O registo do cliente de assistencia não foi criado, p.f. verifique a ligação Wi-Fi.');
      $('#Modalko').modal();
      $('#clientes__modal_add').modal('hide');
    }
  });
});

$.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
        var nif_search = $("#nif_search").val();
        var cliente_search = $("#cliente_search").val();
        var nif = data[4]; // use data for the age column
        var cliente = data[3]; // use data for the age column
        if ((nif_search == nif || nif_search == '') && (cliente_search == cliente || cliente_search == ''))
        {
            return true;
        }
        
        return false;
 
        
    }
);



  searchValue();

  


  function searchValue() {
    // Construção de Datatables

  table = $('#example').DataTable( {
    dom: "Blfrtip",
    rowId: "id",
    "paging": true,
    "serverside":true,
    order: [],
    "ajax": 
      {
        "url" : "action_datatables_clientes.php",
        "type": "GET"
      },
      columns: [
        { data: "id", render: function ( data, type, row ) {
          return '<button title="Editar Serviço:'+data+'" class="btn-sm btn btn-info btn-edit"><span class="glyphicon glyphicon-edit"></span> '+data+'</button><button style="margin-left: 5px;" title="Apagar '+data+'" class="btn-sm btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>';
          }},
        { data: "data" , render: function ( data, type, row ) {
          myDate = new Date(data*1000);
          a = moment(myDate).format('DD/MM/YYYY');
          return a;
          }
        },
        { data: "categoria"},
        { data: "cliente"},
        { data: "nif"},
        { data: "responsavel"},
        { data: "tel1", render: function ( data, type, row ) {
            if (data == 0)
            {
                a = "-/-";
            }
            else
            {
                a = data;
            }
            return a;
        }},
        { data: "tel2", render: function ( data, type, row ) {
            if (data == 0)
            {
                a = "-/-";
            }
            else
            {
                a = data;
            }
            return a;
        }},
        { data: "tel3", render: function ( data, type, row ) {
            if (data == 0)
            {
                a = "-/-";
            }
            else
            {
                a = data;
            }
            return a;
        }},
        { data: "email"},
        { data: "email_secundario", render: function ( data, type, row ) {
            if (data == "")
            {
                a = "-/-";
            }
            else
            {
                a = data;
            }
            return a;
        }},
        { data: "dominio"},
        { data: "perfil", render: function ( data, type, row ) {
            if (data == "")
            {
                a = "-/-";
            }
            else
            {
                a = data;
            }
            return a;
        }}
      ],
      select: 
        {
          style:    'os',
          selector: 'td:first-child'
        },
        buttons: [
          {
            extend: 'colvis', text: '<i class="fa fa-scissors"></i>',
            titleAttr: 'Esconder Colunas',
            exportOptions: { orthogonal: 'export', columns: ':visible' }
          },
          {
            extend: 'print', 
            text: '<i class="fa fa-print"></i>',
            titleAttr: 'Imprimir',
            exportOptions: { orthogonal: 'export', columns: ':visible' }
          },
          {
            extend: 'excelHtml5',
            text: '<i class="fa fa-file-excel-o"></i>',
            titleAttr: 'Excel',
            key: {key: 't', altkey: true},
            exportOptions: { orthogonal: 'export', columns: ':visible' },
            action:function(e,dt,button,config)
            {
              config.filename = 'clientes_assistencia';
              config.title = 'Gestão de Clientes';
              
              $.fn.dataTable.ext.buttons.excelHtml5.action(e,dt,button,config);
            }
          },
          {  
            extend: '',
            className:'buttons-pdf-format',
            text: '<i class="fa fa-file-pdf-o"></i>',
            titleAttr: 'PDF'
           },
           {
            extend: 'pdfHtml5',
            className:'a4landscape hidden',
            text: '<i class="fa fa-file-pdf-o"></i>',
            orientation: 'landscape',
            pageSize: 'A4',
            footer: true,
            header: true,
            exportOptions: { orthogonal: 'export', columns: ':visible' },
            action:function(e,dt,button,config){
              config.filename = 'clientes_assistencia';
              config.title = 'Gestão de Clientes';
              $.fn.dataTable.ext.buttons.pdfHtml5.action(e,dt,button,config);
            },
              customize: function(doc) {

/*MARGENS DOCUMENTO*/
                doc.pageMargins = [5, 5, 5, 40];

/*AJUSTE DAS COLUNAS À PÁGINA*/
                doc.content[1].table.widths = Array(doc.content[1].table.body[0].length + 1).join('*').split('');

/* LOGO */
                doc.content.splice( 1, 0, {
                   // margin: [left, top, right, bottom]
                   margin: [ 10, 0, 0, 12 ],
                   alignment: 'center',
                   width:200,
                   image: 'data:image/png;base64,'+base64
                });

/* RESULTADOS PESQUISA */
                /*doc.content.splice( 2, 0, {
                   margin: [ 10, -5, 0, 5],
                   alignment: 'right',
                   fontSize: '11',
                   color : 'black',
                   text:'Pesquisa ( '+title+' )'
                 });*/

/* DADOS DA EMPRESA */
                doc['footer'] = {text: footer_txt, fontSize: '8', margin : [-10,0,0,10], color : 'black', alignment: 'center' };

             }   
          },
          {
            extend: 'pdfHtml5',
            className:'a4portrait hidden',
            text: '<i class="fa fa-file-pdf-o"></i>',
            orientation: 'portrait',
            pageSize: 'A4',
            footer: true,
            header: true,
            exportOptions: { orthogonal: 'export', columns: ':visible' }, action:function(e,dt,button,config){
              config.filename = 'clientes_assistencia';
              config.title = 'Gestão de Clientes';
              title = 'Gestão de Clientes';
              $.fn.dataTable.ext.buttons.pdfHtml5.action(e,dt,button,config);
            },
            
            customize: function(doc) {

/*MARGENS DOCUMENTO*/
                doc.pageMargins = [5, 5, 5, 40];

/*AJUSTE DAS COLUNAS À PÁGINA*/
                doc.content[1].table.widths = Array(doc.content[1].table.body[0].length + 1).join('*').split('');

/* LOGO */
                doc.content.splice( 1, 0, {
                   // margin: [left, top, right, bottom]
                   margin: [ 10, 0, 0, 12 ],
                   alignment: 'center',
                   width:200,
                   image: 'data:image/png;base64,'+base64
                });

/* RESULTADOS PESQUISA */
                /*doc.content.splice( 2, 0, {
                   margin: [ 10, -5, 0, 5],
                   alignment: 'right',
                   fontSize: '11',
                   color : 'black',
                   text:'Pesquisa ( '+title+' )'
                 });*/

/* DADOS DA EMPRESA */
                doc['footer'] = {text: footer_txt, fontSize: '8', margin : [-10,0,0,10], color : 'black', alignment: 'center' };

             }    
          },
          {
            extend: 'pdfHtml5',
            className:'a3portrait hidden',
            text: '<i class="fa fa-file-pdf-o"></i>',
            orientation: 'portrait',
            pageSize: 'A3',
            footer: true,
            exportOptions: { orthogonal: 'export', columns: ':visible' },
            action:function(e,dt,button,config){
              config.filename = 'clientes_assistencia';
              config.title = 'Gestão de Clientes';
              config.pagesize = $('#pagesize').val();
              config.orientation = $('#orientation').val();
              $.fn.dataTable.ext.buttons.pdfHtml5.action(e,dt,button,config);
            },
            customize: function(doc) {

/*MARGENS DOCUMENTO*/
                doc.pageMargins = [5, 5, 5, 40];

/*AJUSTE DAS COLUNAS À PÁGINA*/
                doc.content[1].table.widths = Array(doc.content[1].table.body[0].length + 1).join('*').split('');

/* LOGO */
                doc.content.splice( 1, 0, {
                   // margin: [left, top, right, bottom]
                   margin: [ 10, 0, 0, 12 ],
                   alignment: 'center',
                   width:200,
                   image: 'data:image/png;base64,'+base64
                });

/* RESULTADOS PESQUISA */
                /*doc.content.splice( 2, 0, {
                   margin: [ 10, -5, 0, 5],
                   alignment: 'right',
                   fontSize: '11',
                   color : 'black',
                   text:'Pesquisa ( '+title+' )'
                 });*/

/* DADOS DA EMPRESA */
                doc['footer'] = {text: footer_txt, fontSize: '8', margin : [-10,0,0,10], color : 'black', alignment: 'center' };

             }       
          },
          {
            extend: 'pdfHtml5',
            className:'a3landscape hidden',
            text: '<i class="fa fa-file-pdf-o"></i>',
            orientation: 'landscape',
            pageSize: 'A3',
            footer: true,
            exportOptions: { orthogonal: 'export', columns: ':visible' },
            action:function(e,dt,button,config){
              config.filename = 'clientes_assistencia';
              config.title = 'Gestão de Clientes';
              config.pagesize = $('#pagesize').val();
              config.orientation = $('#orientation').val();
              $.fn.dataTable.ext.buttons.pdfHtml5.action(e,dt,button,config);
            },
            customize: function(doc) {

/*MARGENS DOCUMENTO*/
                doc.pageMargins = [5, 5, 5, 40];

/*AJUSTE DAS COLUNAS À PÁGINA*/
                doc.content[1].table.widths = Array(doc.content[1].table.body[0].length + 1).join('*').split('');

/* LOGO */
                doc.content.splice( 1, 0, {
                   // margin: [left, top, right, bottom]
                   margin: [ 10, 0, 0, 12 ],
                   alignment: 'center',
                   width:200,
                   image: 'data:image/png;base64,'+base64
                });

/* RESULTADOS PESQUISA */
                /*doc.content.splice( 2, 0, {
                   margin: [ 10, -5, 0, 5],
                   alignment: 'right',
                   fontSize: '11',
                   color : 'black',
                   text:'Pesquisa ( '+title+' )'
                 });*/

/* DADOS DA EMPRESA */
                doc['footer'] = {text: footer_txt, fontSize: '8', margin : [-10,0,0,10], color : 'black', alignment: 'center' };

             }   
          },


          {
            extend: 'pdfHtml5',
            className:'a2portrait hidden',
            text: '<i class="fa fa-file-pdf-o"></i>',
            orientation: 'portrait',
            pageSize: 'A2',
            footer: true,
            exportOptions: { orthogonal: 'export', columns: ':visible' },
            action:function(e,dt,button,config){
              config.filename = 'clientes_assistencia';
              config.title = 'Gestão de Clientes';

              
              $.fn.dataTable.ext.buttons.pdfHtml5.action(e,dt,button,config);
            },
            customize: function(doc) {

/*MARGENS DOCUMENTO*/
                doc.pageMargins = [5, 5, 5, 40];

/*AJUSTE DAS COLUNAS À PÁGINA*/
                doc.content[1].table.widths = Array(doc.content[1].table.body[0].length + 1).join('*').split('');

/* LOGO */
                doc.content.splice( 1, 0, {
                   // margin: [left, top, right, bottom]
                   margin: [ 10, 0, 0, 12 ],
                   alignment: 'center',
                   width:200,
                   image: 'data:image/png;base64,'+base64
                });

/* RESULTADOS PESQUISA */
                /*doc.content.splice( 2, 0, {
                   margin: [ 10, -5, 0, 5],
                   alignment: 'right',
                   fontSize: '11',
                   color : 'black',
                   text:'Pesquisa ( '+title+' )'
                 });*/

/* DADOS DA EMPRESA */
                doc['footer'] = {text: footer_txt, fontSize: '8', margin : [-10,0,0,10], color : 'black', alignment: 'center' };

             }       
          },
          {
            extend: 'pdfHtml5',
            className:'a2landscape hidden',
            text: '<i class="fa fa-file-pdf-o"></i>',
            orientation: 'landscape',
            pageSize: 'A2',
            footer: true,
            exportOptions: { orthogonal: 'export', columns: ':visible' },
            action:function(e,dt,button,config){
              config.filename = 'clientes_assistencia';
              config.title = 'Gestão de Clientes';
              $.fn.dataTable.ext.buttons.pdfHtml5.action(e,dt,button,config);
            },
            customize: function(doc) {

/*MARGENS DOCUMENTO*/
                doc.pageMargins = [5, 5, 5, 40];

/*AJUSTE DAS COLUNAS À PÁGINA*/
                doc.content[1].table.widths = Array(doc.content[1].table.body[0].length + 1).join('*').split('');

/* LOGO */
                doc.content.splice( 1, 0, {
                   // margin: [left, top, right, bottom]
                   margin: [ 10, 0, 0, 12 ],
                   alignment: 'center',
                   width:200,
                   image: 'data:image/png;base64,'+base64
                });

/* RESULTADOS PESQUISA */
                /*doc.content.splice( 2, 0, {
                   margin: [ 10, -5, 0, 5],
                   alignment: 'right',
                   fontSize: '11',
                   color : 'black',
                   text:'Pesquisa ( '+title+' )'
                 });*/

/* DADOS DA EMPRESA */
                doc['footer'] = {text: footer_txt, fontSize: '8', margin : [-10,0,0,10], color : 'black', alignment: 'center' };

             }   
          },

          {
           extend: 'csv',
           filename: 'cliente_assistencia',
           text: '<i class="fa fa-file-text-o"></i>',
           titleAttr: 'CSV',
           key: {key: 'l', altkey: true},
           exportOptions: { orthogonal: 'export', columns: ':visible' },
            action:function(e,dt,button,config){
              config.filename = 'clientes_assistencia';
              config.title = 'Gestão de Clientes';
              $.fn.dataTable.ext.buttons.csvHtml5.action(e,dt,button,config);
            }
          }

          ],
              "language": {
                "emptyTable":"Sem resultados",         
                "paginate": {
                  "first":      "Primeiro",
                  "last":       "Ultimo",
                  "next":       "Seguinte",
                  "previous":   "Anterior"
                },
                "zeroRecords": "Não tem registos",
                "loadingRecords": "A carregar...",
                "processing":     "A processar ...",
                "info": "Página nº _PAGE_ de _PAGES_",
                "infoEmpty": "Sem registos disponiveis",
                "infoFiltered": "(filtro de _MAX_ registos totais)",
                "search" : "Pesquisar Cliente: "
              }


     });
  }


	



	$('#example tbody').on( 'click', '.btn-edit', function () {
       arr = table.row($(this).parents('tr')).data();
       $('.servico_id').html(arr.id);
        editClientTable(arr);
        //editClientTable(arr);	
	});

	$('#example tbody').on( 'click', '.btn-danger', function () {
       arr = table.row($(this).parents('tr')).data();
       confirmDeleteAssistenceClients(arr.id);
	});


 






    



$('#nif_search, #cliente_search').change( function() {
        table.draw();
    } );







function generatePdf(p,o){
$('#pdf_conf').modal('hide');
$('.back').fadeIn();
setTimeout(function(){
$('.'+p+''+o).trigger('click');}, 500);
setTimeout(function(){$('.back').fadeOut();}, 1000);
} 


$('#example_filter').addClass('col-xs-12 col-md-6 col-sm-12 pull-right').removeClass('dataTables_filter');
$('#example_length').addClass('col-xs-6 col-md-3 col-sm-4 pull-left').removeClass('dataTables_length');
$('.dt-buttons').addClass('col-xs-6 col-md-3 col-sm-4 pull-right').removeClass('dt-buttons');

$('#example_filter input').attr('placeholder','Nome ou NIF');

$('#example_wrapper').on( 'click', '.buttons-pdf-format', function () {
$('#pdf_conf').modal();
});


</script>




</body>


</html>



