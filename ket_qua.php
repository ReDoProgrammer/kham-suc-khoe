<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kết quả khám sức khỏe nhân viên</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/fontawesome/css/font-awesome.min.css">
  <script src="./assets/js/jquery-3.5.1.js" charset="utf-8"></script>
  <script src="./assets/js/bootstrap.min.js" charset="utf-8"></script>
</head>
<body>
  <div class="container-fluid">
    <div class="panel panel-info">
      <!---I. PANEL KHÁM LÂM SÀNG ---------->
      <div class="panel-heading"><h4 class="font-weight-bold">KẾT QUẢ KHÁM SỨC KHỎE NHÂN VIÊN</h4> </div>

      <!---panel body khám lâm sàng ---------->
      <div class="panel-body">
        <div class="row">
          <div class="col-md-6 col-sm-12">

          </div>
          <div class="col-md-2 col-sm-6">
            <select class="form-control" id="nam">
              <?php for($i = date("Y"); $i>date("Y")-10; $i--){?>
                <option value="<?php echo $i?>">Năm <?php echo $i ?></option>
              <?php  } ?>
            </select>
          </div>
          <div class="col-md-2 col-sm-6">
            <button type="button" name="button" class="btn btn-primary" id="btnLoad" style="width:100%">Lấy kết quả</button>
          </div>
          <div class="col-md-2 col-sm-6">
            <a href="index.php" class="btn btn-success">Khám bệnh</a>
          </div>
        </div>

        <div class="table-responsive">
          <table class="table table-striped" id="tblKetQua">
            <thead>
              <tr>
                <th></th>
                <th >Họ và tên</th>
                <th >T.sử bệnh</th>
                <th >C.Cao</th>
                <th >C.nặng</th>
                <th >BMI</th>
                <th >Mạch</th>
                <th >H.áp</th>
                <th >P.L</th>

                <!-- <th >Tuần hoàn</th>
                <th >XL</th>
                <th >Bác sĩ khám</th>
                <th >Hô hấp</th>
                <th >XL</th>
                <th >Bác sĩ khám</th>
                <th >Tiêu hóa</th>
                <th >XL</th>
                <th >Bác sĩ khám</th>
                <th >Thận - tiết niệu</th>
                <th >XL</th>
                <th >Bác sĩ khám</th>
                <th >Nội tiết</th>
                <th >XL</th>
                <th >Bác sĩ khám</th>
                <th >Cơ - xương - khớp</th>
                <th >XL</th>
                <th >Bác sĩ khám</th>
                <th >Thần kinh</th>
                <th >XL</th>
                <th >Bác sĩ khám</th>
                <th >Tâm thần</th>
                <th >XL</th>
                <th >Bác sĩ khám</th>
                <th >Mắt phải (không kính)</th>
                <th >Mắt trái (không kính)</th>
                <th >Mắt phải (có kính)</th>
                <th >Mắt trái (có kính)</th>
                <th >Bệnh về mắt</th>
                <th >XL</th>
                <th >Bác sĩ khám</th>
                <th >Tai trái (nói thường)</th>
                <th >Tai phải (nói thường)</th>
                <th >Tai trái (nói thầm)</th>
                <th >Tai phải (nói thầm)</th>
                <th >Bệnh TMH</th>
                <th >XL</th>
                <th >Bác sĩ khám</th>
                <th >Hàm trên</th>
                <th >Hàm dưới</th>
                <th >Bệnh RHM</th>
                <th >XL</th>
                <th >Bác sĩ khám</th>

                <th >Bệnh da liễu</th>
                <th >XL</th>
                <th >Bác sĩ khám</th>

                <th >Kết quả</th>
                <th >Đánh giá</th>
                <th >P.Loại</th>
                <th >Các b.tật</th>
                <th >Bác sĩ kết luận</th> -->


              </tr>
            </thead>
            <tbody id='kqksk'>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <?php
  include 'modal.php';
  ?>


  <style media="screen">
  th,td{
    white-space: nowrap;
  }
</style>

<script type="text/javascript">

$(document).ready(function(){
  let nam = $('#nam').val();
  //load danh sach khi trang được load
  loadData(nam);


  $('#btnLoad').click(function(){
    //load danh sach khi button đc click
    var action = "get_kqksk";
    let nam = $('#nam').val();
    loadData(nam);
  });



});

function loadData(nam){
  $.ajax({
    url:"./xu-ly/action.php",
    method:"POST",
    data:{
      action: "get_kqksk",
      nam:nam
    },
    success:function(data){
      $('#kqksk').empty();
      $('#kqksk').append(data);
    }
  });
}

