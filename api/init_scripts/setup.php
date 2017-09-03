<?php

include '../config.php';
include '../db_functions.php';
include '../queries.php';

echo createDB($createDatabaseTest, $dbname, $servername, $username, $password);
echo createTable($createTablePerson, $servername, $dbname, $username, $password);
echo insertData($insertRecordsPerson, $servername, $username, $password, $dbname);

?>