<!-- apresentacao -->
<div class="container_line">
<div class="container-narrow inicio">
	<br>
	<div class="row">
  		<div class="span9">
  			<table>
  				<tr>
  					<td class="img_table"><img src="http://www.inculcar.com.br/view/imagens/marca.png"></td>
  					<td><h2>O que Inculcar ?</h2>

             &nbsp&nbsp&nbspE uma plataforma de uso popular que tem como objetivo
             mostrar quais são as melhores escolas municipais do recife.Também nos 
             da um mapa de quais escolas necessiatm de mais atenção, para que recursos sejam destinados
             de forma correta e para onde a necessisadae e maior, esta classificação e feita através de uma média 
             entre as notas de 5 subcategorias,<i>Estrutura,Estrtutura de Acessibildiade,
    Acessibilidade do aluno,Atividade complementares e Tecnologia.    
    </i>.Na plataforma existem um serviço para
             pessoas que necessitema encontrar escolas que atendam a necessidade especifica de um filho ou parente.Todos os dados usado no portal são provinientes do censo escolar 2013,
             disponibilizado pela prefeitura do recice no portal de dados abertos.<br><br>
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
        <h4>Pesquisa por peso:</h4>
        <table>
            <tr>
            <td>Estrutura</td>
            <td>
               <select>
             <option>Peso 1</option>
              <option>Peso 2</option>
              <option>Peso 3</option>
              <option>Peso 4</option>
              <option>Peso 5</option>
            </select>
            </td>
          </tr>
          <tr>
            <td>Tecnologias</td>
            <td>
              <select>
              <option>Peso 1</option>
              <option>Peso 2</option>
              <option>Peso 3</option>
              <option>Peso 4</option>
              <option>Peso 5</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Estrutura</td>
            <td>
              <select>
             <option>Peso 1</option>
              <option>Peso 2</option>
              <option>Peso 3</option>
              <option>Peso 4</option>
              <option>Peso 5</option>
              </select>
            </td>
          
          </tr>
          <tr>
            <td>Estrutura de acessibilidade</td>
            <td>
              <select>
             <option>Peso 1</option>
              <option>Peso 2</option>
              <option>Peso 3</option>
              <option>Peso 4</option>
              <option>Peso 5</option>
              </select>
            </td>
          
          </tr>
                <tr>
            <td>Acessibilidade do Aluno</td>
            <td>
              <select>
             <option>Peso 1</option>
              <option>Peso 2</option>
              <option>Peso 3</option>
              <option>Peso 4</option>
              <option>Peso 5</option>
              </select>
            </td>
          
          </tr>
        </table>
       </form>

 

<button class="btn btn-warning usar">Pesquisar</button>
<hr>
<form>
        <h4>Pesquisa Deficiência:</h4>
        <table>
            <tr>
            <td>Deficiencia</td>
            <td>  
               <select>
                    <option>Deficiência</option>
                    <option>Cegueira</option>
                    <option>Baixa Visao</option>
                    <option>Surdez</option>
                    <option>Baixa Audicao</option>        
                    <option>Surdo Cegueira</option>
                    <option>Física</option>
                    <option>Intelectual</option>
                    <option>Múltipla</option>
                    <option>Autismo</option>
                    <option>Asperger</option>
                    <option>Rett</option>
                    <option>Desintegrativo</option>
                    <option>Superdotação</option>
            </select>
            </td>
          </tr>
         
        </table>
       </form>

 

<button class="btn btn-warning usar">Pesquisar</button>
<hr>
<form id="pesquisarNome" action="http://www.inculcar.com.br/escola" method="post">
        <h4>Busca por nome:</h4>
        <table>
            <tr>
            <td>Nome</td>
            <td>
                <input type="text" name="nomeEscola" >
            </td>
          </tr>
         
        </table>
       </form>

 
<button class="btn btn-warning cancelar">Voltar</button>
<button id="sumeterPesquisar" class="btn btn-warning usar">Pesquisar</button>
</div>

  					</td>
  				</tr>
  			</table>
  			
  	</div>
	</div>
	
</div>

<div class="conteudo">
<!--Pesquisa padrao-->
<ul class="thumbnails rankin_padrao">
  <h2>Ranking</h2>
    O ranking lsitas as escolas que de acordo com o criterio de classificação 
    obtiveram as primerias posições e as melhores notas.
<br><br><br>
  <li class="span9">
    <table>


    <tr>
      <td><img src="http://www.inculcar.com.br/view/imagens/1.png"></td>
      <td><?php echo ucfirst(strtolower($classeSaida->escolas[0]->nome))?><br>
      Bairro: <?php echo ucfirst(strtolower($classeSaida->escolas[0]->bairro))?><br>
      Telefone: <?php echo $classeSaida->escolas[0]->telefone;?></td>
    </tr>

    <tr>
      <td></td>
      <td><button id="escola1" value="<?php echo $classeSaida->escolas[0]->inep?>" class="btn btn-small btn-warning ">+ detalhes</button></td>
    </tr>
    <tr>
      <td><img src="http://www.inculcar.com.br/view/imagens/2.png"></td>
      <td><?php echo ucfirst(strtolower($classeSaida->escolas[1]->nome))?><br>
      Bairro: <?php echo ucfirst(strtolower($classeSaida->escolas[1]->bairro))?><br>
      Telefone: <?php echo $classeSaida->escolas[1]->telefone;?></td>
    </tr>
    <tr>
      <td></td>
      <td><button id="escola2" value="<?php echo $classeSaida->escolas[1]->inep?>" class="btn btn-small btn-warning ">+ detalhes</button></td>
    </tr>
    <tr>
      <td><img src="http://www.inculcar.com.br/view/imagens/3.png"></td>
      <td><?php echo ucfirst(strtolower($classeSaida->escolas[2]->nome))?><br>
      Bairro: <?php echo ucfirst(strtolower($classeSaida->escolas[2]->bairro))?><br>
      Telefone: <?php echo $classeSaida->escolas[2]->telefone;?></td>
    </tr>
    <tr>
      <td></td>
      <td><button id="escola3" value="<?php echo $classeSaida->escolas[2]->inep?>" class="btn btn-small btn-warning ">+ detalhes</button></td>
    </tr>
    </table>
  </li>
     
</ul>

</div>
</div>