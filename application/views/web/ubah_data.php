<div style="margin:100px;">
<h2>Ubah Data Barang</h2>

            <div class="card-body">
                <form action="<?= base_url() ?>data_barang/ubahData" method="post">
                    <input type="hidden" name="id" value="<?= $barang['id'] ?>">
                    <div class="form-group">
                        <label >Kode Barang</label>
                        <input type="text" value="<?= $barang['kode_barang']?>" name="kodebarang" class="form-control" id="inputKodeBarang" placeholder="Masukan Kode Barang">
                    </div>

                    <div class="form-group">
                        <label >Id Kategori</label>
                        <input type="text" value="<?= $barang['id_kategori']?>"name="idkategori" class="form-control" id="inputIdKategori" placeholder="Masukan ID Kategori">
                    </div>

                    <div class="form-group">
                        <label >Nama Barang</label>
                        <input type="text" value="<?= $barang['nama_barang']?>"name="namabarang" class="form-control" id="inputNamaBarang" placeholder="Masukan Nama Barang">
                    </div>

                    <div class="form-group">
                        <label >Harga Barang</label>
                        <input type="text" value="<?= $barang['harga']?>"name="hargabarang" class="form-control" id="inputHargaBarang" placeholder="Masukan Harga Barang">
                    </div>

                    <button type="submit" class="btn btn-primary">Ubah</button>
                </form>
            </div>

</div>