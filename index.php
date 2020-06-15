<?php  
 $sumber = "json.json";
 $konten = file_get_contents($sumber);
 $data = json_decode($konten, true);

 //echo $data[1]["nama_lokasi"];
 echo "<h1 align='center'>TAMPIL JSON ".count($data)." </h1>";
 echo "<br/>";
?>

<!DOCTYPE html>
<html>
<head>
 <title>Menampilkan data json</title>
 <style>
  table {
   width: 100%; 
  }
  table tr td {
   padding: 1rem;
  }
 </style>
</head>
<body>
 <table border="1">
  <tr>
   <th>No</th>
   <th>ssrc</th>
   <th>type</th>
  </tr>
  <?php   
   for($a=0; $a < count($data); $a++)
   {
    print "<tr>";
    // penomeran otomatis
    print "<td>".($a+1)."</td>";
    // menayangkan 
    print "<td>".$data[$a]['ssrc']."</td>";
    print "<td>".$data[$a]['type']."</td>";
    print "</tr>";
   }
  ?>
 </table>
</body>
</html>