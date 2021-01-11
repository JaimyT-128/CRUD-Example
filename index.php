<?php
include "db_connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golfclub management</title>
    <link rel="stylesheet" href="css/master.css">
</head>
<body>
    
    <table style='width:100%;'>
     <tr style='text-align:left'>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email Address</th>
        <th>Membership Type</th>
        <th>Actions</th>
     </tr>
     <tr>
        <form method="post" action="db_create.php">
        <td><input type="text" name="id" class="input_create" disabled></td>
        <td><input type="text" name="fname" class="input_create" placeholder="John" required></td>
        <td><input type="text" name="lname" class="input_create" placeholder="Doe" required></td>
        <td><input type="text" name="email" class="input_create" placeholder="JohnDoe@gmail.com" required></td>
        <td>
            <select name="memtype" class="input_create" required>
                <option value="Basic">Basic</option>
                <option value="Premium">Premium</option>
                <option value="Premium+">Premium+</option>
            </select>
        </td>
        <td><input type="submit" name="submit" value="Add" class="input_create" required></td>
        </form>
     </tr>
     <?php include "db_read.php"; ?>
    </table>
</body>
</html>