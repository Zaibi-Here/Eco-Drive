<?php
if (isset($_GET['name'])) {
  $name = $_GET['name'];
  setcookie($name, "", time() - 3600, "/");
}
?>
