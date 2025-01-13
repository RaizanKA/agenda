<?php
    session_start();
    include "koneksi.php";
    $username = $_SESSION['username'];
    $user = mysqli_query($koneksi, "SELECT * FROM user where username = '$username'");
    $id = mysqli_fetch_array($user);
    $a = $id["id_user"];
    $kelas = mysqli_query($koneksi, "SELECT * FROM kelas where id_user = $a ");
    $cek = mysqli_fetch_array($kelas);
    $namaKelas = $cek['kelas'];
    $id_kelas = $cek['id_kelas'];
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Quiz Navigation</title>
    <style>
         body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 20px;
        }
        h2 {
            color: #444;
            text-align: center;
        }
        .section {
            display: none;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: 20px auto;
        }
        .section.active {
            display: block;
        }
        .navigation {
            margin-top: 20px;
            text-align: center;
        }
        button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #0056b3;
        }
        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        input:focus, select:focus, textarea:focus {
            border-color: #007BFF;
            outline: none;
            box-shadow: 0 0 4px rgba(0, 123, 255, 0.5);
        }
        .dropbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        .dropbtn:hover, .dropbtn:focus {
            background-color: #3e8e41;
        }

        #myInput {
            box-sizing: border-box;
            background-position: 14px 12px;
            background-repeat: no-repeat;
            font-size: 16px;
            padding: 14px 20px 12px 45px;
            border: none;
            border-bottom: 1px solid #ddd;
        }

        #myInput:focus {outline: 3px solid #ddd;}

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f6f6f6;
            min-width: 230px;
            overflow: auto;
            border: 1px solid #ddd;
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown a:hover {background-color: #ddd;}

        .show {display: block;}
    </style>
</head>
<body>

<div id="section1" class="section active">
    <h2>Agenda Kelas</h2>
    <p>Kelas:</p>
    <input type="text" readonly value="<?php echo $namaKelas ?>">
    <p>Pilih Tanggal:</p>
    <input type="date" name="tanggal" id="" max="<?php echo $date ; ?>">
    <div class="navigation">
        <button onclick="nextSection(2)">Lanjutkan</button>
    </div>
</div>

<div id="section2" class="section">
    <h2>Agenda Kelas</h2>
    <p>Jam Masuk :</p>
    <select name="awal" id="jam_awal" onchange="updateJamAkhir()">
                    <option value="" data-jam="<?php echo 0 ;?>"></option>
                    <?php
                    while ($cek = $request1->fetch_assoc()) {
                        $jam_awal = $cek['id_awal'];
                    ?>
                    <option value="<?php echo $cek['id_awal'] ; ?>" data-jam="<?php echo $jam_awal ; ?>"> <?php echo $cek['ket_awal'] ; ?></option>
                    <?php
                    }
                    ?>
    </select>
    <p>Jam Keluar :</p>
    <select name="akhir" id="jam_akhir" onchange="updateJamAwal()">
                    <option value=""></option>
                    <?php
                    while ($cek = $request2->fetch_assoc()) {
                        $jam_akhir = $cek['id_akhir'];
                    ?>
                    <option value="<?php echo $cek['id_akhir'] ; ?>" data-jam="<?php echo $jam_akhir; ?>"> <?php echo $cek['ket_akhir'] ; ?></option>
                    <?php
                    }
                    ?>
    </select>
    <div class="navigation">
        <button onclick="previousSection(1)">Kembali</button>
        <button onclick="nextSection(3)">Lanjutkan</button>
    </div>
</div>

<div id="section3" class="section">
    <h2>Agenda Kelas</h2>
    <p>Nama Guru:</p>
    <div class="form-group">
        <div class="dropdown">
            <input type="text" name="nama_guru" id="nama_guru" onclick="myFunction()" class="form-control" placeholder="--Please Choose--" readonly style="width:200px" />
            <input type="hidden" name="id_guru" id="id_guru" class="form-control" />
            <input type="hidden" name="nama_guru" id="nama_guru" class="form-control" />
            <div id="myDropdown" class="dropdown-content">
                <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                <a onclick="empty()">--Please Choose--</a>
                <?php
                    $query = "SELECT * FROM guru";
                    $resultadu =mysqli_query($koneksi, $query); 
                    while($data = mysqli_fetch_array($resultadu)){
                ?>
                  <a onclick="autofill_choose('<?php echo $data['id_guru']; ?>','<?php echo $data['nama_guru']; ?>')">
                    <?php echo $data['nama_guru']; ?></a>
                <?php 
                    }
                ?>
            </div>
        </div>
    </div>
    <p>Mapel:</p>
    <select name="mapel" id="">
                    <option value=""></option>
                    <?php
                    while ($cek = $request3->fetch_assoc()) {
                    ?>
                    <option value="<?php echo $cek['id_mapel'] ; ?>"> <?php echo $cek['mapel'] ; ?></option>
                    <?php
                    }
                    ?>
    </select>
    <div class="navigation">
        <button onclick="previousSection(2)">Kembali</button>
        <button onclick="nextSection(4)">Lanjutkan</button>
    </div>
</div>

<div id="section4" class="section">
    <h2>Agenda Kelas</h2>
    <p>Materi :</p>
    <textarea id="input4" name="materi" placeholder="Masukkan teks"></textarea>
    <p>Kehadiran Guru :</p>
    <select name="kehadiran" id="">
                    <option value=""></option>
                    <?php
                    while ($cek = $request4->fetch_assoc()) {
                    ?>
                    <option value="<?php echo $cek['id_kehadiran'] ; ?>"> <?php echo $cek['kode_kehadiran']."/". $cek['ket_kehadiran'] ; ?></option>
                    <?php
                    }
                    ?>
    </select>
    <div class="navigation">
        <button onclick="previousSection(3)">Kembali</button>
        <button onclick="submitQuiz()">Selesai</button>
    </div>
</div>

<script>
    const answers = {};

    function nextSection(next) {
        saveAnswer();
        const current = document.querySelector('.section.active');
        current.classList.remove('active');
        document.getElementById('section' + next).classList.add('active');
        restoreAnswer(next);
    }

    function previousSection(previous) {
        saveAnswer();
        const current = document.querySelector('.section.active');
        current.classList.remove('active');
        document.getElementById('section' + previous).classList.add('active');
        restoreAnswer(previous);
    }

    function saveAnswer() {
        const current = document.querySelector('.section.active');
        const input = current.querySelector('input, select, textarea');
        if (input) {
            answers[input.id] = input.value;
        }
    }

    function restoreAnswer(section) {
        const input = document.querySelector(`#section${section} input, #section${section} select, #section${section} textarea`);
        if (input && answers[input.id] !== undefined) {
            input.value = answers[input.id];
        }
    }

    function submitQuiz() {
        saveAnswer();
        <?php
            $tanggal = $_POST['tanggal'];
            $jamMasuk = $_POST['awal'];
            $jamKeluar = $_POST['akhir'];
            $namaGuru = $_POST['id_guru'];
            $mapel = $_POST['mapel'];
            $materi = $_POST['materi'];
            $kehadiran = $_POST['kehadiran'];
            $masukData = mysqli_query($koneksi, "INSERT INTO `tb_riwayat`(id_guru, id_mapel, tanggal, id_awal, id_akhir, materi, id_kehadiran) VALUES ($namaGuru,$mapel,$tanggal,$jamMasuk,$jamKeluar,$materi,$kehadiran)")
        ?>
        alert('Quiz selesai! Jawaban Anda: ' + JSON.stringify(answers));
    }

    function updateJamAkhir() {
    var jamAwalSelected = document.querySelector('#jam_awal option:checked');
    var jamAwalValue = parseInt(jamAwalSelected ? jamAwalSelected.getAttribute('data-jam') : "0", 10);  // Konversi ke integer

    console.log("Jam Awal Value: ", jamAwalValue); 
    var jamAkhirSelect = document.getElementById('jam_akhir');

    if (isNaN(jamAwalValue) || jamAwalValue === 0) {
        jamAkhirSelect.disabled = true;  
    } else {
        jamAkhirSelect.disabled = false;  
    }

    var jamAkhirOptions = document.querySelectorAll("#jam_akhir option");

    jamAkhirOptions.forEach(function(option) {
        var jamAkhirValue = parseInt(option.getAttribute('data-jam'), 10);  
        console.log("Jam Akhir Value: ", jamAkhirValue); 
        if (!isNaN(jamAwalValue) && !isNaN(jamAkhirValue)) {
            if (jamAkhirValue >= jamAwalValue) {
                option.style.display = "block";  
            } else {
                option.style.display = "none"; 
            }
        }
    });
}

    window.onload = updateJamAkhir;

    function myFunction() {
       document.getElementById("myDropdown").classList.toggle("show");
    }

    function filterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdown");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
        txtValue = a[i].textContent || a[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
        a[i].style.display = "";
        } else {
        a[i].style.display = "none";
        }
    }
    }

    function autofill_choose(id_guru, nama_guru) {

    document.getElementById('id_guru').value = id_guru;
    document.getElementById('nama_guru').value = nama_guru;
    myFunction();

    }

    function empty() {
    var value = "0";
    var value_nam = "--Please Choose--";
    document.getElementById('nama_guru').value = value_nam;
    document.getElementById('id_guru').value = value;

    }
</script>

</body>
</html>
