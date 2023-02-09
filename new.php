<?php
  if (isset($_GET["room"])) {
    $room = $_GET["room"];
    echo "<h2>You have successfully booked room " . $room . "</h2>";
  }
?>