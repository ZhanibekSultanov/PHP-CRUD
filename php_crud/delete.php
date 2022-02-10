<?php

require 'database/queryBuilder.php';

$db = new queryBuilder;


$id=$_GET['id'];

$db->deleteTask($id);

header("Location: /");exit();
