<?php
    require_once('competence.php');
    class GestionCompetence extends Competence{
        public static $db;

        public function __construct()
        {
            try
            {
                include("identifiant.php");
                self::$db = new PDO("$techno:$location;dbname=$dbname;", $user, $password);
            }
            catch(Exception $e)
            {
                die('Erreur : '.$e->getMessage());
            }
        }

        public function displaySavoir(){
            $data = array();
            $req = self::$db->prepare("SELECT * FROM hardskills WHERE hardskills_categorie = 'savoir-faire'");
            $status = $req->execute();
            if (!$status) {
                print_r($req->errorInfo());
            }
            while ($competence = $req->fetch()) {
                $competences = new Competence();
                $competences->setName($competence["hardskills_name"]);
                $competences->setDescription($competence["hardskills_description"]);

                array_push($data,$competences);

            }
            $req->closeCursor();
            return $data;
        }
        public function displayLanguage()
        {
            $data = array();
            $req = self::$db->prepare("SELECT * FROM hardskills WHERE hardskills_categorie = 'language'");
            $status = $req->execute();
            if (!$status) {
                print_r($req->errorInfo());
            }
            while ($competence = $req->fetch()) {
                $competences = new Competence();
                $competences->setName($competence["hardskills_name"]);
                array_push($data,$competences);

            }
            $req->closeCursor();
            return $data;
        }
    }