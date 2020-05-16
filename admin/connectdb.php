<?php
    try
    {
        include('admin/identifiant.php');
        $db = new PDO("$techno:$location;dbname=$dbname; $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)");
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }
    ?>