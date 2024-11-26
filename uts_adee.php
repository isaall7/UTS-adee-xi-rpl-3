<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Web Penggajihan</title>
  </head>
  <body>
    <form action="" method="post">
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
          <a class="nav-link text-dark fs-5" href="pendaftaran.php">Pendaftaran</a>
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


    <img src="https://smkassalaambandung.sch.id/img/logo-custom.png" alt="" class="mx-auto d-block" width="15%"> 
<h2 class="text-center mb-1">PENGGAJIHAN</h2>
<h2 class="text-center">GURU/KARYAWAN YAYASAN ASSALAAM</h2>
<br>

    <div class="container mt-4">
        <div class="card border">
            <div class="card-header bg-light border">
             <h5>Data Penggajihan</h5>
             </div>
        <div class="card-body">
            <label for="" class="card-title">No</label>
            <div>
                <input type="number" name="no" id="" class="form-control" placeholder="No">
            </div>
            <label for="" class="card-title mt-2">Nama</label>
            <div>
                <input type="text" name="nama" id="" class="form-control" placeholder="Nama">
            </div>
            <label for="" class="card-title mt-2">Unit Pendidikan</label>
            <div>
                <select name="unit" id="" class="form-select">
                    <option disabled selected>Pilih Unit Pendidikan</option>
                    <option value="TK">TK</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="MTS">MTS</option>
                    <option value="SMA">SMA</option>
                    <option value="SMK">SMK</option>
                    <option value="MA">MA</option>
                </select>
            </div>
            <label for="" class="card-title mt-2">Tanggal Gaji</label>
            <div>
                <input type="date" name="tgl" id="" class="form-control">
            </div>
        </div>
        <div class="card-body">
        <div class="row">
        <div class="col-md-6">
            <h3 class="text-center"><i>Gaji</i></h3>
            <label for="" class="card-title mt-2">Jabatan</label>
            <div>
                <select name="jabatan" id="" class="form-select">
                    <option disabled selected>Pilih Jabatan</option>
                    <option value="Kepala Sekolah">Kepala Sekolah</option>
                    <option value="Wakasek">Wakasek</option>
                    <option value="Guru">Guru</option>
                    <option value="Karyawan">Karyawan</option>
                </select>
            </div>
            <label for="" class="card-title mt-2">Lama Kerja</label>
            <div>
                <input type="number" name="lm_krja" id="" class="form-control" placeholder="Lama Kerja">
            </div>
            <label for="" class="card-title mt-2">Status Kerja</label>
            <div>
                <select name="sts_krja" id="" class="form-select">
                    <option disabled selected>Status Kerja</option>
                    <option value="Tetap">Tetap</option>
                    <option value="Kontrak">Kontrak</option>
                </select>
            </div>
            </div>
            <div class="col-md-6">
                <h3 class="card-title text-center"><i>Potongan</i></h3>
                <label for="" class="card-title mt-2">BPJS</label>
                <div>
                    <input type="number" name="bpjs" id="" class="form-control" placeholder="Bpjs">
                </div>
                <label for="" class="card-title mt-2">Pinjaman</label>
                <div>
                    <input type="number" name="pinjaman" id="" class="form-control" placeholder="Pinjaman">
                </div>
                <label for="" class="card-title mt-2">Cicilan</label>
                <div>
                    <input type="number" name="cicilan" id="" class="form-control" placeholder="Cicilan">
                </div>
                <label for="" class="card-title mt-2">Infaq</label>
                <div>
                    <input type="number" name="infaq" id="" class="form-control" placeholder="Infaq">
                </div>
            </div>
            </div>
            <div class="text-center mt-4">
                <input type="submit" name="proses" id="" class="btn btn-primary btn-block" value="Proses">
            </div> 
        </div>
        
        </div>
        </div>
    </div>
<br>
    
            
        </div>
    </div>
    <?php

