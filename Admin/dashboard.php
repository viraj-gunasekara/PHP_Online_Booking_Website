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
  <!-- header & sidebar -->
   <?php require('admin_assets/header_sidebar.php') ?>

   <!-- main content -->
   <div class="container-fluid" id="main-content">
    <div class="row">
      <div class="col-lg-10 ms-auto p-4 overflow-hidden">
        body
      </div>
    </div>
   </div>

  <!-- scripts -->
   <?php require('admin_assets/scripts.php') ?>
</body>
</html>