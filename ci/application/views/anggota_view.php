<!-- File products_view.php -->
<html>
	<head>
		<title>CRUD dengan CodeIgniter</title>
	</head>
	<body>
		<?php
			$jumlahAnggota = $listAnggota->num_rows(); //$listProduct berasal dari data yang dilempar dari controller, yaitu $data['listProducts']. num_rows() digunakan untuk menghitung jumlah baris yang dimiliki ketika kita melakukan select dari database
		?>
			<a href="<?= base_url() ?>index.php/anggota/addAnggota">Tambah Produk</a>
		<?php
			if($jumlahAnggota == 0){
		?>
			<!-- Kalau datanya masih kosong, kita harus melakukan add product -->
			<p>daftar anggota tidak ada</p>
			
		<?php
			}
			else {
		?>
			<!-- Kalau ada datanya, maka kita akan tampilkan dalam table -->
			<h1>Anggota</h1>
			<table border="1">
				<thead>
					<tr>
						<th>no  </th>
						<th>NIM </th>
						<th>NAMA</th>
					</tr>
				</thead>
				<tbody>
					<?php
						//Kita akan melakukan looping sesuai dengan data yang dimiliki
						$i = 0; //nantinya akan digunakan untuk pengisian Nomor
						foreach ($listAnggota->result() as $row) {
					?>
					<tr>
						<td><?= $i ?></td>
						<td><?= $row->nim ?></td> <!-- karena berbentuk objek, maka kita menggunakan panah (->) untuk menunjuk field yang ada di database -->
						<td><?= $row->nama ?></td>
						<td>
							<!-- Akan melakukan update atau delete sesuai dengan id yang diberikan ke controller -->
							<a href="<?= base_url() ?>index.php/anggota/updateAnggota/<?= $row->nim ?>">Update</a>
							|
							<a href="<?= base_url() ?>index.php/anggota/deleteAnggotaDb/<?= $row->nim ?>">Delete</a>
						</td>
					</tr>
					<?php
						}
					?>
				</tbody>
			</table>
		<?php
			}
		?>
	</body>
</html>