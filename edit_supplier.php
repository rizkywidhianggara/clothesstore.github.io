<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>UAS</title>
    
  </head>
  <body>
  <?php
    include "koneksi.php";
 
    $id_supplier = $_GET["id_supplier"];
 
    $sql = "SELECT * FROM supplier WHERE id_supplier='$id_supplier'";
    $query = mysqli_query($koneksi, $sql) or die (mysqli_error());
 
    while($data = mysqli_fetch_array($query)){
  ?>
  <br>
  <center><h3>Edit supplier di ClothesStore</h3></center>

  <div class="container">
  <form class="form-control" action="proses_edit_supplier.php" method="post">
  <div class="form-group">
    <label for="id_supplier">Id supplier</label>
    <input type="hidden" class="form-control" name="id_supplier" value="<?php echo $data['id_supplier'];?>">
  </div>
  <div class="form-group">
    <label for="nama_supplier">Nama supplier</label>
    <input type="text" class="form-control" name="nama_supplier" value="<?php echo $data['nama_supplier'];?>">
  </div>
  <div class="form-group">
    <label for="alamat_supplier">Alamat supplier</label>
    <input type="text" class="form-control" name="alamat_supplier" value="<?php echo $data['alamat_supplier'];?>">
  </div>
  <div class="form-group">
    <label for="telp_supplier">Telp supplier</label>
    <input type="text" class="form-control" name="telp_supplier" value="<?php echo $data['telp_supplier'];?>">
  </div>
  <input type="submit" class="btn btn-info" value="Edit" name="edit">
  <?php 
  } 
  ?>
  </body>
</html>