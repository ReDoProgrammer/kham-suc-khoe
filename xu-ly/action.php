<?php
//action.php
include 'CRUD.php';
$object = new Crud();



if(isset($_POST["action"])){
  if($_POST["action"] == "get_dsbs"){
    echo $object->get_dsbs();
  }

  if($_POST["action"] == "get_xeploai") {
    echo $object->get_xeploai();
  }

  if($_POST["action"] == "get_kqksk") {
    $nam = $_POST["nam"];
    echo $object->get_kqksk($nam);
  }

  if($_POST["action"] == "get_kqnv") {
    $ma_nv = $_POST["ma_nv"];
    $nam = $_POST["nam"];
    echo $object->get_kqksknv($ma_nv,$nam);
  }
}
?>
