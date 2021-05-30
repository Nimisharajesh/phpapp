<?php

// db credentials
define('DB_HOST', 'sql6.freemysqlhosting.net');
define('DB_USER', 'sql6415894');
define('DB_PASS', 'qS6mymPdJR');
define('DB_NAME', 'sql6415894');

// Connect with the database.
function connect()
{
  $connect = mysqli_connect(DB_HOST ,DB_USER ,DB_PASS ,DB_NAME);

  if (mysqli_connect_errno($connect)) {
    die("Failed to connect:" . mysqli_connect_error());
  }

  mysqli_set_charset($connect, "utf8");

  return $connect;
}

$con = connect();
