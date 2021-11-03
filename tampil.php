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

    if(isset($_GET['cari-data'])) {
        include "./cari-data.php";
    }

    echo 

    "<div class='container'>
        <div class='row'>
            <nav class='navbar navbar-expand-lg navbar-light bg-blue'>
                <div class='container-fluid'>
                    <h1>Data Buku</h1>                   
                    <a href='index.php'>
                        <button type='button' class='btn btn-primary btn-sm' data-bs-toggle='modal'>
                        Tambah Data Buku
                        </button>
                    </a>
                    <form class='d-flex' role='Cari' method='post' action='cari.php'>
                        <input type='text' name='cari' class='form-control' placeholder='Cari Data Buku'>
                        &nbsp
                        <button class='btn btn-outline-success' type='submit' value'cari'>Cari</button>
                    <form>
                </div>
            </nav>
        </div>
    </div>";

    $sql = "SELECT * FROM buku";
    $result = $conn->query($sql);
    $a = 1;
    
    while($baris = mysqli_fetch_array($result)){
           echo 
        "<br>
        <div class='container'>
             <div class='card' style='width: 100%;'>
                <ul class='list-group list-group-flush'>
                    <li class='list-group-item'><h6>Judul Buku :</h6>  $baris[1]</li>
                    <li class='list-group-item'><h6>Penulis :</h6> $baris[2]</li>
                    <li class='list-group-item'><h6>Jenis Buku :</h6> $baris[3]</li>
                    <li class='list-group-item'><h6>Gambar Buku :</h6><img src='images/".$baris[4]."'></li>
                    <li class='list-group-item'><h6><a href='ubah_data.php?id=$baris[0]' class='btn btn-warning btn-sm'>Ubah</a>&nbsp&nbsp&nbsp<a href='hapus.php?id=$baris[0]' class='btn btn-warning btn-sm'>Hapus</a></li>
                </ul>
            </div>    
        </div>";
        $a++;    
    }
    $conn->close();
?>