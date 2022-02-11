<?php

require 'database/queryBuilder.php';

$db = new queryBuilder;


$id=$_GET['id'];

$db->delete("tasks",$id);

header("Location: /");exit();
