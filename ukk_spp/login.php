<?php
session_start();

if(isset($_SESSION['login'])){
    header('locatiion:./?');
}

include 'config/koneksi.php';
if(isset($_POST['login'])){

    $uername = $_POST['uername'];
    $password = $_POST['password'];

    //cek apakah koneksi yang dimasukkan sudah ada

    $result = mysqli_query($koneksi,"SELECT * FROM petugas WHERE uername ='$uername'");
    if(mysqli_num_rows($result) > 0){

        //cek apakah password sesuai
        $row = mysqli_fetch_assoc($result);
        if($password == $row['password']){

            $_SESSION['login'] = true;
            $_SESSION['level'] = $row['level'];
            $_SESSION['nama_petugas'] = $row['nama_petugas'];
            $_SESSION['petugas'] = $row['petugas'];
            
            header("location:./?");
            exit;
        }
    }
}
$error = true;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X_UA_Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

<style>
    *{
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica, sans-serif;
    }
    body{
        background: linear-gradient(to right, pink, blue);
    }
    .kotak{
        margin: 50px auto;
        width: 30%;
        border-radius: 5px;
        background: #eaeaea;
        box-shadow: 1px 5px 0 rgba(0,0,0,.5);
    }
    .judul{
        background: #0f5fa4;
        color: #fff;
        padding-top: 20px;
        padding-bottom: 20px;
        text-align: center;
    }
    .isi[
        padding-top: 20px;
        padding-bottom: 20px;
        padding-left: 20px;
    ]
    .form-grup{
        display: flex;
        justify-content: space-around;
        margin-top: 5px;
        margin-bottom: 5px;
    }
    label{
        display: inline-block;
        margin: 3px 0 5px 0;
        width: 20px;
    }
    .btn{
        padding: 0px;
        cursor: pointer;
        border-radius: 5px;
        font-size: 11pt;
        background: #0F5f8a3;
        color: #fff;
    }
    .salah{
        color: red;
        text-align: center;
        font-style: italic;
    }
</style>
</head>

<body>
    <div class="kotak">
        <div class="judul">
            <h4>Halaman Login</h4>
            <p>Aplikasi Pembayaran SPP Online</p>
            <h4>SMK Negeri 1 Lubuk Pakam</h4>
        </div>

        <?php if (isset($error)) : ?>

            <p class="salah" > username / password salah</p>

            <?php endif; ?>

        <div class="isi">
            <form action="" method="post">
                <div class="form-grup">
                    <label for="">Username</label>
                    <input type ="text" name="uername">
                </div>
                <div class="form-grup">
                    <label for="">Password</label>
                    <input type ="password" name="password">
                </div>
                <div class="form-grup">
                    <button type="submit" name="login" class="btn">Login</button>
                    <button type="reset" name="reset" class="btn">Reset</button>
                </div>
            </form>
        </div>
    </div>    
</body>
</html>