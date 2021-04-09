<?php

require 'functions.php';
// query
$produk = query(("SELECT * FROM produk "))


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <center><h2>Data Produk</h2><br>
    <button><a href="tambah.php">Tambah data</a></button>
    </center>

    <br>
    <center>
    <table border="1" cellpadding="20" cellspacing="0">
       
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Keterangan</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Opsi</th>
        </tr>
        <?php $i=1; ?>
        <?php foreach ($produk as $row ) :  ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $row["nama_produk"]; ?></td>
            <td><?= $row["keterangan"]; ?></td>
            <td><?= $row["harga"]; ?></td>
            <td><?= $row["jumlah"]; ?></td>
            <td>
            <button><a href="edit.php?id=<?= $row["id"]; ?>">Edit</a> </button> 
             | 
             <button><a href="hapus.php?id=<?= $row["id"]; ?>">Hapus</a>  </button>
            </td>
        </tr>
        <?php $i++ ?>
        <?php  endforeach; ?>
   
    </table>
    </center>
</body>
</html>