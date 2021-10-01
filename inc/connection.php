<?php  

$dsn = "mysql";
$host = "localhost";
$port = 3306;
$db1name = "contact-page-reflection";
$db2name = "news-db";
$user = "angel_user";
$pass = "123";
 
try {
    $db1 = new PDO("$dsn:host=$host;port=$port;dbname=$db1name", $user, $pass);
    $db2 = new PDO("$dsn:host=$host;port=$port;dbname=$db2name", $user, $pass);
    $db1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (Exception $e) {
    echo "Unable to connect - ";
    echo $e->getMessage();
    exit;
}
?>
