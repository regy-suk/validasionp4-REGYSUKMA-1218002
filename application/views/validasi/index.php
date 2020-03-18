<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php echo form_open('Cform/action'); ?>
    <form action="" method = "POST">
		<label for="title">Username</label>
			<input type="text" name="username">
			<br>
		<label for="title">Pasword</label></td>
			<input type="password" name="password">
			<br>
        <input type="submit" name ="submit" value="Login"> || <input type="submit" name ="daftar" value="Daftar">
    </form>
</body>
</html>