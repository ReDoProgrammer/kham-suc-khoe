<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <script src="./assets/js/jquery-3.5.1.js" charset="utf-8"></script>
  <script src="./assets/js/bootstrap.min.js" charset="utf-8"></script>
</head>
<body>
  <?php
  header("Content-type: text/html; charset=utf-8");
  include './xu-ly/CRUD.php';
  $db = new Crud();

  ?>
  <div class="container">
    <div style="width:100%">

      <a href="ket_qua.php" class="btn btn-success" style="float:right; margin-top:10px; margin-bottom:10px;">Kết quả khám bệnh</a>
    </div>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Họ tên</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php
        $dsnv =  $db->get_dsnv();
        if ($dsnv->num_rows > 0) {
          $i = 1;
          while($row = $dsnv->fetch_assoc()) {?>
            <tr>
              <th scope="row"><?php echo $i++;?></th>
              <td class="text-danger"><?php echo $row['ho_ten'] ?></td>
              <td style="width:120px;">
                <button type="button" id="<?php echo $row['ma_nv']?>" class="btn btn-primary btnKham" style="width:100%;" data-hoten="<?php echo $row['ho_ten']?>">
                  Khám
                </button>
              </td>
            </tr>
          <?php }} ?>
        </tbody>
      </table>
    </div>
  </body>

  <?php
  include 'modal.php';
  ?>
  <footer>
    <script type="text/javascript">
    var ma_nv;
    $(document).ready(function(){
      $('.btnKham').click(function(){
        ma_nv =  $(this).attr('id');
        // $('#ma_nv').empty();
        $('#ma_nv').val(ma_nv);
        var ho_ten = $(this).attr('data-hoten');
        $("#modalKham").modal();
        $('#ho_ten').empty();
        $('#ho_ten').append('Nhân viên: '+ho_ten);
        load_bacsi();
        load_xeploai();
      });
    });

    </script>
    <script src="./assets/js/kham.js" charset="utf-8"></script>



  </footer>
  </html>
