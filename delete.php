<form method="post">
    <h1>Are you sure you want to delete this column?</h1>
    <button href="index.php">No, I am not</button>
    <button type="submit" name="edit_submit">Yes, I am</button>
</form>
<?php
    include "db_connect.php";

    if(isset($_POST['edit_submit'])){
        $id = $_GET['id'];

        $sql = "DELETE FROM memberships WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
        echo "<meta http-equiv='refresh' content='0;url=index.php'>";
    }

    

    
?>