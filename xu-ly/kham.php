<?php
include 'CRUD.php';
$object = new Crud();
$nam =  DATE("Y");
$ma_nv=  $_POST["ma_nv"];

$tien_su_benh = $_POST["tien_su_benh"];
$chieu_cao =  $_POST["chieu_cao"];
$can_nang =  $_POST["can_nang"];
$bmi =  $_POST["bmi"];
$mach =  $_POST["mach"];
$huyet_ap =  $_POST["huyet_ap"];
$tl_phan_loai =  $_POST["tl_phan_loai"];

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

$da_lieu_kham =  $_POST["da_lieu_kham"];
$xl_da_lieu =  $_POST["xl_da_lieu"];
$bs_da_lieu=  $_POST["bs_da_lieu"];



$kq =  $_POST["kq"];
$dg =  $_POST["dg"];
$phan_loai =  $_POST["phan_loai"];
$cac_benh_tat =  $_POST["cac_benh_tat"];

$bs_kl =  $_POST["bs_kl"];

try {
  $sql = "select * from tbl_kham_suc_khoe where ma_nv = '".$ma_nv."' and nam = '".$nam."'";
  $result = $object->execute_query($sql);
  
  //nếu chưa khám
  if(mysqli_num_rows($result) == 0){
    $sql = "INSERT INTO `tbl_kham_suc_khoe` (`nam`, `ma_nv`, `tien_su_benh`, `chieu_cao`, `can_nang`, `bmi`, `mach`, `huyet_ap`, `tl_phan_loai`,"
      ." `tuan_hoan_kham`, `xl_tuan_hoan`, `bs_tuan_hoan`,"
      ." `ho_hap_kham`, `xl_ho_hap`, `bs_ho_hap`,"
      ." `tieu_hoa_kham`, `xl_tieu_hoa`, `bs_tieu_hoa`,"
      ." `than_tiet_nieu_kham`, `xl_than_tiet_nieu`, `bs_than_tiet_nieu`,"
      ." `noi_tiet_kham`, `xl_noi_tiet`, `bs_noi_tiet`,"
      ." `co_xuong_khop_kham`, `xl_co_xuong_khop`, `bs_co_xuong_khop`,"
      ." `than_kinh_kham`, `xl_than_kinh`, `bs_than_kinh`,"
      ." `tam_than_kham`, `xl_tam_than`, `bs_tam_than`,"
      ." `kk_mp_kham`, `kk_mt_kham`, `ck_mp_kham`, `ck_mt_kham`, `benh_mat_kham`, `xl_mat`, `bs_mat`,"
      ." `tt_nt_kham`, `tt_nth_kham`, `tp_nt_kham`, `tp_nth_kham`, `tmh_benh`, `xl_tmh`, `bs_tmh`,"
      ." `rhm_ht`, `rhm_hd`, `rhm_benh`, `xl_rhm`,`bs_rhm`,"
      ."`da_lieu_kham`, `xl_da_lieu`, `bs_da_lieu`,"
      ."`kq`, `dg`, `phan_loai`, `cac_benh_tat`, `bs_kl`) "
      ."VALUES ('".$nam."', '".$ma_nv."', '".$tien_su_benh."', '".$chieu_cao."', '".$can_nang."', '".$bmi."', '".$mach."', '".$huyet_ap."', '".$tl_phan_loai."',"
      ." '".$tuan_hoan_kham."', '".$xl_tuan_hoan."', '".$bs_tuan_hoan."',"
      ." '".$ho_hap_kham."', '".$xl_ho_hap."', '".$bs_ho_hap."',"
      ." '".$tieu_hoa_kham."', '".$xl_tieu_hoa."', '".$bs_tieu_hoa."',"
      ." '".$than_tiet_nieu_kham."', '".$xl_than_tiet_nieu."', '".$bs_than_tiet_nieu."',"
      ." '".$noi_tiet_kham."', '".$xl_noi_tiet."', '".$bs_noi_tiet."',"
      ." '".$co_xuong_khop_kham."', '".$xl_co_xuong_khop."', '".$bs_co_xuong_khop."',"
      ." '".$than_kinh_kham."', '".$xl_than_kinh."', '".$bs_than_kinh."',"
      ." '".$tam_than_kham."', '".$xl_tam_than."', '".$bs_tam_than."',"
      ." '".$kk_mp_kham."', '".$kk_mt_kham."', '".$ck_mp_kham."', '".$ck_mt_kham."', '".$benh_mat_kham."', '".$xl_mat."', '".$bs_mat."',"
      ." '".$tt_nt_kham."', '".$tt_nth_kham."', '".$tp_nt_kham."', '".$tp_nth_kham."', '".$tmh_benh."', '".$xl_tmh."', '".$bs_tmh."',"
      ." '".$rhm_ht."', '".$rhm_hd."', '".$rhm_benh."', '".$xl_rhm."', '".$bs_rhm."',"
      ." '".$da_lieu_kham."', '".$xl_da_lieu."', '".$bs_da_lieu."',"
      ." '".$kq."', '".$dg."', '".$phan_loai."', '".$cac_benh_tat."', '".$bs_kl."');";
    } else{// nếu khám rồi --> cập nhật kết quả khám
      $sql = "update tbl_kham_suc_khoe "
      ." set tien_su_benh= '".$tien_su_benh."',chieu_cao='".$chieu_cao."',can_nang='".$can_nang."',bmi='".$bmi."',mach='".$mach."',huyet_ap='".$huyet_ap."',tl_phan_loai='".$tl_phan_loai."',"
      ." tuan_hoan_kham='".$tuan_hoan_kham."', xl_tuan_hoan='".$xl_tuan_hoan."',bs_tuan_hoan='".$bs_tuan_hoan."',"
      ." ho_hap_kham ='".$ho_hap_kham."',xl_ho_hap='".$xl_ho_hap."',bs_ho_hap='".$bs_ho_hap."',"
      ." tieu_hoa_kham ='".$tieu_hoa_kham."',xl_tieu_hoa='".$xl_tieu_hoa."',bs_tieu_hoa='".$bs_tieu_hoa."',"
      ." than_tiet_nieu_kham='".$than_tiet_nieu_kham."',xl_than_tiet_nieu='".$xl_than_tiet_nieu."',bs_than_tiet_nieu='".$bs_than_tiet_nieu."',"
      ." noi_tiet_kham='".$noi_tiet_kham."',xl_noi_tiet='".$xl_noi_tiet."',bs_noi_tiet='".$bs_noi_tiet."',"
      ." co_xuong_khop_kham = '".$co_xuong_khop_kham."',xl_co_xuong_khop='".$xl_co_xuong_khop."',bs_co_xuong_khop='".$bs_co_xuong_khop."',"
      ." than_kinh_kham='".$than_kinh_kham."',xl_than_kinh='".$xl_than_kinh."',bs_than_kinh='".$bs_than_kinh."',"
      ." tam_than_kham='".$tam_than_kham."',xl_tam_than='".$xl_tam_than."',bs_tam_than='".$bs_tam_than."',"
      ." kk_mp_kham='".$kk_mp_kham."',kk_mt_kham='".$kk_mt_kham."',ck_mp_kham='".$ck_mp_kham."',ck_mt_kham='".$ck_mt_kham."',benh_mat_kham='".$benh_mat_kham."',xl_mat='".$xl_mat."',bs_mat='".$bs_mat."',"
      ." tt_nt_kham='".$tt_nt_kham."',tt_nth_kham='".$tt_nth_kham."',tp_nt_kham='".$tp_nt_kham."',tp_nth_kham='".$tp_nth_kham."',tmh_benh='".$tmh_benh."',xl_tmh='".$xl_tmh."',bs_tmh='".$bs_tmh."',"
      ." rhm_ht='".$rhm_ht."',rhm_hd='".$rhm_hd."',rhm_benh='".$rhm_benh."',xl_rhm='".$xl_rhm."',bs_rhm='".$bs_rhm."',"
      ." da_lieu_kham='".$da_lieu_kham."',xl_da_lieu='".$xl_da_lieu."',bs_da_lieu='".$bs_da_lieu."',"
      ." kq ='".$kq."',dg = '".$dg."',phan_loai='".$phan_loai."',cac_benh_tat='".$cac_benh_tat."',bs_kl='".$bs_kl."'";
    }

    $object->execute_query($sql);
    echo "Khám sức khỏe thành công";

  } catch (\Exception $e) {
    echo $e;
  }



  ?>
