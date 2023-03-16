
<?php require ROOTDIR . '/header/head.php' ?>




    <title>Suporte de Assistencia Técnica</title>

</head>

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/> 
  <link href="css/select.dataTables.css" rel="stylesheet" type="text/css"/>
  <link href="css/buttons.dataTables.css" rel="stylesheet" type="text/css"/>
  <link href="css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>  
  <link href="css/mytables.css" rel="stylesheet" type="text/css"/>
  <link href="css/suporte.css" rel="stylesheet" type="text/css"/>
  <link href="css/personalized.css" rel="stylesheet" type="text/css"/> 




<!-- Loader Header -->
<?php $menu ='suporte'; require ROOTDIR . '/header/header.php';?>



<?php require 'modals.php' ?>


<!-- Line Page -->

<div style="margin-top:0px; ">




<div class="container-fluid" style="padding: 0px; margin-top: -21px;">


<div class="panel panel-default my_black" style="background-color: #414042!important;">
 <div class="container" style="padding-top: 20px;">
    <div class="row">
    					<!-- Data e Hora do Serviço do Cliente -->
    					<div class='col-md-3 col-sm-6 col-xs-12'>
    					    <label>Data e Hora Actual do Sistema</label>
		                <div class="form-group">
		                      <div class='input-group date' id='data_hora_suporte_clock' style="width: 100%;">
		                    <input type='text' readonly class="form-control" name="data_hora_suporte" id="data_hora_suporte" placeholder="Data Serviço do Cliente"/>
		                </div>
		            </div>
						</div>

						<!-- Numero Contribuinte-->

              <div class='col-md-3 col-sm-6 col-xs-12'>
                  <div class="form-group">
                      <label>Numero Contribuinte</label>
                      <div class="input-group" style='width:100%;'>
                          <select id="nif" class='form-control' style="border-radius: 0px!important;"></select>
                        <!--<input style="border-radius: 4px;" type="text" class="form-control" name="nif" id="nif" placeholder="Nif Cliente">-->
                      </div>
                  </div>
              </div>

              <!-- Nome da Empresa -->

              <div class='col-md-3 col-sm-6 col-xs-12'>
                  <div class="form-group">
                      <label>Nome da Empresa</label>
                      <div class="input-group" style='width:100%;'>
                        <!-- <input readonly style="border-radius: 4px;" type="text" class="form-control" name="cliente" id="cliente" placeholder="Empresa"> -->
                        <select id="cliente" class='form-control' style="border-radius: 0px!important;"></select>
                      </div>
                  </div>
              </div>

              <!-- Responsavel -->

              <div class='col-md-3 col-sm-6 col-xs-12'>
                  <div class="form-group">
                      <label>Nome do Cliente</label>
                      <div class="input-group" style='width:100%;'>
                        <input readonly style="border-radius: 4px;" type="text" class="form-control" name="responsavel" id="responsavel" placeholder="Responsável">
                      </div>
                  </div>
              </div>


              <!-- Tipo Servico -->

              <div class='col-md-3 col-sm-6 col-xs-12'>
                  <div class="form-group">
                      <label>Tipo de Serviço</label>
                      <div class="input-group" style='width:100%;'>
                        <input readonly style="border-radius: 4px;" type="text" class="form-control" name="categoria" id="cat" placeholder="Tipo Servico">
                      </div>
                  </div>
              </div>

              <!-- link Transfergest -->

              <div class='col-md-3 col-sm-6 col-xs-12'>
                  <div class="form-group">
                      <div class="input-group" style='width:100%;' id="link_button_trans">
                      </div>
                  </div>
              </div>
              
              
              <!-- link Site -->

              <div class='col-md-3 col-sm-6 col-xs-12'>
                  <div class="form-group">
                      <div class="input-group" style='width:100%;' id="link_button_site" >
                      </div>
                  </div>
              </div>

              <!-- Novo Suporte -->

              <div class='col-md-3 col-sm-6 col-xs-12'>
                  <div class="form-group">
                      <div class="input-group" style='width:100%;'>
                        <button type="button" class="btn btn-info" data-dismiss="modal" id="info-suporte">Criar Novo Suporte</button>
                      </div>
                  </div>
              </div>



              <!-- Perfil do Cliente -->
<div class="row">
<div class="col-xs-12">
<div class="panel panel-default m_client">
    <div class="panel-heading m_orange"><strong>Perfil do Cliente</strong>
    <div class="col-xs-0" id="btn1"><button title="Editar Perfil do Cliente" type="button" class="btn-sm btn btn-info btn-change" onclick="editarPerfilCliente();" ><span class="glyphicon glyphicon-edit"></span></button></div>
    <div class="col-xs-0" id="btn3"><button title="Fechar a Edição Perfil do Cliente" type="button" class="btn-sm btn btn-default" onclick="fecharEdicaoPerfilCliente();"><span class="glyphicon glyphicon-remove-sign"></span></button></div>
    <div class="col-xs-0" id="btn2"><button title="Actualizar Perfil do Cliente" type="button" class="btn-sm btn btn-success" onclick="updatePerfilCliente($('#select2-nif-container').text());" ><span class="glyphicon glyphicon-check"></span></button></div>

    </div>  
    <div class="panel-body"><strong>Observações:</strong>
      <div class="form-group">
        <textarea disabled class="form-control" rows="5" name="perfil" id="perfil_cliente_obs"></textarea>
       </div>

          
    </div>
  </div>
</div>
</div>

              
              



    </div>
</div>
</div>


<!-- Formulario do Suporte ao CLiente -->

<div class="col-xs-12" style="padding: 0px;">
<form id="suporte_add" >
  <div class="container-fluid" style="padding: 0px;">

<input type="hidden" id="hex_data_reference">
<input type="hidden" id="cliente_id">

  <!-- Assistencia Tecnica dos Clientes -->
  <div class="row">
<div class="col-xs-12 col-md-12">
  <div class="panel panel-default">
    <div class="panel-heading" style="background-color: #F6D155;"><strong>Assistencia:</strong>
    
      <div class="form-group">
                      <div class="input-group" style='width:100%;'>
                        <input style="border-radius: 4px;" type="text" class="form-control" name="assistencia" id="assistencia" placeholder="Assunto da Assistência">
                      </div>
       </div>
    </div>  
    <!-- Observacoes -->
    <div class="panel-body"><strong>Observações:</strong>
      <div class="form-group">
        <textarea class="form-control" rows="5" id="assistencia_obs" name="assistencia_obs"></textarea>
       </div>
       
       <div class="row" id="info-suporte-assistence">

       </div>

    </div>

  </div>
</div>
</div>



  <!-- Bugs -->

