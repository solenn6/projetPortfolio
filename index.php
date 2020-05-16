<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Mon Portfolio</title>
    <meta name="description" content="particles.js is a lightweight JavaScript library for creating particles.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" media="screen" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Patrick+Hand&display=swap" rel="stylesheet">  
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <header>
      <nav>
        <div class="navbar navbar-inverse">
          	<ul class="nav navbar-nav">
            	<li class="active"> <a href="#">Accueil</a> </li>
            	<li class="nav-item dropdown">
              	<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Langues</a>
              	<div class="dropdown-menu">
					<a class="dropdown-item" href="indexEn.php">Anglais</a>
					<a class="dropdown-item" href="indexEs.php">Espagnol</a>
              	</div>
				</li>
				<li> <a href="#competence">Competences </a> </li>
				<li> <a href="#portfolio">Portfolio</a> </li>
				<li> <a href="#recommandation">Recommandations</a> </li>
				<li> <a href="admin/Admin_connect.php" >Espace Administrateur</a> </li>
          	</ul>
        </div>
      </nav>
    </header> 
    <section id="presentation">
		<div id="welcome" class="container">
			<h1> Solenn PROVOST</h1>
			<h2> Développeur </h2>
			<h3> Bienvenue sur mon Portfolio </h3>
		</div>
  <!-- particles.js container -->
      	<div id="particles-js"></div>
  <!-- scripts -->
		<script src="js/particles.js"></script>
		<script src="js/app.js"></script>
	<!-- stats.js -->
		<script src="js/lib/stats.js"></script>
		</section>
		<section id="contact">
			<div>
				<a href="https://www.linkedin.com/in/solenn-provost-872851197/"> Linkedin 
				<img src="img/linkedin.png"></a>
			</div>
			<div>
				<a href="https://github.com/solenn6"> GitHub   
				<img src="img/github.png"></a>
			</div>
			<div>
				<a href="PROVOST_Solenn_CV.pdf">Télécharger mon CV 
				<img src="img/download.png"> </a>
			</div>
		</section>
		<section>
			<h2> Mes compétences </h2>
			<div>

			</div>
			<div>

			</div>
			<div>

			</div>
		</section>
        <!-- Gallery Area Start -->
        <div id="portfolio" class="container-fluid">
			<h2> Mon Portfolio </h2> 
			<!-- Projects Menu -->
			<div id="filtre">
				<h3> Filtrer par:</h3>
				<button class="btn btn-default filter-button" data-filter="all">Tous les projets</button>
				<button class="btn btn-default filter-button" data-filter="web">Developpement Web</button>
				<button class="btn btn-default filter-button" data-filter="application">Developpement application</button>
			</div>
			<div class="row alime-portfolio">
            <!-- Single Gallery Item -->
				<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter html filter javascript">
				<img src="img/sitedynamiquemaquette.png" class="img-responsive">
					<div class="caption">
						<h4>Site web dynamique à partir de maquette.</h4>
						<div class="container">
						<!-- Trigger the modal with a button -->
							<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Voir la description </button>
							<!-- Modal -->
							<div class="modal fade" id="myModal1" role="dialog">
								<div class="modal-dialog">
								<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Site web dynamique a partir de maquette</h4>
										</div>
                      					<div class="modal-body">
											<p> Ce projet était la création d'un site web dynamique. 
												Le développement à été réalisé en mobilefirst pour que le site soit responsive. 
												Les languages de programmation utilisés sont HTML/CSS, Javascript. 
												J'ai également utilisé bootstrap pour certaines parties. Ce site était un projet a 
												réalisé à partir d'une maquette. </p>
                      					</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      					</div>
                     				</div>
                    			</div>
                  			</div>
                		</div>
              		</div>
            	</div>   
          	</div>
        </div>
    <div id="recommandation">
		<h2> Mes Recommandations </h2>
		<h3><a href="addrecommandation.php"> Ajouter une recommandation </a></h3>
		<?php
			include('admin/connectdb.php');
			$requete= $db->prepare("SELECT COUNT(*) as cnt FROM recommandation WHERE id_status='2'"); //count nb recommandation where status = accepted by administrator
			$success=$requete->execute();
			if (!$success) {
			print_r($requete->errorInfo());
			}
			$data = $requete->fetchAll();
			if($data[0]['cnt'] == 0){ 
			echo '<p>', 'Actuellement je ne possède pas encore de recommandation', '</p>';
			}
			else{ 
			$sql = "SELECT recommandation_entreprise, recommandation_poste, recommandation_date, recommandation_content FROM recommandation WHERE id_status= '2'";
			$requete = $db->prepare($sql);
			$status = $requete->execute();
			if (!$status) {
				print_r($requete->errorInfo());
			}
			while ($donnees = $requete->fetch()) {
				echo "<p>", strip_tags($donnees['recommandation_entreprise']), $donnees['recommandation_date'], "</p>";
				echo "<p>", strip_tags($donnees['recommandation_poste']), "</p>";    
				echo "<p>", strip_tags($donnees['recommandation_content']), "</p>";
			} // Fin de l'affichage des recommandations
			$requete->closeCursor();
			}
		?>
		</div>
		<footer>
			<p> Réalisé par Solenn Provost @2020</p>
			<a href=""> Mentions Légales </a>
			<div id="map"></div>
				<script>
				var map;
				function initMap() {
					map = new google.maps.Map(document.getElementById('map'), {
					center: {lat: -34.397, lng: 150.644},
					zoom: 8
					});
				}
				</script>
				<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"
				async defer></script>
			</div>

		</footer>
	</body>
</html>