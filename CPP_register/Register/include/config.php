<?php
$sql["host"] = "127.0.0.1";
$sql["user"] = "root";
$sql["pass"] = "";
$sql["base"] = "mptc_yufc_event";
$site_config['tbl_prefix'] = "smcd";


$dsn = 'mysql:dbname='.$sql["base"].';host='.$sql["host"].'';


try {
    $dbh = new PDO($dsn, $sql["user"], $sql["pass"], array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
//TO DISABLE or DELETE AFTER
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}


?>