<!-- begin::Footer -->
<footer class="m-grid__item m-footer" style="margin-left: 0px; background-color: #1e1e2d;">
  <div class="m-container m-container--fluid m-container--full-height m-page__container">
    <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
      <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last" style="width: 100%;text-align: center;">
        <span class="m-footer__copyright">
          Copyright &copy; 2020
          <a href="#" class="m-link">
            SMA Taman Madya Jetis Yogyakarta. All rights reserved.
          </a>
        </span>
      </div>
    </div>
  </div>
</footer>
<!-- end::Footer -->
</div>
<div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500" data-scroll-speed="300">
  <i class="la la-arrow-up"></i>
</div>
<!-- end::Scroll Top -->        

<!-- begin::Quick Nav --> 
<!--begin::Base Scripts -->
<script src="<?= base_url() ?>public/metronic1/assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="<?= base_url() ?>public/metronic1/assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
<!--end::Base Scripts -->   
<script src="<?= base_url() ?>public/metronic1/assets/demo/default/custom/components/datatables/base/data-local.js" type="text/javascript"></script>
<!--begin::Page Vendors -->
<script src="<?= base_url() ?>public/metronic1/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>public/metronic1/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>public/metronic1/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>public/metronic1/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script src="<?= base_url() ?>public/metronic1/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
<!--end::Page Vendors -->  
<!--begin::Page Snippets -->
<script src="<?= base_url() ?>public/metronic1/assets/app/js/dashboard.js" type="text/javascript"></script>
<script>
  $(function () {
    // Summernote
    $('#textarea').summernote()
  })
</script>
<script type="text/javascript">
  $(".alert-slide-up").alert().delay(3000).slideUp('slow');
