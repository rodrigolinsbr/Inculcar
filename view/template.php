<!DOCTYPE html!>
<html lang="pt-br">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<title>Inculcar</title>
<script src="http://www.inculcar.com.br/view/lib/jquery-1.7.1.min.js"></script>
<script src="http://www.inculcar.com.br/view/js/script.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="http://www.inculcar.com.br/view/lib/bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="http://www.inculcar.com.br/view/css/style.css">
<link rel="shortcut icon" href="http://www.inculcar.com.br/view/imagens/marca.png" type="image/x-icon" />
<body>

<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">

        <a class="brand" >Inculcar</a>
          <ul class="nav">
          	<li class="divider-vertical"></li>
            <li></li>
          </ul>
      <!-- Tudo que você queira escondido em 940px ou menos, coloque aqui -->
      <div class="nav-collapse">
        <!-- .nav, .navbar-search, .navbar-form, etc -->
      </div>
    </div>
  </div>
</div>
<div id="container">
    <?php //echo Controlador::$outView
        include Controlador::$outView;
    ?>
</div>

</body>
</html>