<div class="row">
<div class="col-xs-12 col-md-12">
  <div class="panel panel-default">
    <div class="panel-heading m_red"><strong>Bugs encontrados no sistema</strong>
    <button type="button" title="Adicionar Bug" class="btn-sm btn btn-info btn-add-bug"><span class="glyphicon glyphicon-plus"></span></button>

    </div>  
    <div class="panel-body">
      
      <div class="row">
        <div class="col-xs-12 col-md-3 form-group">
          <div class="input-group" style='width:100%;'>
           <input style="border-radius: 4px;" type="text" class="form-control" id="link1_bug" name="bugs_link" placeholder="Link do Bug">
          </div>
        </div>

        <div class="col-xs-12 col-md-6 form-group">
         <div class="input-group" style='width:100%;'>
          <input style="border-radius: 4px;" type="text" class="form-control" id="desc1_bug" name="bugs_descricao" placeholder="Descrição do Bug">
         </div>
        </div>
        
        
        <div class="col-xs-12 col-md-3 form-group">
         <div class="input-group" style='width:100%;'>
          <select class="form-control" name="tipo_prioridade_bug" id="tipo_prioridade_bug">
						            <option value='' selected>Escolhe Tipo de Prioridade *</option>
						            <option value='Alta'>Alta</option>
						            <option value='Média'>Média</option>
						            <option value='Baixa'>Baixa</option>
						         </select>
         </div>
        </div>
        
        
        
        
        
        
      </div>
      
      <div class="row" id="bugs_text">
      <!-- Bug 1 -->
        
      </div>
</div>



    </div>
  </div>
</div>
</div>





<div class="row">

<!-- Sugestões ao Sistema -->
<div class="col-xs-12 col-md-12">
  <div class="panel panel-default">
    <div class="panel-heading m_blue"><strong>Sugestões ao Sistema</strong>
    <button type="button" title="Adicionar Bug" class="btn-sm btn btn-info btn-add-sujestao" style="display: right!important;"><span class="glyphicon glyphicon-plus"></span></button>
    </div>  
    <div class="panel-body">

      

      <div class="row">
      <!-- Sugestoes 1 -->
        <div class="col-xs-12 col-md-3 form-group">
          <div class="input-group" style='width:100%;'>
           <input style="border-radius: 4px;" type="text" class="form-control" id="link_sugestao" name="link_sugestao" placeholder="Link da Sugestão">
          </div>
        </div>

        <div class="col-xs-12 col-md-6 form-group">
         <div class="input-group" style='width:100%;'>
          <input style="border-radius: 4px;" type="text" class="form-control" id="descricao_sugestao" name="descricao_sugestao" placeholder="Descrição da Sugestão">
         </div>
        </div>
        
        <div class="col-xs-12 col-md-3 form-group">
         <div class="input-group" style='width:100%;'>
          <select class="form-control" name="tipo_prioridade_sugestao" id="tipo_prioridade_sugestao">
						            <option value='' selected>Escolhe Tipo de Prioridade *</option>
						            <option value='Alta'>Alta</option>
						            <option value='Média'>Média</option>
						            <option value='Baixa'>Baixa</option>
						         </select>
         </div>
        </div>
        
        
      </div>

    <div class="row" id="sugestoes_text">
      <!-- Bug 1 -->
        
      </div>


    </div>
  </div>
</div>


<!-- Sugestões ao Sistema -->
<div class="col-xs-12 col-md-12">
  <div class="panel panel-default">
    <div class="panel-heading m_green"><strong>Pedido do Orçamento</strong>
    
      <button title="Adicionar Bug" class="btn-sm btn btn-info btn-add-pedido" style="float: right!important;"><span class="glyphicon glyphicon-plus"></span></button>

    </div>  
    <div class="panel-body">
    
      <div class="row">
      <!-- Sugestoes 1 -->
        <div class="col-xs-12 col-md-3 form-group">
          <div class="input-group" style='width:100%;'>
           <input style="border-radius: 4px;" type="text" class="form-control" id="link_pedido" name="link_pedido" placeholder="Link / Assunto">
          </div>
        </div>

        <div class="col-xs-12 col-md-6 form-group">
         <div class="input-group" style='width:100%;'>
          <input style="border-radius: 4px;" type="text" class="form-control" id="descricao_pedido" name="descricao_pedido" placeholder="Descrição do pedido de orçamento">
         </div>
         
         
        </div>
        
        
        <div class="col-xs-12 col-md-3 form-group">
         <div class="input-group" style='width:100%;'>
          <select class="form-control" name="tipo_prioridade_pedido" id="tipo_prioridade_pedido">
						            <option value='' selected>Escolhe Tipo de Prioridade *</option>
						            <option value='Alta'>Alta</option>
						            <option value='Média'>Média</option>
						            <option value='Baixa'>Baixa</option>
						         </select>
         </div>
        </div>
        
        
        
      </div>
      
      <div class="row" id="pedido_text">

      </div>



    </div>
  </div>
</div>

</div>


<!-- Assistencia de Operadores -->

<div class="panel panel-default">
 <div class="panel-heading m_black">
    <div class="row">
      <!-- Nome do Operador -->
      <div class="col-md-3 col-sm-6 col-xs-12">
             <label style="font-size: 15px;">Nome do Operador:</label>
            <div class="form-group">
                      
                      <div class="input-group" style='width:100%;'>
                        <input style="border-radius: 4px;" type="text" class="form-control" name="nome_operador" id="nome_operador" placeholder="Nome do Operador">
                      </div>
            </div>
        </div>
        <!-- Duração -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="form-group">
            <div class="input-group" style='width:100%;margin-top: 17px;font-size: 20px;'>
              <label>Duração:</label> <font type="hidden" id="clock_t">00:00:00</font>
            </div>
           </div>
        </div>

        <!-- Soluccionado problema -->
        <div class="col-md-5 col-sm-12 col-xs-12">
          <div class="form-group" style="margin-top: 20px;">
            <div class="input-group">
            <label> Foi Solucionado o contacto?</label>&nbsp;&nbsp;&nbsp;<input type='checkbox' checked name='my-checkbox' data-size='mini' data-off-color='danger' data-on-color='success' data-off-text="Não" data-on-text="Sim" name='solucao_problema' id='solucao_problema'>
            <input type="hidden" id="solucao_problema_option">

            </div>
            </div>
        </div>
      </div>


      <div class="row">


        <!-- Proximo Contacto (Data) -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <label style="font-size: 15px;">Proxima Data a Contactar:</label>
          <div class='input-group date' id='data_hora_contacto'>
                              
                              <input type='text' readonly class="form-control" name="proxima_data" id="proxima_data" placeholder="Proximo Contacto"/>
                              <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-calendar"></span>
                              </span>
           </div>
        </div>

        <!-- Nome a Pessoa a Contactar -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <label style="font-size: 15px;">Nome da Pessoa a Contactar:</label>
          <div class="form-group">
                      
                      <div class="input-group" style='width:100%;'>
                        <input style="border-radius: 4px;" type="text" class="form-control" name="nome_pessoa" id="nome_pessoa" placeholder="Nome pessoa a contactar">
                      </div>
                  </div>
        </div>

        <!-- Telefone -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <label style="font-size: 15px;">Telefone</label>
          <div class="form-group">
                      
                      <div class="input-group" style='width:100%;'>
                        <input style="border-radius: 4px;" type="number" class="form-control" name="telefone" id="telefone" placeholder="Telefone">
                      </div>
                  </div>
        </div>


        <div class="col-md-3 col-sm-6 col-xs-12">
          <button type="submit" class="btn btn-success" style="margin-top: 25px;">Fechar assistencia</button>
        </div>

        



        


      </div>
  </div>
  <div class="panel-body" style="background: #414042!important; color: #fff!important; "><strong>Observações finais sobre o contacto:</strong>
      <div class="form-group">
        <textarea class="form-control" rows="5" id="obs_suporte" name="obs_suporte"></textarea>
       </div>
    </div>
  </div>
  </div>
</form>
</div>
</div>



