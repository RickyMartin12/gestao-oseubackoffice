<?php
session_start();

if (session_destroy()) {
    setcookie("name", "", time() - (86400 * 30), "/"); 
    setcookie("id", "", time() - (86400 * 30), "/");
    setcookie("privilegios", "", time() - (86400 * 30), "/");
    setcookie("agenda_pri", "", time() - (86400 * 30), "/");
    setcookie("suporte_pri", "", time() - (86400 * 30), "/");
    setcookie("clientes_pri", "", time() - (86400 * 30), "/");
    setcookie("relatorios_pri", "", time() - (86400 * 30), "/");
    echo '
    <html lang="pt-br"> 
    <head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <script type="text/javascript">
    var count = 5;
    var redirect = "login.php";
     
    function countDown(){
        var timer = document.getElementById("timer");
        if(count > 0){
            count--;
            timer.innerHTML = ""+count+" seconds.";
            setTimeout("countDown()", 1000);
        }else{
            window.location.href = redirect;
        }
    }
    </script>
    <hr style="margin-top:10%;">
    <h2 style="text-align:center;">Terminou a Sessão!</h2><br><h3 style="text-align:center;">A Redireccionar em <span id="timer"></span> <br></h3>
    <hr>
    <p style="text-align:center;">
    </p>
    
    <script type="text/javascript">countDown();</script>
    </span>';
}


?>