</script>
<script>
  $(function () {
    $("#local_data2").DataTable({
      "responsive": true,
      "autoWidth": false,
      "lengthChange": false,
    });

    $("#local_data1").mDatatable({
      "responsive": true,
      "autoWidth": false,
      search: {
        input: $('#generalSearch')
      },
    });

    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script type="text/javascript">
  $(document).ready(function() {

    $("input[name=p_angka]").keyup(function(){
      var ids = $(this).attr('data-ids');
      var p_agk = $(this).val();
      var kkm = $("input[name='kkm']").val();
      var id_mapel = $("input[name='id_mapel']").val();
      var core = "otr";
      var core2 = "pth";

      if (p_agk.length == 2) {
        if (p_agk < kkm) {
          $.ajax({
           url: "<?php echo site_url("guru/rapot/cek");?>",
           type: "POST",
           data:{
            'core':core,
            'id_mapel':id_mapel,
            'kkm':kkm,
          },
          dataType : 'json',
          success : function(data){
            $('.p_predikat_'+ids).val(data.predikat);
            $(".pth_des_"+ids).val(data.deskripsi);
          }
        });
        }
        else
        {
          $.ajax({
           url: "<?php echo site_url("guru/rapot/cek");?>",
           type: "POST",
           data:{
            'core':core2,
            'id_mapel':id_mapel,
            'kkm':kkm,
            'angka':p_agk, 
          },
          dataType : 'json',
          success : function(data){
            $('.p_predikat_'+ids).val(data.predikat);
            $(".pth_des_"+ids).val(data.deskripsi);
          }
        });
        }
      }
      if($(".p_angka_"+ids).val() == "" || p_agk.length < 2){
        $(".pth_des_"+ids).val("");
        $(".p_predikat_"+ids).val("");
      }
    });

    $("input[name=k_angka]").keyup(function(){
      var ids = $(this).attr('data-ids');
      var k_agk = $(this).val();
      var kkm = $("input[name='kkm']").val();
      var id_mapel = $("input[name='id_mapel']").val();
      var core = "otr";
      var core2 = "ktr";

      if (k_agk.length == 2) {
        if (k_agk < kkm) {
          $.ajax({
           url: "<?php echo site_url("guru/rapot/cek_ktr");?>",
           type: "POST",
           data:{
            'core':core,
            'id_mapel':id_mapel,
            'kkm':kkm,
          },
          dataType : 'json',
          success : function(data){
            $('.k_predikat_'+ids).val(data.predikat);
            $(".ktr_des_"+ids).val(data.deskripsi);
          }
        });
        }
        else
        {
          $.ajax({
           url: "<?php echo site_url("guru/rapot/cek_ktr");?>",
           type: "POST",
           data:{
            'core':core2,
            'id_mapel':id_mapel,
            'kkm':kkm,
            'angka':k_agk, 
          },
          dataType : 'json',
          success : function(data){
            $('.k_predikat_'+ids).val(data.predikat);
            $(".ktr_des_"+ids).val(data.deskripsi);
          }
        });
        }
      }
      if($(".k_angka_"+ids).val() == "" || p_agk.length < 2){
        $(".ktr_des_"+ids).val("");
        $(".k_predikat_"+ids).val("");
      }
    });

    $(".btn-act").on("click", function() {
        //Mengambil data pengenal
        var id_siswa = $(this).attr('data-id');
        var sukses = "<span class='fa fa-check' style='font-size:15px;font-weight:bold'></span>";

        //Mengambil nilai dari form nilai
        var p_angka = $(".p_angka_"+id_siswa).val();
        var p_predikat = $(".p_predikat_"+id_siswa).val();
        var k_angka = $(".k_angka_"+id_siswa).val();
        var k_predikat = $(".k_predikat_"+id_siswa).val();
        var id_mapel = $("input[name='id_mapel']").val();
        var id_guru = $("input[name='id_guru']").val();
        var id_rombel = $("input[name='id_rombel']").val();

        if(p_angka == "" || p_predikat == "" || k_angka == "" || k_predikat == ""){
          alert('Oops, Form nilai harus diisi!');
        } else {

          $.ajax({
           url: "<?php echo site_url("guru/rapot/input_rapot");?>",
           type: "POST",
           data   : {
            'p_angka':p_angka,
            'p_predikat':p_predikat,
            'k_angka':k_angka,
            'k_predikat':k_predikat,
            'id_siswa':id_siswa,
            'id_guru':id_guru,
            'id_rombel':id_rombel,
            'id_mapel':id_mapel,
          },
          success : function(data){
            if (data == 'true') {
              $(".p_angka_"+id_siswa).hide();
              $(".p_predikat_"+id_siswa).hide();
              $(".k_angka_"+id_siswa).hide();
              $(".k_predikat_"+id_siswa).hide();
              $("#submit-"+id_siswa).hide();

            //Div
            $(".pa_"+id_siswa).append(p_angka);
            $(".pp_"+id_siswa).append(p_predikat);
            $(".ka_"+id_siswa).append(k_angka);
            $(".kp_"+id_siswa).append(k_predikat);
            $("#act_"+id_siswa).append(sukses);

          } else {
            alert('Oops, Proses input nilai ke system gagal!');
          }
        }
      });
        }
      });

    $("input[name=uas]").keyup(function(){

      var id_s = $(this).attr('data-id_s');
      var uas = $(this).val();
      var uts = $(".ut_s_"+id_s).val();
      var uh2 = $(".u_harian2_"+id_s).val();
      var uh1 = $(".u_harian1_"+id_s).val();
      var uh = parseInt(uh1)+parseInt(uh2);
      var uhh = parseInt(uh)/2;
      var hasil = parseInt(uhh)+parseInt(uts)+parseInt(uas);
      var has = parseInt(hasil)/3;
      $('.hasil_'+id_s).val(has);

    });

    $(".btn-aks").on("click", function() {
        //Mengambil data pengenal
        var id_siswa = $(this).attr('data-id');
        var sukses = "<span class='fa fa-check' style='font-size:15px;font-weight:bold'></span>";

        //Mengambil nilai dari form nilai
        var uh1 = $(".u_harian1_"+id_siswa).val();
        var uh2 = $(".u_harian2_"+id_siswa).val();
        var uts = $(".ut_s_"+id_siswa).val();
        var uas = $(".ua_s_"+id_siswa).val();
        var hasil = $(".hasil_"+id_siswa).val();
        var id_mapel = $("input[name='id_mapel']").val();
        var id_guru = $("input[name='id_guru']").val();
        var id_rombel = $("input[name='id_rombel']").val();

        if(uh1 == "" || uh2 == "" || uts == "" || uas == ""){
          alert('Oops, Form nilai harus diisi!');
        } else {

          $.ajax({
            url: "<?php echo site_url("guru/nilai/input_nilai");?>",
            type: "POST",
            data   : {
              'uh1':uh1,
              'uh2':uh2,
              'uts':uts,
              'uas':uas,
              'hasil':hasil,
              'id_siswa':id_siswa,
              'id_guru':id_guru,
              'id_rombel':id_rombel,
              'id_mapel':id_mapel,
            },
            success : function(data){
              if (data == 'true') {
                $(".u_harian1_"+id_siswa).hide();
                $(".u_harian2_"+id_siswa).hide();
                $(".ut_s_"+id_siswa).hide();
                $(".ua_s_"+id_siswa).hide();
                $(".hasil_"+id_siswa).hide();
                $("#submit-"+id_siswa).hide();

            //Div
            $(".uh1_"+id_siswa).append(uh1);
            $(".uh2_"+id_siswa).append(uh2);
            $(".uts_"+id_siswa).append(uts);
            $(".uas_"+id_siswa).append(uas);
            $(".hasi_l_"+id_siswa).append(hasil);
            $("#act_"+id_siswa).append(sukses);

          } else {
            alert('Oops, Proses input nilai ke system gagal!');
          }
        }
      });
        }
      });

  });
</script>
</body>
</html>