<!-- <script src="js/jquery-3.1.1.min.js"></script> -->
<script src="js/momentjs/moment-with-locales.min.js"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>
<!-- <script src="js/bootstrap.min.js"></script> -->
<script src="js/bootstrap-switch.min.js"></script>
<script src="js/bootbox.min.js"></script>
<script src="js/select2.full.min.js"></script>
<script src="js/shopinfo.js"></script>

<!-- Pesquisar a Assistencia de Clientes pelo NIF -->


<script>
  setTimeout(function() {$(".back").fadeOut(); GetNIF(); GetEmpresa(); });
</script>


<script>

 arr = JSON.parse(localStorage.getItem("nif"));
  opt='<option selected value="">NIF</option>';   
  for (i=0;i<arr.length;i++){
    opt +='<option value="'+arr[i].nif+'">'+arr[i].nif+'</option>';
  }
  $('#nif').html(opt).select2();


  arr2 = JSON.parse(localStorage.getItem("empresa"));
  opt2 ='<option selected value="">Empresa</option>';   
  for (i=0;i<arr2.length;i++){
    opt2 +='<option value="'+arr2[i].cliente+'">'+arr2[i].cliente+'</option>';
  }
  $('#cliente').html(opt2).select2();





$("[name='my-checkbox']").bootstrapSwitch();

    // Data do Proximo Contacto
    $( "#data_hora_contacto" ).prop('disabled',true);
    $( "input[name='proxima_data']" ).prop('disabled',true);
    $( "input[name='proxima_data']" ).val('');

    // Nome da Pessoa
    $( "input[name='nome_pessoa']" ).prop('disabled',true);
    $( "input[name='nome_pessoa']" ).val('');

    // Telefone
    $( "input[name='telefone']" ).prop('disabled',true);
    $( "input[name='telefone']" ).val('');

    // Observações Finais

    $( "textarea[name='obs_suporte']" ).prop('disabled',true);
    $( "textarea[name='obs_suporte']" ).val('');

    $("#solucao_problema_option").val('Sim');


  $('.bootstrap-switch-id-solucao_problema').on('switchChange.bootstrapSwitch', function (event, state) {
 if (state == true) {

    // Data do Contacto
    $( "#data_hora_contacto" ).prop('disabled',true);
    $( "input[name='proxima_data']" ).prop('disabled',true);
    $( "input[name='proxima_data']" ).val('');

    // Nome da Pessoa
    $( "input[name='nome_pessoa']" ).prop('disabled',true);
    $( "input[name='nome_pessoa']" ).val('');

    // Telefone
    $( "input[name='telefone']" ).prop('disabled',true);
    $( "input[name='telefone']" ).val('');

    // Observações Finais

    $( "textarea[name='obs_suporte']" ).prop('disabled',true);
    $( "textarea[name='obs_suporte']" ).val('');

    $("#solucao_problema_option").val('Sim');


 } else {
    // Data do Contacto
    $( "#data_hora_contacto" ).prop('disabled',false);
    $( "input[name='proxima_data']" ).prop('disabled',false);
    

    // Nome da Pessoa
    
    $( "input[name='nome_pessoa']" ).prop('disabled',false);

    // Telefone
    
    $( "input[name='telefone']" ).prop('disabled',false);

    // Observações Finais

    
    $( "textarea[name='obs_suporte']" ).prop('disabled',false);

    $("#solucao_problema_option").val('Não');

    
 }
   event.preventDefault();
});



// Clock de contador 


var h1 = document.getElementById('clock_t'),
    seconds = 0, minutes = 0, hours = 0,
    t;

function add() {
    seconds++;
    if (seconds >= 60) {
        seconds = 0;
        minutes++;
        if (minutes >= 60) {
            minutes = 0;
            hours++;
        }
    }
    
    h1.textContent = (hours ? (hours > 9 ? hours : "0" + hours) : "00") + ":" + (minutes ? (minutes > 9 ? minutes : "0" + minutes) : "00") + ":" + (seconds > 9 ? seconds : "0" + seconds);

    timer();
    
    
}
function timer() {
    t = setTimeout(add, 1000);
}


/* Start button */

function startClocker()
{
  timer();
}


/* Stop button */

function stopClocker() {
  clearTimeout(t);
}

function clearClocker()
{
  h1.textContent = "00:00:00";
    seconds = 0; minutes = 0; hours = 0;
}









var date = new Date();
          d = date.setDate(date.getDate());
          h = date.setHours(date.getHours());
          



// DatetimePicker das datas dos clientes de assistencia

$("#data_hora_suporte_clock").datetimepicker({ ignoreReadonly: true, 
    locale: 'pt', sideBySide: true, format: 'DD/MM/YYYY HH:mm', minDate: h, defaultDate: h, widgetPositioning: {vertical: 'bottom'}});


// Datas usando no datetimepicker - Proximo Contacto

  $("#data_hora_contacto").datetimepicker({ ignoreReadonly: true, format: 'DD/MM/YYYY', 
    locale: 'pt',widgetPositioning: {vertical: 'bottom'}});

// Atribuir um contador de assistencia do suporte

$(".btn-change").prop('disabled', true);


$('#nif').on('change', function(e) {
    //e.stopImmediatePropagation();
    var me = $(this);
    var number = 0;
    number = me.val();   
    
    $("#suporte_add").css('display','none');
    
    stopClocker();

    clearClocker();


    if (number == "")
    {
            $("#data_cl").val('');
            $("#cliente").val('');
            $("#responsavel").val('');
            $("#cat").val('');
            $("#link_button_trans").html('');
            $("#link_button_site").html('');
            $("#perfil_cliente_obs").val('');
            $("#info-suporte").css('display','none');
            //$("#suporte_add").css('display','none');
            $(".btn-change").prop('disabled', true);

            /*stopClocker();

            clearClocker();*/
            
            
    }
    

    if (number.length == 9) { // 12 coz my barcode is of length 12

       if (!Number(number))
       {
           $('.debug-url').html('O NIF tem que serem numeros inteiros e não caracteres.');
           $("#mensagem_ko").trigger('click');
           $(".btn-change").prop('disabled', true);
       } 
       else
       {
           $("#info-suporte").prop( "disabled", false );
            $("#info-suporte").css( 'margin-top', '25px' );
            $(".btn-change").prop('disabled', false);
           callClientesbyNIF(number);
          
       }
    }

});


