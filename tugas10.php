<?php
$mahasiswa = [
  ["nama"=>"Rizky", "NIM"=>"123456", "Jurusan"=>"TI", "Email"=>"Rizky@gmail.com", "Nilai"=>"90"],
  ["nama"=>"Rizky", "NIM"=>"123456", "Jurusan"=>"TI", "Email"=>"Rizky@gmail.com", "Nilai"=>"60"],
  ["nama"=>"Rizky", "NIM"=>"123456", "Jurusan"=>"TI", "Email"=>"Rizky@gmail.com", "Nilai"=>"80"],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ulangan Mahasiswa</title>
</head>
<style>
  table {
    border-collapse:collapse;
  }
</style>

<body>
  <table border=1>
    <thead>
      <tr>
        <th>Nama</th>
        <th>NIM</th>
        <th>Jurusan</th>
        <th>Email</th>
        <th>Nilai</th>
        <th>Status</th>
      </tr>
    </thead>

    <?php
    $a=0;
    while ($a < count($mahasiswa)) {
      echo "<tb>";
        echo "<tr>";
          echo "<td>".$mahasiswa[$a]["nama"]."</td>";
          echo "<td>".$mahasiswa[$a]["NIM"]."</td>";
          echo "<td>".$mahasiswa[$a]["Jurusan"]."</td>";
          echo "<td>".$mahasiswa[$a]["Email"]."</td>";
          echo "<td>".$mahasiswa[$a]["Nilai"]."</td>";

          if ($mahasiswa[$a]["Nilai"] >= 70) {
            echo "<td> Lulus </td>";
          } else {
            echo "<td> Tidak Lulus </td>";
          }
          

        echo "</tr>";
        $a++;
      echo "</tb>";
    }
    ?>
  </table>
</body>
</html>