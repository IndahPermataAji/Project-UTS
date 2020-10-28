<?php

define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNAME', 'dbdrakor');

$dbconnect = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

if ($dbconnect->connect_error) {
    die('Database Not Connect. Error : ' . $dbconnect->connect_error);
}
?>