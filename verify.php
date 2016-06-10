<?php
  if (isset($_GET['page'])) {
    require_once('page-' . $_GET['page'] . '.php');
  }
  else {
    require_once('page-home.php');
  }
?>