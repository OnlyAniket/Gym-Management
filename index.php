<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\hotel-management\style.css">
  <title>Hotel Management System</title>
</head>
<body>
  <h1>Hotel Management System</h1>
  <h2>Available Rooms</h2>
  <table>
    <tr>
      <th>Room Number</th>
      <th>Type</th>
      <th>Price</th>
      <th>Book</th>
    </tr>
    <?php
      $rooms = array(
        array("101", "Single", 50),
        array("102", "Double", 75),
        array("103", "Queen", 100),
        array("104", "King", 150)
      );
      foreach ($rooms as $room) {
        echo "<tr>";
        echo "<td>" . $room[0] . "</td>";
        echo "<td>" . $room[1] . "</td>";
        echo "<td>" . $room[2] . "</td>";
        echo "<td><a href='book.php?room=" . $room[0] . "'>Book</a></td>";
        echo "</tr>";
      }
    ?>
  </table>
</body>
</html>