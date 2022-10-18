<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard Guru</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/data_nilai_guru.css">
  <link rel="icon" type="image/x-icon" href="../assets/images/logo.png">

    <style> 
        .right-arrow {
            font-size: 1.3rem;
            margin-left: 2px;
        }

        .mapel {
            color: #A4A4A4;
            font-size: 1.2rem;
            font-weight: 500;
        }
    </style>

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
            <h2 >5 kelas</h2>
            <div class="main__container">
               
                <div class="box-kelas10">
                        <div class="textkelas">
                            <p>Kelas XII-IPA-1 &#8226; 2019 <br> <span class="mapel">Matematika</span></p>
                        </div>
                        <div class="semester">
                            <p>Semester Ganjil</p>
                        </div>
                        <div class="dinilai one">
                            <p>0% Sudah dinilai</p>
                        </div>
                        <div class="siswa-aktif six">
                            <p>90% Siswa Aktif</p>
                        </div>
                        <div class="kelola-nilai">
                            <a href="kelola_nilai.php">Kelola Nilai <span class="right-arrow">&rarr;</span> </a>
                        </div>
                </div>
                <div class="box-kelas11">
                        <div class="textkelas">
                            <p>Kelas XII-IPA-2 &#8226; 2019 <br> <span class="mapel">Matematika</span></p>

                        </div>
                        <div class="semester">
                            <p>Semester Ganjil</p>
                        </div>
                        <div class="dinilai two">
                            <p>40% Sudah dinilai</p>
                        </div>
                         <div class="siswa-aktif seven">
                            <p>100% Siswa Aktif</p>
                        </div>
                        <div class="kelola-nilai">
                               <a href="kelola_nilai.php">Kelola Nilai <span class="right-arrow">&rarr;</span> </a>
                        </div>
                </div>
                <div class="box-kelas12">
                        <div class="textkelas">
                             <p>Kelas XII-IPA-3 &#8226; 2019 <br> <span class="mapel">Matematika</span></p>

                        </div>
                        <div class="semester">
                            <p>Semester Ganjil</p>
                        </div>
                        <div class="dinilai three">
                            <p>90% Sudah dinilai</p>
                        </div>
                         <div class="siswa-aktif eight">
                            <p>100% Siswa Aktif</p>
                        </div>
                        <div class="kelola-nilai">
                               <a href="kelola_nilai.php">Kelola Nilai <span class="right-arrow">&rarr;</span> </a>
                        </div>
                </div>
                <div class="box-kelas13">
                        <div class="textkelas">
                             <p>Kelas XI-IPA-1 &#8226; 2020 <br> <span class="mapel">Matematika</span></p>

                        </div>
                        <div class="semester">
                            <p>Semester Ganjil</p>
                        </div>
                        <div class="dinilai four">
                            <p>100% Sudah dinilai</p>
                        </div>
                         <div class="siswa-aktif nine">
                             <p>100% Siswa Aktif</p>
                        </div>
                        <div class="kelola-nilai">
                                <a href="kelola_nilai.php">Kelola Nilai <span class="right-arrow">&rarr;</span> </a>
                        </div>
                </div>
                <div class="box-kelas14">
                        <div class="textkelas">
                             <p>Kelas XI-IPA-2 &#8226; 2020 <br> <span class="mapel">Matematika</span></p>
                        </div>
                        <div class="semester">
                            <p>Semester Ganjil</p>
                        </div>
                        <div class="dinilai five">
                            <p>100% Sudah dinilai</p>
                        </div>
                         <div class="siswa-aktif ten">
                             <p>100% Siswa Aktif</p>
                        </div>
                        <div class="kelola-nilai">
                               <a href="kelola_nilai.php">Kelola Nilai <span class="right-arrow">&rarr;</span> </a>
                        </div>
                </div>
            </div>
        </main>
        <aside class="info">
            <h2>Informasi</h2>
            <div class="box-1"></div>
            <div class="box-2"></div>
            <div class="box-3"></div>
            <div class="box-4"></div>
            <div class="box-5"></div>
        </aside>
    </div>
</body>
</html>