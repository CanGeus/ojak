<html>

<head>
    <title><?php echo $judul; ?></title>
</head>

<body>
    <center>
        <h1>Data Barang</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>nama buku</th>
                    <th>harga BUKU</th>
                    <th>jumlah</th>
                    <th>total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($daftar_user as $user) {
                ?>
                    <tr>
                        <td><?php echo $user->nama_buku; ?></td>
                        <td><?php echo $user->harga_buku; ?></td>
                        <td><?php echo $user->jumlah; ?></td>
                        <td><?php echo $user->total; ?></td>
                        <td>
                            <button> <?php echo '<a href="' . base_url() . 'index.php/Toko_controller/delete_user/' .
                                            $user->id_buku . '"onclick="return confirm (\' Anda Yakin Menghapus :' .
                                            $user->nama_buku . '?\')">Delete</a>' ?>
                            </button>
                        </td>
                    <?php
                } ?>
            </tbody>
        </table>
    </center>
</body>

</html>