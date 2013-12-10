<span class="localizacao">
   
    <?php //echo "(".$classeSaida->escola->latitude.",".$classeSaida->escola->longitude.")"; ?>
    <span class="lat">
      <?php 
      echo $classeSaida->escola->latitude;
      ?>
    </span>

<span class="log">
      <?php 
      echo $classeSaida->escola->longitude;
      ?>
    </span>
</span> 

<div class="container_line">
      <div class="container-narrow">

       
    <!-- Informacao select -->
         <div class="span12 infobase">
            <h1><?php echo ucfirst(strtolower($classeSaida->escola->nome))?></h1>
            <table>
              <tr>
                <td><b>Colocação:</b></td>
                <td><span class="label label-warning"><?php echo $classeSaida->colocacao?>º lugar</span><br></td>
              </tr>
              <tr>
                <td><b>Nota Média:</b></td>
                <td><span class="label label-warning"><?php echo $classeSaida->escola->notaGeral?></span><br></td>
              </tr>
            </table>
                        
            <b>Critérios Escolhidos:</b>Estrutura,Tecnologias,Atividade Complementar,Estrutura de acessibilidade e Acessibilidade do Aluno<br><br>
            <button class="btn btn-small  mapa">Ocultar mapa</button>
           
         </div>
      </div>
</div>





  <!-- Mapa falta pegar lat e logi -->
     
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
function initialize() {
  var lat=$(".lat").html();
  var log=$(".log").html();
  var name=$(".infobase h1").html();
  var mapOptions = {
    zoom: 15,
   
    center: new google.maps.LatLng(lat,log)
  };

  var map = new google.maps.Map(document.getElementById('mapa'),
      mapOptions);

//var marker = new google.maps.InfoWindow({
//        map: map,
//        position: map.getCenter(),
//        content: name
 //     });

   var marker = new google.maps.Marker({
     position: map.getCenter(),
     map: map,
     title: 'Mais informações'
   });

  google.maps.event.addListener(map, 'center_changed', function() {
    // 3 seconds after the center of the map has changed, pan back to the
    // marker.
    window.setTimeout(function() {
      map.panTo(marker.getPosition());
    }, 3000);
  });

  google.maps.event.addListener(marker, 'click', function() {
    //map.setZoom(18);
    //map.setCenter(marker.getPosition());

$("html,body").animate({scrollTop: $(".marcacaoScroll").offset().top}, 2000);
  });

}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
   
 <div id="mapa"></div>

  <!-- Tabs -->
<span class="marcacaoScroll"></span>
   <div class="container-narrow">
 <div class="span12 tabs">
    <div class="tabContainer" >
        <ul class="nav nav-tabs digiTabs" id="sidebarTabs">
          <li class="active" id="tab1" onclick="tabs(this);"><a ><img src="http://www.inculcar.com.br/view/imagens/library.svg" onerror="this.src='library.png'">  Estrutura</a></li>
          <li id="tab2" onclick="tabs(this);"><a ><img src="http://www.inculcar.com.br/view/imagens/laptop.svg" onerror="this.src='laptop.png'">  Tecnologias</a></li>
          <li id="tab3" onclick="tabs(this);"><a ><img src="http://www.inculcar.com.br/view/imagens/pencil.svg" onerror="this.src='pencil.png'">  Atividade Complementar</a></li>
          <li id="tab4" onclick="tabs(this);"><a ><img src="http://www.inculcar.com.br/view/imagens/road.svg" onerror="this.src='road.png'">  Estrutura de acessibilidade</a></li>
          <li id="tab5" onclick="tabs(this);"><a ><img src="http://www.inculcar.com.br/view/imagens/accessibility.svg" onerror="this.src='accessibility.png'">  Acessibilidade do Aluno</a></li>
        </ul>
     
    </div>
<div id="tabContent" >
  Carregando...
</div> 
<!-- Inicio conteudo Tabs -->
 <div id="tab1Content"  style="display:none;" >
  
     <div class="span5">
        <div class="nota_estrutura">
            <?php echo $classeSaida->escola->notaEstrutura;?>
        </div>
        <p></p><b>Está nota e caulculada levando em cosideração a estrutura que o mec conseidera básica em uma escola, bem como qualifica
        detre as estruturas as que melhor antendem os alunos.Itens pontuados:</b></p>
        <ul>
        
            <li>Tipo de predio</li>	
            <li>Forma de ocupação</li>
            <li>Abastecimento de água</li>
            <li>Tratamento de esgoto</li>
            <li>Tipo de coleta de lixo</li>
            <li>Dependência para diretoria</li>
            <li>Dependência para professores</li>
            <li>Dependência para secretaria</li>
            <li>Laboratorio de Informática</li>
            <li>Laboratorio de ciências</li>
            <li>Quadra</li>
            <li>Cozinha</li>
            <li>Biblioteca</li>
            <li>Leitura</li>
            <li>Instalações banheiros</li>
            <li>Parque infantil</li>
            <li>Auditorio</li>
            <li>Area verde</li>
            <li>Lavanderia</li>
       </ul>
    </div>
    <div class="span5">
            <script type="text/javascript" src="https://www.google.com/jsapi"></script>
            <script type="text/javascript">
            var nota_estrutura=parseInt($('.nota_estrutura').html());
            var name=$(".infobase h1").html();
            google.load("visualization", "1", {packages:["corechart"]});
            google.setOnLoadCallback(drawChart);
            function drawChart() {
               var data = google.visualization.arrayToDataTable([
                ['Element', 'Nota', { role: 'style' }],
                
                [name, nota_estrutura, 'gold'],
                ['Média', 21.45, 'color: #e5e4e2' ], // CSS-style declaration
              ]);

              var options = {
                  title: 'Gráfico comparativo entre Notas',
                  hAxis: {title: 'Notas', titleTextStyle: {color: 'black'}}
                };

              var chart = new google.visualization.ColumnChart(document.getElementById('chart_estrutura'));
                chart.draw(data, options);
              }
            </script>
      <br><br><br><br><br>
      <div id="chart_estrutura" style="width: 500px; height: 300px;"></div>
        </div>
