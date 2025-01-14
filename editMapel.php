<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * from mapel where id_mapel = $id");
$valid = mysqli_fetch_array($query);

if (isset($_POST['ubah'])) {
    $edit = $_POST['edit'];

    $ubah = mysqli_query($koneksi, "UPDATE `mapel` SET `mapel`='$edit' WHERE id_mapel = $id");
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
        <h2>Edit data mapel</h2>
        <input type="text" name="edit" value="<?php echo $valid['mapel'] ; ?>">
        <input type="submit" value="ubah" name="ubah">
    </form>
</body>
</html>