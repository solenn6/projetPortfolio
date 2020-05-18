<?php
    require_once('project.php');
    class GestionProject extends Project
    {
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
        public function displayProject(){
            $data = array();
            $req = self::$db->prepare("SELECT * FROM project");
            $status = $req->execute();
            if (!$status) {
                print_r($req->errorInfo());
            }
            while ($project = $req->fetch()) {
                $projects = new Project();
                $projects->setName($project["project_title"]);
                $projects->setPicture($project["project_picture"]);
                $projects->setFilter($project["project_filter"]);
                $projects->setDescription($project["project_description"]);
                $projects->setLanguage($project["project_language"]);

                array_push($data,$projects);

            }
            $req->closeCursor();
            return $data;
        }
    }