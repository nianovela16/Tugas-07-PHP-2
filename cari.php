<?php
$cari=$_POST['cari'];
$link = mysqli_connect("localhost", "root","","db_buku");
$result = mysqli_query($link, "select * from buku where judul_buku = '$cari'");
$jumlah = mysqli_num_rows($result);
   echo 
    "<div class='container'>
        <div class='row'>
            <nav class='navbar navbar-expand-lg navbar-light bg-blue'>
                <div class='container-fluid'>
                    <h1><center>Cari Data Buku</center></h1>     
                    <center>              
                    <a href='tampil.php'>
                        <button type='button' class='btn btn-primary btn-sm' data-bs-toggle='modal'>
                        Lihat Data
                        </button>
                    </a>
                    <form class='d-flex' role='search' method='post' action='cari.php'>
                        <input type='text' name='cari' class='form-control' placeholder='Cari Data Buku'>
                        &nbsp
                        <button class='btn btn-outline-success' type='submit' value'cari'>Search</button>
                    <form>
                    </center>
                </div>
            </nav>
        </div>
    </div>";
       
echo " <div class='container'>
           Jumlah Data: $jumlah
        </div>";

while($baris = mysqli_fetch_array($result))
{
    echo 
        "<br>
                <div class='container'>
         
                  

                    <div class='card' style='width: 100%;'>
                        <ul class='list-group list-group-flush'>
                            <li class='list-group-item'><h6>Judul Buku :</h6>  $baris[1]</li>
                            <li class='list-group-item'><h6>Penulis :</h6> $baris[2]</li>
                            <li class='list-group-item'><h6>Jenis Buku :</h6> $baris[3]</li>
                            <li class='list-group-item'><h6>Gambar Buku :</h6><img src='images/".$baris[4]."'></li>
                            <li class='list-group-item'><h6><a href='ubah_data.php?id_buku=$baris[0]' class='btn btn-warning btn-sm'>Ubah</a>&nbsp&nbsp&nbsp<a href='hapus.php?id_siswa=$baris[0]' class='btn btn-warning btn-sm'>Hapus</a></li>
                        </ul>
                    </div>    
        </div>  

        ";
}
?>