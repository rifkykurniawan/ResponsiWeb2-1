<div style="margin:100px;">
<h2>Data Barang</h2>
<table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id Barang</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($barang as $u) :
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $u['id'] ?></td>
                        <td><?= $u['kode_barang'] ?></td>
                        <td><?= $u['nama_barang'] ?></td>
                        <td><?= $u['nama_kategori'] ?></td>
                        <td><?= $u['harga'] ?></td>



                        <td><a href="<?= base_url()?>data_barang/hapus/<?= $u['id']?>" class="btn btn-danger">Hapus</a>
                            <a href="<?= base_url()?>data_barang/formEdit/<?= $u['id']?>" class="btn btn-primary">Ubah</a>
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table></div>