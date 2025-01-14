<?php
$servername = "localhost";  
$username = "root";         
$password = "";             
$agenda = "agenda_sekolah";  

// Membuat koneksi
$koneksi = new mysqli($servername, $username, $password, $agenda);

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
} else {
    // echo "Koneksi berhasil"; // Uncomment jika ingin mengecek koneksi berhasil
}
?>
