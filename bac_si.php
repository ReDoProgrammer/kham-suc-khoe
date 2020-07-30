<?php
include 'connect.php';//gọi tới hàm kết nối mysql
//select dữ liệu
$sql = "SELECT * FROM tbl_bac_si_kham";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  $i = 1;
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["ma_nv"]. " - Name: " . $row["ho_ten"]."<br>";
   }
} else {
  echo "0 results";
}
$conn->close();
?>
