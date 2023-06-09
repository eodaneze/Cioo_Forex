<?php
require_once('./connection.php');
  if(isset($_POST['submit'])){
      $email = $_POST['email'];
      if($email == ""){
          $error = urlencode("Please enter your email");
          header('location: ../index.php?$error='.$error);
      }else{
          $sql = "INSERT INTO newsletter (email) VALUES ($email)";
          $result = mysqli_query($conn, $sql);

          if($result){
            $success = urlencode("Please enter your email");
            header('location: ../index.php?$error='.$error);
          }
      }
  }

?>