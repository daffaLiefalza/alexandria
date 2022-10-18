<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard Guru</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/kelola_nilai.css">
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
                <span class="hadeh"><a href="data_nilai_guru.php" class="back-to-dn" ><img src="../assets/images/left-arrow.png" style="width: 14px;" alt="">Data Nilai</a>Siswa Kelas XII-IPA-1</span>
                <!-- <a href="data_nilai_guru.php" class="back-to-dn"><img src="../assets/images/left-arrow.png" style="width: 14px;"alt="">Data Nilai </a> -->
                <a href="#" class="rekap"><img src="../assets/images/file.png" class="file-icon" alt=""> Rekap Nilai Siswa</a>
            </div>
            <div class="main__container">
              <table >
                <tr>
                    <th>#</th>
                    <th>Nis</th>
                    <th>Nama Siswa</th>
                    <th>KEHADIRAN</th>
                    <th>NILAI TUGAS</th>
                    <th>NILAI UTS</th>
                    <th>NILAI UAS</th>
                    <th>NILAI AKHIR</th>
                    <th>NILAI RATA</th>
                    <th>Grade</th>
                    <th>Aksi</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2019020001</td>
                    <td>Asep Hernandez</td>
                    <td>100%</td>
                    <td>92,5</td>
                    <td>92,5</td>
                    <td>92,5</td>
                    <td>92,5</td>
                    <td>92,5</td>
                    <td>A+</td>
                    <td><a href="edit_nilai.php" class="button-aksi"><img src="../assets/images/aksi.png" class="aksi-icon" alt=""></a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>2019020001</td>
                    <td>Asep Hernandez</td>
                    <td>100%</td>
                    <td>92,5</td>
                    <td>92,5</td>
                    <td>92,5</td>
                    <td>92,5</td>
                    <td>92,5</td>
                    <td>A+</td>
                    <td><a href="edit_nilai.php" class="button-aksi"><img src="../assets/images/aksi.png" class="aksi-icon" alt=""></a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>2019020001</td>
                    <td>Asep Hernandez</td>
                    <td>100%</td>
                    <td>92,5</td>
                    <td>92,5</td>
                    <td>92,5</td>
                    <td>92,5</td>
                    <td>92,5</td>
                    <td>A+</td>
                    <td><a href="edit_nilai.php" class="button-aksi"><img src="../assets/images/aksi.png" class="aksi-icon" alt=""></a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>2019020001</td>
                    <td>Asep Hernandez</td>
                    <td>100%</td>
                    <td>92,5</td>
                    <td>92,5</td>
                    <td>92,5</td>
                    <td>92,5</td>
                    <td>92,5</td>
                    <td>A+</td>
                    <td><a href="edit_nilai.php" class="button-aksi"><img src="../assets/images/aksi.png" class="aksi-icon" alt=""></a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>2019020001</td>
                    <td>Asep Hernandez</td>
                    <td>100%</td>
                    <td>92,5</td>
                    <td>92,5</td>
                    <td>92,5</td>
                    <td>92,5</td>
                    <td>92,5</td>
                    <td>A+</td>
                    <td><a href="edit_nilai.php" class="button-aksi"><img src="../assets/images/aksi.png" class="aksi-icon" alt=""></a></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>2019020001</td>
                    <td>Asep Hernandez</td>
                    <td>100%</td>
                    <td>92,5</td>
                    <td>92,5</td>
                    <td>92,5</td>
                    <td>92,5</td>
                    <td>92,5</td>
                    <td>A+</td>
                    <td><a href="edit_nilai.php" class="button-aksi"><img src="../assets/images/aksi.png" class="aksi-icon" alt=""></a></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>2019020001</td>
                    <td>Asep Hernandez</td>
                    <td>100%</td>
                    <td>92,5</td>
                    <td>92,5</td>
                    <td>92,5</td>
                    <td>92,5</td>
                    <td>92,5</td>
                    <td>A+</td>
                    <td><a href="edit_nilai.php" class="button-aksi"><img src="../assets/images/aksi.png" class="aksi-icon" alt=""></a></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>2019020001</td>
                    <td>Asep Hernandez</td>
                    <td>100%</td>
                    <td>92,5</td>
                    <td>92,5</td>
                    <td>92,5</td>
                    <td>92,5</td>
                    <td>92,5</td>
                    <td>A+</td>
                    <td><a href="edit_nilai.php" class="button-aksi"><img src="../assets/images/aksi.png" class="aksi-icon" alt=""></a></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>2019020001</td>
                    <td>Asep Hernandez</td>
                    <td>100%</td>
                    <td>92,5</td>
                    <td>92,5</td>
                    <td>92,5</td>
                    <td>92,5</td>
                    <td>92,5</td>
                    <td>A+</td>
                    <td><a href="edit_nilai.php" class="button-aksi"><img src="../assets/images/aksi.png" class="aksi-icon" alt=""></a></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>2019020001</td>
                    <td>Asep Hernandez</td>
                    <td>100%</td>
                    <td>92,5</td>
                    <td>92,5</td>
                    <td>92,5</td>
                    <td>92,5</td>
                    <td>92,5</td>
                    <td>A+</td>
                    <td><a href="edit_nilai.php" class="button-aksi"><img src="../assets/images/aksi.png" class="aksi-icon" alt=""></a></td>
                </tr>
              </table>
            </div>
        </main>
   
    </div>
</body>
</html>