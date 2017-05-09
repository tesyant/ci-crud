<!-- File add_product_view.php -->
<html>
	<head>
		<title>CRUD dengan CodeIgniter</title>
	</head>
	<body>
		<h1>Menambah Anggota</h1>
		<form method="post" action="<?= base_url() ?>index.php/anggota/addAnggotaDb">
			<!-- action merupakan halaman yang dituju ketika tombol submit dalam suatu form ditekan -->
			<input type="text" placeholder="nim" name="f_nim" />
			<input type="text" placeholder="nama" name="f_nama" />
			<input type="submit" value="tambah" />
		</form>
	</body>
</html>