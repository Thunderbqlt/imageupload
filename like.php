<?php include "db_conn.php" ?>
<?php include "view.php" ?>

<?php
                $val = $_POST['btn'];
                echo $val;
                echo $id;
                $sql = "UPDATE images
                        SET likes = likes + 1
                        WHERE id = $val
                        ";

                mysqli_query($conn, $sql);
                
                
    
?>