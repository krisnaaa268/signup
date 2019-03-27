<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>selamat datang!</title>
  </head>
  <style>
    body{
        background-image: linear-gradient(to right, #f9d423 0%, #ff4e50 100%);

    }
    .container{
        font-family : "Quicksand";
        color : white;
    }

    .btn{
    font-family: "Quicksand" , sans-serif;
    border: 3px solid #19b5fe;
    width: 200px;
    height: 65px;
    background: #19b5fe;
    color:white;
    padding: 5px ;
    font-size: 30px;
    cursor: pointer;
    margin: 12px 0;
    text-decoration: none;
    text-decoration-line: none;
    border-radius: 10px;
    transition: 0.1s;
}

.btn:hover{
    font-family: "Quicksand" , sans-serif;
    border: 3px solid white;
    width: 200px;
    height: 65px;
    background: none;
    color: white;
    padding: 5px ;
    font-size: 30px;
    cursor: pointer;
    margin: 12px 0;
    text-decoration: none;
    text-decoration-line: none;
    border-radius: 10px;
}

</style>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center mt-5">
            <h1>Selamat Datang <br> Di Rumah Kreatif Jogja</h1>
            <p class="mt-4">Apakah Anda Anggota Atau Tamu?</p>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-md-5 text-center">
            <a href="formerkaje.php" class="btn">Anggota</a>
        </div>
        <div class="col-md-5 text-center">
            <a href="formerkaje.php" class="btn">Tamu</a>
        </div>
    </div>
</div>
    
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <?php
                if (isset($_POST['submit'])) 
                {
                    $nama = $_POST['nama'];
                    $pekerjaan = $_POST['pekerjaan'];
                    $instansi = $_POST['instansi'];
                    $ALAMAT = $_POST['ALAMAT'];
                    $nohp = $_POST['nohp'];
                    $bagaimanaanda = $_POST['bagaimanaanda'];
                    $urusandirkj = $_POST['urusandirkj'];
                    $simpan = mysqli_query($koneksi, "INSERT INTO cobatamu(nama,pekerjaan,instansi,ALAMAT,nohp,bagaimanaanda,urusandirkj)VALUES('$nama','$pekerjaan','$instansi','$ALAMAT',$nohp','$bagaimanaanda','urusandirkj')");
                    if($simpan)
                    {
                        ?>
                        <script type="text/javascript">
                            alert('Tambah Berhasil ');
                            document.location.href="home.php";
                        </script>
                        <?php
                    }
                    else
                    {
                      ?>
                        <script type="text/javascript">
                            alert('gagal ');
                        </script>
                        <?php
                    }
                }
            ?>
  </body>
</html>