<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perubahan Mahasiswa</title>
</head>
<body>
    <p>Hai, <?php echo $this->session->userdata('username'); ?></p>
	<?php echo form_open('Cform/edit/'.$item['id']); ?>  
    <form action="" method="post">
				<table width="25%" border="0">
					<tr>
						<td>Nama Lengkap</td>
						<td><input type="input" name="nama" value="<?php echo $item['nama'] ?>" /></td>
					</tr>
					<tr>
						<td>Asal Sekolah</td>
						<td><input type="input" name="sekolah" value="<?php echo $item['sekolah'] ?>" /></td>
					</tr>
					<tr>
						<td>Asal Jurusan</td>
						<td><input type="input" name="jurusan" value="<?php echo $item['jurusan'] ?>" /></td>
					</tr>
					<tr>
						<td>Agama</td>
						<td><input type="input" name="agama" value="<?php echo $item['agama'] ?>" /></td>
					</tr>
					<tr>
						<td>NO Telepon</td>
						<td><input type="input" name="no" value="<?php echo $item['no'] ?>" /></td>
					</tr>
					<tr>                       
						<td><input type="submit" name="submit" value="Edit" ></td>        
					</tr>  
				</table>
			</form>
			<br>
			<a href="<?php echo site_url('Cform/view'); ?>"> Back</a>
			<br><br>
    <a href="<?php echo site_url('Cform/logout'); ?>"> Logout </a>
</body>
</html>
© 2020 GitHub, Inc.