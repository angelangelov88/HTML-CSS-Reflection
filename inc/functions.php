<?php 

//Add user input to the database
function postContact($db, $contactArray) {
  try {
    $query = "INSERT INTO contact (email, name, phone_number, subject, message, newsletter, date)
    VALUES (:email, :name, :phone_number, :subject, :message, :newsletter, :date)";

  $stmt = $db->prepare($query);
  $stmt->bindParam(":email", $contactArray['email']);
  $stmt->bindParam(":name", $contactArray['name']);
  $stmt->bindParam(":phone_number", $contactArray['phone_number']);
  $stmt->bindParam(":subject", $contactArray['subject']);
  $stmt->bindParam(":message", $contactArray['message']);
  $stmt->bindParam(":newsletter", $contactArray['newsletter']);
  $stmt->bindParam(":date", $contactArray['date']);

  $stmt->execute();
  return true;

  } catch (Exception $e) {
    echo "Unable to connect - ";
    echo $e->getMessage();
    return false;
  }
}

?>