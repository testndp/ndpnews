<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>NDP News</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />

<!-- Image Preloader -->
<script type="text/javascript" src="http://ajax.googlesapi.com/ajax/libs/jquery/jquery.min.js"></script>

</head>
<body>

<div id="main">
<!-- header begins -->
<div id="header">
    <div id="logo"> <img  style="width:1009px;"src="images/logo.png"/>  </div>
    <div id="buttons">
          <a href="index.php" class="but"  title="">Accueil</a>
          <a href="#" class="but" title="">Atelier Coding</a>
          <a href="#"  class="but" title="">HTML</a>
          <a href="#"  class="but" title="">CSS</a>
          <a href="#" class="but" title="">Javascript</a>
		  <a href="#" class="but" title="">Créer un site web</a>
		  <a href="#" class="but" title="">Tuto en vidéo</a>
		  <a href="#" class="but" title="">HTML Editor</a>
		  <a href="#" class="but" title="">SVG Editor</a>
    </div>
</div>
<!-- header ends -->
    <!-- content begins -->
    
    	<div id="content">
        	<div id="right">
            	
            	<h1>Profesioanl Design</h1>
                <div class="right_b"><span class="right_span">Morbi sit amet fringilla dolor. </span><br />
                  Phasellus tempor elementum metus vitae imperdiet. Nulla orci neque, convallis sed suscipit nec, iaculis nec odio. Phasellus sagittis sodales semper. Integer aliquam lectus a lectus mollis mollis rhoncus felis vestibulum. Etiam faucibus ipsum acmetus vehicula porttitor.<br />
                    <div class="read"><a href="#">read more</a></div><br />
           	  </div>
                <div class="right_b"><span class="right_span">Morbi sit amet fringilla dolor. </span><br />
                  Phasellus tempor elementum metus vitae imperdiet. Nulla orci neque, convallis sed suscipit nec, iaculis nec odio. Phasellus sagittis sodales semper. Integer aliquam lectus a lectus mollis mollis rhoncus felis vestibulum. Etiam faucibus ipsum acmetus vehicula porttitor.<br />
                    <div class="read"><a href="#">read more</a></div><br />
           	  </div>
								<div class="right_b"><span class="right_span">Morbi sit amet fringilla dolor. </span><br />
                  Phasellus tempor elementum metus vitae imperdiet. Nulla orci neque, convallis sed suscipit nec, iaculis nec odio. Phasellus sagittis sodales semper. Integer aliquam lectus a lectus mollis mollis rhoncus felis vestibulum. Etiam faucibus ipsum acmetus vehicula porttitor.<br />
                    <div class="read"><a href="#">read more</a></div><br />
           	  </div>
              
           	</div>  
            <div id="left">
           	  <div class="tit_bot">
       		    <div class="tit">
       		      <h1><span class="tit_span"><img src="images/square-matrix.png" style="width:15px;height:15px;">  Tableau des changements&nbsp;</span></h1>
       		    </div>
                <div class="text">
                   	
					Changements effectués : </br>
					- <a href="https://github.com/ndpnews/ndpnews">Dépôt sur Github</a> <br>
					- Changement des titres du style <br>
					- Amélioration du thème des boutons <br>
					- Reamélioration du hovering des boutons<br>
					- Mise en place du système d'articles<br>
					
					</p> 
					<div class="read"><a href="#"><img src="images/add.png" alt="" style="width:25px;height:25px;"/></a>
					</div><br />
           	  	</div>
           	  </div>
			  <?php
			  include_once('admin/bdd.php');
			  global $bdd;
			  
			  $req = $bdd->query('SELECT id, titre, contenu, DATE_FORMAT(date, \'%d/%m/%Y à %Hh%i\') AS date_fr FROM articles ORDER BY date DESC LIMIT 0, 10');
			  while($donnees = $req->fetch())
			  {
				  ?>
				<div class="tit_bot">
       		    <div class="tit">
       		      <h1><span class="tit_span"><img src="images/square-matrix.png" style="width:15px;height:15px;">  <?php echo $donnees['titre']; ?>&nbsp;</span></h1>
				</div>
                  	<div class="text">
					
                    	<?php echo $donnees['date_fr']; ?>
						<br>
						<?php echo strip_tags(substr($donnees['contenu'], 0, 300), '... <br><p>'); ?>
						
						<div class="read"><a href="article.php?id=<?php echo $donnees['id']; ?>"><img src="images/add.png" alt="" style="width:25px;height:25px;"/></a>
						</div>
                    	<br />
					</div>
           	    </div>
				<?php
			  }
				?>
            </div>
			<?php
			// Fin de la boucle des billets
			$req->closeCursor();
			?>
            <br />
         <!-- footer begins -->
            <div id="footer">



			
			<div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
            Copyright  2016    <a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a> | <a href="admin">Administration</a>  </div>


				<!-- footer ends -->
        </div>
    <!-- content ends -->
</div>
</body>
</html>
