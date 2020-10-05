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
   $(".piljur").hide();
   $("#table_mapel").hide();
   $("#list-kelas").hide();

   $(".ptk").change(function(){
    var ptk = $(this).val();

    if (ptk == "Guru Mapel") {
      $("#GuruMapel").modal('show');
    }
    });//end of PTK
   $("#kelmap").change(function(){
    var kel = $(this).val();

    if (kel == "C") {
      $(".piljur").fadeIn(1000);
      $("#table_mapel").hide();

      $("#pilih_jurusan").on("change", function(){
        var jurusan = $(this).val();

        $.ajax({
          method  : "POST",
          url     : "<?= site_url() ?>staff/guru/mapel",
          cache   : false,
          data    : {
            kelompok : kel,
            jur      : jurusan
          },
          success  : function(x){
            var data = JSON.parse(x);
            $("#table-body > tr").remove();

            $("#table_mapel").fadeIn(500);
            $.each(data, function(i, n){
              $("#table-body").append("<tr><td class='ctr'><input type='checkbox' name='id_mapel' data-id='"+n.id_mapel+"' value='"+n.id_mapel+"'></td><td>"+n.nama_mapel+"</td><td class='ctr'>"+n.kelas+"</td></tr>");
              }); // enf of each
          }
          }); // end of ajax
        }); // end of #pilih_jurusan

    } else if(kel == "A" || kel == "B") {

      $.ajax({
        method  : "POST",
        url     : "<?= site_url() ?>staff/guru/mapel",
        cache   : false,
        data    : {
          kelompok : kel
        },
        success : function(e){
          var back = JSON.parse(e);
          $("#table-body > tr").remove();
          $("#table_mapel").fadeIn(1000);
          $.each(back, function(a, b){

            $("#table-body").append("<tr><td class='ctr'><input type='checkbox' name='id_mapel' data-id='"+b.id_mapel+"' value='"+b.id_mapel+"'></td><td>"+b.nama_mapel+"</td><td class='ctr'>"+b.kelas+"</td></tr>");

            });// end of each
          } // end of success
        }); // end of ajax open
      } // end of else 

      else {
        $("#table_mapel").hide();
        $("#table-body > tr").remove();
      }
    }); // end of kelmap

   $("#save").on("click", function(){
    $("#GuruMapel").modal('hide');
    var id = [];
    var cb = $('input:checked');

    $.each(cb, function(i,  el){
      var dt = $(this).data('id');

      if (dt)
        id.push(dt);

      var str = id.join(", ");
        //console.log(str);
        if (id.length == str.split(",").length) {
          $("#mapel_id").val(str);
        }
      });
  });

 });
</script>
</body>
</html>
