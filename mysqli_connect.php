<?php # Script 9.2 - mysqli_connect.php

// This file contains the database access information.
// This file also establishes a connection to MySQL,
// selects the database, and sets the encoding.

// Set the database access information as constants:
<<<<<<< HEAD
define('DB_USER', 'simran');
define('DB_PASSWORD','simran');
=======
define('DB_USER', 'Rajdeep');
define('DB_PASSWORD', 'Adminraj123');
>>>>>>> 99341c4d17888b5c74b18cf3a110afc446d18675
define('DB_HOST', 'localhost');
define('DB_NAME', 'deltaschool');

// Make the connection:
$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die('Could not connect to MySQL: ' . mysqli_connect_error() );

// Set the encoding...
mysqli_set_charset($dbc, 'utf8');