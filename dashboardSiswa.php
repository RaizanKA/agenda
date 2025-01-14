<?php
    include "koneksi.php";   
    session_start(); 
    $username = $_SESSION['username'];
    $user = mysqli_query($koneksi, "SELECT * FROM user where username = '$username'");
    $id = mysqli_fetch_array($user);
    $idUser = $id['id_user'];
    $kelas =  mysqli_query($koneksi, "SELECT * FROM kelas where id_user = $idUser");
    $cek = mysqli_fetch_array($kelas);
    $idKelas = $cek['id_kelas'];
    $table = mysqli_query($koneksi, "SELECT tb_riwayat.id_riwayat, tb_riwayat.id_kelas, kelas.kelas, tb_riwayat.tanggal, tb_jam_awal.ket_awal, tb_jam_akhir.ket_akhir, guru.nama_guru, mapel.mapel, tb_riwayat.materi, kehadiran.ket_kehadiran
        from tb_riwayat
        inner join kelas on tb_riwayat.id_kelas = kelas.id_kelas
        join tb_jam_awal on tb_riwayat.id_awal = tb_jam_awal.id_awal
        join tb_jam_akhir on tb_riwayat.id_akhir = tb_jam_akhir.id_akhir
        join guru on tb_riwayat.id_guru = guru.id_guru
        join kehadiran on tb_riwayat.id_kehadiran = kehadiran.id_kehadiran
        join mapel on tb_riwayat.id_mapel = mapel.id_mapel
        where tb_riwayat.id_kelas = $idKelas");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <style>
        .table-container {
            overflow-x: auto;  /* Untuk scroll horizontal */
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Tabel */
        .responsive-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        /* Gaya header tabel */
        .responsive-table thead {
            background-color: #2c3e50;
            color: white;
        }

        .responsive-table th, .responsive-table td {
            padding: 12px 15px;
            text-align: left;
            border: 1px solid #ddd;
        }

        /* Gaya baris data */
        .responsive-table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .responsive-table tbody tr:hover {
            background-color: #f1f1f1;
        }

        /* Tombol edit */
        .edit-btn {
            padding: 6px 12px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }

        .edit-btn:hover {
            background-color: #2980b9;
        }
        .select-container {
            background-color: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            margin: 0 auto;  /* Centering container */
        }
        .select-box {
            width: 100%;
            padding: 10px 15px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            color: #333;
            appearance: none; 
            cursor: pointer;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }
        .select-box:focus {
            border-color: #3498db;
            box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
            outline: none;
        }

        /* Media Queries: Responsif untuk layar kecil */
        @media (max-width: 768px) {
            .select-container {
                padding: 12px;
                width: 90%;
            }
            .select-box {
                font-size: 14px;
            }
            .responsive-table th, .responsive-table td {
                padding: 10px;
            }
            thead{
                display:none;
            }
            
            .responsive-table td {
                display: block;
                width: 100%;
                box-sizing: border-box;
                border: none;
                margin-bottom: 10px;
            }
            
            .responsive-table td::before {
                content: attr(data-label);
                font-weight: bold;
                display: block;
                margin-bottom: 5px;
            }
            
            .responsive-table tr {
                display: block;
                border-bottom: 2px solid #ddd;
            }
            
            .edit-btn {
                width: 100%;
            }
        }
    </style>
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <nav class="sidebar" id="sidebar">
            <div class="logo">Logo</div>
            <ul class="nav-links">
                <li><a href="dashboardSiswa.php">Dashboard</a></li>
                <li><a href="main_page.php">Pengisian Agenda</a></li>
                <li><a href="#">Profile</a></li>
            </ul>
        </nav>

        <!-- Main Content -->
        <div class="main-content">
            <header>
                <div class="header-left">
                </div>
                <div class="header-right">
                    <button class="logout-btn">Logout</button>
                    <button class="toggle-sidebar-btn" id="toggleSidebarBtn">☰</button>
                </div>
            </header>
            <div class="content">
                <h2>Selamat datang, <?php echo $username ?></h2>
                <h3>Riwayat Kehadiran Kelas</h3>
                <div class="table-container">
                <table class="responsive-table">
                    <thead>
                    <tr>
                        <th>Kelas</th>
                        <th>Tanggal</th>
                        <th>Jam Awal</th>
                        <th>Jam Akhir</th>
                        <th>Guru</th>
                        <th>Mapel</th>
                        <th>Materi</th>
                        <th>Kehadiran</th>
                    </tr>
                    </thead>
                    <?php
                        while ($data = $table-> fetch_assoc()) {
                    ?>
                    <tr>
                        <td style="font-weight: bold;"><?php echo $data['kelas'] ; ?></td>
                        <td><?php echo $data['tanggal'] ; ?></td>
                        <td><?php echo $data['ket_awal'] ; ?></td>
                        <td><?php echo $data['ket_akhir'] ; ?></td>
                        <td><?php echo $data['nama_guru'] ; ?></td>
                        <td><?php echo $data['mapel'] ; ?></td>
                        <td><?php echo $data['materi'] ; ?></td>
                        <td><?php echo $data['ket_kehadiran'] ; ?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </table>
                </div>
            </div>
        </div>
    </div>

    <script src="dashboard.js"></script>
    <script>
        function submitForm() {
            // Kirim form otomatis saat memilih nilai
            document.getElementById('myForm').submit();
        }
    </script>
</body>
</html>
