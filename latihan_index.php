<?php
  $conn = mysqli_connect ("localhost","root", "", "WAD_PROJECT3");
  $result = mysqli_query ($conn,"SELECT * FROM student");
  // var_dump(mysqli_fetch_object($result));
  // $data = mysqli_fetch_object($result);
  // var_dump($data->name);
?>

<!DOCTYPE html>
<html>
  <style>
  table, th, td {
    border:1px solid black;
  }
  </style>
    <body>
      <h1>Ini adalah halaman index data</h1>
      <table style="width">
        <tr>
          <th>Nomor</th>
          <th>NIM</th>
          <th>Nama</th>
          <th>Alamat</th>
        </tr>

        <?php while ($data = mysqli_fetch_object($result) ) { 
          ?>
        <tr>
          <td><?php echo $data->id ?></td>
          <td><?php echo $data->nim ?></td>
          <td><?php echo $data->name ?></td>
          <td><?php echo $data->address ?></td>
        </tr>
        <?php 
        } 
        ?>

      </table>
    </body>
</html>