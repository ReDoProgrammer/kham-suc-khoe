<?php
include 'CRUD.php';
$object = new Crud();
$ma_nv=  $_POST["ma_nv"];
$nam = $_POST["nam"];
try{
  $sql = "delete from tbl_kham_suc_khoe where ma_nv = '".$ma_nv."' and nam = '".$nam."'";
  $object->execute_query($sql);
  echo "Xóa thành công";
}catch (\Exception $e) {
  echo $e;
}
?>
