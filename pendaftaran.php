<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa Baru - SMK Assalaam Bandung</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: #f7f9fc;
        }
        .container {
            max-width: 900px;
            margin-top: 50px;
        }
        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .card-header {
            background-color: #003366;
            color: #fff;
            text-align: center;
            
        }
        .btn-primary {
            background-color: #00509e;
            border: none;
        }
        .btn-primary:hover {
            background-color: #003366;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="yayasan.png" alt="" class="mx-auto d-block " width="45%"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link text-dark fs-5" aria-current="page" href="hal2.php">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark fs-5" href="uts_adee.php">Penggajian</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark fs-5" href="#">Kurikulum</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark fs-5" aria-disabled="true">Kesiswaan</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


    <div class="container">
        <form action="" method="post">
            <!-- Header Section -->
            <div class="card">
                <div class="text-center">
                    <div><img src="https://smkassalaambandung.sch.id/img/logo-custom.png" alt="" class="mx-auto d-block" width="25%"> 
</div>
                    <h1 class="mb-4 md-3">Daftar Pekerjaan</h1>
                </div>
            </div>
            
            <!-- Data Diri Section -->
            <div class="card">
                <div class="card-header">
                    <h2>Masukkan Data Diri</h2>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Ambil Pekerjaan</label>
                        <select class="form-select" name="jurusan" id="jurusan">
                            <option value=""></option>
                            <option value="REKAYASA PERANGKAT LUNAK">REKAYASA PERANGKAT LUNAK</option>
                            <option value="TEKNIK DAN BISNIS SEPEDA MOTOR">TEKNIK DAN BISNIS SEPEDA MOTOR</option>
                            <option value="TEKNIK KENDARAAN RINGAN OTOMOTIF">TEKNIK KENDARAAN RINGAN OTOMOTIF</option>
                            <option value="GURU HONORER">GURU HONORER</option>
                            <option value="OB">OB</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jk" id="jk_laki" value="Laki-laki">
                            <label class="form-check-label" for="jk_laki">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jk" id="jk_perempuan" value="Perempuan">
                            <label class="form-check-label" for="jk_perempuan">Perempuan</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="tmpt_lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tmpt_lahir" id="tmpt_lahir">
                    </div>
                    <div class="mb-3">
                        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir">
                    </div>
                    <div class="mb-3">
                        <label for="no_hp" class="form-label">No Hp</label>
                        <input type="number" class="form-control" name="no_hp" id="no_hp">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                </div>
            </div>

            <!-- Alamat Section -->
            <div class="card">
                <div class="card-header">
                    <h2>Masukkan Alamat</h2>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="provinsi" class="form-label">Provinsi</label>
                        <select class="form-select" name="provinsi" id="provinsi">
                            <option value=""></option>
                            <option value="ACEH">ACEH</option>
                            <option value="BANDUNG">BANDUNG</option>
                            <option value="SUMATERA UTARA">SUMATERA UTARA</option>
                            <option value="SUMATERA BARAT">SUMATERA BARAT</option>
                            <option value="RIAU">RIAU</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="kabko" class="form-label">Kab/Kota</label>
                        <select class="form-select" name="kabko" id="kabko">
                            <option value=""></option>
                            <option value="ANTAPANI">ANTAPANI</option>
                            <option value="BABAKAN CIPARAY">BABAKAN CIPARAY</option>
                            <option value="BOJONGLOA KIDUL">BOJONGLOA KIDUL</option>
                            <option value="CIBIRU">CIBIRU</option>
                            <option value="CICENDO">CICENDO</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="kecamatan" class="form-label">Kecamatan</label>
                        <select class="form-select" name="kecamatan" id="kecamatan">
                            <option value=""></option>
                            <option value="KECAMATAN LEMBANG">KECAMATAN LEMBANG</option>
                            <option value="KECAMATAN PARONGPONG">KECAMATAN PARONGPONG</option>
                            <option value="KECAMATAN CISARUA">KECAMATAN CISARUA</option>
                            <option value="KECAMATAN CIKALONG WETAN">KECAMATAN CIKALONG WETAN</option>
                            <option value="KECAMATAN PADALARANG">KECAMATAN PADALARANG</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="kelurahan" class="form-label">Desa/Kelurahan</label>
                        <select class="form-select" name="kelurahan" id="kelurahan">
                            <option value=""></option>
                            <option value="CIKALONG">CIKALONG</option>
                            <option value="MEKARSARI">MEKARSARI</option>
                            <option value="CIPINANG">CIPINANG</option>
                            <option value="CIMAUNG">CIMAUNG</option>
                            <option value="SUKAMAJU">SUKAMAJU</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="pos" class="form-label">Kode Pos</label>
                        <input type="number" class="form-control" name="pos" id="pos">
                    </div>
                </div>
            </div>

            <!-- Asal Sekolah Section -->
            <div class="card">
                <div class="card-header">
                    <h2>Pendidikan Terakhir</h2>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="asal_skl" class="form-label">Asal Sekolah/Kuliah/Pekerjaan</label>
                        <input type="text" class="form-control" name="asal_skl" id="asal_skl">
                    </div>
                    <div class="mb-3">
                        <label for="alamat_skl" class="form-label">Alamat Sekolah/Kuliah/Pekerjaan</label>
                        <input type="text" class="form-control" name="alamat_skl" id="alamat_skl">
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <input type="submit" name="kirim" class="btn btn-primary mb-3" value="KIRIM">
            </div>
        </form>
    </div>

    <?php

if(isset($_POST['kirim'])){
    //data diri
    $jurusan = $_POST['jurusan'];
    $nama_lengkap = $_POST['nama'];
    $jk = $_POST['jk'];
    $tempat_lahir = $_POST['tmpt_lahir'];
    $tanggal_lahir = $_POST ['tgl_lahir'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    //data alamat diri
    $provinsi = $_POST['provinsi'];
    $kabko = $_POST['kabko'];
    $kecamatan = $_POST['kecamatan'];
    $kelurahan = $_POST['kelurahan'];
    $alamat = $_POST['alamat'];
    $kode_pos = $_POST['pos'];
    //data asal sekolah
    $asal_sekolah = $_POST['asal_skl'];
    $alamat_sekolah = $_POST['alamat_skl'];
    
    class ppdb{

        public function data_diri($jurusan,$nama_lengkap,$jk,$tempat_lahir,$tanggal_lahir,$no_hp, $email){
            echo "Jurusan : $jurusan <br>";
            echo "Nama Lengkap : $nama_lengkap <br>";
            echo "Jenis Kelamin : $jk <br>";
            echo "Tempat Lahir : $tempat_lahir <br>";
            echo "Tanggal Lahir : $tanggal_lahir <br>";
            echo "No Hp : $no_hp <br>";
            echo "Email : $email";
        }
        
        public function alamat($provinsi,$kabko,$kecamatan,$kelurahan,$alamat,$kode_pos){
            echo "Provinsi : $provinsi <br>";
            echo "Kab Kota : $kabko <br>";
            echo "Kecamatan : $kecamatan <br>";
            echo "Desa Kelurahan : $kelurahan <br>";
            echo "Alamat : $alamat <br>";
            echo "Kode Pos : $kode_pos";      
        }
        
        public function asal_sekolah($asal_sekolah,$alamat_sekolah){
            echo "Nama Asal Sekolah : $asal_sekolah <br>";
            echo "Alamat Sekolah : $alamat_sekolah";
        }
    }

    $cetak = new ppdb();
    echo "<hr>";
    echo "<h2 align='center'>SELAMAT PENDAFTARAN ANDA BERHASIL</h2>";
    echo $cetak->data_diri($jurusan,$nama_lengkap,$jk,$tempat_lahir,$tanggal_lahir,$no_hp,$email);
    echo "<hr>";
    echo $cetak->alamat($provinsi,$kabko,$kecamatan,$kelurahan,$alamat,$kode_pos);
    echo "<hr>";
    echo $cetak->asal_sekolah($asal_sekolah,$alamat_sekolah);
}

?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