$('#cliente').on('change', function(e) {
    //e.stopImmediatePropagation();
    var me = $(this);
    var cliente = me.val();   
    
    $("#suporte_add").css('display','none');
    
    stopClocker();

    clearClocker();


    if (cliente == "")
    {
            $("#data_cl").val('');
            $("#nif").val('');
            $("#responsavel").val('');
            $("#cat").val('');
            $("#link_button_trans").html('');
            $("#link_button_site").html('');
            $("#perfil_cliente_obs").val('');
            $("#info-suporte").css('display','none');
            //$("#suporte_add").css('display','none');
            $(".btn-change").prop('disabled', true);

            /*stopClocker();

            clearClocker();*/
            
            
    }
       else
       {
           $("#info-suporte").prop( "disabled", false );
            $("#info-suporte").css( 'margin-top', '25px' );
            $(".btn-change").prop('disabled', false);
           callNIFbyClients(cliente);
          
       }

});



  function callClientesbyNIF(vl1){
  setTimeout(function(){ 
  dataValue='&action=1&nif='+vl1;
  //console.log(dataValue);
    $.ajax({ url:'suporte/action_suporte.php',
    data:dataValue,
    type:'POST', 
    cache:false,
    success: function(data){
      $('.back').fadeOut();
      //console.log(data);

      arr = JSON.parse(data);

          if (arr == null || arr.length < 1)
          {
            $('.debug-url').html('Não foi possivel obter os clientes de assistencia com este NIF (Identificador). Tem que ser criado.');
            $("#mensagem_ko").trigger('click');
            $("#data_cl").val('');
            $("#select2-cliente-container").text('');
            $("#responsavel").val('');
            $("#cat").val('');
            $("#link_button_trans").html('');
            $("#link_button_site").html('');
            $("#perfil_cliente_obs").val('');
            $("#info-suporte").css('display','none');
            $("#suporte_add").css('display','none');
            $(".btn-change").prop('disabled', true);


            stopClocker();

            clearClocker();
          }
          else 
          {
            for(i=0;i<arr.length;i++)
            {
              $("#select2-cliente-container").text(arr[i].cliente);
              $("#responsavel").val(arr[i].responsavel);
              $("#cat").val(arr[i].categoria);
              $("#perfil_cliente_obs").val(arr[i].perfil);
              var link = arr[i].nif+".transfergest.com";
              
              var url_site = arr[i].dominio;
              
              
              var d = $("#data_hora_suporte").val();
              
              var split_date_hour = d.split(" ");
              

              var split_date = split_date_hour[0].split("/");
              
              var date_format = split_date[2] + "/" + split_date[1] + "/" + split_date[0];
              
             
              
              var milliseconds = new Date(date_format).getTime();
              


                    var m = milliseconds / 1000;

                    hexString = m.toString(16);
                    
                    var reference = hexString + "/" + arr[i].id;









                    $("#hex_data_reference").val(reference);

                    $("#cliente_id").val(arr[i].id);
                    
                    
              if (arr[i].categoria == 'Web Design')
              {
                    $("#link_button_site").html('<a type="button" style="width:100%" class="btn btn-success" id="site" target="_blank" href=http://'+url_site+'>'+url_site+'</a>');                  
              }
              if (arr[i].categoria == 'Design Gráfico')
              {
                 $("#link_button_trans").html('');
                 $("#link_button_site").html('');
                 
                  $("#info-suporte").css('display','block');

                    

                    

              }
              if (arr[i].categoria == 'Transfergest Light' || arr[i].categoria == 'Transfergest Pro' || arr[i].categoria == 'Transfergest Pro Loja' || arr[i].categoria == 'Transfergest Pro+Loja')
              {
                  $("#link_button_trans").html('<a type="button" style="width:100%" class="btn btn-success" id="trans" target="_blank" href=http://'+link+'>'+link+'</a>');
                  $("#link_button_site").html('<a type="button" style="width:100%" class="btn btn-success" id="site" target="_blank" href=http://'+url_site+'>'+url_site+'</a>');

                  $("#info-suporte").css('display','block');

        

              }
              

            }

          }
    },
    error:function(data){
        $('#Modalko .debug-url').html('Não foi possivel obter dados dos Clientes, verifique a ligação Wi-Fi.');
        $("#mensagem_ko").trigger('click');
         $('.back').fadeOut();
      }
    });

}, 1000);
}




function callNIFbyClients(vl1){
  setTimeout(function(){ 
  dataValue='&action=11&clientes='+vl1;
  //console.log(dataValue);
    $.ajax({ url:'suporte/action_suporte.php',
    data:dataValue,
    type:'POST', 
    cache:false,
    success: function(data){
      $('.back').fadeOut();
      //console.log(data);

      arr = JSON.parse(data);

          if (arr == null || arr.length < 1)
          {
            $('.debug-url').html('Não foi possivel obter os clientes de assistencia com este NIF (Identificador). Tem que ser criado.');
            $("#mensagem_ko").trigger('click');
            $("#data_cl").val('');
            $("#select2-nif-container").text('');
            $("#responsavel").val('');
            $("#cat").val('');
            $("#link_button_trans").html('');
            $("#link_button_site").html('');
            $("#perfil_cliente_obs").val('');
            $("#info-suporte").css('display','none');
            $("#suporte_add").css('display','none');
            $(".btn-change").prop('disabled', true);


            stopClocker();

            clearClocker();
          }
          else 
          {
            for(i=0;i<arr.length;i++)
            {
               $("#select2-nif-container").text(arr[i].nif);
              $("#responsavel").val(arr[i].responsavel);
              $("#cat").val(arr[i].categoria);
              $("#perfil_cliente_obs").val(arr[i].perfil);
              var link = arr[i].nif+".transfergest.com";
              
              var url_site = arr[i].dominio;
              
              
              var d = $("#data_hora_suporte").val();
              
              var split_date_hour = d.split(" ");
              

              var split_date = split_date_hour[0].split("/");
              
              var date_format = split_date[2] + "/" + split_date[1] + "/" + split_date[0];
              
             
              
              var milliseconds = new Date(date_format).getTime();
              


                    var m = milliseconds / 1000;

                    hexString = m.toString(16);
                    
                    var reference = hexString + "/" + arr[i].id;









                    $("#hex_data_reference").val(reference);

                    $("#cliente_id").val(arr[i].id);
                    
                    
              if (arr[i].categoria == 'Web Design')
              {
                    $("#link_button_site").html('<a type="button" style="width:100%" class="btn btn-success" id="site" target="_blank" href=http://'+url_site+'>'+url_site+'</a>');                  
              }
              if (arr[i].categoria == 'Design Gráfico')
              {
                 $("#link_button_trans").html('');
                 $("#link_button_site").html('');
                 
                  $("#info-suporte").css('display','block');

                    

                    

              }
              if (arr[i].categoria == 'Transfergest Light' || arr[i].categoria == 'Transfergest Pro' || arr[i].categoria == 'Transfergest Pro Loja' || arr[i].categoria == 'Transfergest Pro+Loja')
              {
                  $("#link_button_trans").html('<a type="button" style="width:100%" class="btn btn-success" id="trans" target="_blank" href=http://'+link+'>'+link+'</a>');
                  $("#link_button_site").html('<a type="button" style="width:100%" class="btn btn-success" id="site" target="_blank" href=http://'+url_site+'>'+url_site+'</a>');

                  $("#info-suporte").css('display','block');

        

              }
              

            }

          }
    },
    error:function(data){
        $('#Modalko .debug-url').html('Não foi possivel obter dados dos Clientes, verifique a ligação Wi-Fi.');
        $("#mensagem_ko").trigger('click');
         $('.back').fadeOut();
      }
    });

}, 1000);
}





// Abrir um novo suporte para a assistencia

$("#info-suporte").on('click', function ()
{
    
    stopClocker();
    clearClocker();


    $("#suporte_add").css('display','block');
    $("#suporte_add").css('padding','15px');
    

    $('html, body').animate({ scrollTop: $('#suporte_add').offset().top }, 'slow');

    



    
    
      


      callBugs();
      callSugestao();
      callPedido();
      callSuportAssistence();
      
      
      
      
      startClocker();
      
    

    

    


});

// Fechar a assistencia do Suporte

