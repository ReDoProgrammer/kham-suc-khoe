<div class="panel panel-primary">
  <div class="panel-heading"><h4 class="font-weight-bold">KHÁM LÂM SÀNG</h4> </div>
  <div class="panel-body">
    <!---panel khám nội khoa -->
    <div class="panel panel-primary">
      <!--panel header khám nội khoa ---->
      <div class="panel-heading">1. Nội khoa</div>

      <!---panel body khám nội khoa --->
      <div class="panel-body">
        <!--row tuần hoàn --->
        <div class="form-row">
          <div class="col-md-6 mb-6">
            <label for="validationServer01">a. Tuần hoàn</label>
            <input type="text" class="form-control is-valid" id="tuan_hoan_kham"  name="tuan_hoan_kham" placeholder="Tuần hoàn" value="T1,T2 đều khỏe" required>
          </div>
          <div class="col-md-2 mb-2">
            <label for="validationServer02">Phân loại</label>
            <select id="xl_tuan_hoan" name="xl_tuan_hoan" class="form-control xl">
            </select>
          </div>
          <div class="col-md-4 mb-6">
            <label for="validationServer02">Bác sĩ khám</label>
            <select id="bs_tuan_hoan" name="bs_tuan_hoan" class="form-control dsbs">
            </select>
          </div>
        </div><!--end row tuần hoàn --->


        <!--row hô hấp --->
        <div class="form-row">
          <div class="col-md-6 mb-6">
            <label for="validationServer01">b. Hô hấp</label>
            <input type="text" class="form-control is-valid" id="ho_hap_kham" name="ho_hap_kham" placeholder="Hô hấp" value="Phổi không nghe ran" required>
          </div>
          <div class="col-md-2 mb-2">
            <label for="validationServer02">Phân loại</label>
            <select id="xl_ho_hap" name="xl_ho_hap" class="form-control xl">
            </select>
          </div>
          <div class="col-md-4 mb-6">
            <label for="validationServer02">Bác sĩ khám</label>
            <select id="bs_ho_hap" name="bs_ho_hap" class="form-control dsbs">
            </select>
          </div>
        </div><!--end row hô hấp --->


        <!--row tiêu hóa --->
        <div class="form-row">
          <div class="col-md-6 mb-6">
            <label for="validationServer01">c. Tiêu hóa</label>
            <input type="text" class="form-control is-valid" id="tieu_hoa_kham" name="tieu_hoa_kham" placeholder="Tiêu hóa" value="bụng mềm" required>
          </div>
          <div class="col-md-2 mb-2">
            <label for="validationServer02">Phân loại</label>
            <select id="xl_tieu_hoa" name="xl_tieu_hoa" class="form-control xl">
            </select>
          </div>
          <div class="col-md-4 mb-6">
            <label for="validationServer02">Bác sĩ khám</label>
            <select id="bs_tieu_hoa" name="bs_tieu_hoa" class="form-control dsbs">
            </select>
          </div>
        </div>  <!--end row tiêu hóa --->


        <!--row thận tiết niệu --->
        <div class="form-row">
          <div class="col-md-6 mb-6">
            <label for="validationServer01">d. Thận - tiết niệu</label>
            <input type="text" class="form-control is-valid" id="than_tiet_nieu_kham" name="than_tiet_nieu_kham" placeholder="Thận - tiết niệu" value="chạm thận....???" required>
          </div>
          <div class="col-md-2 mb-6">
            <label for="validationServer02">Phân loại</label>
            <select id="xl_than_tiet_nieu" name="xl_than_tiet_nieu" class="form-control xl">
            </select>
          </div>
          <div class="col-md-4 mb-6">
            <label for="validationServer02">Bác sĩ khám</label>
            <select id="bs_than_tiet_nieu" name="bs_than_tiet_nieu" class="form-control dsbs">
            </select>
          </div>
        </div><!--end row thận tiết niệu --->


        <!--row nội tiết --->
        <div class="form-row">
          <div class="col-md-6 mb-6">
            <label for="validationServer01">đ. Nội tiết</label>
            <input type="text" class="form-control is-valid" id="noi_tiet_kham" name="noi_tiet_kham" placeholder="Nội tiết" value="bình thường" required>
          </div>
          <div class="col-md-2 mb-2">
            <label for="validationServer02">Phân loại</label>
            <select id="xl_noi_tiet" name="xl_noi_tiet" class="form-control xl">
            </select>
          </div>
          <div class="col-md-4 mb-6">
            <label for="validationServer02">Bác sĩ khám</label>
            <select id="bs_noi_tiet" name="bs_noi_tiet" class="form-control dsbs">
            </select>
          </div>
        </div>  <!--end row nội tiết --->


        <!--row cơ xương khớp --->
        <div class="form-row">
          <div class="col-md-6 mb-6">
            <label for="validationServer01">e. Cơ - xương - khớp</label>
            <input type="text" class="form-control is-valid" id="co_xuong_khop_kham" name="co_xuong_khop_kham" placeholder="Cơ - xương - khớp" value="bình thường" required>
          </div>
          <div class="col-md-2 mb-2">
            <label for="validationServer02">Phân loại</label>
            <select id="xl_co_xuong_khop" name="xl_co_xuong_khop" class="form-control xl">
            </select>
          </div>
          <div class="col-md-4 mb-6">
            <label for="validationServer02">Bác sĩ khám</label>
            <select id="bs_co_xuong_khop" name="bs_co_xuong_khop" class="form-control dsbs">
            </select>
          </div>
        </div><!--end row cơ xương khớp --->

        <!--row thần kinh --->
        <div class="form-row">
          <div class="col-md-6 mb-6">
            <label for="validationServer01">g. Thần kinh</label>
            <input type="text" class="form-control is-valid" id="than_kinh_kham" name="than_kinh_kham" placeholder="Thần kinh" value="tỉnh táo" required>
          </div>
          <div class="col-md-2 mb-2">
            <label for="validationServer02">Phân loại</label>
            <select id="xl_than_kinh" name="xl_than_kinh" class="form-control xl">
            </select>
          </div>
          <div class="col-md-4 mb-6">
            <label for="validationServer02">Bác sĩ khám</label>
            <select id="bs_than_kinh" name="bs_than_kinh" class="form-control dsbs">
            </select>
          </div>
        </div><!--end row thần kinh --->

        <!--row tâm thần --->
        <div class="form-row">
          <div class="col-md-6 mb-6">
            <label for="validationServer01">h. Tâm thần</label>
            <input type="text" class="form-control is-valid" id="tam_than_kham" name="tam_than_kham" placeholder="Tâm thần" value="tỉnh táo" required>
          </div>
          <div class="col-md-2 mb-6">
            <label for="validationServer02">Phân loại</label>
            <select id="xl_tam_than" name="xl_tam_than"class="form-control xl">
            </select>
          </div>
          <div class="col-md-4 mb-6">
            <label for="validationServer02">Bác sĩ khám</label>
            <select id="bs_tam_than" name="bs_tam_than" class="form-control dsbs">
            </select>
          </div>
        </div><!--end row thần kinh --->
      </div><!--END PANEL BODY KHÁM NỘI KHOA --->
    </div>  <!---END PANEL KHÁM NỘI KHOA ---------->

    <!---------PANEL KHÁM MẮT ---------->
    <div class="panel panel-primary">
      <div class="panel-heading">2. Mắt</div>
      <div class="panel-body">
        <div class="form-row">
          <div class="col-md-3 mb-3">
            <label for="validationServer01">Không kính: mắt phải</label>
            <input type="text" class="form-control is-valid" id="kk_mp_kham" name="kk_mp_kham" placeholder="Mắt phải" value="10/10" required>
          </div>
          <div class="col-md-3 mb-3">
            <label for="validationServer01">Không kính: mắt trái</label>
            <input type="text" class="form-control is-valid" id="kk_mt_kham" name="kk_mt_kham" placeholder="Mắt trái" value="10/10" required>
          </div>
          <div class="col-md-3 mb-3">
            <label for="validationServer01">Có kính: mắt phải</label>
            <input type="text" class="form-control is-valid" id="ck_mp_kham" name="ck_mp_kham" placeholder="Mắt phải" value="" >
          </div>
          <div class="col-md-3 mb-3">
            <label for="validationServer01">Có kính: mắt trái</label>
            <input type="text" class="form-control is-valid" id="ck_mt_kham" name="ck_mt_kham" placeholder="Mắt trái" value="" >
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-6 mb-6">
            <label for="validationServer01">Các bệnh về mắt (nếu có):</label>
            <input type="text" class="form-control is-valid" id="benh_mat_kham" name="benh_mat_kham" placeholder="Bệnh về mắt" value="không" required>
          </div>
          <div class="col-md-2 mb-6">
            <label for="validationServer02">Phân loại</label>
            <select id="xl_mat" name="xl_mat" class="form-control xl">
            </select>
          </div>
          <div class="col-md-4 mb-6">
            <label for="validationServer02">Bác sĩ khám</label>
            <select id="bs_mat" name="bs_mat" class="form-control dsbs">
            </select>
          </div>
        </div>
      </div>
    </div>  <!---------END PANEL KHÁM MẮT ---------->

    <!---------PANEL TAI MŨI HỌNG ---------->
    <div class="panel panel-primary">
      <div class="panel-heading">3. Tai - mũi - họng</div>
      <div class="panel-body">
        <div class="form-row">
          <div class="form-row">
            <div class="col-md-3 mb-3">
              <label for="validationServer01">Tai trái: nói thường</label>
              <input type="text" class="form-control is-valid" id="tt_nt_kham" name="tt_nt_kham" placeholder="Tai trái: nói thường" value="5m" required>
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationServer01">Tai trái: nói thầm</label>
              <input type="text" class="form-control is-valid" id="tt_nth_kham" name="tt_nth_kham" placeholder="Tai trái: nói thầm" value="0.5m" required>
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationServer01">Tai phải: nói thường</label>
              <input type="text" class="form-control is-valid" id="tp_nt_kham" name="tp_nt_kham" placeholder="Tai phải: nói thường" value="5m" required>
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationServer01">Tai phải: nói thầm</label>
              <input type="text" class="form-control is-valid" id="tp_nth_kham" name="tp_nth_kham" placeholder="Tai phải: nói thầm" value="0.5m" required>
            </div>

          </div>
        </div>
        <div class="form-row">
          <div class="col-md-6 mb-6">
            <label for="validationServer01">- Các bệnh về tai mũi họng (nếu có):</label>
            <input type="text" class="form-control is-valid" id="tmh_benh" name="tmh_benh" placeholder="Bệnh về tai mũi họng" value="không" required>
          </div>
          <div class="col-md-2 mb-2">
            <label for="validationServer02">Phân loại</label>
            <select id="xl_tmh" name="xl_tmh" class="form-control xl">
            </select>
          </div>
          <div class="col-md-4 mb-6">
            <label for="validationServer01">Bác sĩ khám</label>
            <select id="bs_tmh" name="bs_tmh" class="form-control dsbs">
            </select>
          </div>
        </div>
      </div>
    </div>  <!---------END PANEL TAI MŨI HỌNG ---------->

    <!---------PANEL RHM ---------->
    <div class="panel panel-primary">
      <div class="panel-heading">4. Răng - hàm - mặt</div>
      <div class="panel-body">
        <div class="form-row">
          <div class="col-md-6 mb-6">
            <label for="validationServer01">Hàm trên</label>
            <input type="text" class="form-control is-valid" id="rhm_ht" name="rhm_ht" placeholder="hàm trên" value="sức nhai: 100%" required>
          </div>
          <div class="col-md-6 mb-6">
            <label for="validationServer01">Hàm dưới</label>
            <input type="text" class="form-control is-valid" id="rhm_hd"  name="rhm_hd" placeholder="hàm dưới" value="sức nhai: 100%" required>
          </div>

        </div>
        <div class="form-row">
          <div class="col-md-6 mb-6">
            <label for="validationServer01">Các bệnh về Răng - Hàm - Mặt (nếu có)</label>
            <input type="text" class="form-control is-valid" id="rhm_benh" name="rhm_benh" placeholder="bệnh răng - hàm - mặt" value="không" >
          </div>
          <div class="col-md-2 mb-2">
            <label for="validationServer01">Phân loại</label>
            <select id="xl_rhm" name="xl_rhm" class="form-control xl">
            </select>
          </div>
          <div class="col-md-4 mb-6">
            <label for="validationServer01">Bác sĩ khám</label>
            <select id="bs_rhm" name="bs_rhm" class="form-control dsbs">
            </select>
          </div>
        </div>

      </div>
    </div>  <!---------PANEL RHM ---------->


    <!---------PANEL da liễu ---------->
    <div class="panel panel-primary">
      <div class="panel-heading">5. Da liễu</div>
      <div class="panel-body">
        <div class="form-row">
          <div class="col-md-6 mb-6">
            <label for="validationServer01">Bệnh da liễu</label>
            <input type="text" class="form-control is-valid" id="da_lieu_kham" name="da_lieu_kham" placeholder="Bệnh da liễu" value="Không có" required>
          </div>
          <div class="col-md-2 mb-2">
            <label for="validationServer01">Phân loại</label>
            <select id="xl_da_lieu" name="xl_da_lieu" class="form-control xl">
            </select>
          </div>
          <div class="col-md-4 mb-6">
            <label for="validationServer01">Bác sĩ khám</label>
            <select id="bs_da_lieu" name="bs_da_lieu" class="form-control dsbs">
            </select>
          </div>
        </div>
      </div>
    </div>  <!---------PANEL da liễu---------->
  </div>


  <div class="modal-footer">
    <div class="form-row">
      <div class="col-md-9">
      </div>
      <div class="col-md-3">
          <a data-toggle="tab"  href="#cls" class="btn btn-warning btnNext">Tiếp tục</a>
      </div>
    </div>
  </div>
</div>
