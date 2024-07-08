<?php
	$config = require 'config.php';
	$db = new Database($config['database']);
	$tasks = $db->query("update tasks set status='DONE' where id = :id ",
		['id'=>$_GET['id']]);
	
	header('Location: /tasks');
