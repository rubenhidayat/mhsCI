<!DOCTYPE html>
<html><head>
    <title></title>
</head><body>
    <table border="solid 1px">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Tanggal Lahir</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Nomor Telpon</th>
        </tr>

        <?php $no = 1;
        foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $mhs->nama; ?></td>
                <td><?php echo $mhs->nim; ?></td>
                <td><?php echo $mhs->tgl_lahir  ?></td>
                <td><?php echo $mhs->jurusan ?></td>
                <td><?php echo $mhs->alamat ?></td>
                <td><?php echo $mhs->email ?></td>
                <td><?php echo $mhs->no_telp ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body></html>