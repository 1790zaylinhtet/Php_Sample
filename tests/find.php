<?php

include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTable;

$table =new UsersTable(new MySQL);
$user=$table->find("xxx@gmail.com","123456");

print_r($user);
