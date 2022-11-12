<?php
$inputEmail = $_POST["email"];
$inputPassword = $_POST["password"];

$kunciemail = "caca@gmail.com";
$kuncipassword = "caca123";

session_start();

if ($inputEmail == $kunciemail && $inputPassword == $inputPassword) {
   $_SESSION["email"] = $inputEmail;
   
   echo "<script>
         alert('Login Berhasil');
         window.location.replace('home.php');
      </script>";
} else {
   echo "<script>
         alert('Login Gagal!');
         window.location.replace('login.php');
      </script>";
   
}