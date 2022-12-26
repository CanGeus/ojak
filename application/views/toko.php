<html>

<head>
	<title><?php echo $judul; ?></title>
</head>

<body>
	<div style="padding-top: 150px; ">
		<h1 align="center"> <b> TOKO BUKU </b></h1>
		<form action="simpan" method="post">
			<table align="center">
				<tr>
					<th>Nama buku</th>
					<th>Harga buku</th>
					<th>Jumlah </th>
				</tr>
				<tr>
					<td><input type="text" name="nama_buku" /></td>
					<td><input type="text" name="harga_buku" /></td>
					<td><input type="text" name="jumlah" /></td>
				</tr>
				<tr>
					<td><input type="submit" value="SIMPAN" /></td>
				</tr>
			</table>
		</form>
	</div>
</body>

</html>