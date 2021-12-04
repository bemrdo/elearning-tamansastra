<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <form class="" action="<?php echo base_url('login/proses_login'); ?>" method="post">
      <input type="text" name="username" value="" placeholder="username">
      <input type="password" name="password" value="" placeholder="password">
      <button type="submit" name="login">Login</button>
    </form>
  </body>
</html>
