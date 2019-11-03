<?php

function loginUser()
{
  include('function/connectBdd.php');
  if ($_POST['username'] == 'admin' AND $_POST['password'] == 'admin')
  {
    $usernameAdmin = htmlspecialchars($_POST['username']);
    $passwordAdmin = htmlspecialchars($_POST['password']);
  }
  else
  {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
  }

  if (!empty($usernameAdmin) AND !empty($passwordAdmin))
  {
    $_SESSION['ID']= 1;
    header('location: ../index.php');
    exit();
  }
  else
  {
    $_SESSION['ID']=2;
    // je prépare ma demande sql et je passe a WHERE les ? car je dois mettre des variables php.
    $req = $db->prepare('SELECT*FROM users WHERE name = ? AND password = ?');
    // j'execute ma requète en plaçant mes variable a inserer dans l'ordre a la place des ? dans un array.
    $req->execute(array($username, $password));
    // je vais enregistré dans une variable le resultat de la requète
    $userreq = $req->rowcount();
  }


  if ($userreq == 1) {
    header("location: ../index.php");
  }
  else
  {
    echo '<h1 style="color: red;">Vous n\'avez pas de compte !</h1>';
  }
}



function sessionUser(){
  if ($_SESSION['ID'] != 1)
  {
    require('css/style.php');
    require('includes/content_header.php');
    require('includes/content.php');
    require('js/script.php');
    require('includes/content_footer.php');
  }
  else
  {
      echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">';
      echo '<link rel="stylesheet" href="css/style_admin_article.css" type="text/css">';
      require('header.php');
      include('function/connectBdd.php');
      $reponse = $db->query('SELECT * FROM article');
      require('includes/content_admin_board.php');
      $reponse->closeCursor();
      echo '<script src="https://kit.fontawesome.com/6fee70888d.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>';
      require('footer.php');
  }
}

function onePage()
{
    if ($_SESSION['ID'] != 1)
    {
      require('css/style.php');
      require('includes/content_header.php');
      include('function/connectBdd.php');
      require('function/recupIdUrl.php');
      require('includes/content_one_page.php');
      require('js/script.php');
      require('includes/content_footer.php');
    }
    else
    {
      echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">';
      echo '<link rel="stylesheet" href="css/style_admin_article.css" type="text/css">';
      require('header.php');
      include('function/connectBdd.php');
      require('function/recupIdUrl.php');
      require('includes/content_one_page.php');
      echo '<script src="https://kit.fontawesome.com/6fee70888d.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>';
      require('footer.php');

    }
}

function newArticle()
{
  require('css/style.php');
  require('includes/content_header.php');
  require('includes/content_new_post.php');
  require('js/script.php');
  require('includes/content_footer.php');
}

 ?>
