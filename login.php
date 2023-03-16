<?php

define('ROOTDIR', dirname(__FILE__));

//session_start();

?>

<!doctype html>
<html lang="pt_PT">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/login.css">
    
    <title>Login de Gestão do OSEUBACKOFFICE</title>
</head>

<style>

img.w3-image.logo_insert {
    max-width: 250px!important;
}

.w3-btn:hover, .w3-button:hover, .w3-sand:hover {
    color: #000!important;
    background-color: #ddd!important;
}

.w3-btn, .w3-button {
    border: none;
    display: inline-block;
    outline: 0;
    padding: 8px 16px;
    vertical-align: middle;
    overflow: hidden;
    text-decoration: none;
    color: inherit;
    background-color: inherit;
    text-align: center;
    cursor: pointer;
    white-space: nowrap;
}

.w3-text-grey, .w3-hover-text-grey:hover, .w3-text-gray, .w3-hover-text-gray:hover {
    color: #000!important;
}

.modal-header, .modal-footer {
    background: #414042;
    border: 0px;
}

</style>

<body class="bgimg-1" >
    

<div class="back">
    <div class="load"></div>
</div>

<div class="video-responsive">
			<video class="video" muted="muted" loop="loop" autoplay="autoplay" width='100%' height='100%'>
				<source src="images/login.mp4" type="video/mp4">
				Your browser does not support HTML5 video.
			</video>

			<canvas class="canvas"></canvas>
  <!-- Contact Section -->
<div class="w3-padding-16 w3-content w3-text-grey" id="contact">

<div class="w3-row-padding w3-center w3-margin-top">

<div class="w3-col l3 m2 s0">&nbsp;</div>

<div class="w3-col l6 m8 s12 w3-card-2" style="background:rgba(255,255,255,0.65);">

<div class="w3-col l12 m12 s12">
    <div class="w3-center w3-padding-16">
    <img class="w3-image logo_insert" style="max-width:130px; vertical-align: text-top;">
</div>
</div>

<div class="w3-col l12" style="margin-bottom: -20px; margin-top: -10px;">
    <div class="w3-light-grey" style="height:23px;">
      <div id="myBar" class="w3-container w3-center w3-red" style="height:23px;width:0px;">0%</div>
    </div><br>
</div>

<div class="freeform w3-col l12">
    <span  title="Periodo para validar os dados são 4 minutos, se expirar tem que actualizar a página (tecla F5)" class="w3-center w3-large">Administração</span>
    <form class="form-signin">
      <p><input readonly title="Insira Utilizador" class="w3-input w3-padding-8 w3-border" type="text" id="utilizador" placeholder="Utilizador *" name="utilizador" autofocus></p>
      <p><input readonly title="Insira Password" class="w3-input w3-padding-8 w3-border" type="password" id="password" placeholder="Password *" name="password"></p>
      
     <div class="w3-row w3-padding-16">
     <div class="w3-col s1">&nbsp;</div>
     <div class="w3-col s4">
        <button title="Limpar campos Utilizador e Password "class="w3-button btn w3-sand w3-medium" disabled type="reset" style="border-radius: 0px!important;">
           <i class="fa fa-eraser"></i><span class="w3-hide-small"> Limpar</span>
        </button>
      </div>
        <button class="w3-button w3-green w3-medium" disabled type="submit"><i class="fa fa-check"></i><span class="w3-hide-small"> Submeter</span>
      </div>     
    </form>
  </div>
    </div>
    </div>
  </div>  

    <p class="w3-center w3-text-white">
        <?php if (isset($error) && !empty($error)) {echo $error;}?>
    </p>

<div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
     <div class="w3-col l3">&nbsp;</div>
      <div class="w3-center w3-col l2 m4 s4 w3-padding-4">
<img class="w3-image w3-hide img-1" style="max-width:130px;width:95%;" src="images/ssl.png">
        <p></p>
      </div>
      <div class="w3-center w3-col l2 m4 s4 w3-padding-4">
