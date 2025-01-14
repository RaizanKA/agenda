<?php
    include "koneksi.php";    
    session_start(); 
    $username = $_SESSION['username'];
    $query = mysqli_query($koneksi, "SELECT * from kelas");

        $table = mysqli_query($koneksi, "SELECT * from guru");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <style>
        /* Gaya untuk kotak pencarian */
        .search-container {
            margin-bottom: 20px;
            text-align: left;
        }

        .search-box {
            width: 100%;
            max-width: 300px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        /* Tambahkan style tabel dan elemen lainnya yang telah Anda buat */
        .table-container {
            overflow-x: auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-height: 400px;
        }

        .responsive-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .responsive-table thead {
            background-color: #2c3e50;
            color: white;
        }

        .responsive-table th, .responsive-table td {
            padding: 12px 15px;
            text-align: left;
            border: 1px solid #ddd;
        }

        .responsive-table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .responsive-table tbody tr:hover {
            background-color: #f1f1f1;
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
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="dashboardGuru.php">Data Guru</a></li>
                <li><a href="dataMapel.php">Data Mapel</a></li>
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
                <h3>Pilih Kelas</h3>
                <!-- Pencarian -->
                <div class="search-container">
                    <input 
                        type="text" 
                        id="searchInput" 
                        class="search-box" 
                        placeholder="Cari nama guru..." 
                        onkeyup="searchTable()"
                    >
                </div>
                <!-- Tabel Data -->
                <div class="table-container">
                    <table class="responsive-table" id="dataTable">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Guru</th>
                            <th>Keterangan</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i = 1;
                        while ($data = $table->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $data['nama_guru']; ?></td>
                            <td>
                                <a href="hapusGuru.php?id=<?= $data['id_guru'] ?>">hapus</a> /
                                <a href="gantiGuru.php?id=<?= $data['id_guru'] ?>">ganti</a>
                            </td>
                        </tr>
                        <?php
                            $i++;
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        function searchTable() {
            const input = document.getElementById('searchInput').value.toLowerCase();
            const table = document.getElementById('dataTable');
            const rows = table.getElementsByTagName('tr');

            for (let i = 1; i < rows.length; i++) { // Mulai dari 1 karena baris 0 adalah header
                const cells = rows[i].getElementsByTagName('td');
                let match = false;

                for (let j = 0; j < cells.length; j++) {
                    if (cells[j].innerText.toLowerCase().includes(input)) {
                        match = true;
                        break;
                    }
                }

                rows[i].style.display = match ? '' : 'none';
            }
        }
    </script>
</body>
</html>
