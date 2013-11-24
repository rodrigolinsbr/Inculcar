<!-- apresentacao -->
<div class="container-narrow inicio">
	<br>
	<div class="row">
  		<div class="span9">
  			<table>
  				<tr>
  					<td class="img_table"><img src="view/imagens/marca.png"></td>
  					<td><h2>O que Inculcar ?</h2>

 
Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.<br><br>
<button class="btn btn-warning usar">Experimentar</button>
          </tr>
          </table>

</div>
</div>
</div>

<!-- ferramenta -->
<div class="container-narrow ferramenta">
  <br>
  <div class="row">
      <div class="span9">
       <h2>O que deseja?</h2>
       Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
       <hr>
       <form>
        <table>
            <tr>
            <td>Grau</td>
            <td>
              <label class="checkbox inline">
              <input type="checkbox"> Ensino Infantil
              </label>
              <label class="checkbox inline">
              <input type="checkbox"> Ensino Médio
              </label>
               <label class="checkbox inline">
              <input type="checkbox"> Ensino Superior
              </label>
            </td>
          </tr>
          <tr>
            <td>Nível</td>
            <td>
              <label class="checkbox inline">
              <input type="checkbox"> Particular
              </label>
               <label class="checkbox inline">
              <input type="checkbox"> Pública
              </label>
            </td>
          </tr>
          <tr>
            <td>Estrutura</td>
            <td>
              <select>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              </select>
            </td>
          
          </tr>
          <tr>
            <td>Nível dos professores</td>
            <td>
              <select>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              </select>
            </td>
          
          </tr>
                <tr>
            <td>Atividades extras</td>
            <td>
              <select>
              <option>Judô</option>
              <option>Volei</option>
              <option>Capoeira</option>
              <option>Robótica</option>
              <option>Educação física</option>
              </select>
            </td>
          
          </tr>
        </table>
       </form>

 
<button class="btn btn-warning cancelar">Cancelar</button>
<button class="btn btn-warning usar">Pesquisar</button>
</div>
<script type="text/javascript">
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
</script>
  					</td>
  				</tr>
  			</table>
  			
  	</div>
	</div>
	
</div>

<div class="conteudo">

<ul class="thumbnails rankin_padrao">
  <h2>Ranking Padrão</h2>
Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
<br><br><br>
  <li class="span9">
    <table>


    <tr>
      <td><img src="view/imagens/1.png"></td>
      <td><?php echo $escola1?></td>
    </tr>
    <tr>
      <td></td>
      <td><button class="btn btn-small btn-warning ">+ detalhes</button></td>
    </tr>
    </table>
    
    

  </li>
  <li class="span9">
    <table>
       <tr>
      <td><img src="view/imagens/2.png"></td>
      <td><?echo $escola2?></td>
    </tr>
    <tr>
      <td></td>
      <td><button class="btn btn-small btn-warning ">+ detalhes</button></td>
    </tr>
    </table>

  </li>
  <li class="span9">
       <table>
       <tr>
      <td><img src="view/imagens/3.png"></td>
      <td><?echo $escola3?></td>
    </tr>
    <tr>
      <td></td>
      <td><button class="btn btn-small btn-warning ">+ detalhes</button></td>
    </tr>

  </li>
     
</ul>

</div>