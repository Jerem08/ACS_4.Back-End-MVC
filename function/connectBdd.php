<?php
try
{
  return $db = new PDO('mysql:host=localhost;dbname=mcs_sbj;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
  $message = die('Erreur : ' . $e->getMessage());
  return $message;
}
?>
