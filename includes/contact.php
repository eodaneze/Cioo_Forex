<?php
require_once('./connection.php');
  if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];

      if($name == "" || $email == "" || $subject == "" || $message == ""){
          $error = urlencode("All fileds are required");
          header('location: ../index.php?error='.$error);
      }else{
          $md = date('Y:m:d H:s:m');
          $csql =  "INSERT INTO contacts(name, email, subject, message, createddate)VALUES('$name', '$email', '$subject', '$message', '$md')";
          $cresult = mysqli_query($conn, $csql);
          if($cresult){
              $success = urlencode("Your message have been sent sucessfully!!!");
              header('location: ../index.php?success='.$success);
          }else{
            $error = urlencode("Errror sending message");
            header('location: ../index.php?error='.$error);
          }
      }
  }
?>