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
 
    $id_customer = $_GET["id_customer"];
 
    $sql = "SELECT * FROM customer WHERE id_customer='$id_customer'";
    $query = mysqli_query($koneksi, $sql) or die (mysqli_error());
 
    while($data = mysqli_fetch_array($query)){
  ?>
  <br>
  <center><h3>Edit Customer di ClothesStore</h3></center>

  <div class="container">
  <form class="form-control" action="proses_edit_customer.php" method="post">
  <div class="form-group">
    <label for="id_customer">Id Customer</label>
    <input type="hidden" class="form-control" name="id_customer" value="<?php echo $data['id_customer'];?>">
  </div>
  <div class="form-group">
    <label for="nama_customer">Nama Customer</label>
    <input type="text" class="form-control" name="nama_customer" value="<?php echo $data['nama_customer'];?>">
  </div>
  <div class="form-group">
    <label for="alamat_customer">Alamat Customer</label>
    <input type="text" class="form-control" name="alamat_customer" value="<?php echo $data['alamat_customer'];?>">
  </div>
  <div class="form-group">
    <label for="telp_customer">Telp Customer</label>
    <input type="text" class="form-control" name="telp_customer" value="<?php echo $data['telp_customer'];?>">
  </div>
  <input type="submit" class="btn btn-info" value="Edit" name="edit">
  <?php 
  } 
  ?>
  </body>
</html>