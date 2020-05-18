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
	<link href="https://fonts.googleapis.com/css2?family=Crete+Round&display=swap" rel="stylesheet"> 
</head>
  <body>
	<section id="presentation">
		<nav id="menu">
				<a href="#competence" class="lienMenu">Competences</a>
				<a href="#portfolio" class="lienMenu">Portfolio</a>
				<a href="#recommandation" class="lienMenu">Recommandations</a>
		</nav>
			<div id="welcome" class="container">
				<h1> <span>Solenn PROVOST</span></h1>
				<h2> <span>Développeur</span> </h2>
				<h3> Bienvenue sur mon Portfolio </h3>
			</div>
		</section>
		<section id="contact">
			<div class="reseauSocial">
				<a href="https://www.linkedin.com/in/solenn-provost-872851197/"> Linkedin 
				<img src="img/linkedin.png"></a>
			</div>
			<div class="reseauSocial">
				<a href="https://github.com/solenn6"> GitHub   
				<img src="img/github.png"></a>
			</div>
			<div class="reseauSocial">
				<a href="PROVOST_Solenn_CV.pdf">Télécharger mon CV 
				<img src="img/download.png"> </a>
			</div>
		</section>
		<section id="competence">
			<h2> Mes Compétences </h2>
            <div id="savoir">
                <h3> Savoir-faire</h3>
                <div>
                    <?php
                        require_once('class/gestionCompetence.php');
                        $competences = new GestionCompetence();
                        $data = $competences->displaySavoir();
                        foreach($data as $competence) {
                        ?>
                        <img src="img/check.png">
                    <div>
                        <?php
                            echo '<h4>' . utf8_encode($competence->getName()) . '</h4>';
                            echo '<p class="descriptionSavoir">' . utf8_encode($competence->getDescription()) . '</p></br>';
                        }
                        ?>
                    </div>
                </div>
                <h3> Language de programmation</h3>
                <div class="parent">
                    <?php
                    require_once('class/gestionCompetence.php');
                    $competences = new GestionCompetence();
                    $data = $competences->displayLanguage();
                    foreach($data as $competence) {
                        ?>
                            <div class="barre">
                                <?php
                                echo '<h4>'.utf8_encode($competence->getName()).'</h4>';
                                ?>
                            </div>
                            <div class="barre1"></div>
                            <div class="barre2"></div>
                            <?php
                        }
                        ?>
                </div>
            </div>
		</section>
        <section id="portfolio">
                <h2> Mon Portfolio </h2>
                <div id="filtre">
                    <h3> Filtrer par:</h3>
                    <button class="btn btn-default filter-button" data-filter="all">Tous les projets</button>
                    <button class="btn btn-default filter-button" data-filter="web">Developpement Web</button>
                    <button class="btn btn-default filter-button" data-filter="application">Developpement application</button>
                </div>
        <?php
            require_once('class/gestionProject.php');
            $projects = new GestionProject();
            $data = $projects->displayProject();
            foreach($data as $project) {
                ?>
                <div id="projectPortfolio">
                    <!-- Single Gallery Item -->
                    <div
                        class="filter <?php echo $project->getFilter(); ?> " id="displayPortfolio">
                        <img src="<?php echo $project->getPicture(); ?>">
                        <div class="caption">
                            <?php echo '<h4>' . $project->getName() . '</h4>'; ?>
                            <div class="container">
                                <!-- Trigger the modal with a button -->
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal"
                                        data-target="#myModal<?php echo $project->getId(); ?>">Voir la description
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="myModal<?php echo $project->getId(); ?>" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;
                                                </button>
                                                <?php echo '<h4 class="modal-title">' . $project->getName() . '</h4>'; ?>
                                            </div>
                                            <div class="modal-body">
                                                <?php echo '<p>' . utf8_encode($project->getDescription()) . '</p>'; ?>
                                                <?php echo '<p>' . utf8_encode($project->getLanguage()). '</p>'; ?>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
                ?>
        </section>
        <section id="loisir">
            <h2> Mes loisirs </h2>
            <div id="hobbies">
                <div class="parent">
                    <div class="child1">
                        <img src="img/basket.jpg">
                    </div>
                    <div class="child1 child2"> Le basket </div>
                </div>
                <div class="parent">
                    <div class="child1">
                        <img src="img/parapente.jpg">
                    </div>
                    <div class="child1 child2"> Le parapente</div>
                </div>
                <div class="parent">
                    <div class="child1">
                        <img src="img/timetable.jpg">
                    </div>
                    <div class=" child1 child2"> Les voyages</div>
                </div>
                <div class="parent">
                    <div class="child1">
                        <img src="img/ride.jpg">
                    </div>
                    <div class="child1 child2"> Le snowboard </div>
                </div>
            </div>
        </section>
        <div id="contactForm">
            <h2> Me Contacter</h2>
            <form>
                <input type="text" name="name" placeholder="Exemple: Solenn PROVOST">
                <input type="email" name="email" placeholder="Exemple: solennprovost1@gmail.com">
                <input type="text" name="subject" placeholder="Exemple: Entretien d'embauche">
                <textarea name="message" placeholder="Exemple: Nous aimerions vous rencontrer afin de ..."></textarea>
            </form>
        </div>
		<footer>
			<p> Réalisé par Solenn Provost @2020</p>
			<a href=""> Mentions Légales </a>
		</footer>
	</body>
</html>