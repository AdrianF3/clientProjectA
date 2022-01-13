<?php
$fName = "FIRSTNAME";
$lName = "LASTNAME";
$email = "EMAIL";
$question1 = "QUESTION 1 ANSWER";
$question2 = "yes";



// //check if user is logged in with session order id
// session_start();
//
// // if they are logged in, load order info from db
// if (isset($_SESSION['orderID'])) {
//   $orderID = $_SESSION["orderID"];
//   include('config.');
//   $sql = "SELECT * FROM `mlf_eventDB` WHERE `shopifyOrderID` = '$orderID'";
//   $result = $conn->query($sql);
//
//   if ($result->num_rows > 0) {
//     while($row = $result->fetch_assoc()) {
//       //copy order id to store in session
//       $fName = $row["fName"];
//       $lName = $row["lName"];
//       $email = $row["email"];
//       $question1 = $row["question1"];
//       $question2 = $row["question2"];
//       $regDate = $row["registerDate"];
//     }
//   }
//   // echo "regDate" . $regDate;
//   //check to see if regDate is empty
//   $checkDate = isset($regDate);
//   // echo "<br>checkdate" . $checkDate;
//   //while regDate is not equal to NULL, redirect
//    // if (isset($regDate))  {
//    //   echo "should not rediret.";
//    //
//    // } else {
//    //   echo "<script>window.location.href = 'http://dismantleyourdoubt.com/register.php';</script>";
//    // }
//   $conn->close();
// } else {
//   echo "<script>window.location.href = 'http://dismantleyourdoubt.com/login.php';</script>";
// }

//then display register page content
//Load DOM data
include 'content/head.html';
include 'content/header.html';
include 'content/registered_content.html';
// include 'content/footer.html';

 ?>
