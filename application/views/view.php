<html>

<head>
    <title><?php echo $judul; ?></title>
</head>

<body>
    <center>
        <h1 style="margin-top: 50px;">Data Barang</h1>
        <table style="text-align: left;">
            <tbody>
                <?php
                foreach ($daftar_user as $user) {
                ?>
                    <tr>
                        <th style="width: 150px;">nama buku</th>
                        <td style="width: 150px;">: <?php echo $user->nama_buku; ?></td>
                    </tr>
                    <tr>
                        <th>harga BUKU</th>
                        <td>: <?php echo $user->harga_buku; ?></td>
                    </tr>
                    <tr>
                        <th>jumlah</th>
                        <td>: <?php echo $user->jumlah; ?></td>
                    </tr>
                    <tr>
                        <th>total</th>
                        <td>: <?php echo $user->total; ?></td>
                    </tr>
                <?php
                } ?>
            </tbody>

        </table>
        <a href="user">
            <button style="margin-top: 25px;">Tampilkan Semua Data</button>
        </a>
    </center>

</body>

</html>