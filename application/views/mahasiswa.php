<div class="cotent-wrapper">

    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Mahasiswa</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Mahasiswa</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <section class="content">
                <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data Mahasiswa</button>
                <table class='table'>
                    <tr>
                        <th>No</th>
                        <th>NAMA MAHASISWA</th>
                        <th>NIM</th>
                        <th>TANGGAL LAHIR</th>
                        <th>JURUSAN</th>
                        <th colspan="2">AKSI</th>
                    </tr>

                    <?php
                    $no = 1;
                    foreach ($mahasiswa as $mhs) : ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $mhs->nama ?></td>
                            <td><?php echo $mhs->nim ?></td>
                            <td><?php echo $mhs->tgl_lahir ?></td>
                            <td><?php echo $mhs->jurusan ?></td>
                            <td onclick="javascript: return confirm('Apakah Yakin data <?php echo $mhs->nama ?> ingin dihapus?')">
                                <?php echo anchor('mahasiswa/hapus/' . $mhs->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>'); ?>
                            </td>
                            <td>
                                <?php echo anchor('mahasiswa/edit/' . $mhs->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>'); ?>

                            </td>
                            <td>
                                <?php echo anchor('mahasiswa/detail/' . $mhs->id, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>'); ?>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </table>
            </section>


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA MAHASISWA</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="<?php echo base_url() . 'mahasiswa/tambah_aksi'; ?>">
                                <label for="nama">Nama Mahasiswa</label>
                                <input type="text" name="nama" class="form-control">

                                <label for="nim">NIM</label>
                                <input type="text" name="nim" class="form-control">

                                <label for="tgl_lahir">Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" class="form-control">

                                <label for="jurusan">Jurusan</label>
                                <select name="jurusan" id="jurusan" class="form-control">
                                    <option value="Manajemen Informatika">Manajemen Informatika</option>
                                    <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
                                </select>

                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" class="form-control">

                                <label for="email">Email</label>
                                <input type="text" name="email" class="form-control">

                                <label for="no_telp">Nomor Telepon</label>
                                <input type="number" name="no_telp" class="form-control">

                                <br>
                                <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>


</div>