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

//Function to validate the form
function validateForm() {
  $contactArray = [];
  $errorArray = [];
  $phoneRegex = "/^(((\+44\s?\d{4}|\(?0\d{4}\)?)\s?\d{3}\s?\d{3})|((\+44\s?\d{3}|\(?0\d{3}\)?)\s?\d{3}\s?\d{4})|((\+44\s?\d{2}|\(?0\d{2}\)?)\s?\d{4}\s?\d{4}))(\s?\#(\d{4}|\d{3}))?$/";

  if (!empty($_POST['name'])) {
      $name = $_POST['name'];
  } else {
      $errorArray[] = "name";
  }

  if (!empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $email = $_POST['email'];
  } else {
      $errorArray[] = "email";
  }

  if (!empty($_POST['phone_number']) && preg_match($phoneRegex, $_POST['phone_number'])) {
      $phone_number = $_POST['phone_number'];
  } else {
      $errorArray[] = "phone_number";
  }

  if (!empty($_POST['subject'])) {
      $subject = $_POST['subject'];
  }else {
      $errorArray[] = "subject";
  }

  if (!empty($_POST['message'])) {
      $message = $_POST['message'];
  } else {
      $errorArray[] = "message";
  }


  if (!empty($_POST['newsletter'])) {
      $newsletter = true;
  } else {
      $newsletter = false;
  }

  

//Select the current date/time
  $dt = new DateTime();
  $dt->setTimeZone(new DateTimeZone("Europe/London"));
  $today = $dt->format("Y-m-d H:i:s");



  // if no errors showed up, add variables to an array and submit
  if (empty($errorArray)) {
      $contactArray = [
      "name" => $name,
      "email" => $email,
      "phone_number" => $phone_number,
      "subject" => $subject,
      "message" => $message,
      "newsletter" => $newsletter,
      "date" => $today
      ];

      return ["passed" => true, "array" => $contactArray];
  } else {
      return ["passed" => false, "array" => $errorArray];
  }
}



//Message to the user

function createMessage($array) {
  if ($array["passed"]) {
    $message = "Form was submitted successfully!";
  } else {
    $message = "Error: please enter a valid ";
    $message .= implode(", ",$array["array"]);
  }
  return $message;
}




?>