function kqNV(ma_nv,nam){
  $.ajax({
    url:"./xu-ly/action.php",
    method:"POST",
    data:{
      action: "get_kqnv",
      ma_nv:ma_nv,
      nam:nam
    },
    success:function(data){
       let nv = $.parseJSON(data);
       $('#ma_nv').val(nv.ma_nv);
       $('#tien_su_benh').val(nv.tien_su_benh);;
       $('#chieu_cao').val(nv.chieu_cao);
       $('#can_nang').val(nv.can_nang);
       $('#bmi').val(nv.bmi);
       $('#mach').val(nv.mach);
       $('#huyet_ap').val(nv.huyet_ap);
       $('#tl_phan_loai option:selected').text(nv.tl_phan_loai);
       $('#tuan_hoan_kham').val(nv.tuan_hoan_kham);
       $('#xl_tuan_hoan option:selected').text(nv.xl_tuan_hoan);
       $('#bs_tuan_hoan option:selected').text(nv.bs_tuan_hoan);
       $('#ho_hap_kham').val(nv.ho_hap_kham);
       $('#xl_ho_hap option:selected').text(nv.xl_ho_hap);
       $('#bs_ho_hap option:selected').text(nv.bs_ho_hap);
       $('#tieu_hoa_kham').val(nv.tieu_hoa_kham);
       $('#xl_tieu_hoa option:selected').text(nv.xl_tieu_hoa);
       $('#bs_tieu_hoa option:selected').text(nv.bs_tieu_hoa);

       $('#than_tiet_nieu_kham').val(nv.than_tiet_nieu_kham);
       $('#xl_than_tiet_nieu option:selected').text(nv.xl_than_tiet_nieu);
       $('#bs_than_tiet_nieu option:selected').text(nv.bs_than_tiet_nieu);

       $('#noi_tiet_kham').val(nv.noi_tiet_kham);
       $('#xl_noi_tiet option:selected').text(nv.xl_noi_tiet);
       $('#bs_noi_tiet option:selected').text(nv.bs_noi_tiet);

       $('#co_xuong_khop_kham').val(nv.co_xuong_khop_kham);
       $('#xl_co_xuong_khop option:selected').text(nv.xl_co_xuong_khop);
       $('#bs_co_xuong_khop option:selected').text(nv.bs_co_xuong_khop);

       $('#than_kinh_kham').val(nv.than_kinh_kham);
       $('#xl_than_kinh option:selected').text(nv.xl_than_kinh);
       $('#bs_than_kinh option:selected').text(nv.bs_than_kinh);

       $('#tam_than_kham').val(nv.tam_than_kham);
       $('#xl_tam_than option:selected').text(nv.xl_tam_than);
       $('#bs_tam_than option:selected').text(nv.bs_tam_than);

       $('#kk_mp_kham').val(nv.kk_mp_kham);
       $('#kk_mt_kham').val(nv.kk_mt_kham);
       $('#ck_mp_kham').val(nv.ck_mp_kham);
       $('#ck_mt_kham').val(nv.ck_mt_kham);
       $('#benh_mat_kham').val(nv.benh_mat_kham);
       $('#xl_mat option:selected').text(nv.xl_mat);
       $('#bs_mat option:selected').text(nv.bs_mat);

       $('#tt_nt_kham').val(nv.tt_nt_kham);
       $('#tt_nth_kham').val(nv.tt_nth_kham);
       $('#tp_nt_kham').val(nv.tp_nt_kham);
       $('#tp_nth_kham').val(nv.tp_nth_kham);
       $('#tmh_benh').val(nv.tmh_benh);
       $('#xl_tmh option:selected').text(nv.xl_tmh);
       $('#bs_tmh option:selected').text(nv.bs_tmh);

       $('#rhm_ht').val(nv.rhm_ht);
       $('#rhm_hd').val(nv.rhm_hd);
       $('#rhm_benh').val(nv.rhm_benh);
       $('#xl_rhm option:selected').text(nv.xl_rhm);
       $('#bs_rhm option:selected').text(nv.bs_rhm);

       $('#da_lieu_kham').val(nv.da_lieu_kham);
       $('#xl_da_lieu option:selected').text(nv.xl_da_lieu);
       $('#bs_da_lieu option:selected').text(nv.bs_da_lieu);
       $('#kq').val(nv.kq);
       $('#dg').val(nv.dg);;
       $('#xl_suc_khoe option:selected').text(nv.xl_suc_khoe);
       $('#cac_benh_tat').val(nv.cac_benh_tat);
       $('#bs_kl option:selected').text(nv.bs_kl);
    }
  });
}

//sự kiện của button xóa ứng với mỗi dòng
$('#tblKetQua').on('click', '.btnXoa', function() {
  //lấy mã nhân viên để gán kết quả xóa
  ma_nv =  $(this).attr('id');
  //lấy họ tên nhân viên để hiện thị câu hỏi
  let ho_ten = $(this).attr('data-name');
  //lấy năm khám sức khỏe
  let nam = $('#nam').val();

   var r = confirm("Xóa kết quả khám sức khỏe của nhân viên "+ho_ten+" ?");
   if (r == true) {
     $.ajax({
       url:"./xu-ly/xoa.php",
       method:"POST",
       data:{ma_nv:ma_nv,nam:nam},
       success:function(data){
         alert(data);
         loadData(nam);
       }
     });
   }
});

//sự kiện của button sửa ứng với mỗi dòng
$('#tblKetQua').on('click', '.btnSua', function() {
  $(".btnNext").show();
  $("#btnXacNhan").show();
  let ma_nv =  $(this).attr('id');
  let nam = $('#nam').val();
  let ho_ten = $(this).attr('data-name');
  $("#modalKham").modal();
  $('#ho_ten').empty();
  $('#ho_ten').append('Nhân viên: '+ho_ten);
  load_bacsi();
  load_xeploai();
  kqNV(ma_nv,nam);
});

$('#tblKetQua').on('click', '.btnChiTiet', function() {
  let ma_nv =  $(this).attr('id');
  let nam = $('#nam').val();
  let ho_ten = $(this).attr('data-name');
  $("#modalKham").modal();
  $('#ho_ten').empty();
  $('#ho_ten').append('Nhân viên: '+ho_ten);
  load_bacsi();
  load_xeploai();
  kqNV(ma_nv,nam);
  $(".btnNext").hide();
  $("#btnXacNhan").hide();
});
</script>
<script src="./assets/js/cap-nhat.js" charset="utf-8"></script>

</body>
</html>
