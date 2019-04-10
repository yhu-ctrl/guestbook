<?php
// require_once('./lib/sql.php');
define('_DBHOST_', 'localhost');
define('_DBUSER_', 'root');
define('_DBPASS_', 'zxcvbnm');
define('_DBNAME_', 'guestbook');
// $db = new MySQL(_DBHOST_, _DBUSER_, _DBPASS_, _DBNAME_);
$db = new mysqli(_DBHOST_, _DBUSER_, _DBPASS_, _DBNAME_);
if ($db->connect_errno) {
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";
    
    exit;
}