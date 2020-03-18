<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa</title>
</head>
<body>
	<?php echo form_open('Cform/addnew'); ?>
    <form action="" method="post">
				<table width="25%" border="0">
					<tr>
						<td>Username</td>
						<td><input type="name" name="username" placeholder="Masukan Username"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="name" name="password" placeholder="Masukan Password"></td>
					</tr>
					<tr>
						<td><input type="hidden" name="level" value="0" readonly></td>
					</tr>
					<tr>                       
						<td><input type="submit" name="submit" value="Tambahkan" ></td>         
					</tr>  
				</table>
			</form>
			<br>
    <a href="<?php echo site_url('Cform/index'); ?>"> Back </a>
</body>
</html>