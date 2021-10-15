<div class="content-wrapper">
    <section class="content">
        <?php foreach ($mahasiswa as $mhs) : ?>
            <form action="<?php echo base_url() . 'mahasiswa/update'; ?>" method="post">
                <div class="form-group">
                    <label for="nama">Nama Mahasiswa</label>
                    <input type="hidden" name="id" class="form-control" value="<?php echo $mhs->id; ?>">
                    <input type="text" name="nama" class="form-control" value="<?php echo $mhs->nama; ?>">
                </div>

                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" name="nim" class="form-control" value="<?php echo $mhs->nim; ?>">
                </div>
                <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" class="form-control" value="<?php echo $mhs->tgl_lahir; ?>">
                </div>

                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <select name="jurusan" id="jurusan" class="form-control">
                        <option value="<?php echo $mhs->jurusan; ?>"><?php echo $mhs->jurusan; ?></option>
                        <option value="Manajemen Informatika">Manajemen Informatika</option>
                        <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" value="<?php echo $mhs->alamat; ?>">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo $mhs->email; ?>">
                </div>

                <div class="form-group">
                    <label for="no_telp">Nomor Telepon</label>
                    <input type="text" name="no_telp" class="form-control" value="<?php echo $mhs->no_telp; ?>">
                </div>


                <div class="form-group">
                    <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        <?php endforeach; ?>
    </section>
</div>