$("#suporte_add").on('submit',function(e)
{
  e.preventDefault();

  

  dataValue='data_hora_suporte='+$("#data_hora_suporte").val()+'&assistencia='+$("#assistencia").val()+'&assistencia_obs='+$("#assistencia_obs").val()+'&nome_operador='+$("#nome_operador").val()+'&duracao='+$("#clock_t").text()+'&solucao_problema='+$("#solucao_problema_option").val()+'&proxima_data='+$("#proxima_data").val()+'&nome_pessoa='+$("#nome_pessoa").val()+'&telefone='+$("#telefone").val()+'&obs_suporte='+$("#obs_suporte").val()+'&cliente_id='+$("#cliente_id").val()+'&referencia='+$("#hex_data_reference").val()+'&perfil='+$("#perfil_cliente_obs").val()+'&bugs_link='+$("#link1_bug").val()+'&bugs_descricao='+$("#desc1_bug").val()+'&tipo_prioridade_bug='+$("#tipo_prioridade_bug").val()+'&link_sugestao='+$("#link_sugestao").val()+'&descricao_sugestao='+$("#descricao_sugestao").val()+'&tipo_prioridade_sugestao='+$("#tipo_prioridade_sugestao").val()+'&link_pedido='+$("#link_pedido").val()+'&descricao_pedido='+$("#descricao_pedido").val()+'&tipo_prioridade_pedido='+$("#tipo_prioridade_pedido").val()+"&username="+$("#user_name").val()+'&action=9';
  //console.log(dataValue);

  $.ajax({ url:'suporte/action_suporte.php',
    data:dataValue,
    type:'POST', 

    success: function(data){
           arr=[];
      arr =  JSON.parse(data);
      //console.log(data);
      if (arr.error){
        $('.debug-url').html('Por favor, verifique:<br><br>'+arr.error+'<br> e tente novamente.');
        $('#Modalko').modal();
      }

      else if (arr.success == 0){
        $('.debug-url').html('Surgiu um erro, o registo de suporte, não foi criado no sistema!');
        $('#Modalko').modal();
      }

      else if(arr.success == 1){
          $('.debug-url').html('O registo de suporte foi criado com sucesso');
          $("#mensagem_ok").trigger('click');
          $('html, body').animate({ scrollTop: 0 }, 500);
          setTimeout(function(){
          $('#Modalok').modal('hide');},2500);
          //$("#suporte_add").reset();
          callSuportAssistence()
          $("#suporte_add")[0].reset();
          $("#suporte_add").css('display','none');
          stopClocker();
          clearClocker();
      }
      
      
      
      
    },
    error: function(){
      $('.debug-url').html('Lamentamos, o registo de suporte, não foi criado com sucesso. Verifique a ligação Wi-Fi e tente novamente.');
      $('#Modalko').modal();
    }
  });

  // Se os valores forem guardados com sucesso
  //stopClocker();

  
});

// Editar o Perfil dos Clientes e guardar de acordo com este NIF - Adicionar os 

function editarPerfilCliente()
{
  $("#perfil_cliente_obs").prop('disabled',false);
  $("#btn1").css('display','none');
  $("#btn2").css('display','block');
  $("#btn3").css('display','block');
}

// Fechar a edição do campo do Perfil dos Clientes

function fecharEdicaoPerfilCliente()
{
  $("#perfil_cliente_obs").prop('disabled',true);
  $("#btn1").css('display','block');
  $("#btn2").css('display','none');
  $("#btn3").css('display','none');
}

// Actualizar o Perfil dos Clientes

