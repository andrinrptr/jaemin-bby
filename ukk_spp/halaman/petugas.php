<div class="col">
    <h3 class="judul"> Daftar Data Petugas</h3>
</div>
<div class="card">
    <div class="card-header">
        <a href="?menu=tambah-petugas" class="btn btn-tambah">Tambah</a>
    </div>

    <div class="card-body">
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama Petugas</th>
                <th>Username</th>
                <th>Password</th>
                <th>Level</th>
                <th>Aksi</th>
            </tr>

            <?php
            $no =1;
                $petugas = mysqli_query($koneksi,"SELECT * FROM petugas") ;
                while($data = mysqli_fetch_array($petugas)){
            ?>
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $data['nama_petugas'] ?></td>
                <td><?php echo $data['uername'] ?></td>
                <td><?php echo $data['password'] ?></td>
                <td><?php echo $data['level'] ?></td>
                <td><a href="?menu=hapus-petugas&id=<?php echo $data['id_petugas']?>
                "onclick="return confirm('Yakin Ingin Menghapus?');">Hapus</a>
                    <a href="?menu=ubah-petugas&id=<?php echo $data['id_petugas']?>"> Ubah </a>
                </td>
            </tr>
            <?php } ?>
        </div>