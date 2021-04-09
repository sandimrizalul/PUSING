<?php
    require 'functions.php';

    if( isset($_POST["submit"]) ){
        if( tambah($_POST) > 0 ){
            echo "
                <script>
                    alert('data berhasil ditambahkan ! Klik Ok untuk lanjut ' );
                    document.location.href = 'index.php';
                </script>
            "
        ;
    }   else{
            echo "
            <script>
                alert('data gagal ditambahkan !');
                document.location.href = 'index.php';
            </script>
    "
;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>

<center><h2>Tambah Data Produk</h2></center>

<center>
<form action="" method="post">
    <table>
        <tr>
        <td><label for="nama_produk">Nama Produk    </label></td>
        <td>: <input type="text" name="nama_produk" id="nama_produk" required></td>
        </tr>

        <tr>
        <td><label for="keterangan">Keterangan  </label></td>
        <td>: <input type="text" name="keterangan" id="keterangan"
        required></td>
        </tr>

        <tr>
        <td><label for="harga">Harga  </label></td>
        <td>: <input type="text" name="harga" id="harga" required></td>
        </tr>

        <tr>
        <td><label for="jumlah">Jumlah  </label></td>
        <td>: <input type="text" name="jumlah" id="jumlah" required></td>
        </tr>

        <tr>
        <td><button type="submit" name="submit" >Ok</button></td></tr>

    </table>
</form>
<br>

</center>
    
</body>
</html>