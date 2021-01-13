<?php
$sql = "SELECT id, firstname, lastname, email, membership_type FROM memberships";
$result = mysqli_query($conn, $sql);



if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['firstname'] . "</td>";
        echo "<td>" . $row['lastname'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['membership_type'] . "</td>";
        echo "<td><a href=\"edit.php?id=" . $row['id'] ."\" title=\"Edit\" style=\"margin-right:5px\" class=\"fas fa-edit\"></a><a href=\"delete.php?id=" . $row['id'] ."\" title=\"Delete\" class=\"fas fa-times\"></a></td>";
        echo "</tr>";
    }
  } else {
    echo "<tr>";
    echo "<td colspan=6>0 results</td>";
    echo "</tr>";
  }
?>