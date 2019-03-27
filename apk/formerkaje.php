<?php 
    include "koneksi.php";
  $qry = mysqli_query($koneksi,"SELECT * FROM cobatamu");
  $data = mysqli_fetch_array($qry);
 ?>

<!doctype html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="formerkaje.css">   
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>FORM ANGGOTA</title>

<body>
    <a href="home.php"><img src="img/erkaje.jpeg" width="300px" height="50px" > </a> 
    <div class="we">
    <p class="font-weight-normal judul">We Make You Grow.</p>
  </div>

    <style>
    body{
background-image: linear-gradient(to right, #f9d423 0%, #ff4e50 100%);

    }
    .container{
        font-family : "Quicksand";
        color : white;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center mt-5">
            <h1>Selamat Datang <br>anggota RKJ!</h1>
        </div>
    </div>
                <div class="card-body">
                <form action="" method="post">

                        <div class="form-row">
    <div class="col-4">
      <input type="text" class="form-control" placeholder="nama lengkap" name="nama">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="pekerjaan" name="pekerjaan">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="instansi" name="instansi">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="ALAMAT" name="ALAMAT">
    </div>
     <div class="col">
      <input type="number" class="form-control" placeholder="nohp" name="nohp">
    </div>
  </div>


                        <div class="form-group">
                            <label for="nama">bagaimana Anda Tau RKJ</label>
                            <select class="form-control" name='bagaimanaanda'>
                              <option>pilih</option>
                                <option>teman</option>
                                <option>media online</option>
                                <option>google map</option>
                                <option>banner</option>
                                <option>koran</option>
                            </select>                            
                        </div>
                        <div class="form-group">
                            <label for="nama">urusan di rkj?</label>
                            <select class="form-control" name="urusandirkj">
                                <option>pilih</option>
                                <option>mentor</option>
                                <option>rapat</option>
                                <option>sekedar datang</option>
                                <option>mengikuti kelas</option>
                            </select>
                        </div>
                        <button type='submit' name='submit' class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>   
        </div>
    </div>
</div>
</form>




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