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
  include 'connect.php';//gọi tới hàm kết nối mysql
  //select dữ liệu
  $sql = "SELECT * FROM tbl_nhan_vien";
  $result = $conn->query($sql);
  ?>
  <div class="container">
    <table class="table table-striped" id="dsnv">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Họ và tên</th>
          <th scope="col"></th>

        </tr>
      </thead>
      <tbody>
        <?php
        if ($result->num_rows > 0) {
          // output data of each row
          $i = 1;
          while($row = $result->fetch_assoc()) { ?>
            <!-- echo "id: " . $row["ma_nv"]. " - Name: " . $row["ho_ten"]."<br>"; -->
            <tr>
              <th scope="row"><?php echo $i++ ?></th> <!--số thứ tự của hàng -->
              <td>
                <?php echo $row["ho_ten"] ?>
              </td>
              <td style="width:50px;">
                <button type="button" class="btn btn-info kham" name="kham" data-mnv="<?php echo($row["ma_nv"])?>" data-hoten="<?php echo($row["ho_ten"])?>">
                  Khám
                </button>
              </td>
            </tr>
          <?php }
        } else {
          echo "0 results";
        }
        $conn->close();
        ?>


      </tbody>
    </table>
  </div>
</body>
<?php   include 'modal.php'; ?>
<footer>
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script type="text/javascript">
    $(document).ready(()=>{
      $('.kham').click(function(){
        var manv =  $(this).attr('data-mnv');
        var ho_ten = $(this).attr('data-hoten');
        $('#modalKham').modal('show');
        $('#ho_ten').append('Nhân viên: '+ho_ten);

        $.ajax({
            url: 'bac_si.php',
            method: 'GET',
            dataType: 'json',
            success: function (data) {
              console.log(data);
            }
        });

      });
    });
</script>

<script type="text/javascript">
function LoadProductos() {

}
</script>
</footer>
</html>
