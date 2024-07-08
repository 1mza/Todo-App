<?php
	$config = require 'config.php';
	$db = new Database($config['database']);
	$tasks = $db->query("delete from tasks where id = :id ",
		['id'=>$_GET['id']]);
	
	header('Location: /tasks');
