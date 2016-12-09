<html>
	<h1>FORM LOGIN</h1>
	<form action="login.php" method="post">
	<div>
		<label>Username</label><br />
		<input type="text" name="usr" />
	</div>
	<div>
		<label>Password</label><br />
		<input type="password" name="pwd" />
	</div>
	<div>
	<br />
	<input type="submit" value="LOGIN" name="submit" />
	</div>
	</form>
</html>
<?php

if(!empty($_POST['submit'])){
	
	$input_username = 'admin';
	$input_password = 'admin';
	
	if($_POST['usr']==$input_username && $_POST['pwd']==$input_password){
		setcookie('usr', $input_username, time()+3600);
		setcookie('pwd', $input_password, time()+3600);
		
		header('location:admin.php');
	}else{
		echo '<h1>Login Gagal</h1>';
	}
}
	
?>