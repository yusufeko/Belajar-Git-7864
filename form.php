<html>
<head>
	<title>Form Registrasi</title>
</head>
<body>
	<h1>Form Registrasi</h1>
	<?php echo date('d M Y') ?><br />
	<?php echo "Nama Anda adalah: " . $_POST['in_name'] ?><br />
	<?php echo "Alamat Anda adalah: " . $_POST['in_alamat'] ?><br />
	<?php echo "Nomor Telpon Anda adalah: " . $_POST['in_telp'] ?><br />
	<?php echo "Email Anda adalah: " . $_POST['in_email'] ?>
	<form action="form.php" method="post">
	<div>
		<label>Nama Lengkap</label><br />
		<input type="text" name="in_name" />
	</div>
	<div>
		<label>Alamat</label><br />
		<textarea name="in_alamat"></textarea>
	</div>
	<div>
		<label>Nomor Telpon</label><br />
		<input type="text" name="in_telp" />
	</div>
	<div>
		<label>Email</label><br />
		<input type="text" name="in_email" />
	</div>
	<div>
	<br />
	<input type="submit" value="Kirim" name="submit" />
	</div>
	</form>	
</body>
</html>