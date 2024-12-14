<?php
#1. Koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$jk = $_POST['jk'];
$jur = $_POST['jurusan'];
$dosen = $_POST['dosen'];

#3. menulis query
$simpan = "INSERT INTO mahasiswas (nim, nama,tmp_lahir,tgl_lahir,alamat,email,jk,jurusans_id,dosens_id) VALUES ('$nim','$nama','$tmp_lahir','$tgl_lahir','$alamat','$email','$jk','$jur','$dosen')";

#4. jalankan query
$proses = mysqli_query($koneksi, $simpan);

#5. mengalihkan halaman menggunakan php
// header("location:index.php");
?>

<script>
    document.location="index.php";
</script>