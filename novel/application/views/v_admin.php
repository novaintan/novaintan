<!DOCTYPE html>
<html>
<head>
	<title>membuat login dengan ci | www.malasngoding.com</title>
</head>
<body>
		<h1>login berhasil !</h1>
		<h2>hai, <?php echo $this->session->userdata("nama");  ?></h2>
		<a href="<?php echo base_url('login/logout'); ?>">logout</a>
</body>
</html>