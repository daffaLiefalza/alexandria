<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/data_nilai.css">
  <link rel="icon" type="image/x-icon" href="assets/images/logo.png">

  <style>
        .sidebar ul li a {
            font-size: 1.2rem;
        }

  </style>
</head>
<body>

    <div class="grid-container">
        <header class="header">
                <img src="assets/images/search.png" class="search-icon" alt="" >
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
             <table cellspacing="20">
            <tr>
                <th>Kode Mapel</th>
                <th>Mata Pelajaran</th>
                <th>Jadwal</th>
                <th>Pengajar</th>
                <th>Nilai</th>
                <th>Grade</th>
            </tr>
            <tr >
                <td >IPA-IND-19</td>
                <td>Bahasa Indonesia</td>
                <td>Senin,08:00-09:30 <br>
                    Kamis,10:00-11:30</td>
                <td>Siti Romani</td>
                <td>92,5</td>
                <td>A</td>
            </tr>
            <tr>
             <td>IPA-IND-19</td>
                       <td>Bahasa Indonesia</td>
                <td>Senin,08:00-09:30 <br>
                    Kamis,10:00-11:30</td>
              <td>Siti Romani</td>
                 <td>92,5</td>
                 <td>A</td>
            </tr>
            <tr>
                <td>IPA-IND-19</td>
                 <td>Bahasa Indonesia</td>
                 <td>Senin,08:00-09:30 <br>
                    Kamis,10:00-11:30</td>
                 <td>Siti Romani</td>
                 <td>92,5</td>
                <td>A</td>
            </tr>
            <tr>
              <td>IPA-IND-19</td>
                      <td>Bahasa Indonesia</td>
              <td>Senin,08:00-09:30 <br>
                    Kamis,10:00-11:30</td>
                 <td>Siti Romani</td>
                  <td>92,5</td>
                 <td>A</td>
            </tr>
            <tr>    
           <td>IPA-IND-19</td>
               <td>Bahasa Indonesia</td>
                <td>Senin,08:00-09:30 <br>
                    Kamis,10:00-11:30</td>
                 <td>Siti Romani</td>
                 <td>92,5</td>
                 <td>A</td>
            </tr>
            <tr>        
               <td>IPA-IND-19</td>
                <td>Bahasa Indonesia</td>
                  <td>Senin,08:00-09:30 <br>
                    Kamis,10:00-11:30</td>
                 <td>Siti Romani</td>
                 <td>92,5</td>
                  <td>A</td>
            </tr>
           
        </table>
        </main>
        <aside class="info">
             <img src="assets/images/bismillah.png"  alt="">
        <h2>Chava Al Hakim</h2>
        <h3>Bahasa Indonesia</h3>
        <table cellpadding="20" cellspacing="20">
            <tr>
                <td>Tugas Harian</td>
                <td>92.5</td>
            </tr>
            <tr>
                <td>Tugas Praktek</td>
                <td>92.5</td>
            </tr>
            <tr>
                <td>UTS</td>
                <td>92.5</td>
            </tr>
            <tr>
                <td>UAS</td>
                <td >92.5</td>
            </tr>
            <tr>
                <th>Total Nilai</th>
                <th>92.5</th>
            </tr>
            <tr>
                <th>Grade</th>
                <th>A+</th>
            </tr>
        </table>
        </aside>
    </div>

</body>
</html>