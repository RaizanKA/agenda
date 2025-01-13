<?php
    include "koneksi.php";

    $query = mysqli_query($koneksi, "SELECT tb_riwayat.id_riwayat, kelas.kelas, tb_riwayat.tanggal, tb_jam_awal.ket_awal, tb_jam_akhir.ket_akhir, guru.nama_guru, mapel.mapel, tb_riwayat.materi, kehadiran.ket_kehadiran
    from tb_riwayat
    inner join kelas on tb_riwayat.id_kelas = kelas.id_kelas
    join tb_jam_awal on tb_riwayat.id_awal = tb_jam_awal.id_awal
    join tb_jam_akhir on tb_riwayat.id_akhir = tb_jam_akhir.id_akhir
    join guru on tb_riwayat.id_guru = guru.id_guru
    join kehadiran on tb_riwayat.id_kehadiran = kehadiran.id_kehadiran
    join mapel on tb_riwayat.id_mapel = mapel.id_mapel")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
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
        <?php
            while ($cek = $query-> fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $cek['kelas'] ; ?></td>
            <td><?php echo $cek['tanggal'] ; ?></td>
            <td><?php echo $cek['ket_awal'] ; ?></td>
            <td><?php echo $cek['ket_akhir'] ; ?></td>
            <td><?php echo $cek['nama_guru'] ; ?></td>
            <td><?php echo $cek['mapel'] ; ?></td>
            <td><?php echo $cek['materi'] ; ?></td>
            <td><?php echo $cek['ket_kehadiran'] ; ?></td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>