<?php include_once './includes/config.php' ?>

<?php
ini_set('display_errors',0);

if(isset($_POST)){

  $name = $_POST['name'] ? $_POST['name'] : "";
  $name = filter_var($name, FILTER_SANITIZE_STRING);

  $email = $_POST['email'] ? $_POST['email'] : "";
  $email = filter_var($email, FILTER_SANITIZE_EMAIL);

  $phone = $_POST['phone'] ? $_POST['phone'] : "";
  $phone = filter_var($phone, FILTER_SANITIZE_STRING);

  $companyname = $_POST['companyname'] ? $_POST['companyname'] : "";
  $companyname = filter_var($companyname, FILTER_SANITIZE_STRING);

  $message = $_POST['message'] ? $_POST['message'] : "";
  $message = filter_var($message, FILTER_SANITIZE_STRING);

  $valid = true;
  $responseMessages = array();

  
  if(empty($name) || !preg_match("/^[a-zA-Z ]*$/",$name)){
    $valid = false;
    $responseMessages[] = "Please enter a valid name";
  }

  if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
    $valid = false;
    $responseMessages[] = "Please enter email in valid format";
  }

  if(empty($phone) || !preg_match('/^[0-9]{10}+$/', $phone)){
    $valid = false;
    $responseMessages[] = "Please enter 10 digit mobile number";
  }


  if($valid){

    //Inserting contact information in database.
    $sql = "INSERT INTO contactform ( name, email, phone, company,message) VALUES ('$name','$email','$phone','$companyname','$message')";

    if($valid && mysqli_query($conn, $sql)){ 
      $responseMessages[] = "Thank you! We will contact you soon.";
      echo json_encode(
        array(
        'valid' => $valid,
        'responseMessages' => $responseMessages
        )
       );
    } 
    $conn->close();

    // Sending an email to admin
    // $to = "somebody@example.com";
    // $subject = "Enquiry from "+$name;
    // $txt = $message + " contact:"+ $phone + " email:" + $email;
    // mail($to,$subject,$txt);
  }else {
    echo json_encode(
      array(
      'valid' => $valid,
      'responseMessages' => $responseMessages
      )
    );
  }

  
}
?>