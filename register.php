<?php
$fName = "FIRSTNAME";
$lName = "LASTNAME";
$email = "EMAIL";
$question1 = "QUESTION 1 ANSWER";
$question2 = "QUESTION 2 ANSWER";



// session_start();
// //check if user is logged in with session order id
//
// //format date
// $today = getdate();
// $todayStr = $today[year] . "-" . $today["mon"] . "-" . $today["mday"];
//
//
// if (isset($_SESSION['orderID'])) {
//   $orderID = $_SESSION["orderID"];
//
//   // if they are logged in and have no register date, load order info from db
//   // if they are logged in and have a register date, redirect to registered.php
//   include('config.php');
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
//   //while regDate is not equal to NULL, redirect to registered.
//    if ($checkDate = 0)  {
//      // echo "should rediret.";
//      echo "<script>window.location.href = 'http://dismantleyourdoubt.com/registered.php';</script>";
//    }
//   $conn->close();
// } else {
//   echo "<script>window.location.href = 'http://dismantleyourdoubt.com/login.php';</script>";
// }

//then display register page content
//Load DOM data
include 'content/head.html';
// include 'content/header.html';
include 'content/register_content.html';
include 'content/footer.html';
//
// //when submit button is clicked, save info to DB
// if (isset($_POST['submitRegistration'])) {
//   $fNameS = $_POST["fName"];
//   $lNameS = $_POST["lName"];
//   $hereForS = $_POST["hereFor"];
//   $question1S = $_POST["qOneAnswer"];
//   $hotSeatS = $_POST["hotSeat"];
//
//   include('config.php');
//   // $sql_2 = "UPDATE `mlf_eventDB` SET fName = '$fNameS', lName = '$lNameS', referralSource = '$hereForS', question1 = '$question1S', question2  = '$question2S' WHERE shopifyOrderID = $orderID"; //working!!
//   $sql_2 = "UPDATE `mlf_eventDB` SET fName = '$fNameS', lName = '$lNameS', referralSource = '$hereForS', question1 = '$question1S', hotSeat  = '$hotSeatS', registerDate = '$todayStr' WHERE shopifyOrderID = $orderID"; //dev version - working
//
//   if ($conn->query($sql_2) === TRUE) {
//     //echo "Record updated successfully";
//     //Redirect to complete registration page
//     echo "<script>window.location.href = 'http://dismantleyourdoubt.com/registered.php';</script>";
//     } else {
//       echo "Error updating record: " . $conn->error;
//       echo "Contact ADRAINF.WEBDEV@GMAIL.COM to submit your registration data.";
//     }
//   $conn->close();
//
// }


 ?>
