<?php include "db_conn.php" ?>
<!DOCTYPE html>
<html>
    <head>
        <title>View</title>
    </head>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            min-height: 100vh;
        }
        .alb {
            width: 200px;
            height: 200px;
            padding: 5px;
        }
        .alb img {
            width: 100%;
            height: 100%;
        }
        a {
            text-decoration: none;
            color: black;
        }
    </style>
    <body>
        <a href="index.php">
        <img src="back.png" alt="HTML tutorial" style="width:42px;height:42px;">
        </a>
        <?php
            
            $sql = "SELECT * FROM images ORDER BY id DESC";
            $res = mysqli_query($conn, $sql);
            
            if (mysqli_num_rows($res) > 0) {
                
                while ($images = mysqli_fetch_assoc($res)) {  ?>

                 <div class="alb">
                    <img src="uploads/<?=$images['image_url']?>">
                 </div>

                
        <?php } }?>
    </body>
</html>