if(isset($_POST['proses'])){
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $unit = $_POST['unit'];
    $tgl = $_POST['tgl'];
    
    $jabatan = $_POST['jabatan'];
    $lm_krja = $_POST['lm_krja'];
    $sts_krja = $_POST['sts_krja'];
    
    $bpjs = $_POST['bpjs'];
    $pinjaman = $_POST['pinjaman'];
    $cicilan = $_POST['cicilan'];
    $infaq = $_POST['infaq'];

    class Penggajihan{

        
        public function karyawan($nama,$no,$unit,$tgl){

        echo "<div class='container'>
        <div class='card'>
            <div class='card-header bg-light'>
                <h3 class='text-center'>$nama</h3>
            </div>
            <div class='card-body text-center'>
                <h4>STRUK GAJI</h4>
                <div class='card-body'>
                    <div class='row'>
                        <div class='col-md-5'>
                            <p>No</p>
                        </div>
                        <div class='col-md-2'>
                            <p>:</p>
                        </div>
                        <div class='col-md-5'>
                            <p>$no</p>
                        </div>
                    </div>
                </div>
                <div class='card-body'>
                <div class='row'>
                    <div class='col-md-5'>
                        <p>Unit Pendidikan</p>
                    </div>
                    <div class='col-md-2'>
                        <p>:</p>
                    </div>
                    <div class='col-md-5'>
                        <p>$unit</p>
                    </div>
                </div>
            </div>
            <div class='card-body'>
            <div class='row'>
                <div class='col-md-5'>
                    <p>Tanggal Gajian</p>
                </div>
                <div class='col-md-2'>
                    <p>:</p>
                </div>
                <div class='col-md-5'>
                    <p>$tgl</p>
                </div>
            </div>
        </div>
            </div>";
        }
        public function jabatan($jabatan, $lm_krja, $sts_krja) {
            echo "<div class='card-body mb-1'>
                    <h4 class='text-center'>Data Jabatan</h4>
                    <div class='row'>
                        <div class='col-md-5 text-center'>
                            <p>Jabatan</p>
                        </div>
                        <div class='col-md-2 text-center'>
                            <p>:</p>
                        </div>
                        <div class='col-md-5 text-center'>
                            <p>$jabatan</p>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-md-5 text-center'>
                            <p>Lama Kerja</p>
                        </div>
                        <div class='col-md-2 text-center'>
                            <p>:</p>
                        </div>
                        <div class='col-md-5 text-center'>
                            <p>$lm_krja Tahun</p>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-md-5 text-center'>
                            <p>Status Kerja</p>
                        </div>
                        <div class='col-md-2 text-center'>
                            <p>:</p>
                        </div>
                        <div class='col-md-5 text-center'>
                            <p>$sts_krja</p>
                        </div>
                    </div>";
        
            // Gaji dan Bonus
            if ($jabatan == "Kepala Sekolah") {
                $gaji = 10000000;
            } elseif ($jabatan == "Wakasek") {
                $gaji = 7000000;
            } elseif ($jabatan == "Guru") {
                $gaji = 5000000;
            } elseif ($jabatan == "Karyawan") {
                $gaji = 2500000;
            }
        
            if ($sts_krja == "Tetap") {
                $bonus = 1000000;
            } elseif ($sts_krja == "Kontrak") {
                $bonus = 0;
            }
        
            echo "<div class='row'>
                        <div class='col-md-5 text-center'>
                            <p>Gaji</p>
                        </div>
                        <div class='col-md-2 text-center'>
                            <p>:</p>
                        </div>
                        <div class='col-md-5 text-center'>
                            <p>Rp " . number_format($gaji, 0, ',', '.') . "</p>
                        </div>
                  </div>
                  <div class='row'>
                        <div class='col-md-5 text-center'>
                            <p>Bonus</p>
                        </div>
                        <div class='col-md-2 text-center'>
                            <p>:</p>
                        </div>
                        <div class='col-md-5 text-center'>
                            <p>Rp " . number_format($bonus, 0, ',', '.') . "</p>
                        </div>
                  </div>
                </div>";
        }
        
        public function potongan($bpjs, $pinjaman, $cicilan, $infaq) {
            echo "<div class='card-body'>
                    <h4 class='text-center'>Potongan Gaji</h4>
                    <div class='row'>
                        <div class='col-md-5 text-center'>
                            <p>BPJS</p>
                        </div>
                        <div class='col-md-2 text-center'>
                            <p>:</p>
                        </div>
                        <div class='col-md-5 text-center'>
                            <p>Rp " . number_format($bpjs, 0, ',', '.') . "</p>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-md-5 text-center'>
                            <p>Pinjaman</p>
                        </div>
                        <div class='col-md-2 text-center'>
                            <p>:</p>
                        </div>
                        <div class='col-md-5 text-center'>
                            <p>Rp " . number_format($pinjaman, 0, ',', '.') . "</p>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-md-5 text-center'>
                            <p>Cicilan</p>
                        </div>
                        <div class='col-md-2 text-center'>
                            <p>:</p>
                        </div>
                        <div class='col-md-5 text-center'>
                            <p>Rp " . number_format($cicilan, 0, ',', '.') . "</p>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-md-5 text-center'>
                            <p>Infaq</p>
                        </div>
                        <div class='col-md-2 text-center'>
                            <p>:</p>
                        </div>
                        <div class='col-md-5 text-center'>
                            <p>Rp " . number_format($infaq, 0, ',', '.') . "</p>
                        </div>
                    </div>
                </div>";
        }
        
        public function perhitungan($jabatan, $sts_krja, $bpjs, $pinjaman, $cicilan, $infaq) {
            if ($jabatan == "Kepala Sekolah") {
                $gaji = 10000000;
            } elseif ($jabatan == "Wakasek") {
                $gaji = 7000000;
            } elseif ($jabatan == "Guru") {
                $gaji = 5000000;
            } elseif ($jabatan == "Karyawan") {
                $gaji = 2500000;
            }
        
            if ($sts_krja == "Tetap") {
                $bonus = 1000000;
            } elseif ($sts_krja == "Kontrak") {
                $bonus = 0;
            }
        
            $total = ($gaji + $bonus) - ($bpjs + $pinjaman + $cicilan + $infaq);
        
            echo "<div class='card-body'>
                    <h4 class='text-center'>Perhitungan Gaji Bersih</h4>
                    <div class='row'>
                        <div class='col-md-5 text-center'>
                            <p>Gaji + Bonus</p>
                        </div>
                        <div class='col-md-2 text-center'>
                            <p>:</p>
                        </div>
                        <div class='col-md-5 text-center'>
                            <p>Rp " . number_format($gaji + $bonus, 0, ',', '.') . "</p>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-md-5 text-center'>
                            <p>Total Potongan</p>
                        </div>
                        <div class='col-md-2 text-center'>
                            <p>:</p>
                        </div>
                        <div class='col-md-5 text-center'>
                            <p>Rp " . number_format($bpjs + $pinjaman + $cicilan + $infaq, 0, ',', '.') . "</p>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-md-5 text-center'>
                            <p>Gaji Bersih</p>
                        </div>
                        <div class='col-md-2 text-center'>
                            <p>:</p>
                        </div>
                        <div class='col-md-5 text-center'>
                            <p>Rp " . number_format($total, 0, ',', '.') . "</p>
                        </div>
                    </div>
                </div>";
        }
        
    }

$cetak = new Penggajihan();
echo $cetak->karyawan($nama,$no,$unit,$tgl);
echo $cetak->jabatan($jabatan,$lm_krja,$sts_krja);
echo $cetak->potongan($bpjs,$pinjaman,$cicilan,$infaq);
echo $cetak->perhitungan($jabatan,$sts_krja,$bpjs,$pinjaman,$cicilan,$infaq);
}

?>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>