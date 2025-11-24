<?php
session_start();
include '../../app.php';
// mengecek apakah user sudah login
if (!isset($_SESSION['email'])) {
  echo " 
         <script>    
              alert('anda harus login dahulu');
              window.location.href='../auth/login.php';
          </script>
           ";
  }
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tugas_pp aslamiyah</title>
  <link rel="shortcut icon" type="image/png" href="../../spike-bootstrap-1.0.0/spike-bootstrap-1.0.0/src/assets/images/logos/user6.png" />
  <link rel="stylesheet" href="../../spike-bootstrap-1.0.0/spike-bootstrap-1.0.0/src/assets/css/styles.min.css" />
</head>
