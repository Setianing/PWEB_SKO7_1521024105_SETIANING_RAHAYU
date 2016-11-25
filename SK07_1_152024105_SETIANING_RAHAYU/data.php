<style>
	#dt{
		background: azure;
		border: 1px solid green;
		width: 400px;
		margin: 10px auto;
	}
	h3 {
		color: green;
	}
	</style>
		<div id="dt">
			<table>
				<h3>Data berhasil disimpan</h3>
				<tr>
					<td>Nama</td><td>:</td><td><?php echo $nama?></td>
				</tr>
				<tr>
					<td>Umur</td><td>:</td><td><?php echo $umur?></td>
				</tr>
				<tr>
					<td>Alamat</td><td>:</td><td><?php echo $alamat?></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td><td>:</td><td><?php echo $jeniskelamin?></td>
				</tr>
			</table>
		</div>