<?php

	setcookie('usr', '');
	setcookie('pwd', '');
	
	echo '<h1>Cookie</h1>';
	echo 'Hapus data cookie berhasil';
	header('Refresh: 1; URL=login.php');

?>