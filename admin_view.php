<?php
//Load DOM data
include 'content/head.html';
include 'content/header.html';

include 'config.php';
//queryInfo
$sql = "SELECT * FROM `mlf_eventDB`";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
  // output data of each row
  echo "<div class='admin'>";
  while($row = $result->fetch_assoc()) {

    echo "<br>customerID: " . $row["customerID"]. " - Name: " . $row["fName"]. ",  " . $row["lName"] . "<br>";
    echo "Question 1 Response: " . $row["question1"]. "<br>Question 2 Response: " . $row["question2"];
    echo "<br>event ID (Shopify SKU): " . $row["eventID"]. "<br>Who Are You Here For? " . $row["referralSource"];
    echo "<br> Registerd On: " . $row["registerDate"] . " Shopify Order ID:" . $row["shopifyOrderID"]. "<hr><br>";
  }
  echo "</div>";
} else {
  echo "0 results";
}


// include 'content/footer.html';


 ?>
