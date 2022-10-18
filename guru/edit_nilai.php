<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard Guru</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="../assets/css/edit_nilai.css">
    
   <link rel="icon" type="image/x-icon" href="../assets/images/logo.png">

 

</head>
<body>

    <div class="grid-container">
        <header class="header">
                <img src="../assets/images/search.png" class="search-icon" alt="">
                <input type="text" class="search" placeholder="Apa yang ingin kamu cari ?">
                <img src="../assets/images/group2.png" class="group"alt="" style="background-color: #f9f9f9;">
        </header>
        <section class="sidebar">
            <h2>Alexandria</h2>
            <ul>
                <li><a href="#">Data Peserta Didik</a></li>
                <li><a href="#">Data Kelas</a></li>
                <li><a href="#">Data Nilai</a></li>
                <li><a href="#">Cetak Rapor</a></li>
                <li><a href="#">Laporan</a></li>
                <li><a href="#">Bantuan</a></li>
                <li><a href="../login.php" onclick=" return confirm('Yakin ingin keluar ? ')">Keluar</a></li>
            </ul>
        </section>
        <main class="main">
            <div class="info-kelas">
                <span class="hadeh"><a href="kelola_nilai.php" class="back-to-dn" ><img src="../assets/images/left-arrow.png" style="width: 14px;" alt="">Siswa Kelas XII-IPA</a>Edit Nilai</span>
                <!-- <a href="data_nilai_guru.php" class="back-to-dn"><img src="../assets/images/left-arrow.png" style="width: 14px;"alt="">Data Nilai </a> -->
                <a href="#" class="rekap"><img src="../assets/images/file.png" class="file-icon" alt=""> Rekap Nilai Siswa</a>
            </div>
            <div class="main__container">
                <div class="siswa">
                     <span>Asep Hernandez</span>
                     <span style="margin-left: 15px;">2019010001</span>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <h3>Nilai Tugas</h3>
                        <input type="text" name="" id="" class="form-control">
                    </div>
                    <div class="col-lg-6">
                        <h3>Nilai UTS</h3>
                        <input type="text" name="" id="" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Nilai UAS</h3>
                        <input type="text" name="" id="" class="form-control">
                    </div>
                    <div class="col-lg-6">
                        <h3>Nilai Akhir</h3>
                        <input type="text" name="" id="" class="form-control">
                    </div>
                </div>
                <div class="aksi">
                     <a href="data_nilai_guru.php"><button type="submit" class="btn btn-primary btn-lg">Edit</button></a> 
                     <button type="Reset" class="btn btn-danger btn-lg">Batal</button>
                </div>
            </div>
        </main>
   
    </div>
</body>
</html>