<?php include "db_conn.php" ?>
<?php include "view.php" ?>

<?php
//This code performs the action of deleting a image that the user chooses
                $id = $_POST['id'];
                $sql = "DELETE FROM images
                WHERE id = $id";

                mysqli_query($conn, $sql);
                
                
    
?>