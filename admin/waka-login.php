<?php

	$is_ajax = $_REQUEST['is_ajax'];
	if(isset($is_ajax) && $is_ajax)
	{
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		
		
		if($username == 'admin' && $password == '123' || $username == 'admin' && $password == 'admin')
		{
			echo "success";
		}
	}

?>
