<?php include "db_conn.php" ?>
<?php include "view.php" ?>

<?php
                $id = $_POST['id'];
                $sql = "DELETE FROM images
                WHERE id = $id";

                mysqli_query($conn, $sql);
                
                
    
?>