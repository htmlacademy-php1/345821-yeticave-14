<?php
require_once 'function.php';
$db = require_once 'source/db.php';

$link = mysqli_connect($db['host'], $db['user'], $db['password'], $db['database']);
mysqli_set_charset($link, "utf8");

$categories = [];
$content = '';
