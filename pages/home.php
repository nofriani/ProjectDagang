<?php
session_start();
if (!isset($_SESSION['email'])) {
   echo "<script>
         alert('Kamu belum login!');
         window.location.replace('login.php');
      </script>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>My Fashion</title>
</head>
<body>
   <a href="index.php">My Fashion</a>
</body>
</html>