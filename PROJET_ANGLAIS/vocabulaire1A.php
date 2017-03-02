<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ValidetonsemestreaTNCY</title>
<link rel="shortcut icon" type="image/x-icon" href="/imagesicone.jpg" />
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Lobster+Two' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/superfish.css" media="screen">
<script src="js/jquery-1.9.0.min.js"></script>
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.js"></script>
<script>
<!---menu--->
<link rel="stylesheet" href="css/superfish.css" media="screen">
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.js"></script>
<script>

		// initialise plugins
		jQuery(function(){
			jQuery('#example').superfish({
				//useClick: true
			});
		});

		</script>

</head>

<?php
$lines = file('cours/1A/vocabulaire.txt');

// display file line by line
foreach($lines as $line_num => $line) {
    echo "# {$line_num} : ".htmlspecialchars($line)."<br />\n";
}
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
                <li> <a href="works.html">Cours </a> </li>
                <li><a href="#">Exercices</a></li>
              </ul>
            </li>
            <li class="current"> <a href="#">2ème année</a>
              <ul>
                <li> <a href="works.html">Cours </a> </li>
                <li><a href="#">Exercices</a></li>
              </ul>
            </li>
            <li> <a href="#">3ème année</a>
               <ul>
                 <li> <a href="works.html">Cours </a> </li>
                 <li><a href="exercices.php">Exercices</a></li> 
             </ul>
          </li>
          </ul>
        </li>
        <li><a href="about.html">A propos</a></li>
      </ul>
    <img src="images/menu-right.png" alt="image"/> </div>
</div><!---header-wrap--->
<div class="page">
  <div class="panel">
    <div class="title">
      <h1>Cours</h1>
      <h2>Ici tu pourras trouver toutes les leçons utiles à ta réussite </h2>
    </div>
    
    
    
    
    <div class="portfolio-content">
    <ul class="portfolio-categ filter">
      <li class="all active"><a href="#">Grammaire</a></li>
      <li class="cat-item-1"><a href="vocabulaire1A.php" title="">Vocabulaire</a></li>
      <li class="cat-item-2"><a href="#" title="Category 2">TOEIC</a></li>
      <li class="cat-item-3"><a href="#" title="Category 3">Listening</a></li>
      <li class="cat-item-4"><a href="#" title="Category 4">Reading</a></li>
      <li class="cat-item-5"><a href="#" title="Category 5">Culture G</a></li>
    </ul>
  </div>
  
  </div>
</div>
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
      <p> Designed by : Victoria MARTIN et Leilia NAFA, élèves ingénieures à Télécom Nancy  |  Images From: <a href="www.photorack.net" class="link"> www.photorack.net</a></p>
    </div>
  </div>
</div>
 // Récpération des variables PHP en JS //
        var text = <?php echo json_encode($text); ?>;
</body>
</html>