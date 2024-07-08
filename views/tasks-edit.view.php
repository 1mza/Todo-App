<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
	<script src="https://cdn.tailwindcss.com" ></script>
	
	<title>Edit Task</title>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-8 mx-auto">
			<form action="/task_edit?id=<?= $task['id'] ?>" method="POST" class="form border p-2 my-5">
				<input type="hidden" name="id" value="<?= htmlspecialchars($task['id']) ?>">
				<input type="text" name="value" class="form-control my-3 border border-success" placeholder="Edit task" value="<?= htmlspecialchars($task['task']) ?>">
				<?php if(isset($errors['body'])) : ?>
					<p class="text-red-500 text-xs mt-2"><?=$errors['body']?></p>
				<?php endif; ?>
				<input type="submit" value="Update" class="form-control btn btn-primary my-3">
			</form>
		</div>
	</div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
