<!-- File update_product_view.php -->
<html>
	<head>
		<title>CRUD dengan CodeIgniter</title>
	</head>
	<body>
		<h1>Update Product</h1>
        <?php
            //Kita akan melakukan looping terhadap variable $product yang telah dikirimkan melalui controller
            foreach($anggota->result() as $detail){
        ?>
		<form method="post" action="<?= base_url() ?>index.php/anggota/updateAnggotaDb">
			<!-- action merupakan halaman yang dituju ketika tombol submit dalam suatu form ditekan -->
            <input type="text" value="<?php echo $detail->nim; ?>" name="nim" />
			<input type="text" placeholder="nama" name="nama" value="<?php echo $detail->nama; ?>" /> <!-- Value akan diisi berdasarkan data yang sudah ada di database, $detail->productName disini maksudnya adalah menunjuk productName yang merupakan attribute yang ada di table msProduct pada database -->
			<input type="submit" value="Update" />
		</form>
        <?php
            }    
        ?>
	</body>
</html>