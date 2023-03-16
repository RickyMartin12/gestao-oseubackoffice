
<?php require ROOTDIR . '/header/head.php' ?>




    <title>Sistemas de Privilegios de Tipos de Utilizadores</title>
</head>



<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/> 
<link rel="stylesheet" href="css/bootstrap-switch.min.css">
  <link href="css/personalized.css" rel="stylesheet" type="text/css"/>

<?php $menu ='privilegios_utilizadores'; require ROOTDIR . '/header/header.php';?>


<?php require 'modals.php' ?>





<div style="margin-top:0px; ">




<div class="container-fluid" style="padding: 0px; margin-top: -21px;">

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <h2><center>Sistemas de Privilegios de Tipos de Utilizadores</center></h2>
            <div id="show_privileges">
			    
			</div>
		</div>
	</div>
</div>
    
    
</div>
</div>

<!-- MOdelos das Popups -->

<?php require 'mymodals.php'; ?>

<!-- End Line Page -->


<script src="js/bootbox.min.js"></script>
<script src="js/momentjs/moment-with-locales.min.js"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>
<script src="js/select2.full.min.js"></script>
<script src="js/bootstrap-switch.min.js"></script>




<script>
  setTimeout(function() {$(".back").fadeOut();});
  
  
  // Carregamento de Switches do Bootstrap
  
  
  
  showPrivileges();
  
  
  function showPrivileges()
  {
      var s = "";
  dataValue="&action=4";
  $.ajax({ url:'users/users_action.php',
    data:dataValue,
    type:'POST', 
     success:function(data){
     arr=[];
     arr =  JSON.parse(data);
     //console.log(data);
    if (arr == null || arr.length < 1){
     $('.debug-url').html('Nao existe a Utilizadores');
     $("#mensagem_ko").trigger('click');
     $('#show_users').empty();
    }
    else {
        
        for (i=0; i < arr.length; i++)
        {
            s += '<tr class="action-privileges"><td scope="row">'+arr[i].tipo+'</td><td><input id="agenda_pri-'+arr[i].tipo+'" type="checkbox" data-size="mini" data-off-color="danger" '+arr[i].agenda_pri+' data-on-color="success"></td><td><input id="suporte_pri-'+arr[i].tipo+'" type="checkbox" data-size="mini" data-off-color="danger" '+arr[i].suporte_pri+' data-on-color="success"></td><td><input id="clientes_pri-'+arr[i].tipo+'" type="checkbox" data-size="mini" data-off-color="danger" '+arr[i].clientes_pri+' data-on-color="success"></td><td><input id="relatorios_pri-'+arr[i].tipo+'" type="checkbox" data-size="mini" data-off-color="danger" '+arr[i].relatorios_pri+' data-on-color="success"></td></tr>';      
        }

          
      
      
      
      
    $('#show_privileges').html('<div class="table-responsive"><table class="table"><thead style="background-color: #333; color: #fff;"><tr><th></th><th>Menu - Agenda</th><th>Menu - Suporte</th><th>Menu - Clientes</th><th>Menu - Relatórios</th></tr></thead><tbody>'+s+'</tbody></table></div><script>$(".bootstrap-switch-label").addClass("disabled");$("input").on("switchChange.bootstrapSwitch", function(event, state) {menu = this.id;state == true ? is_checked = "checked" : is_checked = "false" ;dataValue = "action=5&tipo="+menu+"&estado="+is_checked;  $.ajax({ url:"users/users_action.php",data:dataValue,type:"POST",success: function(data){    if (data == 0){$(".debug-url").html("Erro ao atribuir o privilégio, p.f. tente novamente.");$("#mensagem_ko").trigger("click");}},error: function(){$(".debug-url").html("Não foi possivel obter os dados privilégios, p.f. verifique a ligação Wi-Fi.");$("#mensagem_ko").trigger("click");}});});');    
    
    
    for (i=0; i < arr.length; i++)
    {
        $("#agenda_pri-"+arr[i].tipo+", #suporte_pri-"+arr[i].tipo+", #clientes_pri-"+arr[i].tipo+", #relatorios_pri-"+arr[i].tipo).bootstrapSwitch();
    }
    
    }
    
    

    },
    error:function(data){
     $('.debug-url').html('Erro ao obter os Utilizadores, p.f. verifique a ligaПлоПлкo.');
     $("#mensagem_ko").trigger('click');
    }
  });
}

 
 
  
  
</script>