</div>

<div id="tab2Content" style="display:none;">
  <div class="span5">
      <span class="nota_tecnologia">
        <?php echo $classeSaida->escola->notaTecnologia;?>
      </span>
      <p><b>Está nota e caulculada levando em cosideração os instrumentos tecnologicos de apoio a educação.Itens pontuados:</b> </p>
      <ul>
     
          <li>Televisores</li>
          <li>videocassete</li>
          <li>Dvd</li>
          <li>antena parabólica</li>
          <li>Copiadora</li>
          <li>Retoprojetor</li>
          <li>impressora</li>
          <li>Aparelho de som</li>
          <li>projector multimidia</li>
          <li>Equipamento de fax</li>
          <li>Máquina fotográfica</li>
          <li>Computadores para uso Administrativo, se quantidade maior que 2</li>
          <li>Computadores para uso Administrativo, se quantidade maior que 10</li>
          <li>Acesso a internet</li>
          <li>Banda larga</li>
      </ul>
</div>
<div class="span5">
      <script type="text/javascript" src="https://www.google.com/jsapi"></script>
      <script type="text/javascript">
      var nota_tecnologia=parseInt($('.nota_tecnologia').html());
      var name=$(".infobase h1").html();
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChartTec);
              function drawChartTec() {
               var data = google.visualization.arrayToDataTable([
                ['Element', 'Nota', { role: 'style' }],
                
                [name, nota_tecnologia, 'gold'],
                ['Média', 21.45, 'color: #e5e4e2' ], // CSS-style declaration
              ]);

                var options = {
                  title: 'Gráfico comparativo entre Notas',
                  hAxis: {title: 'Notas', titleTextStyle: {color: 'black'}}
                };

                var chartTec = new google.visualization.ColumnChart(document.getElementById('chart_div2'));
                chartTec.draw(data, options);
              }
      </script>
      <br><br><br><br><br>
      <div id="chart_div2" style="width: 600px; height: 400px;"></div>
  </div>

</div>

<div id="tab3Content" style="display:none;">
<?php echo $classeSaida->escola->notaAtividadesComplementares;?><br><br>
  <p>&nbsp&nbsp&nbspEstá nota e caulculada levando em cosideração a maior numero de atividades complementares oferecidas pelas escolas.</p></div>

<div id="tab4Content" style="display:none;">
<?php echo $classeSaida->escola->notaEstruturaAcessibilidade;?><br><br>
<p>&nbsp&nbsp&nbspEstá nota e caulculada levando em cosideração básicamente dois parametros.Itens pontuados:</p><br>
Banheiro para portadores de dificência<br>
Vias adequadas para deficiente<br>
  </div>

<div id="tab5Content" style="display:none;">
<?php echo $classeSaida->escola->notaAcessibilidadeAluno;?><br><br>
<ul>Está nota e caulculada levando em cosideração a maior quantidade de necessidades especias atendidas na escola.Itens pontuados:
    <li>Cegueira</li>
    <li>Baixa Visao</li>
    <li>Surdez</li>
    <li>Baixa Audicao</li>        
    <li>Surdo Cegueira</li>
    <li>Física</li>
    <li>Intelectual</li>
    <li>Múltipla</li>
    <li>Autismo</li>
    <li>Asperger</li>
    <li>Rett</li>
    <li>Desintegrativo</li>
    <li>Superdotação</li>
</ul>
</div>

<script type="text/javascript">
  function tabs(x)
  {
    var lis=document.getElementById("sidebarTabs").childNodes; //gets all the LI from the UL
 
    for(i=0;i<lis.length;i++)
    {
      lis[i].className=""; //removes the classname from all the LI
    }
    x.className="selected"; //the clicked tab gets the classname selected
    x.className="active"; //the clicked tab gets the classname selected
    var res=document.getElementById("tabContent");  //the resource for the main tabContent
    var tab=x.id;
    switch(tab) //this switch case replaces the tabContent
    {
      case "tab1":
        res.innerHTML=document.getElementById("tab1Content").innerHTML;
        break;
 
      case "tab2":
        res.innerHTML=document.getElementById("tab2Content").innerHTML;
        break;
      case "tab3":
        res.innerHTML=document.getElementById("tab3Content").innerHTML;
        break;
        case "tab4":
        res.innerHTML=document.getElementById("tab4Content").innerHTML;
        break;
         case "tab5":
        res.innerHTML=document.getElementById("tab5Content").innerHTML;
        break;
      default:
        res.innerHTML=document.getElementById("tab1Content").innerHTML;
        break;
 
    }
  }
 var res=document.getElementById("tabContent");  //the resource for the main tabContent
 res.innerHTML=document.getElementById("tab1Content").innerHTML;
 chart.draw(data, options);

</script>

<!-- Facebook forum -->
<div class="span12">
  <h5> <i class="icon-comment"></i> Deixe seus comentários</h5>
</div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=486740444739277";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-comments" data-href="http://example.com/comments/index.php?id=2" width="900" data-numposts="5" data-colorscheme="light"></div>
</div>


</div>

