<?php

  include('function/connectBdd.php')
  $stmt = $bd->query("SELECT `ID`, `article_pic` AS `illustration`, `article_title` AS `titre`, `article_author` AS `auteur`, DATE_FORMAT(`article_datetime`, 'le %d/%m/%Y à %Hh%i') AS `publication` FROM `article` ORDER BY `ID` DESC LIMIT 10");
  while ($result = $stmt->fetch()) {

 include('../includes/content_slidercard.php'); 

  }
}

$bd = null;

?>
