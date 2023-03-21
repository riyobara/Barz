<?php 
    session_start();
    require "function/functions.php";
    
    // session dan cookie multilevel user
    if(isset($_COOKIE['login'])) {
        if ($_COOKIE['level'] == 'user') {
            $_SESSION['login'] = true;
            $ambilNama = $_COOKIE['login'];
        } 
        
        elseif ($_COOKIE['level'] == 'admin') {
            $_SESSION['login'] = true;
            header('Location: administrator');
        }
    } 

    elseif ($_SESSION['level'] == 'user') {
        $ambilNama = $_SESSION['user'];
    } 
    
    else {
        if ($_SESSION['level'] == 'admin') {
            header('Location: administrator');
            exit;
        }
    }

    if(empty($_SESSION['login'])) {
        header('Location: login');
        exit;
    } 
    
    if (isset($_POST["submit"])) {
        if (tambahKeluar($_POST) > 0) {
            echo "
                <script>
                    alert('data berhasil ditambahkan!');
                    document.location.href = 'pengeluaran';
                </script>
                ";
        } else {
            echo "
                <script>
                    alert('data gagal ditambahkan!');
                </script>
                ";
        }
    }
    
    $month = date('m');
    $day = date('d');
    $year = date('Y');

    $today = $year . '-' . $month . '-' . $day;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/favicon.png">
    <title>Dompet-Qu - Tambah Data</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/styler.css?v=1.0">
    <link rel="stylesheet" href="css/tambah.css">
    <script src="js/jquery-3.3.1.min.js"></script>
</head>

