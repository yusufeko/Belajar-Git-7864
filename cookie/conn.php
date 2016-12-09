<?php

$conn = mysql_pconnect('localhost','root','')
or die('tidak dapat terkoneksi ke server');

//echo 'berhasil menghubungkan ke database';

mysql_select_db('pwl_7864') or die('database tidak ditemukan');

$query = "select id_siswa, full_name, nationality from siswa s join nationality n on s.id_nationality=n.id_nationality";

$data = mysql_query($query) or die ('Error query: ' .mysql_error());

?>

<table border="2">
	<tr>
		<th>ID</th>
		<th>Nama</th>
		<th>Nationality</th>
	</tr>
	<?php
		while($row = mysql_fetch_array($data, MYSQL_ASSOC)){
			echo "<tr>";
			echo "<td>".$row['id_siswa']."</td>";
			echo "<td>".$row['full_name']."</td>";
			echo "<td>".$row['nationality']."</td>";
			echo "</tr>";
		}
	?>
</table>