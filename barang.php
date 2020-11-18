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

  <nav class="navbar navbar-expand-md navbar-dark bg-dark"> 	
  <a class="navbar-brand" href="#">
    <img src="bootstrap.png" width="30" height="30" class="d-inline-block align-top" alt=""> ClothesStore</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index1.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Master
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="customer.php">Customer</a>
          <a class="dropdown-item" href="supplier.php">Supplier</a>
          <a class="dropdown-item" href="barang.php">Barang</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Transaksi
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="pembelian.php">Pembelian</a>
          <a class="dropdown-item" href="penjualan.php">Penjualan</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Laporan
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="lappembelian.php">Pembelian</a>
          <a class="dropdown-item" href="lappenjualan.php">Penjualan</a>
        </div>
      <li class="nav-item">
        <a class="nav-link" href="admin.php">Admin</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <button class="btn btn-danger square-btn-adjust" href="index.php" type="submit">Logout</button>
    </form>
  </div>
</nav>

<br>
<center><h3>Master Barang di ClothesStore</h3></center>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<div class="container">
  <a class="btn btn-success" href="input_barang.php">Tambah Data Barang</a>
  <table class="table table-dark">
    <tr>
      <th>Id</th>
      <th>Nama Barang</th>
      <th>Kategori</th>
      <th>Harga Jual</th>
      <th>Harga Beli</th>
      <th>Stok</th>
      <th>Opsi</th>
    </tr>
    <?php
    error_reporting(0); 
    include "koneksi.php";
    // query sql
        $sql = "SELECT * FROM barang";
        $query = mysqli_query($koneksi, $sql) or die (mysqli_error());
        $no = 1; // no. urut
        while($data = mysqli_fetch_array($query)){
    ?>
    <tr>
      <td><?php echo $data['id_barang']; ?></td>
      <td><?php echo $data['nama_brg']; ?></td>
      <td><?php echo $data['kategori']; ?></td>
      <td><?php echo number_format($data['harga_jual']); ?></td>
      <td><?php echo number_format($data['harga_beli']); ?></td>
      <td><?php echo $data['stok']; ?></td>
      <td>
      <a href="edit_barang.php?id_barang=<?php echo $data['id_barang']; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit</a>
      <a href="hapus_barang.php?id_barang=<?php echo $data['id_barang']; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</a>
      </td>
    </tr>
    <?php } ?>
    </div>
  </table>
</body>
</html>