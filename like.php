<?php include "db_conn.php" ?>
<?php include "view.php" ?>

<?php
                $id = $_POST['id'];
                $sql = "UPDATE images
                        SET likes = likes + 1
                        WHERE id = $id
                        ";

                mysqli_query($conn, $sql);
                
                
    
?>