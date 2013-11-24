window.onload = function(){
  $(".usar").click(function(){
      $(".inicio").slideUp(1000);
      $(".ferramenta").slideDown(1000);
      $(".rankin_padrao").slideUp(1000);

      
  });
  $(".cancelar").click(function(){
      $(".ferramenta").slideUp(1000);
      $(".inicio").slideDown(1000);
       $(".rankin_padrao").slideDown(1000);
      
  });

    $(".mapa").click(function(){
    
      if($("#mapa:hidden").length==0){
           $(".mapa").html('Visualizar no Mapa');
      }else{
          $(".mapa").html('Ocultar Mapa');
      }
      $("#mapa").slideToggle(1000);
     
      
  });
  $(".mapa_cancelar").click(function(){
      $("#mapa").slideUp(1000);
      
  });
}