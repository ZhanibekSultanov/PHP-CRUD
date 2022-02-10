<?php

require 'database/queryBuilder.php';

$db = new queryBuilder;

$db->addTask($_POST);

header("Location: /"); exit;