<body>
    <div class="header">
        <img src="img/favicon.png" width="25px" height="25px" class="float-left logo-fav">
        <h3 class="text-secondary font-weight-bold float-left logo">Dompet</h3>
        <h3 class="text-secondary float-left logo2">- Qu</h3>
        <a href="logout">
            <div class="logout">
                <i class="fas fa-sign-out-alt float-right log"></i>
                <p class="float-right logout">Logout</p>
            </div>
        </a>
    </div>

    <div class="sidebar">
        <nav>
            <ul>
                <li>
                    <img src="img/profile.png" class="img-fluid profile float-left" width="60px">
                    <h5 class="admin"><?= substr($ambilNama, 0, 7) ?></h5>
                    <div class="online online2">
                        <p class="float-right ontext">Online</p>
                        <div class="on float-right"></div>
                    </div>
                </li>

                <!-- fungsi slide -->
                <script>
                    $(document).ready(function () {
                        $("#flip").click(function () {
                            $("#panel").slideToggle("medium");
                            $("#panel2").slideToggle("medium");
                        });
                        $("#flip2").click(function () {
                            $("#panel3").slideToggle("medium");
                            $("#panel4").slideToggle("medium");
                        });
                    });
                </script>

                <!-- dashboard -->
                <a href="dashboard" style="text-decoration: none;">
                    <li>
                        <div>
                            <span class="fas fa-tachometer-alt"></span>
                            <span>Dashboard</span>
                        </div>
                    </li>
                </a>

                <!-- data -->
                <li class="klik" id="flip" style="cursor:pointer;">
                    <div>
                        <span class="fas fa-database"></span>
                        <span>Data Harian</span>
                        <i class="fas fa-caret-right float-right" style="line-height: 20px;"></i>
                    </div>
                </li>

                <a href="pemasukkan" class="linkAktif">
                    <li id="panel" style="display: none;">
                        <div style="margin-left: 20px;">
                            <span><i class="fas fa-file-invoice-dollar"></i></span>
                            <span>Data Pemasukkan</span>
                        </div>
                    </li>
                </a>

                <a href="pengeluaran" class="linkAktif">
                    <li id="panel2" style="display: none;">
                        <div style="margin-left: 20px;">
                            <span><i class="fas fa-hand-holding-usd"></i></span>
                            <span>Data Pengeluaran</span>
                        </div>
                    </li>
                </a>
                <!-- dashboard -->

                <!-- Input -->
                <li class="klik2" id="flip2" style="cursor:pointer;">
                    <div>
                        <span class="fas fa-plus-circle"></span>
                        <span>Input Data</span>
                        <i class="fas fa-caret-up float-right" style="line-height: 20px;"></i>
                    </div>
                </li>

                <a href="tambahPemasukkan" class="linkAktif">
                    <li id="panel3">
                        <div style="margin-left: 20px;">
                            <span><i class="fas fa-file-invoice-dollar"></i></span>
                            <span>Pemasukkan</span>
                        </div>
                    </li>
                </a>

                <a href="tambahPengeluaran" class="linkAktif">
                    <li class="aktif" style="border-left: 5px solid #306bff;" id="panel4">
                        <div style="margin-left: 20px;">
                            <span><i class="fas fa-hand-holding-usd"></i></span>
                            <span>Pengeluaran</span>
                        </div>
                    </li>
                </a>
                <!-- Input -->

                <!-- laporan -->
                <a href="laporan" style="text-decoration: none;">
                    <li>
                        <div>
                            <span><i class="fas fa-clipboard-list"></i></span>
                            <span>Laporan</span>
                        </div>
                    </li>
                </a>

                <!-- change icon -->
                <script>
                    $(".klik").click(function () {
                        $(this).find('i').toggleClass('fa-caret-up fa-caret-right');
                        if ($(".klik").not(this).find("i").hasClass("fa-caret-right")) {
                            $(".klik").not(this).find("i").toggleClass('fa-caret-up fa-caret-right');
                        }
                    });
                    $(".klik2").click(function () {
                        $(this).find('i').toggleClass('fa-caret-up fa-caret-right');
                        if ($(".klik2").not(this).find("i").hasClass("fa-caret-right")) {
                            $(".klik2").not(this).find("i").toggleClass('fa-caret-up fa-caret-right');
                        }
                    });
                </script>
                <!-- change icon -->
            </ul>
        </nav>
    </div>

    <div class="main-content">
        <div class="konten">
            <div class="konten_dalem">
                <h2 class="head" style="color: #4b4f58;">Tambah Data Pengeluaran</h2>
                <hr style="margin-top: -5px;">
                <div class="headline">
                    <h5>Tambah Data Pengeluaran</h5>
                </div>
                <div class="container">
                    <div class="konten_isi">
                        <table class="table-sm">
                            <script type="text/javascript" src="js/pisahTitik.js"></script>
                            <form class="form-text" action="" method="post">
                                <tr>
                                    <td>Masukkan Tanggal Pengeluaran</td>
                                    <td>:</td>
                                    <td><input class="form-control" type="date" value="<?= $today ?>" name="tanggal"
                                            required></td>
                                </tr>
                                <tr>
                                    <td>Masukkan Keterangan Pengeluaran</td>
                                    <td>:</td>
                                    <td><input class="form-control" type="text" name="keterangan" autocomplete="off" required></td>
                                </tr>
                                <tr>
                                    <td>Masukkan Keperluan Pengeluaran</td>
                                    <td>:</td>
                                    <td>
                                        <select name="keperluan" class="form-control">
                                            <option>1.  Pegawai menikah</option>
                                            <option>2.  Pegawai Menikahkan Anak Kandung</option>
                                            <option>3.  Pegawai Melahirkan/Isteri Melahirkam</option>
                                            <option>4a.  Pegawai Keguguran/Isteri Keguguran (sampai trisemester ke 2)</option>
                                            <option>4b.  Pegawai Keguguran/Isteri Keguguran (Setelah trisemester ke 2)</option>
                                            <option>5.  klaim rawat inap yang meggunakan BPJS(untuk biaya-biaya yang tidak di cover oleh BPJS) untuk pegawai dan anggota keluarga inti(suami/isteri/anak)</option>
                                            <option>6.  klaim rawat inap Non BPJS untuk pegawai dan anggota keluarga inti(suami/isteri/anak)</option>
                                            <option>7.  Klaim Penyakit Kronis (pegawai dan anggota keluarga inti suami/isteri/anak)</option>
                                            <option>8a. Klaim Berobat rawat jalan (Pegawai dan Anggota Keluarga inti, suami/istri/anak)</option>
                                            <option>8b. Klaim pembelian vitamin, multivitamin, suplemen, obat-obatan  non rawat inap  (Herbal /medik) dan peralatan pendukung kesehatan(Pegawai dan Anggota Keluarga inti, suami/istri/anak)</option>
                                            <option>9.  Pegawai Meninggal</option>
                                            <option>10a. Istri sah/Suami sah/Anak kandung Pegawai meninggal</option>
                                            <option>10b. Orang tua kandung pegawai meninggal</option>
                                            <option>11. Mertua kandung pegawai meninggal</option>
                                            <option>12. Saudara kandung pegawai meninggal</option>
                                            <option>13. Khitan anak pegawai (sirkumsisi)</option>
                                            <option>14. Aqiqah anak/ pembaptisan anak pegawai</option>
                                            <option>15. Pegawai Berangkat haji/ umroh bagi muslim atau ziarah ke tanah suci bagi non muslim </option>
                                            <option>16a.Pegawai yang studi lanjut ke D3 atau D4/S1</option>
                                            <option>16b.Pegawai yang studi lanjut ke S2/S2Tr</option>
                                            <option>16c.Pegawai yang studi lanjut ke S3/S3Tr</option>
                                            <option>17. Kenang-kenangan untuk apresiasi kerja pegawai yang resign</option>
                                            <option>18a. Klaim bantuan biaya operasi /tindakan medis Korban Kecelakaan lalu lintas untuk pegawai dan keluarga inti</option>
                                            <option>18b.Klaim bantuan biaya operasi /tindakan medis Korban Kecelakaan non lalu lintas untuk pegawai dan keluarga inti (suami/isteri/anak)</option>
                                            <option>19.Klaim Perawatan kecelakaan tanpa tindakan operasi, tetapi tindakan terapi medis dan non medis/pengobatan </option>
                                            <option>20.Jika Non Anggota DAP (pegawai, istri/suami, anak, orangtua/mertua meninggal)</option>
                                            <option>21.Sumbangan Kedukaan Mahasiswa Polibatam meninggal dunia</option>                                           
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Masukkan Jumlah Pengeluaran</td>
                                    <td>:</td>
                                    <td><input class="form-control" type="text" name="jumlah" autocomplete="off" onkeydown="return numbersonly(this, event);"
                                            onkeyup="javascript:tandaPemisahTitik(this);" required></td>
                                </tr>
                                <tr>
                                    <td><input type="hidden" name="username" value="<?= $ambilNama ?>"></td>
                                    <td></td>
                                    <td>
                                        <center><button class="btn btn-primary btn-block" type="submit" name="submit">tambah
                                                data</button></center>
                                    </td>
                                </tr>
                            </form>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
</body>

</html>