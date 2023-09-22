<?php include "db_conn.php" ?>
<?php include "view.php" ?>
<?php
//This code adds one to the like variable on my server when the like button is clicked
                $id = $_POST['id'];
                $sql = "UPDATE images
                        SET likes = likes + 1
                        WHERE id = $id
                        ";

                mysqli_query($conn, $sql);
                
                
    
?>