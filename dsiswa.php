<?php

require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');

$id = $_GET['a'];
if(!is_numeric($id)){
	exit('Access Forbidden');
}
$siswa = new Siswa();
$data = $siswa->readSiswa($id);
if(empty($data)){
	echo "Data Tidak Ditemukan";
}

$dt = $data[0];
?>

<table border="2">
	<tr>
		<th>ID</th>
		<th>Nama</th>
		<th>Date of Birth</th>
		<th>Email</th>
		<th>Nationality</th>
	</tr>
	<?php
		foreach ($data as $row) {
			$id = $row['date_ob'];

			echo "<tr>"; 
			echo "<td>".$row['id_siswa']."</td>";
			echo "<td>".$row['full_name']."</td>";
			echo "<td>".$row['date_ob']."</td>";
			echo "<td>".$row['email']."</td>";
			echo "<td>".$row['nationality']."</td>";
			echo "</tr>";
		}
	?>
</table>
<a href='siswa.php'>Kembali</a>