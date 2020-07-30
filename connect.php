<?php
$conn = new mysqli("localhost","root","","kham_suc_khoe");
mysqli_set_charset($conn, 'UTF8');
// Check connection
if ($conn -> connect_errno) {
  echo "tèo rồi bác ơi: " . $conn -> connect_error;
  exit();
}
?>
