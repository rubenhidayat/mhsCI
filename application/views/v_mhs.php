<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR MAHASISWA</title>
</head>

<body>
    <table border="1 solid black">
        <tr>
            <th>no</th>
            <th>nim</th>
            <th>nama</th>
            <th>alamat</th>
        </tr>

        <?php
        $i = 1;
        foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <th><?php echo $i++; ?></th>
                <th><?php echo $mhs['nim']; ?> </th>
                <th><?php echo $mhs['nama']; ?> </th>
                <th><?php echo $mhs['alamat']; ?> </th>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>