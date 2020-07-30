$('#btnXacNhan').click(async function(e){
  e.preventDefault();
  let action = "Insert";
  let nam = new Date().getFullYear();
  let  tuan_hoan_kham = $('#tuan_hoan_kham').val();
  let xl_tuan_hoan = $('#xl_tuan_hoan option:selected').text();
  let bs_tuan_hoan = $('#bs_tuan_hoan option:selected').text();

  let ho_hap_kham = $('#ho_hap_kham').val();
  let xl_ho_hap = $('#xl_ho_hap option:selected').text();
  let bs_ho_hap = $('#bs_ho_hap option:selected').text();

  let tieu_hoa_kham = $('#tieu_hoa_kham').val();
  let xl_tieu_hoa = $('#xl_tieu_hoa option:selected').text();
  let bs_tieu_hoa = $('#bs_tieu_hoa option:selected').text();

  let than_tiet_nieu_kham = $('#than_tiet_nieu_kham').val();
  let xl_than_tiet_nieu = $('#xl_than_tiet_nieu option:selected').text();
  let bs_than_tiet_nieu = $('#bs_than_tiet_nieu option:selected').text();

  let noi_tiet_kham = $('#noi_tiet_kham').val();
  let xl_noi_tiet = $('#xl_noi_tiet option:selected').text();
  let bs_noi_tiet = $('#bs_noi_tiet option:selected').text();

  let co_xuong_khop_kham = $('#co_xuong_khop_kham').val();
  let xl_co_xuong_khop = $('#xl_co_xuong_khop option:selected').text();
  let bs_co_xuong_khop = $('#bs_co_xuong_khop option:selected').text();

  let than_kinh_kham = $('#than_kinh_kham').val();
  let xl_than_kinh = $('#xl_than_kinh option:selected').text();
  let bs_than_kinh = $('#bs_than_kinh option:selected').text();

  let tam_than_kham = $('#tam_than_kham').val();
  let xl_tam_than = $('#xl_tam_than option:selected').text();
  let bs_tam_than = $('#bs_tam_than option:selected').text();

  let kk_mp_kham = $('#kk_mp_kham').val();
  let kk_mt_kham = $('#kk_mt_kham').val();
  let ck_mp_kham = $('#ck_mp_kham').val();
  let ck_mt_kham = $('#ck_mt_kham').val();
  let benh_mat_kham = $('#benh_mat_kham').val();
  let xl_mat = $('#xl_mat option:selected').text();
  let bs_mat = $('#bs_mat option:selected').text();

  let tt_nt_kham = $('#tt_nt_kham').val();
  let tt_nth_kham = $('#tt_nth_kham').val();
  let tp_nt_kham = $('#tp_nt_kham').val();
  let tp_nth_kham = $('#tp_nth_kham').val();
  let tmh_benh = $('#tmh_benh').val();
  let xl_tmh = $('#xl_tmh option:selected').text();
  let bs_tmh = $('#bs_tmh option:selected').text();


  let rhm_ht = $('#rhm_ht').val();
  let rhm_hd = $('#rhm_hd').val();
  let rhm_benh = $('#rhm_benh').val();
  let xl_rhm = $('#xl_rhm option:selected').text();
  let bs_rhm = $('#bs_rhm option:selected').text();

  let kq = $('#kq').val();
  let dg = $('#dg').val();

  let bs_kl = $('#bs_kl option:selected').text();


  $.ajax({
    url:"action.php",
    method:"POST",
    data:{
      action:action,
      nam:nam,
      ma_nv:ma_nv,
      tuan_hoan_kham:tuan_hoan_kham,
      xl_tuan_hoan:xl_tuan_hoan,
      bs_tuan_hoan:bs_tuan_hoan,
      ho_hap_kham:ho_hap_kham,
      xl_ho_hap:xl_ho_hap,
      bs_ho_hap:bs_ho_hap,
      tieu_hoa_kham:tieu_hoa_kham,
      xl_tieu_hoa:xl_tieu_hoa,
      bs_tieu_hoa:bs_tieu_hoa,
      than_tiet_nieu_kham:than_tiet_nieu_kham,
      xl_than_tiet_nieu:xl_than_tiet_nieu,
      bs_than_tiet_nieu:bs_than_tiet_nieu,
      noi_tiet_kham:noi_tiet_kham,
      xl_noi_tiet:xl_noi_tiet,
      bs_noi_tiet:bs_noi_tiet,
      co_xuong_khop_kham:co_xuong_khop_kham,
      xl_co_xuong_khop:xl_co_xuong_khop,
      bs_co_xuong_khop:bs_co_xuong_khop,
      than_kinh_kham:than_kinh_kham,
      xl_than_kinh:xl_than_kinh,
      bs_than_kinh:bs_than_kinh,
      tam_than_kham:tam_than_kham,
      xl_tam_than:xl_tam_than,
      bs_tam_than:bs_tam_than,
      kk_mp_kham:kk_mp_kham,
      kk_mt_kham:kk_mt_kham,
      ck_mp_kham:ck_mp_kham,
      ck_mt_kham:ck_mt_kham,
      benh_mat_kham:benh_mat_kham,
      xl_mat:xl_mat,
      bs_mat:bs_mat,
      tt_nt_kham:tt_nt_kham,
      tt_nth_kham:tt_nth_kham,
      tp_nt_kham:tp_nt_kham,
      tp_nth_kham:tp_nth_kham,
      tmh_benh:tmh_benh,
      xl_tmh:xl_tmh,
      bs_tmh:bs_tmh,
      rhm_ht:rhm_ht,
      rhm_hd:rhm_hd,
      rhm_benh:rhm_benh,
      xl_rhm:xl_rhm,
      bs_rhm:bs_rhm,
      kq:kq,
      dg:dg,
      bs_kl:bs_kl
    },
    success:function(data)
    {
      alert(data);
      $('#modalKham').modal('hide');
      location.reload();
    }
  });

});
