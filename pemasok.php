<!DOCTYPE html>
<html>
<head>
	<title>Daftar Pemasok</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<table class="table">
		<tr>
			<td>Id Pemasok</td>
			<td>Nama</td>
			<td>No Telepon</td>
			<td>Password</td>
			<td>
				<a href="index.php">
					<button class="btn btn-primary">Logout</button>
				</a>
				<a href="tambah.php">
					<button class="btn btn-primary">Menu Admin</button>
				</a>
			</td>
		</tr>
		<?php
		$connect= mysqli_connect('db4free.net','laptop_bekas','.GLnvd3yZa89k.u','laptop_bekas');
		$query = mysqli_query($connect,"SELECT *FROM pemasok");
		while($row=mysqli_fetch_array($query)){
			?>
			<tr>
				<td><?=$row['id_pemasok']?></td>
				<td><?=$row['nama']?></td>
				<td><?=$row['no_telepon']?></td>
				<td><?=$row['password']?></td>
				<td>
					<a href="edit.php?id_pemasok=<?=$row['id_pemasok']?>"> 
					<button class="btn btn-primary">Edit</button>
					</a>
					<a href="hapus.php?id_pemasok=<?=$row['id_pemasok']?>">
					<button class="btn btn-danger">Hapus</button>
					</a>
				</td>
			</tr>
		<?php
		}
		?>
	</table>

</body>
</html>