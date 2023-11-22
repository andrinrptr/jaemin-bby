<?php
$id = $_GET['id'];
$kelas = mysqli_query($koneksi, "SELECT * FROM kelas WHERE id_kelas= '$id'");
$data = mysqli_fetch_array($kelas);
?>

<legend>
    <h5>Form Ubah SPP</h5>
</legend>

<form action="" method="POST">
    <div class="form-group">
        <label for="">Tahun</label>
        <input type="text" name="nama" class="form-control" 
        required value="<?= $data['tahun']?>">
    </div>

    <div class="form-group">
        <label for="">Nominal</label>
        <input type="text" name="nominal" class="form-control" 
        required value="<?= $data['nominal']?>">
    </div>

    <button class="btn btn-ubah btn-save" name="ubah">
        Ubah
    </button>

</form>

<?php

//cek apakah tombol ubah sudah di tekan
if(isset($_POST['ubah'])){
    //tampung setiap imputan
    $tahun = htmlspecialchars($_POST['tahun']);
    $nominal = htmlspecialchars($_POST['nominal']);

    //masukkan kedalam database
    //koneksi
    //query
    $ubah= mysqli_query($koneksi, "UPDATE kelas SET 
                                        tahun_bayar ='$tahun', 
                                        nominal_bayar = '$nominal'
                                    WHERE id_kelas = '$id' ");

if($ubah){
    echo"<script>
        alert('Data Berhasil Diubah');
    document.location.href='?menu=kelas';
    </script>";
}else{
    echo"<script>
    alert('Data Gagal Diubah');

</script>";
    }
}