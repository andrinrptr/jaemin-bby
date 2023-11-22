<div class="col">
    <h3 class="judul"> Daftar SPP</h3>
</div>
<div class="card">
    <div class="card-header">
        <a href="?menu=tambah-spp" class="btn btn-tambah">Tambah</a>
    </div>

    <div class="card-body">
        <table border="1">
            <tr>
                <th>No</th>
                <th>Tahun</th>
                <th>Nominal</th>
                <th>Aksi</th>
            </tr>

            <?php
            $no =1;
                $spp = mysqli_query($koneksi,"SELECT * FROM spp") ;
                while($data = mysqli_fetch_array($spp)){
            ?>
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $data['tahun'] ?></td>
                <td><?php echo $data['nominal'] ?></td>
                <td><a href="?menu=hapus-spp&id=<?php echo $data['id_spp']?>
                "onclick="return confirm('Yakin Ingin Menghapus?');">Hapus</a>
                    <a href="?menu=ubah-spp&id=<?php echo $data['id_spp']?>"> Ubah </a>
                </td>
            </tr>
            <?php } ?>
        </div>