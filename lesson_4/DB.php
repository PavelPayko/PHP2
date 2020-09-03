
<?php
$db_host = "localhost";
$db_name = "catalog";
$db_user = "root";
$db_pass = "";

$db = mysqli_connect ($db_host, $db_user, "", $db_name) or die ("Невозможно подключиться к БД");

mysqli_query ($db, 'set character_set_results = "utf8"');
