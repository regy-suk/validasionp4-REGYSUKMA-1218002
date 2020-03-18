<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa</title>
</head>
<body>
    <p>Hai, <?php echo $this->session->userdata('username'); ?></p>
	<?php echo form_open('Cform/create'); ?>
    <form action="" method="post">
				<table width="25%" border="0">
					<tr>
						<td>Nama Lengkap</td>
						<td><input type="name" name="nama" placeholder="Masukan Nama Lengkap"></td>
					</tr>
					<tr>
						<td>Asal Sekolah</td>
						<td><input type="name" name="sekolah" placeholder="Masukan Asal Sekolah"></td>
					</tr>
					<tr>
						<td>Asal Jurusan</td>
						<td><input type="name" name="jurusan" placeholder="Masukan Asal Jurusan"></td>
					</tr>
					<tr>
						<td>Agama</td>
						<td><input type="name" name="agama" placeholder="Masukan Agama"></td>
					</tr>
					<tr>
						<td>NO Telepon</td>
						<td><input type="number" name="no" placeholder="Masukan No Telepon"></td>
					</tr>
					<tr>                       
						<td><input type="submit" name="submit" value="Tambahkan" ></td>         
					</tr>  
				</table>
			</form>
			<br>
    <a href="<?php echo site_url('Cform/logout'); ?>"> Logout </a>
</body>
</html>