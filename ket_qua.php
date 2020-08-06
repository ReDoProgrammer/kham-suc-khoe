<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kết quả khám sức khỏe nhân viên</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
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
            <button type="button" name="button" class="btn btn-primary" id="btnLoad" style="width:100%">Lấy thông tin</button>
          </div>
          <div class="col-md-2 col-sm-6">
            <a href="index.php" class="btn btn-success">Khám bệnh</a>
          </div>
        </div>

        <div class="table-responsive">
          <table class="table table-striped ">
            <thead>
              <tr>
                <th></th>
                <th >Họ và tên</th>
                <th >Tuần hoàn</th>
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
                <th >Kết quả</th>
                <th >Đánh giá</th>
                <th >Bác sĩ kết luận</th>


              </tr>
            </thead>
            <tbody id='kqksk'>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
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
  let action = 'get_kqksk';
  $.ajax({
    url:"./xu-ly/action.php",
    method:"POST",
    data:{
      action:action,
      nam:nam
    },
    success:function(data){
      $('#kqksk').empty();
      $('#kqksk').append(data);
    }
  });
  $('.btnSua').click(function(){
    alert(1);
  })
}
</script>
</body>
</html>
