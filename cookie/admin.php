<?php
	
	$cookie=$_COOKIE;
	if(!empty($cookie['usr']) && !empty($cookie['pwd'])){
		echo '<h1>Administrator Page</h1>';
		echo 'Selamat datang user ' .$cookie['usr'];
		echo '<br /><br />';
		echo '<a href="logout.php">Klik sini untuk logout</a>';
	}else{
		echo '<h1>Access forbidden</h1>';
		echo 'Anda tidak dapat membuka halaman ini!!';
		
		echo '<br /><br />';
		header('Refresh: 3; URL=login.php');
	}
	
?>