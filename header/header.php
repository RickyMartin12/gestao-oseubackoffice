
<!-- TopBar -->

<script>

function startDateTime() {
  var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!

var yyyy = today.getFullYear();
if(dd<10){
    dd='0'+dd;
} 
if(mm<10){
    mm='0'+mm;
} 

var today2 = dd+'/'+mm+'/'+yyyy;

var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById("ct").innerHTML = today2 + " " + h + ":" + m + ":" + s;
    var t = setTimeout(startDateTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}

</script>

<body onload="startDateTime()">

  <!-- Loader -->
<div class="back" style="display:block;">
    <div class="load"></div>
</div>


<link href="css/header.css" rel="stylesheet" type="text/css"/>


<?php
$link='home';
function isActive($link, $menu)
{
    $classActive = 'text-orange';
    $classBtn = 'text-white';

    return $menu == $link ? $classActive : $classBtn;
}

?>


<!-- NavBar -->

<div class="panel panel-default" style="background-color:#414042;border-radius: 0px!important; margin-right: 0px; margin-left: 0px; margin-top: -50px;">
    <div class="panel-heading" style="background-color:#414042;color:white; padding: 0px 15px!important;">
        <span id="ct"></span>
        <h3 class="panel-title" style="color:#fff!important; padding: 0px;">Olá, <?php echo $_COOKIE['name']; ?></h3>
        <input type="hidden" id="user_name" value="<?php echo $_COOKIE['name']; ?>">

        <br>

        <div class="pull-right col-xs-2" style="margin-top: -42px;">
            <a href="logout.php" title="Terminar a Sessão" class="pull-right" style="color:white;font-size:20px;margin-top:10px;">
                <span class="glyphicon glyphicon-off"></span>
            </a>
        </div>
    </div>

    <nav class="navbar navbar-inverse" style="background-color:#414042!important;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="float: left;">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a href="https://www.oseubackoffice.com" class="w3-bar-item w3-button w3-theme-l1 w3-right w3-text-white"><img class="logo-img" src="images/logo_oseubackoffice_branco.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        
        
        <?php if ($_COOKIE['agenda_pri'] == 'checked') { ?>
        <li><a href="index.php" class="<?php echo isActive('home', $menu);?>">Agenda</a></li>
        <?php } ?>
        
        <?php if ($_COOKIE['suporte_pri'] == 'checked') { ?>
        <li><a href="suporte.php" class="<?php echo isActive('suporte', $menu);?>">Suporte</a></li>
        <?php } ?>
        
        <?php if ($_COOKIE['clientes_pri'] == 'checked') { ?>
        <li><a href="clientes.php" class="<?php echo isActive('clientes', $menu);?>">Clientes</a></li>
        <?php } ?>
        
        <?php if ($_COOKIE['relatorios_pri'] == 'checked') { ?>
        <li><a href="#" class="#" data-toggle="dropdown">Relatórios</a>
            <span class="caret"></span></button>
             <ul class="dropdown-menu">
                <li><a href="relatorios_clientes.php" class="<?php echo isActive('relatorios_clientes', $menu);?>">Clientes</a></li>
                <li><a href="relatorios_bugs.php" class="<?php echo isActive('relatorios_bugs', $menu);?>">Bugs</a></li>
                <li><a href="relatorios_sugestao.php" class="<?php echo isActive('relatorios_sugestao', $menu);?>">Sugestao</a></li>
                <li><a href="relatorios_pedido.php" class="<?php echo isActive('relatorios_pedido', $menu);?>">Orçamentos</a></li>
            </ul>
        </li>
        <?php } ?>
        
        
        <?php if ($_COOKIE['privilegios'] == 'SuperUser') { ?>
        <li><a href="#" class="#" data-toggle="dropdown">Utilizador</a>
            <span class="caret"></span></button>
             <ul class="dropdown-menu">
                <li><a href="#" class="text-white" data-toggle="modal" data-target="#add_user">Novo</a></li>
                <li><a href="visualizar_utilizadores.php" class="<?php echo isActive('visualizar_utilizadores', $menu);?>">Visualizar</a></li>
                <li><a href="privilegios_utilizadores.php" class="<?php echo isActive('privilegios_utilizadores', $menu);?>">Privilegios</a></li>
            </ul>
        </li>
         <?php } ?>
      </ul>
      
      
      <!-- Adição de um novo utilizador que entra no sistema -->

<form class="modal fade" id="add_user" tabindex="-1" role="dialog" aria-labelledby="user">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" style="color: #fff;"><span class="fa fa-user"></span> Novo Utilizador </h4>
                </div>
                        <div class="modal-body">
                      <!-- Data -->
                       <div class="row">
                           
                           <!-- Nome do Utilizador -->
              <div class='col-md-3 col-sm-6 col-xs-12'>
                  <div class="form-group">
                      <label class="control-label" title="Nome do Utilizador">Nome do Utilizador <span class="w3-text-red">*</span></label>
                      <div class="input-group" style='width:100%;'>
                        <input style="border-radius: 4px;" type="text" class="form-control" name="nome_utilizador" id="nome_utilizador" placeholder="Nome do Utilizador">
                      </div>
                  </div>
              </div>
              
              <!-- Password do Utilizador -->
              <div class='col-md-3 col-sm-6 col-xs-12'>
                  <div class="form-group">
                      <label class="control-label" title="Passord do Utilizador">Password <span class="w3-text-red">*</span></label>
                      <div class="input-group" style='width:100%;'>
                        <input style="border-radius: 4px;" type="password" class="form-control" name="password_utilizador" id="password_utilizador" placeholder="Password">
                      </div>
                  </div>
              </div>
              
              <!-- Confirmar Palavra Passe -->
              <div class='col-md-3 col-sm-6 col-xs-12'>
                  <div class="form-group">
                      <label class="control-label" title="Vonfirmar Passord do Utilizador">Confirmar Password <span class="w3-text-red">*</span></label>
                      <div class="input-group" style='width:100%;'>
                        <input style="border-radius: 4px;" type="password" class="form-control" name="password_utilizador_conf" id="password_utilizador_conf" placeholder="Confirmar Password">
                      </div>
                  </div>
              </div>
                        
              <!-- Tipo de Utilizador -->
              <div class='col-md-3 col-sm-6 col-xs-12'>
                  <div class="form-group">
                      <label class="control-label" title="Tipo de Utilizador">Tipo de Utilizador <span class="w3-text-red">*</span></label>
                      <div class="input-group" style='width:100%;'>
                      <select class="form-control" name="tipo_utilizador" id="tipo_utilizador" onchange="myFunction()">
                        <option value='' selected>Escolha *</option>
                        <option value='Administrator'>Administrator</option>
                        <option value='Gestor'>Gestor</option>
                        <option value='GestorPlus'>GestorPlus</option>
                        <option value='SuperUser'>SuperUser</option>
                     </select>
                    </div>
                  </div>
              </div>
              
              <!-- Email -->
              <div class='col-md-9 col-sm-9 col-xs-12'>
                  <div class="form-group">
                      <label class="control-label" title="Email do Utilizador">Email</label>
                      <div class="input-group" style='width:100%;'>
                        <input style="border-radius: 4px;" type="text" class="form-control" name="email" id="email" placeholder="Endereço Electrónico">
                      </div>
                  </div>
              </div>
             
              <!-- Privilegios -->
              <div class='col-md-3 col-sm-3 col-xs-12'>
                  <div class="form-group">
                      <label class="control-label" title="Web Site">Privilegios</label>
                      <div class="input-group" style='width:100%;'>
                        <input readonly style="border-radius: 4px;" type="text" class="form-control" name="privilegios" id="privilegios">
                      </div>
                  </div>
              </div>

              
             </div>
                    
                    <br>
                    <br>
                </div>
                <div class="modal-footer">
                   <p style='text-align:center; margin:0;'><img src="css/logo-nav.png" class="logo-nav" style="width:120px;"></p>  

                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"> </i><font class="hidden-xs"> Cancelar</font></button>
                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-save-file"></span> <font class="hidden-xs"> Guardar</font></button>
                </div>
            </div>
        </div>
    </form>
      
 <script>
 
 
 
     // Utilizadores -- Funções


// Alterar o Tipo de Permissões


function myFunction()
{
    $("#tipo_utilizador").val();
    
    if ($("#tipo_utilizador").val() == 'Administrator')
    {
        $("#privilegios").val(2);
    }
    if ($("#tipo_utilizador").val() == 'Gestor')
    {
        $("#privilegios").val(4);
    }
    if ($("#tipo_utilizador").val() == 'GestorPlus')
    {
        $("#privilegios").val(3);
    }
    if ($("#tipo_utilizador").val() == 'SuperUser')
    {
        $("#privilegios").val(1);
    }
}

// Adicção dos Utilizadores



// Novo Cliente

	$('#add_user').on('submit',function(e){
		e.preventDefault();
		dataValue=$(this).serialize()+'&action=1';
		//console.log(dataValue);
  	$.ajax({ url:'request/action_add_user.php',
    data:dataValue,
    type:'POST', 

    success: function(data){
           arr=[];
      arr =  JSON.parse(data);
      //console.log(data);
      if (arr.error){
        $('.debug-url').html('Por favor, verifique:<br><br>'+arr.error+'<br> e tente novamente.');
        $('#Modalko').modal();
        $('#add_user').modal('hide');
      }

      else if (arr.success == 0){
        $('.debug-url').html('Surgiu um erro, o registo do utilizador, não foi criado!');
        $('#Modalko').modal();
        $('#add_user').modal('hide');
      }

      else if(arr.success == 1){
          $('.debug-url').html('O Utilizador com o nome <strong class="cpt">'+arr.nome+'</strong> foi criado com sucesso');
          $("#mensagem_ok").trigger('click');
          $('html, body').animate({ scrollTop: 0 }, 500);
          setTimeout(function(){
          $('#Modalok').modal('hide');},2500);
          $('#add_user').modal('hide');
          }
    },
    error: function(){
      $('.debug-url').html('O registo do utilizador de login não foi criado, p.f. verifique a ligação Wi-Fi.');
      $('#Modalko').modal();
      $('#clientes__modal_add').modal('hide');
    }
  });
});


 </script>     
        
    </div>
  </div>
</nav>
</div>




