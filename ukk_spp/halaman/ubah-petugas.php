<?php
$id = $_GET['nama'];
$kelas = mysqli_query($koneksi, "SELECT * FROM petugas WHERE id_petugas= '$id'");
$data = mysqli_fetch_array($petugas);
?>

<legend>
    <h5>Form Ubah Petugas</h5>
</legend>

<form action="" method="POST">
    <div class="form-group">
        <label for="">Username</label>
        <input type="text" name="username" class="form-control" 
        required value="<?= $data['username']?>">
    </div>

    <div class="form-group">
        <label for="">Password</label>
        <input type="text" name="password" class="form-control" 
        required value="<?= $data['password']?>">
    </div>

    <div class="form-group">
        <label for="">Nama Petugas</label>
        <input type="text" name="nama_petugas" class="form-control" 
        required value="<?= $data['nama_petugas']?>">
    </div>

    <div class="form-group">
        <label for="">Level</label>
        <input type="text" name="level"class="form-control" 
        required value="<?= $data['level']?>">
    </div>

    <button class="btn btn-ubah btn-save" name="ubah">
        Ubah
    </button>

</form>

<?php

//cek apakah tombol ubah sudah di tekan
if(isset($_POST['ubah'])){
    //tampung setiap imputan
    $uername = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $nama_petugas = htmlspecialchars($_POST['nama_petugas']);
    $level = htmlspecialchars($_POST['level']);

    //masukkan kedalam database
    //koneksi
    //query
    $ubah= mysqli_query($koneksi, "UPDATE petugas SET 
                                        username ='$uername', 
                                        password = '$password'
                                        nama_petugas ='$nama_petugas',
                                        level = '$level';
                                    WHERE id_petugas = '$id' ");

if($ubah){
    echo"<script>
        alert('Data Berhasil Diubah');
    document.location.href='?menu=petugas';
    </script>";
}else{
    echo"<script>
    alert('Data Gagal Diubah');

</script>";
    }
}