<?php

$connect = mysqli_connect("localhost", "root", "", "sma");

$query = "SELECT * FROM siswa s left join rapot r on r.id_siswa = s.id_siswa left join mapel m on r.id_mapel = m.id_mapel WHERE s.id_siswa = '2'";
// print_r($query);die();

$result = mysqli_query($connect, $query);

 

$data = '';

while($row = mysqli_fetch_array($result)){

  $data .= "{ mapel:'".$row["nama_mapel"]."',

            Pengetahuan:".$row["p_angka"].",

            Keterampilan:".$row["k_angka"]."}, ";

}

$data = substr($data, 0, -2);

// print_r($data);die();
?>
<!DOCTYPE html>

<html>

 <head>

  <title>Cara Membuat Chart Morris.js Dengan PHP & Mysql</title>

  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

 </head>

 <body>

  <div class="container" style="width:900px;">

    <h2 align="center">Cara Membuat Chart Morris.js Dengan PHP & Mysql</h2>

    <div id="chart"></div>

  </div>

 </body>

</html>
<script>

Morris.Bar({

  element : 'chart',
  data:[<?php echo $data; ?>],
  xkey: 'mapel',
  ymax: 100,
  ymin:0,
  ykeys: ['Pengetahuan', 'Keterampilan'],
  labels: ['Pengetahuan', 'Keterampilan'],
  barColors: ['#2abe81', '#24a5ff']

});

</script>