<img class="w3-image w3-hide img-2" style="max-width:130px;width:95%;" src="images/slk.png">
        <p></p>
      </div>
      <div class="w3-center w3-col l2 m4 s4 w3-padding-4">
<img class="w3-image w3-hide img-3" style="max-width:130px;width:95%;" src="images/trt.png">
        <p></p>
      </div>
    </div>

<div id="showerrors" class="w3-modal" style="display: none;">
  <div class="w3-modal-content w3-animate-zoom" style="max-width:600px;">
    <div class="w3-container header w3-red">
      <span onclick="document.getElementById('showerrors').style.display='none'" class="w3-button w3-display-topright w3-medium">x</span>
      <h3 class="messagehead"></h3>
    </div>
    <div class="w3-container w3-padding-4">
        <p class="messagetxt"></p>
        <p></p>
    </div>
  </div>
</div>


</div>
    
    
    <!-- Mensagens de confirmação -->
    
    <?php require 'modals.php' ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/shopinfo.js"></script>
<script src="js/canvas-video-player.js"></script>

<script>


x = -1
carousel();
function carousel() {
    x++
    if (x < 4){ 
      $('.img-'+x).addClass('w3-animate-zoom').removeClass('w3-hide')
      setTimeout(carousel, 1100);
    }
}
</script>

<script>
shopDefinitions();

function move() {
      $('.logo_insert').prop('src','https://backoffice-gestao-php.herokuapp.com/images/logo_oseu.png');
  var elem = document.getElementById("myBar");   
  var width = 5;
  var id = setInterval(frame, 20);
  function frame() {
  if (width == 100) {
      clearInterval(id);
      $('#myBar').removeClass('w3-red').addClass('w3-light-green');
      $('.freeform').removeClass('w3-opacity'); 
      $('.w3-button').attr('disabled',false);
      $('.w3-input').attr('readonly',false);
    } 
    else 
    {
      width++; 
      elem.style.width = width + '%'; 
      elem.innerHTML = width * 1  + '%';
    }
  }
}





$(".form-signin").on("submit", function(e) {
    $('.back').show()
    datav=$(this).serialize()
    e.preventDefault()
    datav=$(this).serialize()
    $.ajax({
        type: "POST",
        url: "request/login.php",
        data: datav,
        cache: false,
        success: function(data) {
          $('.back').fadeOut();
          obj = JSON.parse(data);
          if (obj.error)
          {
            $('#showerrors .header').addClass('w3-amber').removeClass('w3-green w3-red');
            $('#showerrors').css('display','block');
            $('.messagehead').text('Por favor, verifique:');
            $('.messagetxt').html(obj.error);
          }
          else if (obj.success)
          {
            $('#showerrors .header').addClass('w3-green').removeClass('w3-red w3-amber');
            $('#showerrors').css('display','block');
            $('.messagehead').text('Sucesso');
            $('.messagetxt').html('Bem vindo '+$('#utilizador').val()+', a redireccionar ...');
            GetNIF();
            GetEmpresa();
            GetEstado();
            setTimeout(function(){location.href = "/"+obj.success;}, 1500);
          }
        },
        error: function() {
           $('.back').fadeOut();
           $('#showerrors .header').addClass('w3-red').removeClass('w3-green w3-amber');
           $('#showerrors').css('display','block');
           $('.messagehead').text('Aviso');
           $('.messagetxt').html('Verifique a ligação, e tente novamente!');
        }
    })
});


var isIOS = /iPad|iPhone|iPod/.test(navigator.platform);
	
	if (isIOS) {
 
		var canvasVideo = new CanvasVideoPlayer({
			videoSelector: '.video',
			canvasSelector: '.canvas',
			timelineSelector: false,
			autoplay: true,
			makeLoop: true,
			pauseOnClick: false,
			audio: false
		});
		
	}else {
		
		// Use HTML5 video
		document.querySelectorAll('.canvas')[0].style.display = 'none';
		
		
		
	}	






  </script>
  

</body>
</html>