<?php

  require('admin_assets/essentials.php');

  session_start();
  session_destroy();
  redirect('/admin/index.php');

?>