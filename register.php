

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
    <div class="container border border-info d-flex justify-content-center rounded pt-5 pb-5">
      <div class="form col-12 col-sm-12 col-md-6 col-lg-8 ">
        <div class="title p-3">
          <h1>Rejoinez nous !</h1>
          <p>Je m'enregistre si je n'ai pas de compte !</p>
        </div>
        <form method="post" action="function/function_register.php" class="col-md-12 col-lg-12">
          <div class="form-group col-md-6">
            <label for="inputUsername">Username</label>
            <input type="text" name="username" class="form-control" id="inputusername" placeholder="username">
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password">
          </div>
          <div class="form-group col-md-6">
            <label for="inputConfirm_password4">Confirm_password</label>
            <input type="password" name="confirm_password" class="form-control" id="inputPassword4" placeholder="Password">
          </div>

          <button type="submit" class="btn btn-primary btn-lg">Sign in</button>
        </form>
      </div>
    </div>
    <div class="read">
      <?php
        if(isset($success)){
          echo "<p>". $success."</p>";
        }
       ?>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
