<li onclick="location.href='page.php?id=<?php echo $result['ID']; ?>';" style="width: 240.4px; float: left; display: block;">
  <img src="<?php echo $result['illustration'] ?>">
  <div class="caption-info">
    <div class="caption-info-head">
      <div class="caption-info-head-left">
        <h4><a href="#">Publié par <?php echo $result['auteur'] ?></a></h4>
        <span><?php echo $result['publication'] ?></span>
      </div>
      <div class="caption-info-head-right">
        <span> </span>
      </div>
      <div class="clear"> </div>
    </div>
  </div>
</li>
