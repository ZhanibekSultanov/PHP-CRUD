<?php 

require 'database/queryBuilder.php';

$db = new queryBuilder;

$tasks = $db->all("tasks");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>All Tasks</h1>
                <a href="create.php" class="btn btn-success">Add Task</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($tasks as $task): ?>

                            <tr>
                                <td><?= $task['id']; ?></td>
                                <td><?= $task['title']; ?></td>
                                <td>
                                    <a href="show.php?id=<?= $task['id']; ?>" class="btn btn-info">Show</a>
                                    <a href="edit.php?id=<?= $task['id']; ?>" class="btn btn-warning">Edit</a>
                                    <a onclick="return confirm('Are you sure you want to delete this task?');" href="delete.php?id=<?= $task['id']; ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>

                        <?php endforeach;?>

                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>