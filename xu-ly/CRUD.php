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
    $result = $this->execute_query('select a.*,b.ho_ten from tbl_kham_suc_khoe a  inner join tbl_nhan_vien b on a.ma_nv = b.ma_nv where a.nam = '.$nam.' order by b.ho_ten ');
    $output = '';
    while($row = mysqli_fetch_object($result))
    {
      $output .='<tr>';
      $output .= '<td><button id="'.$row->ma_nv.'" data-name="'.$row->ho_ten.'"  class="btnXoa btn"><i class="fa fa-trash text-danger" aria-hidden="true"></i></button>';
      $output .= '<button id="'.$row->ma_nv.'" data-name="'.$row->ho_ten.'" class="btnSua btn"><i class="fa fa-pencil-square-o text-warning" aria-hidden="true"></i></button></td>';
      $output .='<td class=" text-info"><strong>'.$row->ho_ten.'</strong></td>';
      $output .='<td class=" text-info">'.$row->tien_su_benh.'</td>';
      $output .='<td class=" text-info">'.$row->chieu_cao.'</td>';
      $output .='<td class=" text-info">'.$row->can_nang.'</td>';
      $output .='<td class=" text-info">'.$row->bmi.'</td>';
      $output .='<td class=" text-info">'.$row->mach.'</td>';
      $output .='<td class=" text-info">'.$row->huyet_ap.'</td>';
      $output .='<td class=" text-info">'.$row->tl_phan_loai.'</td>';

      // $output .='<td class=" text-info">'.$row->tuan_hoan_kham.'</td>';
      // $output .='<td class=" text-info">'.$row->xl_tuan_hoan.'</td>';
      // $output .='<td class=" text-info">'.$row->bs_tuan_hoan.'</td>';
      //
      // $output .='<td class=" text-info">'.$row->ho_hap_kham.'</td>';
      // $output .='<td class=" text-info">'.$row->xl_ho_hap.'</td>';
      // $output .='<td class=" text-info">'.$row->bs_ho_hap.'</td>';
      //
      // $output .='<td class=" text-info">'.$row->tieu_hoa_kham.'</td>';
      // $output .='<td class=" text-info">'.$row->xl_tieu_hoa.'</td>';
      // $output .='<td class=" text-info">'.$row->bs_tieu_hoa.'</td>';
      //
      // $output .='<td class=" text-info">'.$row->than_tiet_nieu_kham.'</td>';
      // $output .='<td class=" text-info">'.$row->xl_than_tiet_nieu.'</td>';
      // $output .='<td class=" text-info">'.$row->bs_than_tiet_nieu.'</td>';
      //
      // $output .='<td class=" text-info">'.$row->noi_tiet_kham.'</td>';
      // $output .='<td class=" text-info">'.$row->xl_noi_tiet.'</td>';
      // $output .='<td class=" text-info">'.$row->bs_noi_tiet.'</td>';
      //
      // $output .='<td class=" text-info">'.$row->co_xuong_khop_kham.'</td>';
      // $output .='<td class=" text-info">'.$row->xl_co_xuong_khop.'</td>';
      // $output .='<td class=" text-info">'.$row->bs_co_xuong_khop.'</td>';
      //
      // $output .='<td class=" text-info">'.$row->than_kinh_kham.'</td>';
      // $output .='<td class=" text-info">'.$row->xl_than_kinh.'</td>';
      // $output .='<td class=" text-info">'.$row->bs_than_kinh.'</td>';
      //
      // $output .='<td class=" text-info">'.$row->tam_than_kham.'</td>';
      // $output .='<td class=" text-info">'.$row->xl_tam_than.'</td>';
      // $output .='<td class=" text-info">'.$row->bs_tam_than.'</td>';
      //
      // $output .='<td class=" text-info">'.$row->kk_mp_kham.'</td>';
      // $output .='<td class=" text-info">'.$row->kk_mt_kham.'</td>';
      // $output .='<td class=" text-info">'.$row->ck_mp_kham.'</td>';
      // $output .='<td class=" text-info">'.$row->ck_mt_kham.'</td>';
      // $output .='<td class=" text-info">'.$row->benh_mat_kham.'</td>';
      // $output .='<td class=" text-info">'.$row->xl_mat.'</td>';
      // $output .='<td class=" text-info">'.$row->bs_mat.'</td>';
      //
      // $output .='<td class=" text-info">'.$row->tt_nt_kham.'</td>';
      // $output .='<td class=" text-info">'.$row->tt_nth_kham.'</td>';
      // $output .='<td class=" text-info">'.$row->tp_nt_kham.'</td>';
      // $output .='<td class=" text-info">'.$row->tp_nth_kham.'</td>';
      // $output .='<td class=" text-info">'.$row->tmh_benh.'</td>';
      // $output .='<td class=" text-info">'.$row->xl_tmh.'</td>';
      // $output .='<td class=" text-info">'.$row->bs_tmh.'</td>';
      //
      // $output .='<td class=" text-info">'.$row->rhm_ht.'</td>';
      // $output .='<td class=" text-info">'.$row->rhm_hd.'</td>';
      // $output .='<td class=" text-info">'.$row->rhm_benh.'</td>';
      // $output .='<td class=" text-info">'.$row->xl_rhm.'</td>';
      // $output .='<td class=" text-info">'.$row->bs_rhm.'</td>';
      //
      // $output .='<td class=" text-info">'.$row->da_lieu_kham.'</td>';
      // $output .='<td class=" text-info">'.$row->xl_da_lieu.'</td>';
      // $output .='<td class=" text-info">'.$row->bs_da_lieu.'</td>';
      //
      // $output .='<td class=" text-info">'.$row->kq.'</td>';
      // $output .='<td class=" text-info">'.$row->dg.'</td>';
      // $output .='<td class=" text-info">'.$row->phan_loai.'</td>';
      // $output .='<td class=" text-info">'.$row->cac_benh_tat.'</td>';
      // $output .='<td class=" text-info">'.$row->bs_kl.'</td>';
      $output .='</tr>';
    }
    return $output;
  }

  public function get_kqksknv($ma_nv,$nam) {
    $result = $this->execute_query('select a.*,b.ho_ten from tbl_kham_suc_khoe a  inner join tbl_nhan_vien b on a.ma_nv = b.ma_nv where a.ma_nv ="'.$ma_nv.'" and a.nam = '.$nam.'');
    $output = '{';
      while($row = mysqli_fetch_object($result))
      {

        $output .='"ho_ten":"'.$row->ho_ten.'",';
        $output .='"tien_su_benh":"'.$row->tien_su_benh.'",';
        $output .='"chieu_cao":"'.$row->chieu_cao.'",';
        $output .='"can_nang":"'.$row->can_nang.'",';
        $output .='"bmi":"'.$row->bmi.'",';
        $output .='"mach":"'.$row->mach.'",';
        $output .='"huyet_ap":"'.$row->huyet_ap.'",';
        $output .='"tl_phan_loai":"'.$row->tl_phan_loai.'",';

        $output .='"tuan_hoan_kham":"'.$row->tuan_hoan_kham.'",';
        $output .='"xl_tuan_hoan":"'.$row->xl_tuan_hoan.'",';
        $output .='"bs_tuan_hoan":"'.$row->bs_tuan_hoan.'",';

        $output .='"ho_hap_kham":"'.$row->ho_hap_kham.'",';
        $output .='"xl_ho_hap":"'.$row->xl_ho_hap.'",';
        $output .='"bs_ho_hap":"'.$row->bs_ho_hap.'",';

        $output .='"tieu_hoa_kham":"'.$row->tieu_hoa_kham.'",';
        $output .='"xl_tieu_hoa":"'.$row->xl_tieu_hoa.'",';
        $output .='"bs_tieu_hoa":"'.$row->bs_tieu_hoa.'",';

        $output .='"than_tiet_nieu_kham":"'.$row->than_tiet_nieu_kham.'",';
        $output .='"xl_than_tiet_nieu":"'.$row->xl_than_tiet_nieu.'",';
        $output .='"bs_than_tiet_nieu":"'.$row->bs_than_tiet_nieu.'",';

        $output .='"noi_tiet_kham":"'.$row->noi_tiet_kham.'",';
        $output .='"xl_noi_tiet":"'.$row->xl_noi_tiet.'",';
        $output .='"bs_noi_tiet":"'.$row->bs_noi_tiet.'",';

        $output .='"co_xuong_khop_kham":"'.$row->co_xuong_khop_kham.'",';
        $output .='"xl_co_xuong_khop":"'.$row->xl_co_xuong_khop.'",';
        $output .='"bs_co_xuong_khop":"'.$row->bs_co_xuong_khop.'",';

        $output .='"than_kinh_kham":"'.$row->than_kinh_kham.'",';
        $output .='"xl_than_kinh":"'.$row->xl_than_kinh.'",';
        $output .='"bs_than_kinh":"'.$row->bs_than_kinh.'",';

        $output .='"tam_than_kham":"'.$row->tam_than_kham.'",';
        $output .='"xl_tam_than":"'.$row->xl_tam_than.'",';
        $output .='"bs_tam_than":"'.$row->bs_tam_than.'",';

        $output .='"kk_mp_kham":"'.$row->kk_mp_kham.'",';
        $output .='"kk_mt_kham":"'.$row->kk_mt_kham.'",';
        $output .='"ck_mp_kham":"'.$row->ck_mp_kham.'",';
        $output .='"ck_mt_kham":"'.$row->ck_mt_kham.'",';
        $output .='"benh_mat_kham":"'.$row->benh_mat_kham.'",';
        $output .='"xl_mat":"'.$row->xl_mat.'",';
        $output .='"bs_mat":"'.$row->bs_mat.'",';

        $output .='"tt_nt_kham":"'.$row->tt_nt_kham.'",';
        $output .='"tt_nth_kham":"'.$row->tt_nth_kham.'",';
        $output .='"tp_nt_kham":"'.$row->tp_nt_kham.'",';
        $output .='"tp_nth_kham":"'.$row->tp_nth_kham.'",';
        $output .='"tmh_benh":"'.$row->tmh_benh.'",';
        $output .='"xl_tmh":"'.$row->xl_tmh.'",';
        $output .='"bs_tmh":"'.$row->bs_tmh.'",';

        $output .='"rhm_ht":"'.$row->rhm_ht.'",';
        $output .='"rhm_hd":"'.$row->rhm_hd.'",';
        $output .='"rhm_benh":"'.$row->rhm_benh.'",';
        $output .='"xl_rhm":"'.$row->xl_rhm.'",';
        $output .='"bs_rhm":"'.$row->bs_rhm.'",';

        $output .='"da_lieu_kham":"'.$row->da_lieu_kham.'",';
        $output .='"xl_da_lieu":"'.$row->xl_da_lieu.'",';
        $output .='"bs_da_lieu":"'.$row->bs_da_lieu.'",';

        $output .='"kq":"'.$row->kq.'",';
        $output .='"dg":"'.$row->dg.'",';
        $output .='"phan_loai":"'.$row->phan_loai.'",';
        $output .='"cac_benh_tat":"'.$row->cac_benh_tat.'",';
        $output .='"bs_kl":"'.$row->bs_kl.'"';
      }
      return $output.='}';
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
