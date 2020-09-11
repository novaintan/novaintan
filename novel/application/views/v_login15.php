<!DOCTYPE html>
<html>
<head>
	<title>membuat login dengan codeigniter | wwww.malasngoding.com</title>
</head>
<body>
	<h1>membuat login dengan codeigniter </br>  wwww.malasngoding.com</h1>
	<form action="<?php echo base_url('home/aksi_login'); ?>" method="post">
		<table>
			<tr>
				<td>user_name</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>sandi</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="login" ></td>
			</tr>
		</table>
	</form>
</body>
</html>