<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>
</head>
<body>
   <h2>Sign In</h2>
   <form action="prosesLogin.php" method="POST">
      <label>Email</label>
      <input type="email" name="email">
      <br>
      <label>Password</label>
      <input type="password" name="password">
      <br>
      <input type="submit" name="tombolSubmit" value="Login">
   </form>
</body>
</html>