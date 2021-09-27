<?php  
// env variables
$dsn = "mysql";
$host = "localhost";
$port = 3306;
$dbname = "contact-page-reflection";
$user = "angel_user";
$pass = "123";
 
try {
    $db = new PDO("$dsn:host=$host;port=$port;dbname=$dbname", $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Unable to connect - ";
    echo $e->getMessage();
    exit;
}

?>
