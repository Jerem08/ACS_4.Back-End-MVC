<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title></title>
  </head>
  <?php include('function.php'); ?>
  <body>
    <div class="login container rounded border border-info">
      <div class="log_form d-flex justify-content-center">
        <form method="post" action="function/log.php">
          <div class="form-group">
            <label for="inputUsername">Username</label>
            <input type="text" name="username" class="form-control" id="inputusername" placeholder="username">
          </div>
          <div class="form-group">
            <label for="inputPassword4">Password</label>
            <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Sign in</button>

            </div>
          </div>
        </form>
      </div>

    </div>
  </body>
</html>
