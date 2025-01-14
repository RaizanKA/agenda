<?php
    include "koneksi.php";
    
    $query = mysqli_query($koneksi, "SELECT * from kelas");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($id) && $id != "") {
        $table = mysqli_query($koneksi, "SELECT tb_riwayat.id_riwayat, tb_riwayat.id_kelas, kelas.kelas, tb_riwayat.tanggal, tb_jam_awal.ket_awal, tb_jam_akhir.ket_akhir, guru.nama_guru, mapel.mapel, tb_riwayat.materi, kehadiran.ket_kehadiran
        from tb_riwayat
        inner join kelas on tb_riwayat.id_kelas = kelas.id_kelas
        join tb_jam_awal on tb_riwayat.id_awal = tb_jam_awal.id_awal
        join tb_jam_akhir on tb_riwayat.id_akhir = tb_jam_akhir.id_akhir
        join guru on tb_riwayat.id_guru = guru.id_guru
        join kehadiran on tb_riwayat.id_kehadiran = kehadiran.id_kehadiran
        join mapel on tb_riwayat.id_mapel = mapel.id_mapel
        where tb_riwayat.id_kelas = $id");
        
    }
}
$k ="";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pilihan Tabel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
        }
        .select-container {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }
        select {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .table-container {
            margin: 20px auto;
            max-width: 600px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        .export-btn {
            margin: 20px auto;
            display: block;
            text-align: center;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .export-btn:hover {
            background-color: #45a049;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>
</head>
<body>
    <h1>Dashboard Pilihan Tabel</h1>
    
    <div class="select-container">
        <!-- Form untuk memilih tabel -->
        <form id="myForm" action="" method="GET">
            <select id="tableSelector" name="id" onchange="submitForm()">
                <option value="">-- Pilih Tabel --</option>
                <?php
                    while ($kelas = $query->fetch_assoc()) {
                        $valid = $kelas['id_kelas'];
                        if ($kelas['kelas'] == 'admin') {
                            break;
                        }
                ?>
                <option value="<?php echo $kelas['id_kelas'] ; ?>" <?php echo (isset($id) && $id == "$valid") ? 'selected' : ''; ?>><?php echo $kelas['kelas'] ; ?></option>
                <?php
                    }
                ?>
            </select>
        </form>
    </div>

    <?php
        if (isset($id) && $id != "") {
    ?>
    <div>
        <table id="dataTable">
            <thead>
                <tr>
                    <th>Kelas</th>
                    <th>Tanggal</th>
                    <th>Jam Awal</th>
                    <th>Jam AKhir</th>
                    <th>Guru</th>
                    <th>Mapel</th>
                    <th>Materi</th>
                    <th>Kehadiran</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($data = $table->fetch_assoc()) {
                        $k = $data['kelas'];
                ?>
                <tr>
                    <td><?php echo $data['kelas'] ; ?></td>
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
            </tbody>
        </table>
        <button class="export-btn" onclick="exportToExcel()">Ekspor ke Excel</button>
    </div>
    <?php
        }
    ?>
    <script>
        function submitForm() {
            // Kirim form otomatis saat memilih nilai
            document.getElementById('myForm').submit();
        }

        function exportToExcel() {
            var table = document.getElementById("dataTable");
            var wb = XLSX.utils.table_to_book(table, {sheet: "<?php echo $k; ?>"});
            XLSX.writeFile(wb, "<?php echo $k; ?>_data_kelas.xlsx");
        }
    </script>
</body>
</html>
