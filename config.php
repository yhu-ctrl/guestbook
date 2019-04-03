<?php
require_once('./lib/sql.php');
define('_DBHOST_', 'localhost');
define('_DBUSER_', 'root');
define('_DBPASS_', 'zxcvbnm');
define('_DBNAME_', 'guestbook');
$db = new MySQL(_DBHOST_, _DBUSER_, _DBPASS_, _DBNAME_);