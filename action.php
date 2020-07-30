<?php
//action.php
include 'CRUD.php';
$object = new Crud();
if(isset($_POST["action"]))
{
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

  if($_POST["action"] == "Insert"){

    $nam =  $_POST["nam"];
    $ma_nv=  $_POST["ma_nv"];

    $tuan_hoan_kham =  $_POST["tuan_hoan_kham"];
    $xl_tuan_hoan =  $_POST["xl_tuan_hoan"];
    $bs_tuan_hoan =  $_POST["bs_tuan_hoan"];

    $ho_hap_kham =  $_POST["ho_hap_kham"];
    $xl_ho_hap =  $_POST["xl_ho_hap"];
    $bs_ho_hap =  $_POST["bs_ho_hap"];

    $tieu_hoa_kham =  $_POST["tieu_hoa_kham"];
    $xl_tieu_hoa =  $_POST["xl_tieu_hoa"];
    $bs_tieu_hoa =  $_POST["bs_tieu_hoa"];

    $than_tiet_nieu_kham =  $_POST["than_tiet_nieu_kham"];
    $xl_than_tiet_nieu =  $_POST["xl_than_tiet_nieu"];
    $bs_than_tiet_nieu =  $_POST["bs_than_tiet_nieu"];

    $noi_tiet_kham =  $_POST["noi_tiet_kham"];
    $xl_noi_tiet =  $_POST["xl_noi_tiet"];
    $bs_noi_tiet =  $_POST["bs_noi_tiet"];

    $co_xuong_khop_kham =  $_POST["co_xuong_khop_kham"];
    $xl_co_xuong_khop =  $_POST["xl_co_xuong_khop"];
    $bs_co_xuong_khop =  $_POST["bs_co_xuong_khop"];

    $than_kinh_kham =  $_POST["than_kinh_kham"];
    $xl_than_kinh =  $_POST["xl_than_kinh"];
    $bs_than_kinh =  $_POST["bs_than_kinh"];

    $tam_than_kham =  $_POST["tam_than_kham"];
    $xl_tam_than =  $_POST["xl_tam_than"];
    $bs_tam_than =  $_POST["bs_tam_than"];

    $kk_mp_kham =  $_POST["kk_mp_kham"];
    $kk_mt_kham =  $_POST["kk_mt_kham"];
    $ck_mp_kham =  $_POST["ck_mp_kham"];
    $ck_mt_kham =  $_POST["ck_mt_kham"];
    $benh_mat_kham =  $_POST["benh_mat_kham"];
    $xl_mat =  $_POST["xl_mat"];
    $bs_mat =  $_POST["bs_mat"];

    $tt_nt_kham =  $_POST["tt_nt_kham"];
    $tt_nth_kham =  $_POST["tt_nth_kham"];
    $tp_nt_kham =  $_POST["tp_nt_kham"];
    $tp_nth_kham =  $_POST["tp_nth_kham"];
    $tmh_benh =  $_POST["tmh_benh"];
    $xl_tmh =  $_POST["xl_tmh"];
    $bs_tmh =  $_POST["bs_tmh"];

    $rhm_ht =  $_POST["rhm_ht"];
    $rhm_hd =  $_POST["rhm_hd"];
    $rhm_benh =  $_POST["rhm_benh"];
    $xl_rhm =  $_POST["xl_rhm"];
    $bs_rhm =  $_POST["bs_rhm"];

    $kq =  $_POST["kq"];
    $dg =  $_POST["dg"];
    $bs_kl =  $_POST["bs_kl"];


    try {
      $query = "INSERT INTO tbl_kham_suc_khoe ".
      "(nam,ma_nv,tuan_hoan_kham,xl_tuan_hoan,bs_tuan_hoan,ho_hap_kham,xl_ho_hap,bs_ho_hap,tieu_hoa_kham,xl_tieu_hoa,bs_tieu_hoa,".
      "than_tiet_nieu_kham,xl_than_tiet_nieu,bs_than_tiet_nieu,noi_tiet_kham,xl_noi_tiet,bs_noi_tiet,co_xuong_khop_kham,".
      "xl_co_xuong_khop,bs_co_xuong_khop,than_kinh_kham,xl_than_kinh,bs_than_kinh,tam_than_kham,xl_tam_than,bs_tam_than,kk_mp_kham,kk_mt_kham,ck_mp_kham,ck_mt_kham,benh_mat_kham,xl_mat,bs_mat,".
      "tt_nt_kham,tt_nth_kham,tp_nt_kham,tp_nth_kham,tmh_benh,xl_tmh,bs_tmh,rhm_ht,rhm_hd,rhm_benh,xl_rhm,bs_rhm,kq,dg,bs_kl)".
      " VALUES ('".$nam."', '".$ma_nv."', '".$tuan_hoan_kham."','".$xl_tuan_hoan."','".$bs_tuan_hoan."','".$ho_hap_kham."','".$xl_ho_hap."'".
      ",'".$bs_ho_hap."','".$tieu_hoa_kham."','".$xl_tieu_hoa."','".$bs_tieu_hoa."','".$than_tiet_nieu_kham."','".$xl_than_tiet_nieu."',".
      "'".$bs_than_tiet_nieu."','".$noi_tiet_kham."','".$xl_noi_tiet."','".$bs_noi_tiet."','".$co_xuong_khop_kham."','".$xl_co_xuong_khop."','".$bs_co_xuong_khop."',".
      "'".$than_kinh_kham."','".$xl_than_kinh."','".$bs_than_kinh."','".$tam_than_kham."','".$xl_tam_than."','".$bs_tam_than."','".$kk_mp_kham."',".
      "'".$kk_mt_kham."','".$ck_mp_kham."','".$ck_mt_kham."','".$benh_mat_kham."','".$xl_mat."','".$bs_mat."','".$tt_nt_kham."','".$tt_nth_kham."','".$tp_nt_kham."',".
      "'".$tp_nth_kham."','".$tmh_benh."','".$xl_tmh."','".$bs_tmh."','".$rhm_ht."','".$rhm_hd."','".$rhm_benh."','".$xl_rhm."','".$bs_rhm."','".$kq."','".$dg."','".$bs_kl."')";
      $result = $object->execute_query($query);
      if($result == 1){
        echo 'Khám thành công';
      }else{
        echo 'Khám thất bại';
      }
    } catch (\Exception $e) {
        echo 'insert lỗi: '.$e;
    }

  }
}
?>
