<?php
define("DB_SERVER","us-cdbr-azure-southcentral-f.cloudapp.net");
define("DB_USERNAME","b762b602ac9c7b");
define("DB_PASSWORD","360b7be5");
define("DB_DATABASE","cm3028rgu");
$db = mysqli_connect(DB_SERVER,
    DB_USERNAME, DB_PASSWORD,
    DB_DATABASE);