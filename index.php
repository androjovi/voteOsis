<?php
include 'php/lib.php';
mobileFirst();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Polling Osis</title>
    <style>
    .container2{
      margin: 200px auto;
      text-align: center;
    }
    .form-group{
      text-align: -webkit-center;
    }
    </style>
    <?php css("css/bootstrap.min.css"); ?>
  </head>
  <body>
    <div class="container2">
      <form action="" method="post" class="form-inline">
        <div class="form-group">
            <input type="text" name="user" class="form-control" placeholder="Nama anda" style="width:200px;" maxlength="4">
          </div>
          <input type="submit" class="btn btn-default" value="Confirm identity" name="submit"><br>
          <small>3 huruf nama depan anda</small>
          <?php if (isset($_POST['submit'])){
            cekUser();
          } ?>
    </form>
  </body>
</html>
<a class="btn btn-primary" href="graph.php" role="button">Lihat perolehan sementara</a>
