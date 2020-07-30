

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
        <h4 id="ho_ten" class="text-warning text-uppercase"></h4>
        <form>
          <div class="panel panel-info">
            <!---I. PANEL KHÁM LÂM SÀNG ---------->
            <div class="panel-heading"><h4 class="font-weight-bold">KHÁM LÂM SÀNG</h4> </div>

            <!---panel body khám lâm sàng ---------->
            <div class="panel-body">

              <!---panel khám nội khoa -->
              <div class="panel panel-primary">
                <!--panel header khám nội khoa ---->
                <div class="panel-heading">1. Nội khoa</div>

                <!---panel body khám nội khoa --->
                <div class="panel-body">
                  <!--row tuần hoàn --->
                  <div class="form-row">
                    <div class="col-md-7 mb-6">
                      <label for="validationServer01">a. Tuần hoàn</label>
                      <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Tuần hoàn" value="T1,T2 đều khỏe" required>
                    </div>
                    <div class="col-md-2 mb-2">
                      <label for="validationServer02">Xếp loại</label>
                      <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="col-md-3 mb-4">
                      <label for="validationServer02">Bác sĩ khám</label>
                      <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                      </select>
                    </div>
                  </div><!--end row tuần hoàn --->


                  <!--row hô hấp --->
                  <div class="form-row">
                    <div class="col-md-7 mb-6">
                      <label for="validationServer01">b. Hô hấp</label>
                      <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Hô hấp" value="Phổi không nghe ran" required>
                    </div>
                    <div class="col-md-2 mb-2">
                      <label for="validationServer02">Xếp loại</label>
                      <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="col-md-3 mb-4">
                      <label for="validationServer02">Bác sĩ khám</label>
                      <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                      </select>
                    </div>
                  </div><!--end row hô hấp --->


                  <!--row tiêu hóa --->
                  <div class="form-row">
                    <div class="col-md-7 mb-6">
                      <label for="validationServer01">c. Tiêu hóa</label>
                      <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Tiêu hóa" value="bụng mềm" required>
                    </div>
                    <div class="col-md-2 mb-2">
                      <label for="validationServer02">Xếp loại</label>
                      <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="col-md-3 mb-4">
                      <label for="validationServer02">Bác sĩ khám</label>
                      <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                      </select>
                    </div>
                  </div>  <!--end row tiêu hóa --->


                  <!--row thận tiết niệu --->
                  <div class="form-row">
                    <div class="col-md-7 mb-6">
                      <label for="validationServer01">d. Thận - tiết niệu</label>
                      <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Thận - tiết niệu" value="chạm thận....???" required>
                    </div>
                    <div class="col-md-2 mb-6">
                      <label for="validationServer02">Xếp loại</label>
                      <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="col-md-3 mb-4">
                      <label for="validationServer02">Bác sĩ khám</label>
                      <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                      </select>
                    </div>
                  </div><!--end row thận tiết niệu --->


                  <!--row nội tiết --->
                  <div class="form-row">
                    <div class="col-md-7 mb-6">
                      <label for="validationServer01">đ. Nội tiết</label>
                      <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Nội tiết" value="bình thường" required>
                    </div>
                    <div class="col-md-2 mb-2">
                      <label for="validationServer02">Xếp loại</label>
                      <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="col-md-3 mb-4">
                      <label for="validationServer02">Bác sĩ khám</label>
                      <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                      </select>
                    </div>
                  </div>  <!--end row nội tiết --->


                  <!--row cơ xương khớp --->
                  <div class="form-row">
                    <div class="col-md-7 mb-6">
                      <label for="validationServer01">e. Cơ - xương - khớp</label>
                      <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Cơ - xương - khớp" value="bình thường" required>
                    </div>
                    <div class="col-md-2 mb-2">
                      <label for="validationServer02">Xếp loại</label>
                      <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="col-md-3 mb-4">
                      <label for="validationServer02">Bác sĩ khám</label>
                      <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                      </select>
                    </div>
                  </div><!--end row cơ xương khớp --->

                  <!--row thần kinh --->
                  <div class="form-row">
                    <div class="col-md-7 mb-6">
                      <label for="validationServer01">g. Thần kinh</label>
                      <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Thần kinh" value="tỉnh táo" required>
                    </div>
                    <div class="col-md-2 mb-2">
                      <label for="validationServer02">Xếp loại</label>
                      <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="col-md-3 mb-4">
                      <label for="validationServer02">Bác sĩ khám</label>
                      <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                      </select>
                    </div>
                  </div><!--end row thần kinh --->

                  <!--row tâm thần --->
                  <div class="form-row">
                    <div class="col-md-7 mb-6">
                      <label for="validationServer01">h. Tâm thần</label>
                      <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Tâm thần" value="tỉnh táo" required>
                    </div>
                    <div class="col-md-2 mb-6">
                      <label for="validationServer02">Xếp loại</label>
                      <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="col-md-3 mb-4">
                      <label for="validationServer02">Bác sĩ khám</label>
                      <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
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
                      <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Mắt phải" value="10/10" required>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="validationServer01">Không kính: mắt trái</label>
                      <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Mắt trái" value="10/10" required>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="validationServer01">Có kính: mắt phải</label>
                      <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Mắt phải" value="" >
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="validationServer01">Có kính: mắt trái</label>
                      <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Mắt trái" value="" >
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-7 mb-6">
                      <label for="validationServer01">Các bệnh về mắt (nếu có):</label>
                      <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Bệnh về mắt" value="không" required>
                    </div>
                    <div class="col-md-2 mb-6">
                      <label for="validationServer02">Xếp loại</label>
                      <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="col-md-3 mb-4">
                      <label for="validationServer02">Bác sĩ khám</label>
                      <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
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
                        <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Tai trái: nói thường" value="5m" required>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="validationServer01">Tai trái: nói thầm</label>
                        <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Tai trái: nói thầm" value="0.5m" required>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="validationServer01">Tai phải: nói thường</label>
                        <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Tai phải: nói thường" value="5m" required>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="validationServer01">Tai phải: nói thầm</label>
                        <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Tai phải: nói thầm" value="0.5m" required>
                      </div>

                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-7 mb-6">
                      <label for="validationServer01">- Các bệnh về tai mũi họng (nếu có):</label>
                      <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Bệnh về tai mũi họng" value="không" required>
                    </div>
                    <div class="col-md-2 mb-2">
                      <label for="validationServer02">Xếp loại</label>
                      <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="col-md-3 mb-4">
                      <label for="validationServer01">Bác sĩ khám</label>
                      <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
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
                      <input type="text" class="form-control is-valid" id="validationServer01" placeholder="hàm trên" value="sức nhai: 100%" required>
                    </div>
                    <div class="col-md-6 mb-6">
                      <label for="validationServer01">Hàm dưới</label>
                      <input type="text" class="form-control is-valid" id="validationServer01" placeholder="hàm dưới" value="sức nhai: 100%" required>
                    </div>

                  </div>
                  <div class="form-row">
                    <div class="col-md-7 mb-6">
                      <label for="validationServer01">Các bệnh về Răng - Hàm - Mặt (nếu có)</label>
                      <input type="text" class="form-control is-valid" id="validationServer01" placeholder="bệnh răng - hàm - mặt" value="không" >
                    </div>
                    <div class="col-md-2 mb-2">
                      <label for="validationServer01">Xếp loại</label>
                      <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="col-md-3 mb-4">
                      <label for="validationServer01">Bác sĩ khám</label>
                      <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                      </select>
                    </div>
                  </div>

                </div>
              </div>  <!---------PANEL RHM ---------->

            </div>  <!---------END PANEL BODY KHÁM LÂM SÀNG ---------->
          </div>  <!---------END PANEL KHÁM LÂM SÀNG ---------->


          <!---------PANEL KHÁM CẬN LÂM SÀNG---------->
          <div class="panel panel-info">
            <div class="panel-heading"><h4 class="font-weight-bold">KHÁM CẬN LÂM SÀNG</h4> </div>
            <div class="panel-body">
              <div class="form-row">
                <div class="col-md-12 mb-12">
                  <label for="validationServer01">Xét nghiệm huyết học/sinh hóa/X-Quang và các xét nghiệm khác khi có chỉ định của bác sĩ</label>
                </div>
                <div class="form-row">
                  <div class="col-md-12 mb-12">
                    <label for="validationServer01">a. Kết quả</label>
                    <textarea class="form-control" rows="5" id="comment"></textarea>
                  </div>
                  <div class="form-row">
                    <div class="col-md-12 mb-12">
                      <label for="validationServer01">b. Đánh giá</label>
                      <textarea class="form-control" rows="5" id="comment"></textarea>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>  <!---------END PANEL KHÁM LÂM SÀNG ---------->



        </div>
        <div class="modal-footer">
          <!---------ROW BÁC SĨ KẾT LUẬN ---------->
          <div class="form-row">
            <div class="col-md-9">
            </div>
            <div class="col-md-3">
              <label for="validationServer01" class="text-center">Bác sĩ kết luận</label>
              <select id="inputState" class="form-control text-center">
                <option selected>Choose...</option>
                <option>...</option>
              </select>
              <hr>
              <button class="btn btn-primary" type="submit" style="width:100%">Xác nhận</button>
            </div>
          </div>  <!---------END ROW BÁC SĨ KẾT LUẬN---------->
        </form>  <!---------END FORM ---------->
      </div>
    </div>
  </div>  
</div>
