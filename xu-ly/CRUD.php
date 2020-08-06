<?php
class Crud
{
  //crud class
  public $connect;
  private $host = "localhost";
  private $username = 'root';
  private $password = '';
  private     $database = 'kham_suc_khoe';

  function __construct()
  {
    $this->database_connect();
  }

  public function database_connect()
  {
    $this->connect = mysqli_connect($this->host, $this->username, $this->password, $this->database);
    mysqli_set_charset( $this->connect, 'UTF8');
  }


  public function execute_query($query) {
    return mysqli_query($this->connect, $query);
  }


  public function get_dsbs(){
    $result = $this->execute_query('select * from tbl_bac_si_kham');
    $output = '';
    while($row = mysqli_fetch_object($result))
    {
      $output .= '<option value='.$row->ma_nv.'>'.$row->ho_ten.'</option>';
    }
    return $output;
  }



  public function get_xeploai(){
    $result = $this->execute_query('select * from tbl_xep_loai');
    $output = '';
    while($row = mysqli_fetch_object($result))
    {
      $output .= '<option value='.$row->id.'>'.$row->loai.'</option>';
    }
    return $output;
  }



  public function get_dsnv() {
    $result = $this->execute_query('select * from tbl_nhan_vien where ma_nv not in (select ma_nv from tbl_kham_suc_khoe where nam = '.date("Y").')');
    return $result;

  }

  public function get_kqksk($nam) {
    $result = $this->execute_query('select a.*,b.ho_ten from tbl_kham_suc_khoe a  inner join tbl_nhan_vien b on a.ma_nv = b.ma_nv where a.nam = '.date("Y").' and a.nam = '.$nam.' order by b.ho_ten ');
    $output = '';
    while($row = mysqli_fetch_object($result))
    {

      $output .= '<tr>';
      $output .= '<td>';
      $output .= '<button class ="btnSua btn btn-warning" id="'.$row->ma_nv.'">Sửa</button>';
      $output .= '</td>';
      $output .= '<td>';
      $output .= $row->ho_ten;
      $output .= '</td>';
      $output .= '<td>';
      $output .= $row->tuan_hoan_kham;
      $output .= '</td>';
      $output .= '<td>';
      $output .= $row->xl_tuan_hoan;
      $output .= '</td>';
      $output .= '<td>';
      $output .= $row->bs_tuan_hoan;
      $output .= '</td>';
      $output .= '<td>';
      $output .= $row->ho_hap_kham;
      $output .= '</td>';
      $output .= '<td>';
      $output .= $row->xl_ho_hap;
      $output .= '</td>';
      $output .= '<td>';
      $output .= $row->bs_ho_hap;
      $output .= '</td>';
      $output .= '<td>';
      $output .= $row->tieu_hoa_kham;
      $output .= '</td>';
      $output .= '<td>';
      $output .= $row->xl_tieu_hoa;
      $output .= '</td>';
      $output .= '<td>';
      $output .= $row->bs_tieu_hoa;
      $output .= '</td>';
      $output .= '<td>';
      $output .= $row->than_tiet_nieu_kham;
      $output .= '</td>';
      $output .= '<td>';
      $output .= $row->xl_than_tiet_nieu;
      $output .= '</td>';
      $output .= '<td>';
      $output .= $row->bs_than_tiet_nieu;
      $output .= '</td>';
      $output .= '<td>';
      $output .= $row->noi_tiet_kham;
      $output .= '</td>';
      $output .= '<td>';
      $output .= $row->xl_noi_tiet;
      $output .= '</td>';
      $output .= '<td>';
      $output .= $row->bs_noi_tiet;
      $output .= '</td>';
      $output .= '<td>';
      $output .= $row->co_xuong_khop_kham;
      $output .= '</td>';

      $output .= '<td>';
      $output .= $row->xl_co_xuong_khop;
      $output .= '</td>';
      $output .= '<td>';
      $output .= $row->bs_co_xuong_khop;
      $output .= '</td>';
      $output .= '<td>';
      $output .= $row->than_kinh_kham;
      $output .= '</td>';
      $output .= '<td>';
      $output .= $row->xl_than_kinh;
      $output .= '</td>';
      $output .= '<td>';
      $output .= $row->bs_than_kinh;
      $output .= '</td>';
      $output .= '<td>';
      $output .= $row->tam_than_kham;
      $output .= '</td>';
      $output .= '<td>';
      $output .= $row->xl_tam_than;
      $output .= '</td>';
      $output .= '<td>';
      $output .= $row->bs_tam_than;
      $output .= '</td>';
      $output .= '<td>';
      $output .= $row->kk_mp_kham;
      $output .= '</td>';
      $output .= '<td>';
      $output .= $row->kk_mt_kham;
      $output .= '</td>';
      $output .= '<td>';
      $output .= $row->ck_mp_kham;
      $output .= '</td>';
      $output .= '<td>';
      $output .= $row->ck_mt_kham;
      $output .= '</td>';
      $output .= '<td>';
      $output .= $row->benh_mat_kham;
      $output .= '</td>';
      $output .= '<td>';
      $output .= $row->xl_mat;
      $output .= '</td>';
      $output .= '<td>';
      $output .= $row->bs_mat;
      $output .= '</td>';
      $output .= '<td>';
      $output .= $row->tt_nt_kham;
      $output .= '</td>';
      $output .= '<td>';
      $output .= $row->tt_nth_kham;
      $output .= '</td>';
      $output .= '<td>';
      $output .= $row->tp_nt_kham;
      $output .= '</td>';

      $output .= '<td>';
      $output .= $row->tp_nth_kham;
      $output .= '</td>';
      $output .= '<td>';
      $output .= $row->tmh_benh;
      $output .= '</td>';
      $output .= '<td>';
      $output .= $row->xl_tmh;
      $output .= '</td>';
      $output .= '<td>';
      $output .= $row->bs_tmh;
      $output .= '</td>';
      $output .= '<td>';
      $output .= $row->rhm_ht;
      $output .= '</td>';
      $output .= '<td>';
      $output .= $row->rhm_hd;
      $output .= '</td>';
      $output .= '<td>';
      $output .= $row->rhm_benh;
      $output .= '</td>';
      $output .= '<td>';
      $output .= $row->xl_rhm;
      $output .= '</td>';
      $output .= '<td>';
      $output .= $row->bs_rhm;
      $output .= '</td>';
      $output .= '<td>';
      $output .= $row->kq;
      $output .= '</td>';
      $output .= '<td>';
      $output .= $row->dg;
      $output .= '</td>';
      $output .= '<td>';
      $output .= $row->bs_kl;
      $output .= '</td>';


      $output .= '</tr>';
    }
    return $output;
  }

