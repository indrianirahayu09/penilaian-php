<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
  <div class="p-3">
    <h5>Title</h5>
    <p>Sidebar content</p>
  </div>
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer">
  <!-- To the right -->
  <center><strong>Copyright &copy; 2020 <a href="https://adminlte.io"><?= $data_profil_sekolah->nama ?></a>.</strong> All rights reserved.</center>
  <!-- Default to the left -->
  
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url() ?>public/template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>public/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>public/template/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>public/template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>public/template/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>public/template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>public/template/dist/js/adminlte.min.js"></script>
<script src="<?= base_url() ?>public/template/plugins/summernote/summernote-bs4.min.js"></script>
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
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
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
