<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

  $filename = "results.csv";
  $file = fopen($filename, "a");
  fwrite($file, $name . "," . $email . "," . $phone . "\n");
  fclose($file);
  header('Content-Description: File Transfer');
header('Content-Type: application/force-download');
header('Content-Disposition: attachment; filename=pedidos.csv');
echo $shtml
?>

