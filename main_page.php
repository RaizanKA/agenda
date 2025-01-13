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
                <td><select name="awal" id="">
                    <option value=""></option>
                    <?php
                    while ($cek = $request1->fetch_assoc()) {
                    ?>
                    <option value="<?php echo $cek['id_awal'] ; ?>"> <?php echo $cek['ket_awal'] ; ?></option>
                    <?php
                    }
                    ?>
                </select></td>
            </tr>
            <tr>
                <td>Jam Akhir</td>
                <td> : </td>
                <td><select name="akhir" id="">
                    <option value=""></option>
                    <?php
                    while ($cek = $request2->fetch_assoc()) {
                    ?>
                    <option value="<?php echo $cek['id_akhir'] ; ?>"> <?php echo $cek['ket_akhir'] ; ?></option>
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
</body>
</html>