function updatePerfilCliente(vl)
{
  dataValue="action=2&nif="+vl+"&perfil="+$('#perfil_cliente_obs').val();


  //console.log(dataValue);

$.ajax({ url:'suporte/action_suporte.php',
    data:dataValue,
    type:'POST',
    cache:false,
    success: function(data){


     if (data == 1) {
      $('.debug-url').html('O Perfil do Cliente de Assistencia <strong class="cpt">'+vl+'</strong> foi modificado com sucesso');
          $("#mensagem_ok").trigger('click');
          $('html, body').animate({ scrollTop: 0 }, 500);
          setTimeout(function(){
          $('#Modalok').modal('hide');},2500);
          $("#perfil_cliente_obs").prop('disabled',true);
          $("#btn1").css('display','block');
          $("#btn2").css('display','none');
          $("#btn3").css('display','none');
          
     }
     else if (data == 0){
       $('.cancel-edit').trigger('click');
       $('.debug-url').html('O Perfil do Cliente de Assistencia com o NIF <strong>'+vl+'</strong> não foi modificada!');
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


//---------------------------------- Bugs -------------------------------------------------

// Adicionar um Novo Bug no Sistema de Suporte

$(".btn-add-bug").on('click', function(e)
{
  e.preventDefault();
  dataValue = "action=3&bugs_link="+$("#link1_bug").val()+"&bugs_descricao="+$("#desc1_bug").val()+"&referencia="+$("#hex_data_reference").val()+"&data_hora_suporte="+$("#data_hora_suporte").val()+"&cliente_id="+$("#cliente_id").val()+"&username="+$("#user_name").val()+'&duracao='+$("#clock_t").text()+'&tipo_prioridade_bug='+$("#tipo_prioridade_bug").val();
  //console.log(dataValue);
  $.ajax({ url:'suporte/action_suporte.php',
    data:dataValue,
    type:'POST', 

    success: function(data){
           arr=[];
      arr =  JSON.parse(data);
      //console.log(data);
      if (arr.error){
        $('.debug-url').html('Por favor, verifique:<br><br>'+arr.error+'<br> e tente novamente.');
        $('#Modalko').modal();
      }

      else if (arr.success == 0){
        $('.debug-url').html('Surgiu um erro, o Registo do Bug no sistema de suporte, não foi criado!');
        $('#Modalko').modal();
      }

      else if(arr.success == 1){
          callBugs();
          $('.debug-url').html('O Registo do Bug no sistema de suporte <strong class="cpt">'+arr.id+'</strong> foi criado com sucesso');
          $("#mensagem_ok").trigger('click');
          setTimeout(function(){
          $('#Modalok').modal('hide');},2500);
          $("#link1_bug").val('');
          $("#desc1_bug").val('');

           
      }
    },
    error: function(){
      $('.debug-url').html('O Registo do Bug no sistema de suporte não foi criado, p.f. verifique a ligação Wi-Fi.');
      $('#Modalko').modal();
      $('#clientes__modal_add').modal('hide');
    }
  });
});

// Chamada ao Sistema de Bugs

function callBugs()
{
  var s = '';
  setTimeout(function(){ 
  dataValue='action=4&cliente_id='+$("#cliente_id").val()+"&data_hora_suporte="+$("#data_hora_suporte").val();
  //console.log(dataValue);
    $.ajax({ url:'suporte/action_suporte.php',
    data:dataValue,
    type:'POST', 
    cache:false,
    success: function(data){
      $('.back').fadeOut();
      //console.log(data);

      arr = JSON.parse(data);
      
      

          if (arr == null || arr.length < 1)
          {
            
            $("#bugs_text").html('');
          }
          else 
          {

            for(i=0;i<arr.length;i++)
            {
                
                myDate = new Date(arr[i].data_ins*1000);
                a = moment(myDate).format('DD/MM/YYYY');
                
            
                
                
                if (arr[i].estado == 'Concluido')
                {
                   //s += '<tr id="edit-bug-'+arr[i].id+'" class="w3-pale-green"><td scope="row" style="width: 20%;"><font style="margin-left: 10px;">'+arr[i].link+'</font></td><td scope="row" style="width: 60%;"><font style="margin-left: 20px;">'+arr[i].descricao+'</font></td><td scope="row" style="width: 20%;"><font style="margin-left: 20px;">'+arr[i].estado+'</font></td><td id="action-'+arr[i].id+'"></td></tr>';
                    s += ""; 
                    
                }
                else if(arr[i].estado == 'Analise')
                {
                    s += '<tr id="edit-bug-'+arr[i].id+'" class="w3-pale-yellow"><td scope="row" style="width: 10%;"><font style="margin-left: 10px;">'+a+'</font></td><td scope="row" style="width: 20%;"><font style="margin-left: 10px;">'+arr[i].link+'</font></td><td scope="row" style="width: 60%;"><font style="margin-left: 20px;">'+arr[i].descricao+'</font></td><td scope="row" style="width: 10%;"><font style="margin-left: 20px;">'+arr[i].estado+'</font></td><td scope="row" style="width: 10%;"><font style="margin-left: 20px;">'+arr[i].tipo_priodade+'</font></td><td id="action-'+arr[i].id+'"></td></tr>';

                }
                else if(arr[i].estado == 'Pendente')
                {
                    s += '<tr id="edit-bug-'+arr[i].id+'" class="w3-pale-red"><td scope="row" style="width: 10%;"><font style="margin-left: 10px;">'+a+'</font></td><td scope="row" style="width: 20%;"><font style="margin-left: 10px;">'+arr[i].link+'</font></td><td scope="row" style="width: 60%;"><font style="margin-left: 20px;">'+arr[i].descricao+'</font></td><td scope="row" style="width: 10%;"><font style="margin-left: 20px;">'+arr[i].estado+'</font></td><td scope="row" style="width: 10%;"><font style="margin-left: 20px;">'+arr[i].tipo_priodade+'</font></td><td id="action-'+arr[i].id+'"></td></tr>';
                    
                }
                else if(arr[i].estado == 'Teste')
                {
                    s += '<tr id="edit-bug-'+arr[i].id+'" class="w3-pale-blue"><td scope="row" style="width: 10%;"><font style="margin-left: 10px;">'+a+'</font></td><td scope="row" style="width: 20%;"><font style="margin-left: 10px;">'+arr[i].link+'</font></td><td scope="row" style="width: 60%;"><font style="margin-left: 20px;">'+arr[i].descricao+'</font></td><td scope="row" style="width: 10%;"><font style="margin-left: 20px;">'+arr[i].estado+'</font></td><td scope="row" style="width: 10%;"><font style="margin-left: 20px;">'+arr[i].tipo_priodade+'</font></td><td id="action-'+arr[i].id+'"></td></tr>';

                }
                else
                {
                  s += '<tr id="edit-bug-'+arr[i].id+'"><td scope="row" style="width: 10%;"><font style="margin-left: 10px;">'+a+'</font></td><td scope="row" style="width: 20%;"><font style="margin-left: 10px;">'+arr[i].link+'</font></td><td scope="row" style="width: 60%;"><font style="margin-left: 20px;">'+arr[i].descricao+'</font></td><td scope="row" style="width: 10%;"><font style="margin-left: 20px;">'+arr[i].estado+'</font></td><td scope="row" style="width: 10%;"><font style="margin-left: 20px;">'+arr[i].tipo_priodade+'</font></td><td id="action-'+arr[i].id+'"></td></tr>';

                }


            }
            $("#bugs_text").html('<div class="table-responsive"><table class="table table-striped" style="margin-bottom:0px;"><tbody style="display: block; height: 150px; overflow-y: scroll">'+s+'</tbody></table></div>');
          }
    },
    error:function(data){
        $('#Modalko .debug-url').html('Não os bugs de suporte, verifique a ligação Wi-Fi.');
        $("#mensagem_ko").trigger('click');
         $('.back').fadeOut();
      }
    });

}, 1000);
}

//------------------------------- Sugestões -----------------------------------------------

// Adicionra uma nova sugestão ao suporte

$(".btn-add-sujestao").on('click', function(e)
{
  e.preventDefault();
  dataValue = "action=5&link_sugestao="+$("#link_sugestao").val()+"&descricao_sugestao="+$("#descricao_sugestao").val()+"&referencia="+$("#hex_data_reference").val()+"&data_hora_suporte="+$("#data_hora_suporte").val()+"&cliente_id="+$("#cliente_id").val()+"&username="+$("#user_name").val()+'&duracao='+$("#clock_t").text()+'&tipo_prioridade_sugestao='+$("#tipo_prioridade_sugestao").val();
  //console.log(dataValue);
  $.ajax({ url:'suporte/action_suporte.php',
    data:dataValue,
    type:'POST', 

    success: function(data){
           arr=[];
      arr =  JSON.parse(data);
      //console.log(data);
      if (arr.error){
        $('.debug-url').html('Por favor, verifique:<br><br>'+arr.error+'<br> e tente novamente.');
        $('#Modalko').modal();
      }

      else if (arr.success == 0){
        $('.debug-url').html('Surgiu um erro, O Registo de uma sugestão no sistema de suporte, não foi criado!');
        $('#Modalko').modal();
      }

      else if(arr.success == 1){
          callSugestao();
          $('.debug-url').html('O Registo de uma sugestão no sistema de suporte <strong class="cpt">'+arr.id+'</strong> foi criado com sucesso');
          $("#mensagem_ok").trigger('click');
          setTimeout(function(){
          $('#Modalok').modal('hide');},2500);
          $("#link_sugestao").val('');
          $("#descricao_sugestao").val('');

           
      }
    },
    error: function(){
      $('.debug-url').html('O Registo de uma sugestão no sistema de suporte não foi criado, p.f. verifique a ligação Wi-Fi.');
      $('#Modalko').modal();
      $('#clientes__modal_add').modal('hide');
    }
  });
});







function callSugestao()
{
  var s = '';
  setTimeout(function(){ 
  dataValue='action=6&cliente_id='+$("#cliente_id").val()+"&data_hora_suporte="+$("#data_hora_suporte").val();
  //console.log(dataValue);
    $.ajax({ url:'suporte/action_suporte.php',
    data:dataValue,
    type:'POST', 
    cache:false,
    success: function(data){
      $('.back').fadeOut();
      //console.log(data);

      arr = JSON.parse(data);

          if (arr == null || arr.length < 1)
          {
            $("#sugestoes_text").html('');
            
          }
          else 
          {

            for(i=0;i<arr.length;i++)
            {
                myDate = new Date(arr[i].data_ins*1000);
                a = moment(myDate).format('DD/MM/YYYY');
                
              if (arr[i].estado == 'Concluido')
                {
                   //s += '<tr id="edit-descricao-'+arr[i].id+'" class="w3-pale-green"><td scope="row" style="width: 33%;"><font style="margin-left: 10px;">'+arr[i].link+'</font></td><td scope="row" style="width: 33%;"><font style="margin-left: 20px;">'+arr[i].descricao+'</font></td><td scope="row" style="width: 33%;"><font style="margin-left: 20px;">'+arr[i].estado+'</font></td><td id="action-'+arr[i].id+'"></td></tr>';
                    s += "";
                    
                }
                else if(arr[i].estado == 'Analise')
                {
                    s += '<tr id="edit-descricao-'+arr[i].id+'" class="w3-pale-yellow"><td scope="row" style="width: 10%;"><font style="margin-left: 10px;">'+a+'</font></td><td scope="row" style="width: 20%;"><font style="margin-left: 10px;">'+arr[i].link+'</font></td><td scope="row" style="width: 60%;"><font style="margin-left: 20px;">'+arr[i].descricao+'</font></td><td scope="row" style="width: 10%;"><font style="margin-left: 20px;">'+arr[i].estado+'</font></td><td scope="row" style="width: 10%;"><font style="margin-left: 20px;">'+arr[i].tipo_priodade+'</font></td><td id="action-'+arr[i].id+'"></td></tr>';

                }
                else if(arr[i].estado == 'Pendente')
                {
                    s += '<tr id="edit-descricao-'+arr[i].id+'" class="w3-pale-red"><td scope="row" style="width: 10%;"><font style="margin-left: 10px;">'+a+'</font></td><td scope="row" style="width: 20%;"><font style="margin-left: 10px;">'+arr[i].link+'</font></td><td scope="row" style="width: 60%;"><font style="margin-left: 20px;">'+arr[i].descricao+'</font></td><td scope="row" style="width: 10%;"><font style="margin-left: 20px;">'+arr[i].estado+'</font></td><td scope="row" style="width: 10%;"><font style="margin-left: 20px;">'+arr[i].tipo_priodade+'</font></td><td id="action-'+arr[i].id+'"></td></tr>';

                }
                else if(arr[i].estado == 'Teste')
                {
                    s += '<tr id="edit-descricao-'+arr[i].id+'" class="w3-pale-blue"><td scope="row" style="width: 10%;"><font style="margin-left: 10px;">'+a+'</font></td><td scope="row" style="width: 20%;"><font style="margin-left: 10px;">'+arr[i].link+'</font></td><td scope="row" style="width: 60%;"><font style="margin-left: 20px;">'+arr[i].descricao+'</font></td><td scope="row" style="width: 10%;"><font style="margin-left: 20px;">'+arr[i].estado+'</font></td><td scope="row" style="width: 10%;"><font style="margin-left: 20px;">'+arr[i].tipo_priodade+'</font></td><td id="action-'+arr[i].id+'"></td></tr>';
                    
                }
                else
                {
                  s += '<tr id="edit-descricao-'+arr[i].id+'"><td scope="row" style="width: 10%;"><font style="margin-left: 10px;">'+a+'</font></td><td scope="row" style="width: 20%;"><font style="margin-left: 10px;">'+arr[i].link+'</font></td><td scope="row" style="width: 60%;"><font style="margin-left: 20px;">'+arr[i].descricao+'</font></td><td scope="row" style="width: 10%;"><font style="margin-left: 20px;">'+arr[i].estado+'</font></td><td scope="row" style="width: 10%;"><font style="margin-left: 20px;">'+arr[i].tipo_priodade+'</font></td><td id="action-'+arr[i].id+'"></td></tr>';

                }
            }
            $("#sugestoes_text").html('<div class="table-responsive"><table class="table table-striped" style="margin-bottom:0px;"><tbody style="display: block; height: 150px; overflow-y: scroll">'+s+'</tbody></table></div>');
          }
    },
    error:function(data){
        $('#Modalko .debug-url').html('Não os bugs de suporte, verifique a ligação Wi-Fi.');
        $("#mensagem_ko").trigger('click');
         $('.back').fadeOut();
      }
    });

}, 1000);
}


//----------------------------- Pedido de Orcamento --------------------------------------


// Adicionar um novo pedido de suporte



$(".btn-add-pedido").on('click', function(e)
{
  e.preventDefault();
  dataValue = "action=7&link_pedido="+$("#link_pedido").val()+"&descricao_pedido="+$("#descricao_pedido").val()+"&referencia="+$("#hex_data_reference").val()+"&data_hora_suporte="+$("#data_hora_suporte").val()+"&cliente_id="+$("#cliente_id").val()+"&username="+$("#user_name").val()+'&duracao='+$("#clock_t").text()+'&tipo_prioridade_pedido='+$("#tipo_prioridade_pedido").val();
  //console.log(dataValue);
  $.ajax({ url:'suporte/action_suporte.php',
    data:dataValue,
    type:'POST', 

    success: function(data){
           arr=[];
      arr =  JSON.parse(data);
      //console.log(data);
      if (arr.error){
        $('.debug-url').html('Por favor, verifique:<br><br>'+arr.error+'<br> e tente novamente.');
        $('#Modalko').modal();
      }

      else if (arr.success == 0){
        $('.debug-url').html('Surgiu um erro, O Registo de um pedido de orcamento no sistema de suporte, não foi criado!');
        $('#Modalko').modal();
      }

      else if(arr.success == 1){
          callPedido();
          $('.debug-url').html('O Registo de um pedido de orcamento no sistema de suporte <strong class="cpt">'+arr.id+'</strong> foi criado com sucesso');
          $("#mensagem_ok").trigger('click');
          setTimeout(function(){
          $('#Modalok').modal('hide');},2500);
          $("#link_pedido").val('');
          $("#descricao_pedido").val('');

           
      }
    },
    error: function(){
      $('.debug-url').html('O Registo de uma sugestão no sistema de suporte não foi criado, p.f. verifique a ligação Wi-Fi.');
      $('#Modalko').modal();
      $('#clientes__modal_add').modal('hide');
    }
  });
});

// Obter os valores dos pedidos de orcamento de suporte

function callPedido()
{
  var s = '';
  setTimeout(function(){ 
  dataValue='action=8&cliente_id='+$("#cliente_id").val()+"&data_hora_suporte="+$("#data_hora_suporte").val();
  //console.log(dataValue);
    $.ajax({ url:'suporte/action_suporte.php',
    data:dataValue,
    type:'POST', 
    cache:false,
    success: function(data){
      $('.back').fadeOut();
      //console.log(data);

      arr = JSON.parse(data);

          if (arr == null || arr.length < 1)
          {
            $("#pedido_text").html('');
            
          }
          else 
          {

            for(i=0;i<arr.length;i++)
            {
                myDate = new Date(arr[i].data_ins*1000);
                a = moment(myDate).format('DD/MM/YYYY');
                
                
               if (arr[i].estado == 'Concluido')
                {
                   //s += '<tr id="edit-pedido-'+arr[i].id+'" class="w3-pale-green"><td scope="row" style="width: 33%;"><font style="margin-left: 10px;">'+arr[i].link+'</font></td><td scope="row" style="width: 33%;"><font style="margin-left: 20px;">'+arr[i].descricao+'</font></td><td scope="row" style="width: 33%;"><font style="margin-left: 20px;">'+arr[i].estado+'</font></td><td id="action-'+arr[i].id+'"></td></tr>';
                    s += '';
                    
                }   
                else if(arr[i].estado == 'Analise')
                {
                    s += '<tr id="edit-pedido-'+arr[i].id+'" class="w3-pale-yellow"><td scope="row" style="width: 10%;"><font style="margin-left: 10px;">'+a+'</font></td><td scope="row" style="width: 20%;"><font style="margin-left: 10px;">'+arr[i].link+'</font></td><td scope="row" style="width: 60%;"><font style="margin-left: 20px;">'+arr[i].descricao+'</font></td><td scope="row" style="width: 10%;"><font style="margin-left: 20px;">'+arr[i].estado+'</font></td><td scope="row" style="width: 10%;"><font style="margin-left: 20px;">'+arr[i].tipo_priodade+'</font></td><td id="action-'+arr[i].id+'"></td></tr>';

                }
                else if(arr[i].estado == 'Pendente')
                {
                    s += '<tr id="edit-pedido-'+arr[i].id+'" class="w3-pale-red"><td scope="row" style="width: 10%;"><font style="margin-left: 10px;">'+a+'</font></td><td scope="row" style="width: 20%;"><font style="margin-left: 10px;">'+arr[i].link+'</font></td><td scope="row" style="width: 60%;"><font style="margin-left: 20px;">'+arr[i].descricao+'</font></td><td scope="row" style="width: 10%;"><font style="margin-left: 20px;">'+arr[i].estado+'</font></td><td scope="row" style="width: 10%;"><font style="margin-left: 20px;">'+arr[i].tipo_priodade+'</font></td><td id="action-'+arr[i].id+'"></td></tr>';

                }
                else if(arr[i].estado == 'Teste')
                {
                    s += '<tr id="edit-pedido-'+arr[i].id+'" class="w3-pale-blue"><td scope="row" style="width: 10%;"><font style="margin-left: 10px;">'+a+'</font></td><td scope="row" style="width: 20%;"><font style="margin-left: 10px;">'+arr[i].link+'</font></td><td scope="row" style="width: 60%;"><font style="margin-left: 20px;">'+arr[i].descricao+'</font></td><td scope="row" style="width: 10%;"><font style="margin-left: 20px;">'+arr[i].estado+'</font></td><td scope="row" style="width: 10%;"><font style="margin-left: 20px;">'+arr[i].tipo_priodade+'</font></td><td id="action-'+arr[i].id+'"></td></tr>';

                }
                else
                {
                  s += '<tr id="edit-pedido-'+arr[i].id+'"><td scope="row" style="width: 20%;"><font style="margin-left: 10px;">'+arr[i].link+'</font></td><td scope="row" style="width: 60%;"><font style="margin-left: 20px;">'+arr[i].descricao+'</font></td><td scope="row" style="width: 20%;"><font style="margin-left: 20px;">'+arr[i].estado+'</font></td><td scope="row" style="width: 10%;"><font style="margin-left: 20px;">'+arr[i].tipo_priodade+'</font></td><td id="action-'+arr[i].id+'"></td></tr>';

                }
            }
            $("#pedido_text").html('<div class="table-responsive"><table class="table table-striped" style="margin-bottom:0px;"><tbody style="display: block; height: 150px; overflow-y: scroll">'+s+'</tbody></table></div>');
          }
    },
    error:function(data){
        $('#Modalko .debug-url').html('Não os bugs de suporte, verifique a ligação Wi-Fi.');
        $("#mensagem_ko").trigger('click');
         $('.back').fadeOut();
      }
    });

}, 1000);
}


// Chamada dos Pedidos de Assistencia dos Clientes


function callSuportAssistence()
{
  var s = '';
  setTimeout(function(){ 
  //dataValue='action=10&cliente_id='+$("#cliente_id").val();
  dataValue='action=10&nif='+$("#select2-nif-container").text()+"&clientes="+$("#select2-cliente-container").text();
  //console.log(dataValue);
    $.ajax({ url:'suporte/action_suporte.php',
    data:dataValue,
    type:'POST', 
    cache:false,
    success: function(data){
      $('.back').fadeOut();
      //console.log(data);

      arr = JSON.parse(data);
      
      

          if (arr == null || arr.length < 1)
          {
            
            $("#info-suporte-assistence").html('');

          }
          else 
          {

            for(i=0;i<arr.length;i++)
            {
                
                myDate = new Date(arr[i].data_hora_suporte*1000);
                a = moment(myDate).format('DD/MM/YYYY');
                

                if (arr[i].estado == 'Resolvido')
                {
                    //s += '<tr id="edit-suporte-assistence-'+arr[i].id+'" class="w3-pale-green"><td scope="row" style="width: 10%;"><font style="margin-left: 10px;">'+a+'</font></td><td scope="row" style="width: 20%;"><font style="margin-left: 10px;">'+arr[i].assistencia_nome+'</font></td><td scope="row" style="width: 70%;"><font style="margin-left: 20px;">'+arr[i].assistencia_obs+'</font></td><td id="action-'+arr[i].id+'"></td></tr>';
                    s += '';
                    
                }   
                else if(arr[i].estado == 'Nao Atende')
                {
                  s += '<tr id="edit-suporte-assistence-'+arr[i].id+'" class="w3-pale-red"><td scope="row" style="width: 10%;"><font style="margin-left: 10px;">'+a+'</font></td><td scope="row" style="width: 20%;"><font style="margin-left: 10px;">'+arr[i].assistencia_nome+'</font></td><td scope="row" style="width: 70%;"><font style="margin-left: 20px;">'+arr[i].assistencia_obs+'</font></td><td id="action-'+arr[i].id+'"></td></tr>';

                }
                else if(arr[i].estado == 'Pendente')
                {
                  s += '<tr id="edit-suporte-assistence-'+arr[i].id+'" class="w3-pale-yellow"><td scope="row" style="width: 10%;"><font style="margin-left: 10px;">'+a+'</font></td><td scope="row" style="width: 20%;"><font style="margin-left: 10px;">'+arr[i].assistencia_nome+'</font></td><td scope="row" style="width: 70%;"><font style="margin-left: 20px;">'+arr[i].assistencia_obs+'</font></td><td id="action-'+arr[i].id+'"></td></tr>';

                }
                else if(arr[i].estado == 'Remarcado')
                {
                  s += '<tr id="edit-suporte-assistence-'+arr[i].id+'" class="w3-pale-blue"><td scope="row" style="width: 10%;"><font style="margin-left: 10px;">'+a+'</font></td><td scope="row" style="width: 20%;"><font style="margin-left: 10px;">'+arr[i].assistencia_nome+'</font></td><td scope="row" style="width: 70%;"><font style="margin-left: 20px;">'+arr[i].assistencia_obs+'</font></td><td id="action-'+arr[i].id+'"></td></tr>';

                }
                else
                {
                  s += '<tr id="edit-pedido-'+arr[i].id+'"><td scope="row" style="width: 20%;"><font style="margin-left: 10px;">'+arr[i].link+'</font></td><td scope="row" style="width: 60%;"><font style="margin-left: 20px;">'+arr[i].descricao+'</font></td><td scope="row" style="width: 20%;"><font style="margin-left: 20px;">'+arr[i].estado+'</font></td><td id="action-'+arr[i].id+'"></td></tr>';

                }


            }
            $("#info-suporte-assistence").html('<div class="table-responsive"><table class="table table-striped" style="margin-bottom:0px;"><tbody style="display: block; height: 150px; overflow-y: scroll">'+s+'</tbody></table></div>');
          }
    },
    error:function(data){
        $('#Modalko .debug-url').html('Não existe suportes de assistence, verifique a ligação Wi-Fi.');
        $("#mensagem_ko").trigger('click');
         $('.back').fadeOut();
      }
    });

}, 1000);
}



</script>

  </body>
