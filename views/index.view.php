<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com" ></script>
    <title>Todo App</title>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-8 mx-auto">
            <form action="/task_add" method="POST" class="form border p-2 my-5">
                <input type="text" name="value" class="form-control my-3 border border-success" placeholder="Add new todo" value="<?=$value ?? ''?>">
	            <?php if(isset($errors['body'])) : ?>
                    <p class="text-red-500 text-xs mt-2"><?=$errors['body']?></p>
	            <?php endif; ?>
                <input type="submit" value="add" class="form-control btn btn-primary my-3">
            </form>
        </div>
        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Task</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
				<?php
                    $counter =1;
                    foreach ($tasks as $task) : ?>
                    <tr>
                        <td><?= $counter++ ?></td>
                        <td><?= $task['task'] ?></td>
                        <td><?= $task['status'] ?>
                        </td>
                        <td>
                            <a href="/task_update?id=<?=$task['id']?>"
                               class="<?php echo $task['status'] === 'DONE' ? 'btn btn-success' : 'btn btn-warning'; ?>"><i class="fa-solid fa-check"></i></a>
                            <a href="/task_edit?id=<?=$task['id']?>" class="btn btn-info"><i class="fa-solid fa-edit"></i></a>
                            <a href="/task_delete?id=<?=$task['id']?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>
				<?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../script.js"></script>
</body>
</html>
