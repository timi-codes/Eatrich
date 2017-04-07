<?php
/**
 * These are the database login details
 */  
//$url = getenv('JAWSDB_URL');
$dbparts = parse_url('mysql://smw73rsewyi7wok9:birmlt6gszy9g4de@ryvdxs57afyjk41z.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/oh8u3g0ucp0zbidb');

//var_dump($dbparts);
$hostname = $dbparts['host'];
$username = $dbparts['user'];
$password = $dbparts['pass'];
$database = ltrim($dbparts['path'],'/');

/*define("HOST", "localhost");     // The host you want to connect to.
define("USER", "sec_user");    // The database username. 
define("PASSWORD", "eKcGZr59zAa2BEWU");    // The database password. 
define("DATABASE", "secure_login");    // The database name.*/

define("HOST", $hostname);// The host you want to connect to.
define("USER", $username);// The database username. 
define("PASSWORD", $password);// The database password. 
define("DATABASE", $database);// The database name.
 
define("CAN_REGISTER", "any");
define("DEFAULT_ROLE", "member");
define("SECURE", FALSE);// FOR DEVELOPMENT ONLY!!!!
?>