<?php
define('_DBHOST_', 'db');
// define('_DBUSER_', 'guestbook');
define('_DBPASS_', 'guestbook');
define('_DBNAME_', 'guestbook');
$db = new mysqli(_DBHOST_, _DBUSER_, _DBPASS_, _DBNAME_);
if ($db->connect_errno) {
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";
    
    exit;
}