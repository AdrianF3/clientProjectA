<?php
  // login area
  // session_start();
  // // echo "the order id saved is: " . $_SESSION["orderID"];
  // if (isset($_SESSION['orderID'])) {
  //   header('Location: http://dismantleyourdoubt.com/register.php');
  // }
  //
  //
  // //
  // if (isset($_POST['login'])) {
  //   $fName = $_POST['fName'];
  //   $email = $_POST['email'];
  //
  //   include('config.php');
  //   $sql = "SELECT *  FROM `mlf_eventDB` WHERE `fName` = '$fName' AND `email` = '$email'";
  //   $result = $conn->query($sql);
  //
  //   if ($result->num_rows > 0) {
  //     while($row = $result->fetch_assoc()) {
  //       //copy order id to store in session
  //       $orderID = $row["shopifyOrderID"];
  //       $_SESSION["orderID"] = $orderID;
  //       // echo "the orderID has been saved.";
  //       //load register.php
  //       echo "<script>window.location.href = 'http://dismantleyourdoubt.com/register.php';</script>";
  //     }
  //   } else {
  //     echo "error logging in, please try again";
  //   }
  // }

  include 'content/head.html';
  include 'content/header.html';
  include 'content/login_content.html';
  // include 'content/footer.html';


 ?>
