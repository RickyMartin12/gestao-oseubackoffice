function GetEstado(){
  dataValue='action=37';
  $.ajax({ url:'https://backoffice-gestao-php.herokuapp.com/definitions/action_definitions.php',
    data:dataValue,
    type:'POST', 
    success:function(data){
    localStorage.setItem("estado", data);   
    },
    error:function(){}
});
}


function GetNIF(){
  dataValue='action=33';
  $.ajax({ url:'https://backoffice-gestao-php.herokuapp.com/definitions/action_definitions.php',
    data:dataValue,
    type:'POST', 
    success:function(data){
    localStorage.setItem("nif", data);   
    },
    error:function(){}
});
}


function GetEmpresa(){
  dataValue='action=34';
  $.ajax({ url:'https://backoffice-gestao-php.herokuapp.com/definitions/action_definitions.php',
    data:dataValue,
    type:'POST', 
    success:function(data){
    localStorage.setItem("empresa", data);   
    },
    error:function(){}
});
}


function shopDefinitions(){
  dataValue='action=3';
  $.ajax({ url:'https://backoffice-gestao-php.herokuapp.com/definitions/action_definitions.php',
    data:dataValue,
    type:'POST', 
    success:function(data){
    localStorage.setItem("shopDef", data);    
    setTimeout(function(){ move(); }, 500);
    },
    error:function(){}
});
}

fl=0;

function getCurrentServicies(vl){
     dataValue="action=21&op="+vl;
     $.ajax({ url:'../registries/action_registries.php',
     data:dataValue,
     type:'POST', 
     cache:false,
     success:function(data){
       arr = JSON.parse(data);
       $('#totaltoday').attr('data-count' , arr[0]);    
       $('#pendingoperators').attr('data-count' , arr[1]);

      setTimeout(function(){ 
       $('.counter').each(function() {
         var $this = $(this),
         countTo = $this.attr('data-count');
         $({ countNum: $this.text()}).animate({
           countNum: countTo
         },
         {
          duration: 1500,
          easing:'linear',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
          }
        });  
      });

     }, 500);
     },
error:function(){
    }
  });
}










