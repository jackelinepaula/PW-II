<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//assets.locaweb.com.br/locastyle/2.0.6/stylesheets/locastyle.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" 
    crossorigin="anonymous">
   
    <title>Cookie_Praticando</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#b5e8e2" fill-opacity="1" d="M0,128L60,112C120,96,240,64,360,48C480,32,600,32,720,53.3C840,75,960,117,1080,149.3C1200,181,1320,203,1380,213.3L1440,224L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
    </svg>
    <div class="menu">
      <h2>Arty's<br>...Line</h2>
    <form method="post" action="verificarCategoria.php">
            <label class="ctg">Categorias</label>
            <select name='slcCategoria' class="ls-select">
                <option value="1">Camisetas</option>
                <option value="2">Sapatos</option>
                <option value="3">Colecionáveis</option>
                <option value="4">Moletom</option>
            </select>
            <button type="submit" id="btn" class="btn btn-primary">Pesquisar</button>
        </form>
    </div>
<div class="tabelasRoupas">
<?php
    $imgall = ['cUm.jpg','tUm.jpg', 'c2.jpg','t2.jpg', 
    'c3.jpg', 't3.jpg',
    'cnUm.jpg', 'mUm.jpg', 'cn2.jpg','m2.jpg',
    'cn3.jpg', 'm3.jpg'];

    $imgcam = ['cUm.jpg','c2.jpg', 'c3.jpg', 
    'tUm.jpg', 'cnUm.jpg', 'mUm.jpg','t2.jpg',
    'cn2.jpg', 'm2.jpg', 't3.jpg', 'cn3.jpg', 'm3.jpg'];

    $imgsap = ['tUm.jpg', 't2.jpg', 't3.jpg',
    'cUm.jpg', 'cnUm.jpg', 'mUm.jpg','c2.jpg',
    'cn2.jpg', 'm2.jpg', 'c3.jpg', 'cn3.jpg', 'm3.jpg'];

    $imgcn = ['cnUm.jpg', 'cn2.jpg', 'cn3.jpg',
    'cUm.jpg', 'tUm.jpg', 'mUm.jpg','c2.jpg',
    't2.jpg', 'm2.jpg', 'c3.jpg', 't3.jpg', 'm3.jpg'];

    $imgmol = ['mUm.jpg', 'm2.jpg', 'm3.jpg', 
    'cUm.jpg', 'tUm.jpg', 'cnUm.jpg','c2.jpg',
    't2.jpg', 'cn2.jpg', 'c3.jpg', 't3.jpg', 'cn3.jpg'];

    
    $camsapall = ['Camiseta Tumblr-Grega'.'<br>'.'Preço: R$35,50', 'Tênis Nike-LaCasaDePapel'.'<br>'.'Preço: R$229,50', 'Camiseta-PewPew'.'<br>'.'Preço: R$35,50',
    'Tênis Nike-Rosquinha'.'<br>'.'Preço: R$229,50', 'Camiseta Gatinho-Purrgrammer'.'<br>'.'Preço: R$35,50', 'Cotuno c/ Salto-Preto'.'<br>'.'Preço: R$229,50',
    'Caneca Error404'.'<br>'.'Preço: R$25,50', 'Moletom No-Makeup-Today'.'<br>'.'Preço: R$259,50', 'Caneca repeat'.'<br>'.'Preço: R$25,50', 'Moletom Stitch'.'<br>'.'Preço: R$259,50',
    'Caneca HP Expresso-Patronum'.'<br>'.'Preço: R$25,50', 'Moletom Tiltado'.'<br>'.'Preço: R$259,50'];

    $cam = ['Camiseta Tumblr-Grega'.'<br>'.'Preço: R$35,50', 'Camiseta-PewPew'.'<br>'.'Preço: R$35,50',  'Camiseta Gatinho-Purrgrammer'.'<br>'.'Preço: R$35,50',
    'Tênis Nike-LaCasaDePapel'.'<br>'.'Preço: R$229,50','Caneca Error 404'.'<br>'.'Preço: R$25,50', 'Moletom No-Makeup-Today'.'<br>'.'Preço: R$259,50',
    'Tênis Nike-Rosquinha'.'<br>'.'Preço: R$229,50', 'Caneca repeat'.'<br>'.'Preço: R$25,50', 'Moletom Stitch'.'<br>'.'Preço: R$259,50',
    'Cotuno c/ Salto-Preto'.'<br>'.'Preço: R$229,50', 'Caneca Expresso Patronum'.'<br>'.'Preço: R$25,50', 'Moletom Tiltado'.'<br>'.'Preço: R$259,50'];

    $sap = ['Tênis Nike-LaCasaDePapel'.'<br>'.'Preço: R$229,50', 'Tênis Nike-Rosquinha'.'<br>'.'Preço: R$229,50', 'Cotuno c/ Salto-Preto'.'<br>'.'Preço: R$229,50',
    'Camiseta Tumblr-Grega'.'<br>'.'Preço: R$35,50', 'Caneca Error 404'.'<br>'.'Preço: R$25,50', 'Moletom No-Makeup-Today'.'<br>'.'Preço: R$259,50',
    'Camiseta-PewPew'.'<br>'.'Preço: R$35,50', 'Caneca repeat'.'<br>'.'Preço: R$25,50', 'Moletom Stitch'.'<br>'.'Preço: R$259,50',
    'Camiseta Gatinho-Purrgrammer'.'<br>'.'Preço: R$35,50', 'Caneca Expresso Patronum'.'<br>'.'Preço: R$25,50', 'Moletom Tiltado'.'<br>'.'Preço: R$259,50'];

    $cn = ['Caneca Error404'.'<br>'.'Preço: R$25,50', 'Caneca repeat'.'<br>'.'Preço: R$25,50', 'Caneca Expresso Patronum'.'<br>'.'Preço: R$25,50',
    'Camiseta Tumblr-Grega'.'<br>'.'Preço: R$35,50', 'Tênis Nike-LaCasaDePapel'.'<br>'.'Preço: R$229,50', 'Moletom No-Makeup-Today'.'<br>'.'Preço: R$259,50',
    'Camiseta-PewPew'.'<br>'.'Preço: R$35,50', 'Tênis Nike-Rosquinha'.'<br>'.'Preço: R$229,50', 'Moletom Stitch'.'<br>'.'Preço: R$259,50',
    'Camiseta Gatinho-Purrgrammer'.'<br>'.'Preço: R$35,50', 'Coturno c/ Salto-Preto'.'<br>'.'Preço: R$229,50', 'Moletom Tiltado'.'<br>'.'Preço: R$259,50'];

    $m = ['Moletom No-Makeup-Today'.'<br>'.'Preço: R$259,50', 'Moletom Stitch'.'<br>'.'Preço: R$259,50', 'Moletom Tiltado'.'<br>'.'Preço: R$259,50',
    'Camiseta Tumblr-Grega'.'<br>'.'Preço: R$35,50', 'Tênis Nike-LaCasaDePapel'.'<br>'.'Preço: R$229,50', 'Caneca Error404'.'<br>'.'Preço: R$25,50',
    'Camiseta-PewPew'.'<br>'.'Preço: R$35,50', 'Tênis Nike-Rosquinha'.'<br>'.'Preço: R$229,50', 'Caneca repeat'.'<br>'.'Preço: R$25,50',
    'Camiseta Gatinho-Purrgrammer'.'<br>'.'Preço: R$35,50', 'Coturno c/ Salto-Preto'.'<br>'.'Preço: R$229,50', 'Caneca Expresso Patronum'.'<br>'.'Preço: R$25,50'];

    if(isset($_COOKIE['codcategoria'])){
      if($_COOKIE['codcategoria'] == 1){ 
        $contador = 0;              
        while($contador < 12){
          echo '<div class="card" style="width: 18rem;">';
          echo "<img src ='img/$imgcam[$contador]'";
          echo '<div class="card-body">';
          echo "<h5 class='card-title'>$cam[$contador]</h5>";
        echo'</div>';
        echo'</div>';
        $contador++;
        }
      }else if($_COOKIE['codcategoria'] == 2){
        $contador = 0; 
        while($contador < 12){
          echo '<div class="card" style="width: 18rem;">';
          echo "<img src ='img/$imgsap[$contador]'";
          echo '<div class="card-body">';
          echo "<h5 class='card-title'>$sap[$contador]</h5>";
        echo'</div>';
        echo'</div>';
        $contador++;
        }
      }else if($_COOKIE['codcategoria'] == 3){
        $contador = 0; 
        while($contador < 12){
          echo '<div class="card" style="width: 18rem;">';
          echo "<img src ='img/$imgcn[$contador]'";
          echo '<div class="card-body">';
          echo "<h5 class='card-title'>$cn[$contador]</h5>";
        echo'</div>';
        echo'</div>';
        $contador++;
        }
      }else if($_COOKIE['codcategoria'] == 4){
        $contador = 0; 
        while($contador < 12){
          echo '<div class="card" style="width: 18rem;">';
          echo "<img src ='img/$imgmol[$contador]'";
          echo '<div class="card-body">';
          echo "<h5 class='card-title'>$m[$contador]</h5>";
        echo'</div>';
        echo'</div>';
        $contador++;
        }
      }
    }else{
      $contador = 0; 
      while($contador < 12){
        echo '<div class="card" style="width: 18rem;">';
        echo "<img src ='img/$imgall[$contador]'";
        echo '<div class="card-body">';
        echo "<h5 class='card-title'>$camsapall[$contador]</h5>";
      echo'</div>';
      echo'</div>';
      $contador++;
      }
    }


?>
</div>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200">
  <path fill="#a2d9ff" fill-opacity="1" d="M0,128L120,149.3C240,171,480,213,720,218.7C960,224,1200,192,1320,176L1440,160L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
</svg>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script async="" src="//www.google-analytics.com/analytics.js"></script><script type="text/javascript" src="//code.jquery.com/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="//assets.locaweb.com.br/locastyle/2.0.6/javascripts/locastyle.js"></script>
<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</body>
</html>