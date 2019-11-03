  <?php
  // suite soumission du formulaire
  if (isset($_POST['submit']))
  {
    // vérification du nom de l'auteur (OK si renseigné et non nul)
    if (!isset($_POST['auteur']) OR $_POST['auteur'] == "")
    {
      exit("Erreur : veuillez renseigner le nom de l'auteur.");
    }
    // vérification titre de l'article (OK si renseigné et non nul)
    if (!isset($_POST['titre']) OR $_POST['titre'] == "")
    {
      exit("Erreur : veuillez renseigner le titre de l'article.");
    }
    // vérification texte de l'article (OK si renseigné et non nul)
    if (!isset($_POST['texte']) OR $_POST['texte'] == "")
    {
      exit("Erreur : veuillez renseigner le texte de l'article.");
    }
    // vérification de l'image d'illustration : plusieurs étapes...
    $content_dir = 'uploads/'; // ... dossier pour l'enregistrement
    /* ... vérification de l'upload
    >> OK si fichier temporaire a bien été transmis */
    $tmp_file = $_FILES['illustration']['tmp_name'];
    if (!is_uploaded_file($tmp_file))
    {
      exit("Erreur : illustration requise.");
    }
    /* ... vérification de l'extension
    >> OK si fichier est bien de type image rebdu */
    $type_file = $_FILES['illustration']['type'];
    if( !strstr($type_file, 'jpg') && !strstr($type_file, 'jpeg') && !strstr($type_file, 'bmp') && !strstr($type_file, 'gif') )
    {
      exit("Erreur : le fichier chargé doit être une image (formats acceptés : JPG, JPEG, BMP, GIF).");
    }
    /* ... vérification de l'enregistrement
    >> OK si fichier déplacé >> dossier destination */
    $name_file = $_FILES['illustration']['name'];
    if( !move_uploaded_file($tmp_file, $content_dir . $name_file) )
    {
      exit("Erreur : impossible de copier le fichier dans $content_dir");
    }
    // si tous les tests sont OK >> validation données
    $article_author = htmlspecialchars($_POST['auteur']);
    $article_title = htmlspecialchars($_POST['titre']);
    $article_pic = htmlspecialchars($content_dir . $name_file);
    $article_content = htmlspecialchars($_POST['texte']);
    // bdexion à la bdd + enregistrement des donnée
    require('connectBdd.php');
    $sql = "INSERT INTO article (article_author, article_title, article_datetime, article_pic, article_content)
    VALUES ('$article_author', '$article_title', NOW(), '$article_pic', '$article_content')";
    $bd->exec($sql);
    echo "Article enregistré !";
    $bd = null;
  }
  ?>
