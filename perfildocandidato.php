<?php
  $arquivo = file_get_contents('arquivo.json');
  $json = json_decode($arquivo);
  $info = array();
  $pvp = count($json);
  $rep = count($json[0]);
  
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
      <a href="index.php" class="brand-logo" style="margin-left:15%;"><img src="img/logo.jpg" alt="Voto conciente identidade visual"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down" style="margin-right:15%; align-contente:conter;">
        <li><a href="index.html">Voltar</a></li>
      </ul>
    </div>
  </nav>

  <div class="container "style="margin-top:64px;">
        <div class="col s3">
        <div class="row">
        <h2>Perfil dos candidatos a prefeito 2020 da cidade de Feliz</h2>

<div class="section">
<?php
  echo '<h4>'.$json[0][3].' - '.$json[0][4].' - '.$json[3][4].'</h4>'; 
  echo '<div class="col s12 m6">';
  echo '<h2 class="header">'.$json[0][2].'</h2>';
  echo '<div class="card horizontal">';
  echo '<div class="card-image">';
  echo '<img src="'.$json[0][1].'">';
  echo '</div>';
  echo '<div class="card-stacked">';
  echo '<div class="card-content">';
  echo '<p>.</p>';
  echo '</div>';
  echo '<div class="card-action">';
  echo '<a href="'.$json[0][0].'">'.$json[0][2].'</a>';
          ?> 
        </div>
      </div>
    </div>
  </div>
  <div class="col s12 m6">
  <?php
  echo '<h2 class="header">'.$json[3][2].'</h2>';
  echo '<div class="card horizontal">';
  echo '<div class="card-image">';
  echo '<img src="'.$json[3][1].'">';
  echo '</div>';
  echo '<div class="card-stacked">';
  echo '<div class="card-content">';
  echo '<p>.</p>';
  echo '</div>';
  echo '<div class="card-action">';
  echo '<a href="'.$json[3][0].'">'.$json[3][2].'</a>';
          ?> 
        </div>
      </div>
    </div>
  </div>
            
  <div class="section">
  <?php
  echo '<h4>'.$json[1][3].' - '.$json[1][4].' - '.$json[4][4].'</h4>'; 
  echo '<div class="col s12 m6">';
  echo '<h2 class="header">'.$json[1][2].'</h2>';
  echo '<div class="card horizontal">';
  echo '<div class="card-image">';
  echo '<img src="'.$json[1][1].'">';
  echo '</div>';
  echo '<div class="card-stacked">';
  echo '<div class="card-content">';
  echo '<p>.</p>';
  echo '</div>';
  echo '<div class="card-action">';
  echo '<a href="'.$json[1][0].'">'.$json[1][2].'</a>';
          ?> 
        </div>
      </div>
    </div>
  </div>
  <div class="col s12 m6">
  <?php
  echo '<h2 class="header">'.$json[4][2].'</h2>';
  echo '<div class="card horizontal">';
  echo '<div class="card-image">';
  echo '<img src="'.$json[4][1].'">';
  echo '</div>';
  echo '<div class="card-stacked">';
  echo '<div class="card-content">';
  echo '<p>.</p>';
  echo '</div>';
  echo '<div class="card-action">';
  echo '<a href="'.$json[4][0].'">'.$json[4][2].'</a>';
          ?>
        </div>
      </div>
    </div>
  </div>
            
  <div class="section">
  <?php
  echo '<h4>'.$json[2][3].' - '.$json[2][4].' - '.$json[5][4].'</h4>'; 
  echo '<div class="col s12 m6">';
  echo '<h2 class="header">'.$json[2][2].'</h2>';
  echo '<div class="card horizontal">';
  echo '<div class="card-image">';
  echo '<img src="'.$json[2][1].'">';
  echo '</div>';
  echo '<div class="card-stacked">';
  echo '<div class="card-content">';
  echo '<p>.</p>';
  echo '</div>';
  echo '<div class="card-action">';
  echo '<a href="'.$json[2][0].'">'.$json[2][2].'</a>';
          ?> 
        </div>
      </div>
    </div>
  </div>
  <div class="col s12 m6">
  <?php
  echo '<h2 class="header">'.$json[5][2].'</h2>';
  echo '<div class="card horizontal">';
  echo '<div class="card-image">';
  echo '<img src="'.$json[5][1].'">';
  echo '</div>';
  echo '<div class="card-stacked">';
  echo '<div class="card-content">';
  echo '<p>.</p>';
  echo '</div>';
  echo '<div class="card-action">';
  echo '<a href="'.$json[5][0].'">'.$json[5][2].'</a>';
          ?>
        </div>
      </div>
    </div>
  </div>
            

                </div>
  
  </body>
</html>
