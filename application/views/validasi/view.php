<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa</title>
</head>
<body>
    <p>Hai, <?php echo $this->session->userdata('username'); ?></p>
	<table border='1' cellpadding='4'>     
		<tr>         
			<td><strong>Nama Lengkap</strong></td>         
			<td><strong>Asal Sekolah</strong></td>  
			<td><strong>Asal Jurusan</strong></td>  
			<td><strong>Agama</strong></td>
			<td><strong>No telepon</strong></td>
			<?php $level = $this->session->userdata('username'); if($level == 'admin'){ ?>
			<td><strong>Aksi</strong></td>
			<?php } ?>
		</tr> 
		<?php foreach ($query->result_array() as $go_item): ?> 
		<tr>		
			<td><?php echo $go_item['nama']; ?></td>             
			<td><?php echo $go_item['sekolah']; ?></td>
			<td><?php echo $go_item['jurusan']; ?></td>
			<td><?php echo $go_item['agama']; ?></td>
			<td><?php echo $go_item['no']; ?></td>
			<?php if ($level == 'admin'){ ?><td><a href="<?php echo site_url('Cform/edit/'.$go_item['id']); ?>">Edit</a> | <a href="<?php echo site_url('Cform/delete/'.$go_item['id']); ?>" onClick="return confirm('Beneran Mau Di Delete?')">Delete</a> </td>
			<?php } ?>
		</tr> 
		<?php 
			endforeach; 
		?> 
	</table>
<a href="<?php if ($level == 'admin'){ echo site_url('Cform/admin'); }else{ echo site_url('Cform/user');} ?>"> Back</a>
</body>
</html>