<?php
  $comando = escapeshellcmd('webscraping.py');
  $cmdResult = shell_exec($comando);
  echo $cmdResult;

  $arquivo = file_get_contents('arquivo.json');
  $json = json_decode($arquivo);
  $info = array();
  $pvp = count($json);
  $p = 0; //Prefeito
  $vp = $pvp/2; //Vice-prefeito
  
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
         <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        
    </head>
    <body class="grey lighten-5">
    <nav style="height:60px;" class="teal lighten-2">
    <div class="nav-wrapper">
      <a href="index.html" class="brand-logo" style="margin-left:15%;"><img src="img/logo.jpg" alt="Voto conciente identidade visual"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down" style="margin-right:15%; align-contente:conter;">
        <li><a href="index.html">Voltar</a></li>
      </ul>
    </div>
  </nav>

  <div class="container "style="margin-top:64px;">
    <div class="col s3">
      <div class="row">
      <h2>Perfil dos candidatos a prefeito 2020 da cidade de Feliz</h2>
      <?php
        for ($i=0; $i < $vp; $i++) {
          echo '<div class="section">';
          echo '<h4>'.$json[$i][3].' - '.$json[$i][4].' - '.$json[$i+$vp][4].'</h4>
          <div class="col s12 m6">
          <h2 class="header">'.$json[$i][2].'</h2>
          <div class="card horizontal">
          <div class="card-image">
          <img src="'.$json[$i][1].'">
          </div>
          <div class="card-stacked">
          <div class="card-content">
          <p></p>
          </div>
          <div class="card-action">
          <a href="'.$json[$i][0].'">'.$json[$i][2].'</a>';
        ?> 
            </div>
          </div>
        </div>
      </div>
    <div class="col s12 m6">
        <?php
          echo '<h2 class="header">'.$json[$i+$vp][2].'</h2>
          <div class="card horizontal">
          <div class="card-image">
          <img src="'.$json[$i+$vp][1].'">
          </div>
          <div class="card-stacked">
          <div class="card-content">
          <p></p>
          </div>
          <div class="card-action">
          <a href="'.$json[$i+$vp][0].'">'.$json[$i+$vp][2].'</a>';
        ?> 
          </div>
        </div>
      </div>
    </div>
        <?php
          }   
        ?>      
    </div>
  </body>
</html>
