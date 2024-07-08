<?php
	$config = require 'config.php';
	$db = new Database($config['database']);
	$tasks = $db->query('SELECT * FROM tasks')->get();
	
	require 'views/index.view.php';
