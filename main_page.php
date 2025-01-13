<?php
    session_start();
    include "koneksi.php";
    $query = mysqli_query($koneksi, "SELECT * from kelas");
    $request1 = mysqli_query($koneksi, "SELECT * from tb_jam_awal");
    $request2 = mysqli_query($koneksi, "SELECT * from tb_jam_akhir");
    $request3 = mysqli_query($koneksi, "SELECT * from mapel");
    $request4 = mysqli_query($koneksi, "SELECT * from kehadiran");
    $date = date("Y-m-d");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f9;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="text"], select, option, input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .message {
            text-align: center;
            margin-top: 10px;
            color: #d9534f;
        }

        .password-container {
            position: relative;
        }

        .toggle-password {
            position: absolute;
            right: 10px;
            top: 30%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #007bff;
        }
    </style>
<body>
    <div class="container">
    <form action="" method="post">
        <table>
            <tr>
                <td>Kelas</td>
                <td> : </td>
                <td><input type="text" name="kelas" id="" readonly></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td> : </td>
                <td><input type="date" name="kelas" id="" max="<?php echo $date ; ?>"></td>
            </tr>
            <tr>
                <td>Jam Awal</td>
                <td> : </td>
                <td><select name="awal" id="jam_awal" onchange="updateJamAkhir()">
                    <option value="" data-jam="<?php echo 0 ;?>"></option>
                    <?php
                    while ($cek = $request1->fetch_assoc()) {
                        $jam_awal = $cek['id_awal'];
                    ?>
                    <option value="<?php echo $cek['id_awal'] ; ?>" data-jam="<?php echo $jam_awal ; ?>"> <?php echo $cek['ket_awal'] ; ?></option>
                    <?php
                    }
                    ?>
                </select></td>
            </tr>
            <tr>
                <td>Jam Akhir</td>
                <td> : </td>
                <td><select name="akhir" id="jam_akhir" onchange="updateJamAwal()">
                    <option value=""></option>
                    <?php
                    while ($cek = $request2->fetch_assoc()) {
                        $jam_akhir = $cek['id_akhir'];
                    ?>
                    <option value="<?php echo $cek['id_akhir'] ; ?>" data-jam="<?php echo $jam_akhir; ?>"> <?php echo $cek['ket_akhir'] ; ?></option>
                    <?php
                    }
                    ?>
                </select></td>
            </tr>
            <tr>
                <td>Nama Guru</td>
                <td> : </td>
                <td><input type="text" name="kelas" id="" ></td>
            </tr>
            <tr>
                <td>Mapel</td>
                <td> : </td>
                <td><select name="mapel" id="">
                    <option value=""></option>
                    <?php
                    while ($cek = $request3->fetch_assoc()) {
                    ?>
                    <option value="<?php echo $cek['id_mapel'] ; ?>"> <?php echo $cek['mapel'] ; ?></option>
                    <?php
                    }
                    ?>
                </select></td>
            </tr>
            <tr>
                <td>Materi</td>
                <td> : </td>
                <td><textarea name="mater" id=""></textarea></td>
            </tr>
            <tr>
                <td>Kehadiran </td>
                <td> : </td>
                <td><select name="kehadiran" id="">
                    <option value=""></option>
                    <?php
                    while ($cek = $request4->fetch_assoc()) {
                    ?>
                    <option value="<?php echo $cek['id_kehadiran'] ; ?>"> <?php echo $cek['kode_kehadiran']."/". $cek['ket_kehadiran'] ; ?></option>
                    <?php
                    }
                    ?>
                </select></td>
            </tr>
            <tr>
                <td cospan="3"><input type="submit" value="kirim" name="kirim"></td>
            </tr>
        </table>
    </form>

    </div>
    <script>
    function updateJamAkhir() {
    // Ambil nilai yang dipilih pada "Jam Awal" dan konversi ke integer
    var jamAwalSelected = document.querySelector('#jam_awal option:checked');
    var jamAwalValue = parseInt(jamAwalSelected ? jamAwalSelected.getAttribute('data-jam') : "0", 10);  // Konversi ke integer

    console.log("Jam Awal Value: ", jamAwalValue); // Debugging nilai Jam Awal

    // Mendapatkan elemen dropdown Jam Akhir
    var jamAkhirSelect = document.getElementById('jam_akhir');

    // Jika Jam Awal belum dipilih, nonaktifkan Jam Akhir
    if (isNaN(jamAwalValue) || jamAwalValue === 0) {
        jamAkhirSelect.disabled = true;  // Nonaktifkan dropdown Jam Akhir
    } else {
        jamAkhirSelect.disabled = false;  // Aktifkan dropdown Jam Akhir
    }

    // Mendapatkan semua opsi Jam Akhir
    var jamAkhirOptions = document.querySelectorAll("#jam_akhir option");

    jamAkhirOptions.forEach(function(option) {
        // Ambil nilai data-jam dari setiap opsi Jam Akhir dan konversi ke integer
        var jamAkhirValue = parseInt(option.getAttribute('data-jam'), 10);  // Konversi ke integer

        console.log("Jam Akhir Value: ", jamAkhirValue); // Debugging nilai Jam Akhir

        // Periksa apakah jamAwalValue dan jamAkhirValue valid
        if (!isNaN(jamAwalValue) && !isNaN(jamAkhirValue)) {
            // Jika nilai Jam Akhir lebih besar atau sama dengan Jam Awal, tampilkan opsi tersebut
            if (jamAkhirValue >= jamAwalValue) {
                option.style.display = "block";  // Menampilkan opsi
            } else {
                option.style.display = "none";  // Menyembunyikan opsi
            }
        }
    });
}

// Panggil fungsi updateJamAkhir() saat halaman dimuat untuk mengatur status awal
window.onload = updateJamAkhir;
</script>
</body>
</html>