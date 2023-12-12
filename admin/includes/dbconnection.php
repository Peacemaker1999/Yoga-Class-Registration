<?php 
// DB credentials.
define('DB_HOST','yoga-db.cmd8tlr2pjas.eu-west-1.rds.amazonaws.com');
define('DB_USER','admin');
define('DB_PASS','admin2001');
define('DB_NAME','YogaClass');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>