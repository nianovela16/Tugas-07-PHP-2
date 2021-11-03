<html>
    <head>
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>                
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>


<?php
    include './koneksi.php';

    if(isset ($_POST['simpan'])) {
    $judul_buku = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $jenis_buku = $_POST['jenis_buku'];
    $image = $_FILES['gambar_buku'] ['name'];
    $target = "images/".basename ($image);

    $sql = "INSERT INTO BUKU (judul_buku, penulis, jenis_buku, gambar_buku) VALUES ('$judul_buku', '$penulis', '$jenis_buku', '$image')";
    if($conn->query($sql) === TRUE){
        echo "<div class='alert alert-primary alert-success' role='alert'> <a href='tampil.php'> Kembali </a> <br> Berhasil Menambahkan Data </div>";
    }else{
        echo "Error : " . $sql . "<br>" . $conn->error;
    }
}
    $conn->close();
?>


