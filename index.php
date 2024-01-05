<?php
echo 'HelloWorld';
require('config/config.php');
require_once('app/models/Database.php');
$database = new DataBase();
$pdo = $database->getConnection();
if($pdo) {
    print '<h1>Success</h1>';
}