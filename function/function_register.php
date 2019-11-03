<?php

$username = htmlspecialchars($_POST['username']);
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
$confirm_password = htmlspecialchars($_POST['confirm_password']);

try {
          $db = new PDO('mysql:host=localhost;dbname=mcs_sbj;charset=utf8', 'root', '');
          $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          $req = $db->prepare('INSERT INTO users(name, password, confirm_password, email) VALUES(?, ?, ?, ?)');
          $req->execute(array($username, $password, $confirm_password, $email));
          if ($req->rowCount() > 0) {
            $success = 'Création de compte confirmé !';
            header('location:index.php');
          }
        }
        catch (PDOException $e) {
          $message = die('Erreur : ' . $e->getMessage());
        }


// if ($_SERVER["REQUEST_METHOD"] == "POST") {
// // vérifie si les champs sont pleins
//   if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm_password'])) {
//
//     // vérifie si mes champs existent
//     if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm_password'])) {
//
//       if (!preg_match('#^[a-z]{2,50}$#i', $username)) {
//         $errors[] = 'Le nom utilisateur doit contenir au moins 2 caractères !';
//       }
//       if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         $errors[] = 'Entrez une adresse mail valide';
//       }
//       if (!preg_match('#^.{8,200}$#', $password)) {
//         $errors[] = 'Votre mot de passe doit contenir au minimum 8 charactère !';
//       }
//       if ($password = $confirm_password) {
//         $errors[] = 'le mot de passe et la confirmation de mot de passe doivent être identique !';
//       }
//
//       if (!isset($errors)) {
//         try {
//           $db = new PDO('mysql:host=localhost;dbname=mcs_sbj;charset=utf8', 'root', '');
//           $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//         }
//         catch (PDOException $e) {
//           $message = die('Erreur : ' . $e->getMessage());
//         }
//         $req = $db->prepare('INSERT INTO users(username, password, email) VALUES(?, ?, ?)');
//         $req->execute($username, $password, $email);
//
//       }
//     }
//   }
