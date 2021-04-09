<?php
// connect
$conn = mysqli_connect("localhost", "root" , "" , "arkademy");

// function query 
function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows= [];
    while( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;

}

// function query insert
function tambah($data){
    global $conn;

    $nama   = htmlspecialchars($data["nama_produk"]);
    $ket    = htmlspecialchars($data["keterangan"]);
    $harga  = htmlspecialchars($data["harga"]);
    $jumlah = htmlspecialchars($data["jumlah"]);

    $query = "INSERT INTO produk
                VALUES
                ('','$nama','$ket','$harga','$jumlah')
            ";
            mysqli_query($conn,$query);

            return mysqli_affected_rows($conn);
}




function hapus($id){
    global $conn ;
    mysqli_query($conn, "DELETE FROM produk WHERE id = $id");

    return mysqli_affected_rows($conn);

}

function edit($data){
    global $conn;

    $id     = $data["id"];
    $nama   = htmlspecialchars($data["nama_produk"]);
    $ket    = htmlspecialchars($data["keterangan"]);
    $harga  = htmlspecialchars($data["harga"]);
    $jumlah = htmlspecialchars($data["jumlah"]);

    $query = "UPDATE produk SET 
            nama_produk = '$nama',
            keterangan  = '$ket',
            harga       = '$harga',
            jumlah      = '$jumlah'
            WHERE id = $id
            ";
            mysqli_query($conn,$query);

            return mysqli_affected_rows($conn);
}

?>