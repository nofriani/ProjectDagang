<?php

include "koneksi.php";

$nama = $_POST["nama"];
$email = $_POST["email"];
$password = $password["password"];
$hashpass = password_hash($password, PASSWORD_DEFAULT);

$insertQuery = "INSERT INTO akun(nama,email,password ) values ('$nama','$email','$hashpass')";
$result = mysqli_query($connection, $insertQuery);

echo "<script>
      alert('Pendaftaran berhasil. Silakan Login.');
      window.location.replace('login.php');
   </script>";