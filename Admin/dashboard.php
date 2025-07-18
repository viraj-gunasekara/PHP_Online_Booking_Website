<?php
  require('admin_assets/essentials.php');
  adminLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <!-- links -->
   <?php require('admin_assets/links.php') ?>
</head>
<body class="bg-light">
  
  <div class="contanier-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between">
    <h3 class="mb-0">ADMIN DASHBOARD</h3>
    <a href="logout.php" class="btn btn-light btn-sm">LOG OUT</a>
  </div>

  <!-- scripts -->
   <?php require('admin_assets/scripts.php') ?>
</body>
</html>