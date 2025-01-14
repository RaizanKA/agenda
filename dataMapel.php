<?php
    include "koneksi.php";    
    session_start(); 
    $username = $_SESSION['username'];
    $table = mysqli_query($koneksi, "SELECT * FROM  mapel");
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
            max-height: 400px;
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
                <!-- Form untuk memilih tabel -->
                <div class="table-container">
                <table class="responsive-table">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Mapel</th>
                        <th>Fitur</th>
                    </tr>
                    </thead>
                    <?php
                        $i = 1;
                        while ($data = $table-> fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $i++ ; ?></td>
                        <td><?php echo $data['mapel'] ; ?></td>
                        <td>
                            <a href="#">Hapus</a> /
                            <a href="#">Edit</a>
                        </td>
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
