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
 
    $id_barang = $_GET["id_barang"];
 
    $sql = "SELECT * FROM barang WHERE id_barang='$id_barang'";
    $query = mysqli_query($koneksi, $sql) or die (mysqli_error());
 
    while($data = mysqli_fetch_array($query)){
  ?>
  <br>
  <center><h3>Edit Barang di ClothesStore</h3></center>

  <div class="container">
  <form class="form-control" action="proses_edit_barang.php" method="post">
  <div class="form-group">
    <label for="id_barang">Id Barang</label>
    <input type="hidden" class="form-control" name="id_barang" value="<?php echo $data['id_barang'];?>">
  </div>
  <div class="form-group">
    <label for="nama_pemain">Nama Barang</label>
    <input type="text" class="form-control" name="nama_brg" value="<?php echo $data['nama_brg'];?>">
  </div>
  <div class="form-group">
    <label for="kategori">Kategori</label>
    <select class="form-control" name="kategori">
      <option>Jaket</option>
      <option>Kemeja</option>
      <option>Kaos</option>
    </select>
  </div>
  <div class="form-group">
    <label for="harga_beli">Harga Beli</label>
    <input type="text" class="form-control" name="harga_beli" value="<?php echo $data['harga_beli'];?>">
  </div>
  <div class="form-group">
    <label for="harga_jual">Harga Jual</label>
    <input type="text" class="form-control" name="harga_jual" value="<?php echo $data['harga_jual'];?>">
  </div>
  <div class="form-group">
    <label for="stok">Stok</label>
    <input type="text" class="form-control" name="stok" value="<?php echo $data['stok'];?>">
  </div>
  <input type="submit" class="btn btn-info" value="Edit" name="edit">
  <?php 
  } 
  ?>
  </body>
</html>