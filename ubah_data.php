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
    $id = $_GET['id'];

    $sql = ("SELECT * FROM buku WHERE id = '$id'");
    $result = $conn->query($sql);

    $result= $result->fetch_assoc();
?>
        <div class="container">
            <div class="row mt-5">
               
                <form action="ubah.php" method="POST"> 
                    <input type="hidden" name="id" value="<?php echo $result['id']?>"> 
                        <div class="mb-3">
                            <label class="form-label">Judul Buku</label>
                            <input type="text" name="judul_buku" class="form-control" value="<?php echo $result['judul_buku']?>"></label>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Penulis</label>
                            <input type="text" name="penulis" class="form-control" value="<?php echo $result['penulis']?>"></label>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis Buku</label>
                            <input type="text" name="jenis_buku" class="form-control" value="<?php echo $result['jenis_buku']?>"></label>
                        </div>  
                        <div class="mb-3">
                            <label class="form-label">Gambar Buku</label>
                            <input type="file" name="gambar_buku" class="form-control" value="<?php echo $result['gambar_buku']?>"></label>
                        </div>             
                    <button name="simpan" value="stok" class="btn btn-warning">Simpan</button>
                </form>
            </div>
        </div>       