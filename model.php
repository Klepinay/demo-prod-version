<?php

function Connect(){
    $db = dbConnect();
    $username = $_POST['username'];
    $log = $db->prepare("SELECT * FROM t_user WHERE user_identifiant = '".$username."'");
    $log->execute();

    return $log;
}
    

function dbConnect()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=demo;charset=utf8', 'root', '');
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}
