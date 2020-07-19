<?php include_once './includes/config.php' ?>

<?php
ini_set('display_errors',0);

if(isset($_POST)){

  $email = $_POST['email'] ? $_POST['email'] : "";
  $email = filter_var($email, FILTER_SANITIZE_EMAIL);

  $valid = true;
  $responseMessages = array();


  if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
    $valid = false;
    $responseMessages[] = "Please enter email in valid format";
  }

  if($valid){

    //Inserting email in database.
    $sql = "INSERT INTO subscriptions (email) VALUES ('$email')";

    if($valid && mysqli_query($conn, $sql)){ 
      $responseMessages[] = "Thank you! subscription successful.";
      echo json_encode(
        array(
        'valid' => $valid,
        'responseMessages' => $responseMessages
        )
       );
    } 
    $conn->close();
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