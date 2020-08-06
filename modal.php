<!-- Modal -->
<div class="modal fade" id="modalKham" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <div style="width:100%;">
          <h4 id="ho_ten" class="text-danger text-uppercase text-right"></h4>
        </div>
        <form id="formKB" method="post" action="./xu-ly/kham.php">

          <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#tsbt">I. T.SỬ B.TẬT</a></li>
            <li><a data-toggle="tab" href="#the-luc">II. THỂ LỰC</a></li>
            <li><a data-toggle="tab" href="#lam-sang">III. LÂM SÀNG</a></li>
            <li><a data-toggle="tab" href="#cls">IV. CẬN LÂM SÀNG</a></li>
            <li><a data-toggle="tab" href="#ket-luan">V. KẾT LUẬN</a></li>
          </ul>

          <div class="tab-content">
            <input type="text" name="ma_nv" id="ma_nv" hidden>
            <div id="tsbt" class="tab-pane fade in active">
              <?php include './trang_con/tien_su_benh_tat.php' ?>
            </div>
            <div id="the-luc" class="tab-pane fade">
              <?php include './trang_con/the_luc.php' ?>
            </div>
            <div id="lam-sang" class="tab-pane fade">
              <?php include './trang_con/lam_sang.php' ?>
            </div>
            <div id="cls" class="tab-pane fade">
              <?php include './trang_con/can_lam_sang.php' ?>
            </div>
            <div id="ket-luan" class="tab-pane fade">
              <?php include './trang_con/ket_luan.php' ?>
            </div>
          </div>

        </div>

      </form>  <!---------END FORM ---------->    
    </div>
  </div>
</div>
