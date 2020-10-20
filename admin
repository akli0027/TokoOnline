<!DOCTYPE html>
<html>
<head>
	<title>Daftar Pemasok</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<table class="table">
		<tr>
			<td>Id Pembeli</td>
			<td>Nama</td>
			<td>No Telepon</td>
			<td>alamat</td>
			<td>email</td>
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
		$query = mysqli_query($connect,"SELECT *FROM pembeli");
		while($row=mysqli_fetch_array($query)){
			?>
			<tr>
				<td><?=$row['id_pembeli']?></td>
				<td><?=$row['nama']?></td>
				<td><?=$row['no_telepon']?></td>
				<td><?=$row['alamat']?></td>
				<td><?=$row['email']?></td>
				<td><?=$row['password']?></td>
				<td>
					<a href="edit_pembeli.php?id_pembeli=<?=$row['id_pembeli']?>"> 
					<button class="btn btn-primary">Edit</button>
					</a>
					<a href="hapus_pembeli.php?id_pembeli=<?=$row['id_pembeli']?>">
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