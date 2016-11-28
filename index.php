
<?php
define("DB_SERVER","us-cdbr-azure-southcentral-f.cloudapp.net");
define("DB_USERNAME","b762b602ac9c7b");
define("DB_PASSWORD","360b7be5");
define("DB_DATABASE","cm3028rgu");
$db = mysqli_connect(DB_SERVER,
    DB_USERNAME, DB_PASSWORD,
    DB_DATABASE);

// test if connection was established, and print any errors
if($db->connect_errno){
    die('Connectfailed['.$db->connect_error.']');
}
?>
<?php
// create a SQL query as a string
$sql_query = "SELECT * FROM superheros  WHERE superpower LIKE '%l aser%' ";


$result = $db->query($sql_query);
?>

<?php
$result->close();
// close connection to database
?>