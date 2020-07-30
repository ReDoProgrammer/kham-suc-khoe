<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <?php
  header("Content-type: text/html; charset=utf-8");
  include 'CRUD.php';
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
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script type="text/javascript">
    var ma_nv;
    $(document).ready(function(){
      $('.btnKham').click(function(){
        ma_nv =  $(this).attr('id');
        $('#ma_nv').empty();
        $('#ma_nv').append(ma_nv);
        var ho_ten = $(this).attr('data-hoten');
        $("#modalKham").modal();
        $('#ho_ten').empty();
        $('#ho_ten').append('Nhân viên: '+ho_ten);
        load_bacsi();
        load_xeploai();
      });
    });


    function load_bacsi(){
      var action = "get_dsbs";
      $.ajax({
        url:"action.php",
        method:"POST",
        data:{action:action},
        success:function(data){
          $('.dsbs').empty();
          $('.dsbs').append(data);
        }
      });
    }

    function load_xeploai(){
      let action = "get_xeploai";
      $.ajax({
        url:"action.php",
        method:"POST",
        data:{action:action},
        success:function(data){
          $('.xl').empty();
          $('.xl').append(data);
        }
      });
    }
    </script>
    <script type="text/javascript" src="kham.js">
    </script>



  </footer>
  </html>
