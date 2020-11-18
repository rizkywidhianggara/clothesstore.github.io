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
 
    $id_pembelian = $_GET["id_pembelian"];
 
    $sql = "SELECT * FROM pembelian WHERE id_pembelian='$id_pembelian'";
    $query = mysqli_query($koneksi, $sql) or die (mysqli_error());
 
    while($data = mysqli_fetch_array($query)){
  ?>
  <br>
  <center><h3>Edit Pembelian di ClothesStore</h3></center>

  <div class="container">
  <form class="form-control" action="proses_edit_pembelian.php" method="post">
  <div class="form-group">
    <label for="id_supplier">Id Pembelian</label>
    <input type="hidden" class="form-control" name="id_pembelian" value="<?php echo $data['id_pembelian'];?>">
  </div>
  <div class="form-group">
    <label for="">Tanggal Beli</label>
    <input type="date" class="form-control" name="tgl_beli" value="<?php echo $data['tgl_beli'];?>">
  </div>
  <div class="form-group">
    <label for="">Nama Supplier</label>
    <select class="form-control" name="id_supplier">
    <?php
    include 'koneksi.php';
    $supplier = mysqli_query($koneksi, 'select * from supplier');
    ?>
    <?php foreach($supplier as $s):?>
    <option value="<?php echo $s['id_supplier']?>"><?php echo $s['nama_supplier']?></option>
    <?php endforeach;?>
    </select>
  </div>
  <div class="form-group">
    <label for="">Nama Barang</label>
    <select class="form-control" name="id_barang">
    <?php
    include 'koneksi.php';
    $barang = mysqli_query($koneksi, 'select * from barang');
    ?>
    <?php foreach($barang as $b):?>
    <option value="<?php echo $b['id_barang']?>"><?php echo $b['nama_brg']?></option>
    <?php endforeach;?>
    </select>
  </div>
  <div class="form-group">
    <label for="kategori">Kategori</label>
    <select class="form-control" name="kategori" id="kategori" onclick="show_harga()">
      <option>Jaket</option>
      <option>Kemeja</option>
      <option>Kaos</option>
    </select>
  </div>
  <div class="form-group">
    <label for="">Harga Beli</label>
    <input type="text" class="form-control" name="harga_beli" id="harga_beli" value="<?php echo $data['harga_beli'];?>">
  </div>
  <div class="form-group">
    <label for="">Qty</label>
    <input type="text" class="form-control" name="qty" value="<?php echo $data['qty'];?>">
  </div>
  <div class="form-group">
    <label for="">Total</label>
    <input type="text" class="form-control" id="total" name="total" value="<?php echo $data['total'];?>">
  </div>
  <input type="submit" class="btn btn-info" value="Edit" name="edit">
  <?php 
  } 
  ?>
  </body>
</html>