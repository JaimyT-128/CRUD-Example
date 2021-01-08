<?php
$sql = "SELECT * FROM memberships";
$result = mysqli_query($conn, $sql);

echo "<table style='width:100%;'>";
echo "<tr style='text-align:left'>";
echo "<th>ID</th>";
echo "<th>First Name</th>";
echo "<th>Last Name</th>";
echo "<th>Email Address</th>";
echo "<th>Membership Type</th>";
echo "</tr>";

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['firstname'] . "</td>";
        echo "<td>" . $row['lastname'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['membership_type'] . "</td>";
        echo "</tr>";
    }
  } else {
    echo "<tr>";
    echo "<td colspan=5>0 results</td>";
    echo "</tr>";
  }
?>