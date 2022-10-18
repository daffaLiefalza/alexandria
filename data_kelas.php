<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/data_kelas.css">
  <link rel="icon" type="image/x-icon" href="assets/images/logo.png">

  <style>
    .bulet-nilai,.bulet-nilai2,.bulet-nilai3 {
        font-weight: bold;
    }

    .lihat-nilai, .lihat-nilai2, .lihat-nilai3 {
        bottom: 8px;
        right: 5px;
    }

  </style>
</head>
<body>

    <div class="grid-container">
        <header class="header">
                <img src="assets/images/search.png" class="search-icon" alt="">
                <input type="text" class="search" placeholder="Apa yang ingin kamu cari ?">
                <img src="assets/images/group.png" class="group"alt="">
        </header>
        <section class="sidebar">
            <h2>Alexandria</h2>
            <ul>
                <li><a href="data_kelas.php">Data Kelas</a></li>
                <li><a href="data_nilai.php">Data Nilai</a></li>
                <li><a href="#">Ekstrakurikuler</a></li>
                <li><a href="#">Kelulusan</a></li>
                <li><a href="#">Laporan</a></li>
                <li><a href="#">Bantuan</a></li>
                <li><a href="login.php" onclick=" return confirm('Yakin ingin keluar ? ')">Keluar</a></li>
            </ul>
        </section>
        <main class="main">
            <div class="main__container">
                <div class="box-info">
                    <table style="text-align: start;" class="table-info" cellspacing="10">
                        <tr>
                            <td>Nis</td>
                            <td>Nama</td>
                            <td>Kelas</td>
                            <td>Tahun Angkatan</td>
                        </tr>
                        <tr>
                            <td>201901001</td>
                            <td>Asep hernandez</td>
                            <td>XII-IPA-2</td>
                            <td>2019</td>
                        </tr>
                    </table>
                </div>
                <div class="box-kelas10">
                        <div class="textkelas10">
                            <p>Kelas 10</p>
                        </div>
                        <div class="bulet-nilai">
                            <p>92,5</p>
                        </div>
                        <div class="text-tahun">
                            <p>Tahun ajaran <span class="highlight">2019/2020</span></p>
                        </div>
                        <div class="lihat-nilai">
                            <a href="#">Lihat Nilai </a>
                        </div>
                </div>
                <div class="box-kelas11">
                        <div class="textkelas11">
                            <p>Kelas 11</p>
                        </div>
                        <div class="bulet-nilai2">
                            <p>92,5</p>
                        </div>
                        <div class="text-tahun2">
                            <p>Tahun ajaran <span class="highlight">2020/2021</span></p>
                        </div>
                        <div class="lihat-nilai2">
                               <a href="#">Lihat Nilai</a>
                        </div>
                </div>
                <div class="box-kelas12">
                        <div class="textkelas12">
                            <p>Kelas 12</p>
                        </div>
                        <div class="bulet-nilai3">
                            <p>92,5</p>
                        </div>
                        <div class="text-tahun3">
                            <p>Tahun ajaran <span class="highlight">2021/2022</span></p>
                        </div>
                        <div class="lihat-nilai3">
                               <a href="#">Lihat Nilai</a>
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