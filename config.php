<?php
// This file contains the database access information. 
// This file also establishes a connection to MariaDB, 
// selects the database, and sets the encoding.

// Set the database access information as constants:
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASS', '');
DEFINE ('DB_NAME', 'blog');


spl_autoload_register(function($className){
    require_once($_SERVER['DOCUMENT_ROOT'] ."/blog/classes/{$className}.php");
});


$host = substr($_SERVER['HTTP_HOST'], 0, 5);
if (in_array($host, array('localhost', 'localserver.local', '127.0.0.1', '192.1'))) {
    $local = TRUE;
} else {
    $local = FALSE;
}

// Determine location of files and the URL of the site:
// Allow for development on different servers.
if ($local) {

    // Always debug when running locally:
    $debug = TRUE;
    
    // Define the constants:
    define('BASE_URI', 'D:/htdocs/localserver.local/blog/');
    define('BASE_URL', 'http://localserver.local/blog/');
    define('DB', 'http://localserver.local/blog/classes/Database.php');
    
} else {

    define('BASE_URI', '/path/to/live/html/folder/');
    define('BASE_URL', 'http://www.example.com/');
    define('DB', '/path/to/live/mysql.inc.php');
    
}