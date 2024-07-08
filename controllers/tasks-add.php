<?php
	require 'Validator.php';
	$validator = new Validator();
	$config = require 'config.php';
	$db = new Database($config['database']);
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$value = $_POST['value'];
		$errors = [];
		if (!$validator->string($_POST['value'],5)) {
			$errors['body'] = '*Task should be at least 5 characters';
		}
		if (empty($errors)) {
			$tasks = $db->query("insert into tasks ( task ) values (:value)",
				['value'=>$_POST['value']]);
			$value = '';
		}
	}
	$tasks = $db->query('SELECT * FROM tasks')->get();
	require 'views/index.view.php';

