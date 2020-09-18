<!-- update data -->

<?php 

    require_once "../function.php";

    

    $sql = "SELECT * FROM TBLKATEGORI WHERE IDKATEGORI = $id";
    $result = mysqli_query($koneksi, $sql);

    $row =mysqli_fetch_assoc($result);

    // $kategori = 'es pisang ijo';
    // $id = 18;


    // echo $sql;




?>

<form action="" method="post">
    kategori : 
    <input type="text" name="kategori" value="<?php echo $row['kategori']?>">
    <br>
    <input type="submit" name="simpan" value="simpan">
</form>

<?php 

    if (isset($_POST['simpan'])) {
        $kategori=$_POST['kategori'];
        $sql = "UPDATE tblkategori SET kategori='$kategori' WHERE idkategori=$id";
        $result = mysqli_query($koneksi, $sql);
        header('location:http://localhost/php-smk/restoran/kategori/select.php');
    }

?>