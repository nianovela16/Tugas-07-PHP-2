<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Forms Bootstrap</title>
  </head>
  <body>
  <div class="container">
            <div class='row'>
                <nav class='navbar navbar-light bg-blue'>
                    <div class='container-fluid'>
                    <h2 class="alert alert-primary text-center mt-3">MASUKKAN DATA BUKU</h2>                
                        <a href='tampil.php'>
                            <button type='button' class='btn btn-primary btn-sm' data-bs-toggle='modal'>
                            Menampilkan Data Buku
                            </button>
                        </a>
                    </div>
                 </nav>
        </div>
            <div class="row mt-5">
                <form action="simpan.php" method="POST" enctype="multipart/form-data">               
                        <div class="mb-3">
                            <label class="form-label">Judul Buku</label>
                            <input type="text" name="judul_buku" class="form-control" placeholder="Masukkan Judul Buku" id="JudulBuku"></label>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Penulis</label>
                            <input type="text" name="penulis" class="form-control" placeholder="Masukkan Penulis" id="Penulis"></label>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis Buku</label>
                            <input type="text" name="jenis_buku" class="form-control" placeholder="Masukkan Jenis Buku" id="JenisBuku"></label>
                        </div>  
                        <div class="mb-3">
                            <label class="form-label">Gambar cover Buku</label>
                            <input type="file" name="gambar_buku" value="" class="form-control"></label>
                        </div>
                    <button type="submit" name="simpan" value="simpan" class="btn btn-warning">Simpan</button>
                </form>
            </div>
        </div>       
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>