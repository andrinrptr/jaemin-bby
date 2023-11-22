<div class="col">
    <h3 class="judul"> Data Kelas</h3>
</div>
<div class="card">
    <div class="card-header">
        <a href="?menu=tambah-kelas" class="btn btn-tambah">Tambah</a>
    </div>

    <div class="card-body">
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama Kelas</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>

            <?php
            $no =1;
                $kelas = mysqli_query($koneksi,"SELECT * FROM kelas") ;
                while($data = mysqli_fetch_array($kelas)){
            ?>
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $data['nama_kelas'] ?></td>
                <td><?php echo $data['kompetensi_keahlian'] ?></td>
                <td><a href="?menu=hapus-kelas&id=<?php echo $data['id_kelas']?>
                "onclick="return confirm('Yakin Ingin Menghapus?');">Hapus</a>
                    <a href="?menu=ubah-kelas&id=<?php echo $data['id_kelas']?>"> Ubah </a>
                </td>
            </tr>
            <?php } ?>
        </div>