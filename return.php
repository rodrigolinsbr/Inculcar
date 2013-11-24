
    <div class="container_line">
      <div class="container-narrow">

       
    <!-- Informacao select -->
         <div class="span12 infobase">
            <h1>Universidade Federal Rural de Pernambuco</h1>
            <table>
              <tr>
                <td><b>Colocação:</b></td>
                <td><span class="label label-warning">12º lugar</span><br></td>
              </tr>
              <tr>
                <td><b>Nota Média:</b></td>
                <td><span class="label label-warning">8,34</span><br></td>
              </tr>
            </table>
                        
            <b>Critérios Escolhidos:</b>Nota, Estrutura e Nível dos Discentes<br><br>
            <button class="btn btn-small  mapa">Visualizar no Mapa</button>
           
         </div>
      </div>
</div>





  <!-- Mapa falta pegar lat e logi -->
      <div id="mapa"></div>
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

          x.innerHTML='<iframe width="100%" height="700" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?q=loc:'+position.coords.latitude+','+ position.coords.longitude +'&amp;ie=UTF8&amp;t=m&amp;z=14&amp;ll='+position.coords.latitude+','+position.coords.longitude+'&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?q=loc:'+position.coords.latitude+','+ position.coords.longitude +'&amp;ie=UTF8&amp;t=m&amp;z=14&amp;ll='+position.coords.latitude+','+ position.coords.longitude +'&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small>';
          
        //alert("Latitude: " + position.coords.latitude+"Longitude: " + position.coords.longitude);
        //x.innerHTML="Latitude: " + position.coords.latitude + 
        //"<br>Longitude: " + position.coords.longitude;  
          }
            window.addEventListener("load",getLocation,true);

        </script> 
  <!-- Tabs -->
   <div class="container-narrow">
 <div class="span12 tabs">
    <div class="tabContainer" >
        <ul class="nav nav-tabs digiTabs" id="sidebarTabs">
          <li class="active" id="tab1" onclick="tabs(this);"><a href="#"><img src="imagens/library.svg" onerror="this.src='library.png'">  Estrutura</a></li>
          <li id="tab2" onclick="tabs(this);"><a href="#"><img src="imagens/laptop.svg" onerror="this.src='laptop.png'">  Tecnologias</a></li>
          <li id="tab3" onclick="tabs(this);"><a href="#"><img src="imagens/pencil.svg" onerror="this.src='pencil.png'">  Atividade Complementar</a></li>
          <li id="tab4" onclick="tabs(this);"><a href="#"><img src="imagens/road.svg" onerror="this.src='road.png'">  Estrutura de acessibilidade</a></li>
          <li id="tab5" onclick="tabs(this);"><a href="#"><img src="imagens/accessibility.svg" onerror="this.src='accessibility.png'">  Acessibilidade do Aluno</a></li>
        </ul>
     
    </div>
<div id="tabContent" >
  Carregando...
</div> 
<!-- Inicio conteudo Tabs -->
 <div id="tab1Content"  style="display:none;" >
  informações aba 1<br>
  kkkkkLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
  standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a 
  type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, 
  remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing 
  Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions 
  of Lorem Ipsum(Rodrigo).
</div>
<div id="tab2Content" style="display:none;">
informações aba 2<br>
  kkkkkLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
  standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a 
  type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, 
  remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing 
  Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions 
  of Lorem Ipsum(Rodrigo).
    kkkkkLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
  standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a 
  type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, 
  remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing 
  Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions 
  of Lorem Ipsum(Rodrigo).
</div>
<div id="tab3Content" style="display:none;">
informações aba 3<br>
  The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</div>
<div id="tab4Content" style="display:none;">
informações aba 4<br>
  teste</div>
<div id="tab5Content" style="display:none;">
informações aba 5<br>
  teste 5</div>


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
