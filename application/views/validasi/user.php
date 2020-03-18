<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <p>Hai, <?php echo $this->session->userdata('username'); ?></p>
	<a href="<?php echo site_url('Cform/view'); ?>"> Lihat Data </a><br><br>
    <a href="<?php echo site_url('Cform/logout'); ?>"> Logout </a>
</body>
</html>