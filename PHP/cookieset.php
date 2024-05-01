<?php
if (isset($_GET['name']) && isset($_GET['value']) && isset($_GET['hours'])) {
  $name = $_GET['name'];
  $value = $_GET['value'];
  $hours = $_GET['hours'];

  setcookie($name, $value, time() + ($hours * 60 * 60), "/");
}
?>
