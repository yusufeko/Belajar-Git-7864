<?php

require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');

$siswa = new Siswa();
$data = $siswa->readAllSiswa();

?>

<table border="2">
	<tr>
		<th>ID</th>
		<th>Nama</th>
		<th>Date of Birth</th>
		<th>Email</th>
		<th>Nationality</th>
		<th>Detail</th>
		<th>Update</th>
		<th>Delete</th>
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
			echo "<td><a href='dsiswa.php?a=".$row['id_siswa']."'>Detail</a></td>";
			echo "<td><a href='usiswa.php?a=".$row['id_siswa']."'>Update</a></td>";
			echo "<td><a href='delsiswa.php?a=".$row['id_siswa']."'>Delete</a></td>";
			echo "</tr>";
		}
	?>
</table>