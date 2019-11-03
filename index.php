<?php // ouverture de session (pour mémoriser le pseudo *)
session_start();
?>
<?php include('head.php'); ?>
<?php require('function.php'); ?>
<?php sessionUser(); ?>
