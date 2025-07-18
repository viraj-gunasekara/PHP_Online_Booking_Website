<?php 
  require('admin_assets/essentials.php');
  require('admin_assets/db_config.php');

  session_start();
  if((isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true)){
    redirect('/admin/dashboard.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login Panel</title>
  <!-- links -->
   <?php require('admin_assets/links.php') ?>
</head>
<body class="bg-light">
  <div class="login-form text-center rounded bg-white shadow overflow-hidden">
    <form method="POST">
      <h4 class="bg-dark text-white py-3">ADMIN LOGIN PANEL</h4>
      <div class="p-4">
        <!-- row 1 -->
        <div class="mb-3">
          <input name="admin_name" required type="text" class="form-control shadow-none text-center" placeholder="Admin Name">
        </div>
        <!-- row 2 -->
        <div class="mb-4">
          <input name="admin_pass" required type="password" class="form-control shadow-none text-center" placeholder="Password">
        </div>
        <button name="login" class="btn text-white custom-bg shadow-none">LOGIN</button>
      </div>
    </form>
  </div>

  <?php

    if(isset($_POST['login']))
    {
      $frm_data = filteration($_POST);
      // echo"<h1>$frm_data[admin_name]</h1>";
      // echo"<h1>$frm_data[admin_pass]</h1>";
      // print_r($frm_data);
      $query = "SELECT * FROM `admin_crud` WHERE `admin_name`=? AND `admin_pass`=?";
      $values = [$frm_data['admin_name'],$frm_data['admin_pass']];
      
      $res = select($query,$values,"ss");
      if($res->num_rows==1){
        $row = mysqli_fetch_assoc($res);
        $_SESSION['adminLogin'] = true;
        $_SESSION['adminId'] = $row['sr_no'];
        redirect('/admin/dashboard.php');
      }
      else{
        alert('error','Login failed - Invalid Credentials!');
      }
    }
  ?>

  <!-- scripts -->
   <?php require('admin_assets/scripts.php') ?>
</body>
</html>