<?php
include 'DBCONNECT.php';

$db = new mysqli(
"us-cdbr-azure-southcentral-f.cloudapp.net",
"b762b602ac9c7b",
"360b7be5",
"cm3028rgu"
);
// test if connection was established, and print any errors
if($db->connect_errno){
die("Connectfailed['.$db->connect_error.']");
}
// create a SQL query as a string
$sql_query = "SELECT * FROM superheros  WHERE superpower LIKE '%l aser%' ";
// execute the SQL query
$result = $db->query($sql_query);

$result->close();
// cl ose connection to database