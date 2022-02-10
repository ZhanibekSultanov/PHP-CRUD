<?php

require 'database/queryBuilder.php';

$db = new queryBuilder;

$data = [
    "id" => $_GET['id'],
    "title" => $_POST['title'],
    "content" => $_POST['content'],
];

$db->updateTask($data);

header("Location: /");exit;
