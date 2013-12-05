<form id="localizacao">
    <input type="hidden" name="latitude" value="<?php echo $classeSaida->escola->latitude;?>">
    <input type="hidden" name="longitude" value="<?php echo $classeSaida->escola->longitude;?>">
</form> 

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
            <button class="btn btn-small  mapa">Visualizar no Mapa</button>
           
         </div>
      </div>
</div>





  <!-- Mapa falta pegar lat e logi -->
      <div id="mapa"></div>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
        <script>
        var x=document.getElementById("mapa");
        function getLocation()
          {
          if (navigator.geolocation)
            {
            navigator.geolocation.watchPosition(showPosition);
            }
          else{x.innerHTML="Geolocation is not supported by this browser.";}
          }
        function showPosition(position)
          {

          //x.innerHTML='<iframe width="100%" height="700" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?q=loc:'+position.coords.latitude+','+ position.coords.longitude +'&amp;ie=UTF8&amp;t=m&amp;z=14&amp;ll='+position.coords.latitude+','+position.coords.longitude+'&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?q=loc:'+position.coords.latitude+','+ position.coords.longitude +'&amp;ie=UTF8&amp;t=m&amp;z=14&amp;ll='+position.coords.latitude+','+ position.coords.longitude +'&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small>';
          
        alert("Latitude: " + position.coords.latitude+"Longitude: " + position.coords.longitude);
        //x.innerHTML="Latitude: " + position.coords.latitude + 
        //"<br>Longitude: " + position.coords.longitude;  
          }
            //window.addEventListener("load",getLocation,true);
// =============================================================
function initialize() {
  var myLatlng = new google.maps.LatLng(-8.032243,-34.931484);
  var mapOptions = {
    zoom: 4,
    center: myLatlng
  }
  var map = new google.maps.Map(document.getElementById('mapa'), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Hello World!'
  });
}

google.maps.event.addDomListener(window, 'load', initialize);
        </script> 
  <!-- Tabs -->
   <div class="container-narrow">
 <div class="span12 tabs">
    <div class="tabContainer" >
        <ul class="nav nav-tabs digiTabs" id="sidebarTabs">
          <li class="active" id="tab1" onclick="tabs(this);"><a href="#"><img src="http://www.inculcar.com.br/view/imagens/library.svg" onerror="this.src='library.png'">  Estrutura</a></li>
          <li id="tab2" onclick="tabs(this);"><a href="#"><img src="http://www.inculcar.com.br/view/imagens/laptop.svg" onerror="this.src='laptop.png'">  Tecnologias</a></li>
          <li id="tab3" onclick="tabs(this);"><a href="#"><img src="http://www.inculcar.com.br/view/imagens/pencil.svg" onerror="this.src='pencil.png'">  Atividade Complementar</a></li>
          <li id="tab4" onclick="tabs(this);"><a href="#"><img src="http://www.inculcar.com.br/view/imagens/road.svg" onerror="this.src='road.png'">  Estrutura de acessibilidade</a></li>
          <li id="tab5" onclick="tabs(this);"><a href="#"><img src="http://www.inculcar.com.br/view/imagens/accessibility.svg" onerror="this.src='accessibility.png'">  Acessibilidade do Aluno</a></li>
        </ul>
     
    </div>
<div id="tabContent" >
  Carregando...
</div> 
<!-- Inicio conteudo Tabs -->
 <div id="tab1Content"  style="display:none;" >
  <?php echo $classeSaida->escola->notaEstrutura;?><br><br>
   <br>
  <p>&nbsp&nbsp&nbspEstá nota e caulculada levando em cosideração a estrutura que o mec conseidera básica em uma escola, bem como qualifica
  detre as estruturas as que melhor antendem os alunos.Itens pontuados:</p>
  <br>
  Tipo de predio<br>	
  Forma de ocupação<br>
  Abastecimento de água
  Tratamento de esgoto<br>
  Tipo de coleta de lixo<br>
  Dependência para diretoria<br>
  Dependência para professores<br>
  Dependência para secretaria<br>
  Laboratorio de Informática<br>
  Laboratorio de ciências<br>
  Quadra<br>
  Cozinha<br>
  Biblioteca<br>
  Leitura<br>
  Instalações banheiros<br>
  Parque infantil<br>
  Auditorio<br>
  Area verde<br>
  Lavanderia<br>
 
</div>

<div id="tab2Content" style="display:none;">
<?php echo $classeSaida->escola->notaTecnologia;?><br><br>
  <p>&nbsp&nbsp&nbspEstá nota e caulculada levando em cosideração os instrumentos tecnologicos de apoio a educação.Itens pontuados: </p>
<br>
Televisores<br>
videocassete<br>
Dvd<br>
antena parabólica<br>
Copiadora<br>
Retoprojetor<br>
impressora<br>
Aparelho de som<br>
projector multimidia<br>
Equipamento de fax<br>
Máquina fotográfica<br>
Computadores para uso Administrativo, se quantidade maior que 2<br>
Computadores para uso Administrativo, se quantidade maior que 10<br>
Acesso a internet<br>
Banda larga<br>
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
   <p>&nbsp&nbsp&nbspEstá nota e caulculada levando em cosideração a maior quantidade de necessidades especias atendidas na escola.Itens pontuados:<br>
    Cegueira<br>
    Baixa Visao<br>
    Surdez<br>
    Baixa Audicao</option>        
    Surdo Cegueira<br>
    Física<br>
    Intelectual<br>
    Múltipla<br>
    Autismo<br>
    Asperger<br>
    Rett<br>
    Desintegrativo<br>
    Superdotação<br>
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