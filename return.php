
      <div class="container-narrow">

         <div class="span3 colocacao ">
            <br><br><br><br>
            13º
            <br><br>
            <h1>Lugar</h1>
         </div>
         
         <div class="span7 infobase">
            <h1>Universidade Federal Rural de Pernambuco</h1>
            <b>Nota Média:</b> <span class="label label-success">8,34</span><br>
            <b>Critérios Escolhidos:</b>Nota, Estrutura e Nível dos Discentes<br><br>
            <button class="btn btn-small  mapa">Visualizar no Mapa</button>
           
         </div>
      </div>




<div class="container-narrow">
   <div class="span12">
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

  x.innerHTML='<iframe width="900" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?q=loc:'+position.coords.latitude+','+ position.coords.longitude +'&amp;ie=UTF8&amp;t=m&amp;z=14&amp;ll='+position.coords.latitude+','+position.coords.longitude+'&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?q=loc:'+position.coords.latitude+','+ position.coords.longitude +'&amp;ie=UTF8&amp;t=m&amp;z=14&amp;ll='+position.coords.latitude+','+ position.coords.longitude +'&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small>';
  
//alert("Latitude: " + position.coords.latitude+"Longitude: " + position.coords.longitude);
//x.innerHTML="Latitude: " + position.coords.latitude + 
//"<br>Longitude: " + position.coords.longitude;  
  }



  window.addEventListener("load",getLocation,true);

</script> 
   </div>
 <div class="span12 tabs ">
  <div class="tabContainer" >
<ul class="nav nav-tabs digiTabs" id="sidebarTabs">
  <li class="active" id="tab1">
    <a href="#"><img src="imagens/library.svg" onerror="this.src='library.png'">  Estrutura</a>
  </li>
  <li id="tab2" onclick="tabs(this);"><a href="#"><img src="imagens/laptop.svg" onerror="this.src='laptop.png'">  Tecnologias</a></li>
  <li id="tab3" onclick="tabs(this);"><a href="#"><img src="imagens/pencil.svg" onerror="this.src='pencil.png'">  Atividade Complementar</a></li>
  <li id="tab4" onclick="tabs(this);"><a href="#"><img src="imagens/road.svg" onerror="this.src='road.png'">  Estrutura de acessibilidade</a></li>
  <li id="tab5" onclick="tabs(this);"><a href="#"><img src="imagens/accessibility.svg" onerror="this.src='accessibility.png'">  Acessibilidade do Aluno</a></li>

</ul>
</div>
 <div id="tabContent">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
</div>
 
<div id="tab1Content" style="display:none;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum(Rodrigo).</div>
<div id="tab2Content" style="display:none;"><img src="http://www.digimantra.com/digimantra_ad_125_125.png" alt="digimantra logo" /></div>
<div id="tab3Content" style="display:none;">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</div>
<div id="tab4Content" style="display:none;">teste</div>


<style>
  .tabContainer{margin:10px 0;width:900px;}
  .tabContainer .digiTabs{list-style:none;display:block;overflow:hidden;margin:0;padding:0px;position:relative;top:1px;}
  .tabContainer .digiTabs li{float:left;background-color:#46AAF7;border:1px solid #e1e1e1;padding:5px!important;cursor:pointer;border-bottom:none;margin-right:10px;font-family:verdana;font-size:.8em;font-weight:bold;color:#fff;}
  .tabContainer .digiTabs .selected{background-color:#fff;color:#393939;}
  #tabContent{padding:10px;background-color:#fff;overflow:hidden;float:left;margin-bottom:10px;border-bottom: 1px solid #E1E1E1;width:93%;}
</style>
<script type="text/javascript">
  function tabs(x)
  {
    var lis=document.getElementById("sidebarTabs").childNodes; //gets all the LI from the UL
 
    for(i=0;i<lis.length;i++)
    {
      lis[i].className=""; //removes the classname from all the LI
    }
    x.className="selected"; //the clicked tab gets the classname selected
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
      default:
        res.innerHTML=document.getElementById("tab1Content").innerHTML;
        break;
 
    }
  }
 
</script>

</div>

<!--  

<div class="tabContainer" >
  <ul class="digiTabs" id="sidebarTabs">
    <li  id="tab1" class="selected"  onclick="tabs(this);">Saúde da Familia</li>
    <li id="tab2" onclick="tabs(this);">Tab 2</li>
    <li id="tab3"  onclick="tabs(this);">Tab 3</li>
    <li id="tab4"  onclick="tabs(this);">Tab 4</li>
  </ul>
 -->

</div>

