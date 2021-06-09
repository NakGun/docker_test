<?php 

	$hostname = 'mariadb'; #서비스네임(dockerfile-compose.yml)
	$username = 'nakun';
	$pass = '354900';
	$dbname = 'oniyuni';

	$link = new mysqli($hostname,$username,$pass,$dbname);

	if ($link->connect_errno) {
		printf('faild database connect',$link->connect_errno);
		exit();
	} else {
		// printf('faild database connect',$link->connect_errno);
		// echo '정상접속되었습니다.';
	}

?>