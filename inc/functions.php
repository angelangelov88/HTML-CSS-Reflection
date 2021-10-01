<?php 

//Add user input to the database
function postContact($db1, $contactArray) {
  try {
    $query = "INSERT INTO contact (email, name, phone_number, subject, message, newsletter, date)
    VALUES (:email, :name, :phone_number, :subject, :message, :newsletter, :date)";

  $stmt = $db1->prepare($query);
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


//Add the user input to an array if no errors
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


//Message to the user tha the form has been submitted or error has occured
function createMessage($array) {
  if ($array["passed"]) {
    $message = "<span style='color:green;'>Form was submitted successfully!</span>";
  } else {
    $message = "Error: please enter a valid ";
    $message .= implode(", ",$array["array"]);
  }
  return $message;
}


//Function to pull the news from the database
function pullNews($db2) {
  try {
    $query = "
    SELECT news.heading, news.description, news.news_image, news.date, author.profile_image, category.category_name, author.full_name
    FROM news
    JOIN author ON news.author_id = author.author_id
    JOIN category ON news.category_id = category.category_id
    Order by RAND()
    LIMIT 3
    ";
    $stmt = $db2->prepare($query);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results;
  } catch (Exception $e) {
    echo "Unable to connect - ";
    echo $e->getMessage();
  }
}

?>