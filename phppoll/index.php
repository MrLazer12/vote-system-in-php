<?php
if(array_key_exists('admin', $_GET)){
	if ($_GET['admin'] == true){
		print <<<EOT
			<form style="width: 60%; margin: 0 auto; text-align: center;" action="" method="post">
				<input type="password" name="password"><input type="submit" name="submit" value="Intra..">
			</form>
		EOT;
		if(isset($_POST['submit']) == 1){
			$admin_passwd = file_get_contents('user_mod/admin_passwd.txt', true);

			if($_POST['password'] == $admin_passwd)
				include 'user_mod/admin.php';
			else
				include 'user_mod/guest.php';
		}
	}
} else
	include 'user_mod/guest.php';