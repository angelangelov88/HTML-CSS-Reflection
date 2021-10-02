<?php  

$dsn = "mysql";
$host = "localhost";
$port = 3306;
$db1name = "angelang_contact-page-reflection";
$db2name = "angelang_news-db";
$user = "angelang_user";
$pass = "l633,mF7Ysh&";
 
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
