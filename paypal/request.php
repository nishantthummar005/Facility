<?php
$type = $_GET['type'];
if($type == 'success') {
  echo "<pre>";
  print_r($_REQUEST);
  echo "<h1>Payment Successful</h1>";
} 

if($type == 'cancel') {
  echo "<h1>Payment Canceled</h1>";
}

?>