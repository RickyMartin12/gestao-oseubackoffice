<?php
   include('request/session.php');
   define('ROOTDIR', dirname(__FILE__));
?>

<!-- Content -->
<div id="content_info" style="display:none;">


<!-- Informa巽達o do Conteudo do Topico - Clientes -->
<?php require ROOTDIR . '/relatorio_bugs/relatorios_bugs_info.php' ?>

<style>
     .scrollup {
   cursor: pointer;
    position: fixed;
    bottom: 20px;
    right: 20px;
    display:none;
    z-index: 100000;
 }
</style>


<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top scrollup" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>

    <script>
        $(document).ready(function () {
       $(window).scroll(function () {
           if ($(this).scrollTop() > 100) {
               $('.scrollup').fadeIn();
           } else {
               $('.scrollup').fadeOut();
           }
       });
       $('.scrollup').click(function () {
           $("html, body").animate({
               scrollTop: 0
           }, 600);
           return false;
       });
   });
    </script>


</div>
