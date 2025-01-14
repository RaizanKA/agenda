<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * from guru where id_guru = $id");
$valid = mysqli_fetch_array($query);

if (isset($_POST['ubah'])) {
    $edit = $_POST['edit'];

    $ubah = mysqli_query($koneksi, "UPDATE `guru` SET `nama_guru`='$edit' WHERE id_guru = $id");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h2>Edit data guru</h2>
        <input type="text" name="edit" value="<?php echo $valid['nama_guru'] ; ?>">
        <input type="submit" value="ubah" name="ubah">
    </form>
</body>
</html>