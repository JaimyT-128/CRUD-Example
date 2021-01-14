<?php
    include "db_connect.php";
    $id = $_GET['id'];

    $sql = "SELECT id, firstname, lastname, email, membership_type FROM memberships WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
?>
<form method="post">
    <input type="text" name="edit_id" class="input_create" placeholder="<?php echo $row['id']; ?>" disabled>
    <input type="text" name="edit_fname" class="input_create" value="<?php echo $row['firstname']; ?>" required>
    <input type="text" name="edit_lname" class="input_create" value="<?php echo $row['lastname']; ?>" required>
    <input type="text" name="edit_email" class="input_create" value="<?php echo $row['email']; ?>" required>
            
    <select name="edit_memtype" class="input_create" required>
        <option value="Basic" <?php if($row['membership_type'] == "Basic"){ echo "selected"; }; ?>>Basic</option>
        <option value="Premium" <?php if($row['membership_type'] == "Premium"){ echo "selected"; }; ?>>Premium</option>
        <option value="Premium+" <?php if($row['membership_type'] == "Premium+"){ echo "selected"; }; ?>>Premium+</option>
    </select>
            
    <input type="submit" name="edit_submit" value="Edit" class="input_edit" required>
</form>
<?php
    if(isset($_POST['edit_submit'])){
        $new_fname = $_POST["edit_fname"];
        $new_lname = $_POST["edit_lname"];
        $new_email = $_POST["edit_email"];
        $new_memtype = $_POST["edit_memtype"];
        $sql = "UPDATE memberships SET firstname='$new_fname', lastname='$new_lname', email='$new_email', membership_type='$new_memtype' WHERE id=$id";
        $result = mysqli_query($conn, $sql);
        echo "<meta http-equiv='refresh' content='0;url=index.php'>";
    }

    

    
?>