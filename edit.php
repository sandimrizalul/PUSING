<?php
    require 'functions.php';

    // ambil data di url
    $id = $_GET["id"];

    //  query data mahasiswa 
    $produk = query("SELECT * FROM produk WHERE id = $id")[0];


    if( isset($_POST["submit"]) ){
        if( edit($_POST) > 0 ){
            echo "
                <script>
                    alert('data berhasil diedit ! Klik Ok untuk lanjut ' );
                    document.location.href = 'index.php';
                </script>
            "
        ;
    }   else{
            echo "
            <script>
                alert('data gagal diedit !');
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

<center><h2>Edit Data Produk</h2></center>

<center>
<form action="" method="post">
    <table>
        <tr>
        <td><input type="hidden" name="id" value="<?= $produk["id"]; ?>"></td>
        </tr>

        <tr>
        <td><label for="nama_produk">Nama Produk    </label></td>
        <td>: <input type="text" name="nama_produk" id="nama_produk" required value="<?= $produk["nama_produk"]; ?>"></td>
        </tr>

        <tr>
        <td><label for="keterangan">Keterangan  </label></td>
        <td>: <input type="text" name="keterangan" id="keterangan"
        required value="<?= $produk["keterangan"]; ?>"></td>
        </tr>

        <tr>
        <td><label for="harga">Harga  </label></td>
        <td>: <input type="text" name="harga" id="harga" required value="<?= $produk["harga"]; ?>"></td>
        </tr>

        <tr>
        <td><label for="jumlah">Jumlah  </label></td>
        <td>: <input type="text" name="jumlah" id="jumlah" required value="<?= $produk["jumlah"]; ?>"></td>
        </tr>

        <tr>
        <td><button type="submit" name="submit" >Ok</button></td></tr>

    </table>
</form>
<br>

</center>
    
</body>
</html>