<div class="container justify-content-center">
  <div class="col-10">
    <h1 class = "jumbotron text-center" style = "font-size: 3rem;"><?php echo $donnees['article_title']; ?></h1>
    <img src="<?php echo $donnees['article_pic'] ?>" alt="">
    <p class = "jumbotron" style = "font-size: 1rem;"><?php echo $donnees['article_content']; ?></p>
    <p class = "jumbotron"><em>Ecrit par:</em> <?php echo $donnees['article_author']; ?><br><em>Le</em> <?php echo $donnees['article_datetime']; ?></p>
  </div>

</div>
