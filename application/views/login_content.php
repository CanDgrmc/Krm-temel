<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="<?php echo base_url();?>css/login.css">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'><link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <meta charset="utf-8">
    <title>Yetkili Girişi</title>
  </head>
  <body>
    <div class="login col-md-4 col-xs-8 col-md-offset-4 col-xs-offset-2">


    <form class="" action="<?php echo base_url() ?>efemob_admin/log_me_in" method="post">
      <h3>Giriş Yapınız:</h3>
      <div class="form-group">
        <label for="username" class="col-md-offset-2">Yönetici Adı:</label>
        <input type="text" name="username" size="30">
      </div>
      <div class="form-group">
        <label for="password" class="col-md-offset-2">Şifreniz:</label>
        <input type="password" name="password" size="30">
      </div>
      <div class="form-group">
        <input type="submit"  value="Giriş" class="btn btn-success">
      </div>
    </form>
    </div>
  </body>
</html>
