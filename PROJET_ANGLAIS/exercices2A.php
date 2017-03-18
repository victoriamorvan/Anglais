<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>ValidetonsemestreaTNCY</title>
    <link rel="shortcut icon" type="image/x-icon" href="icone.jpg" />
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Lobster+Two' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/superfish.css" media="screen">

</head>


<?php
    $file = fopen('exercices/exercices2A.txt', 'r+');
    $text = '';
    while (($line = fgets($file, 4096)) !== false) {
        $text.=$line;
    }
    $text=str_replace('/', '<span>', $text);
    $text=str_replace('*', '</span>', $text);
    fclose($file); 
?>

<body>
<div class="header-wrap">
  <div class="logo">
    <h1>Valide ton semestre à TNCY !</h1>
  </div>
  <div class="menu"> <img src="images/menu-left.png" alt="image"/>
      <ul class="sf-menu" id="example">
        <li><a href="index.html">Accueil</a></li>
        <li class="current"> <a href="#">Entraine toi ! </a>
          <ul>
            <li> <a href="#">1ère année</a> 
               <ul>
                <li> <a href="works1A.html">Cours </a> </li>
                <li><a href="exercices1A.php">Exercices</a></li>
              </ul>
            </li>
            <li class="current"> <a href="#">2ème année</a>
              <ul>
                <li> <a href="works2A.html">Cours </a> </li>
                <li><a href="exercices2A.php">Exercices</a></li>
              </ul>
            </li>
            <li> <a href="#">3ème année</a>
               <ul>
                 <li> <a href="works3A.html">Cours </a> </li>
                 <li><a href="exercices3A.php">Exercices</a></li> 
             </ul>
          </li>
          </ul>
        </li>
        <li><a href="about.html">A propos</a></li>
      </ul>
    <img src="images/menu-right.png" alt="image"/> </div>
</div>
<!---header-wrap--->
    <div class="page">
      <div class="panel">
        <div class="title">
          <h1>About</h1>
          <h2>Nulla elit est, commodo id ultrices et, sollicitudin a odioras tortor ante, placerat at posuer</h2>
        </div>
        <div class="content" id="exo"> 
            <p></p>
            <button id="validate">See the correction</button>
        </div>
      </div>
    </div>
    <!---page-wrap-end--->
   <!---page-wrap-end--->
<div class="footer-wrap">
  <div class="footer">
    <div class="content2"> <img src="images/TNCY.jpg" alt="image" >
    </div>
  </div>
</div>
    <!---footer-wrap--->
    <div class="clear"></div>
    <div class="copyright-wrap">
      <div class="copyright">
        <div class="content">
          <p> Designed by : Victoria MARTIN et Leilia NAFA, élèves ingénieures à Télécom Nancy  |  Images From: <a href="www.photorack.net" class="link"> www.photorack.net</a></p></p>
        </div>
      </div>
    </div>
    <script src="js/jquery-1.9.0.min.js"></script>
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.js"></script>
    <script type="text/javascript">

        // initialise plugins
        jQuery(function(){
            jQuery('#example').superfish({
                //useClick: true
            });
        });
        // Récpération des variables PHP en JS //
        var text = <?php echo json_encode($text); ?>;

    </script>
   // <script src="js/exercices.js"></script>
    
-->

</body>
</html>