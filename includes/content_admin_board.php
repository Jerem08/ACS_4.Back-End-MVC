<div class="navbar" id="navbar">
  <a class="butt active" href="index.php"><i class="fa fa-clone"></i> All Article</a>
  <a class="butt" href="single.php"><i class="fa fa-pencil-square-o"></i> Create Article</a>
  <a class="butt" href="#"><i class="fa fa-fw fa-search"></i> Search</a>
  <div class="dropdown">
    <a class="butt dropbtn" onclick="drop()"><i class="fa fa-fw fa-user"></i> Login</a>
    <div id="myDropdown" class="dropdown-content">
      <a href="login.php">Déconnexion</a>
    </div>
  </div>
</div>
  <div class="container">
    <div class="row col-12">
      <?php
      $count=0;
      while ($donnees = $reponse->fetch())
      {
        $count++
        ?>

        <div class="card col-3" onclick="location.href='page.php?id=<?php echo $donnees['ID']; ?>';">
          <img class="card-img-top" src="<?php echo $donnees['article_pic']; ?>" alt="">
          <div class="card-header">
            <h1 class="text-center titre"><?php echo $donnees['article_title']; ?></h1>
          </div>
          <div class="card-body collapse" id="resumer<?php echo $count ?>">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </div>
          <div class="card-footer">
            <p>Ecrit par <a href=><?php echo $donnees['article_author']; ?></a>. Le <?php echo $donnees['article_datetime']; ?></p>
          </div>
          <div class="d-flex justify-content-between group-but">
            <button type="button" class="but"><a href="jerem2.php?id=<?php echo $donnees['ID']; ?>">Modifier</a></button>
            <a id="but-arrow" data-toggle="collapse" data-target="#resumer<?php echo $count ?>">🢗</a>
          </div>

        </div>

        <?php

      }
      ?>
    </div>
  </div>
</div>
