<?php
	require 'Validator.php';
	$validator = new Validator();
	$config = require 'config.php';
	$db = new Database($config['database']);

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$errors = [];
		if (!$validator->string($_POST['value'],5)) {
			$errors['body'] = '*Task should be at least 5 characters';
		}
		if (empty($errors)) {
			$id = $_POST['id'];
			$value = $_POST['value'];
			$db->query("UPDATE tasks SET task = :value WHERE id = :id", ['value' => $value, 'id' => $id]);
			header('Location: /tasks');
			exit;
		}
	
	}
	$id = $_GET['id'];
	$task = $db->query("SELECT * FROM tasks WHERE id = :id", ['id' => $id])->get()[0];
	
	require 'views/tasks-edit.view.php';