  public function kham(
  $nam,$ma_nv,$tien_su_benh,$chieu_cao,$can_nang,$bmi,$mach,$huyet_ap,$tl_phan_loai,
  $tuan_hoan_kham,$xl_tuan_hoan,$bs_tuan_hoan,
  $ho_hap_kham,$xl_ho_hap,$bs_ho_hap,
  $tieu_hoa_kham,$xl_tieu_hoa,$bs_tieu_hoa,
  $than_tiet_nieu_kham,$xl_than_tiet_nieu,$bs_than_tiet_nieu,
  $noi_tiet_kham,$xl_noi_tiet,$bs_noi_tiet,
  $co_xuong_khop_kham,$xl_co_xuong_khop,$bs_co_xuong_khop,
  $than_kinh_kham,$xl_than_kinh,$bs_than_kinh,
  $tam_than_kham,$xl_tam_than,$bs_tam_than,
  $kk_mp_kham,$kk_mt_kham,$ck_mp_kham,$ck_mt_kham,$benh_mat_kham,$xl_mat,$bs_mat,
  $tt_nt_kham,$tt_nth_kham,$tp_nt_kham,$tp_nth_kham,$tmh_benh,$xl_tmh,$bs_tmh,
  $rhm_ht,$rhm_hd,$rhm_benh,$xl_rhm,$bs_rhm,
  $da_lieu_kham,$xl_da_lieu,$bs_da_lieu,
  $kq,$dg,$phan_loai,$cac_benh_tat,$bs_kl){
    $sql = "select count(*) from tbl_kham_suc_khoe where ma_nv = '".$ma_nv."' and nam = '".$nam."'";
    $result = $this->execute_query($sql);
    if($result == 0){
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
      } else{
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
              ." rmh_ht='".$rhm_ht."',rmh_hd='".$rmh_hd."',rhm_benh='".$rmh_benh."',xl_rhm='".$xl_rhm."',bs_rhm='".$bs_rhm."',"
              ." da_lieu_kham='".$da_lieu_kham."',xl_da_lieu='".$xl_da_lieu."',bs_da_lieu='".$bs_da_lieu."',"
              ." kq ='".$kq."',dg = '".$dg."',phan_loai='".$phan_loai."',cac_benh_tat='".$cac_benh_tat."',bs_kl='".$bs_kl."'";
      }
      return $this->execute_query($sql);
    }

}
?>
