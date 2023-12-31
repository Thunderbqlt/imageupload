<?php include "db_conn.php" ?>
<!DOCTYPE html>
<html>
    <head>
        <title>View</title>
        <link rel="icon" href="icons/gallery.png">
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
            font-size: 15px;
            font-family: 'Overpass', sans-serif;
            font-weight: 900; 
            text-align: center;
        }
        .alb img {
            width: 100%;
            height: 100%;
        }
        a {
            text-decoration: none;
            color: black;
        }

        input[type=image] {
            color: black;
            fill: orange;
            
        }
        
        path {
            background-color: red;
            fill: purple;
        }

        input[type=image]:hover {
            background-image: url("icons/gallery.png");
    
        }

        .alb:hover {
                background-color: red;
        }
    </style>
    <body>
        <!-- The code below creates a button linked to my gallery page -->
        <a href="index.php">
        <img src="icons/back.png" style="width:42px;height:42px;">
        </a>
        <?php
            //This code requests the image data from my server and displays it to the user
            $sql = "SELECT id, image_url, descriptions FROM images ORDER BY id DESC";
            
            $res = mysqli_query($conn, $sql);
            
            if (mysqli_num_rows($res) > 0) {
                
                while ($row = mysqli_fetch_assoc($res)) {
                    $id = $row['id'];
                    $image_url = $row['image_url'];
                    $descriptions = $row['descriptions'];

                    echo '<div class= alb>';
                    echo '<img src="uploads/' . $image_url . '" alt="Image ' . $id . '">';
                    echo '<p>' . $descriptions . '</p>';
                    echo '<form action="like.php" method="post"><input type="hidden" name="id" value="'.$id.'"/><input type="image" src="icons/thumb.svg" name="btn" value="Like" style="width: 20px;"/></form>';
                    echo '<form action="delete.php" method="post"><input type="hidden" name="id" value="'.$id.'"/><input type="image" src="icons/trashbin.png" name="btn" value="Like" style="width: 20px;"/></form>';
                    echo '</div>';
                    
                }
                 
            }

                
        ?>
    </body>
</html>