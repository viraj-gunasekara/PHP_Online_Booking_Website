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
    <form>
      <h4 class="bg-dark text-white py-3">ADMIN LOGIN PANEL</h4>
      <div class="p-4">
        <!-- row 1 -->
        <div class="mb-3">
          <input name="admin_name" type="email" class="form-control shadow-none text-center" placeholder="Admin Name">
        </div>
        <!-- row 2 -->
        <div class="mb-4">
          <input name="admin_pass" type="email" class="form-control shadow-none text-center" placeholder="Password">
        </div>
        <button name="login" class="btn text-white custom-bg shadow-none">LOGIN</button>
      </div>
    </form>
  </div>


  <!-- scripts -->
   <?php require('admin_assets/scripts.php') ?>
</body>
</html>