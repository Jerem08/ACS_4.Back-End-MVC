<?php

include('function/connectBdd.php');
$req = $db->prepare('SELECT * FROM article WHERE ID = ?');
$req->execute(array($_GET['id']));
$donnees = $req->fetch();

 ?>
