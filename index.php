<!DOCTYPE html>

<html>
    <head>
        <link rel="icon" href="icons/gallery.png">
        <title>Upload-image</title>
        <link rel="stylesheet" href="style.css">
        <style>
            img {
                display: flex;

            }
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                min-height: 100vh;
                font-size: 50px;
                font-family: 'Overpass', sans-serif;
                font-weight: 900;     
            }

            .title {
                text-align: center;
                padding-bottom: 50px;
            }
            input[type=text] {
            background-color: white;
            border-color: black;
            color: black;
            padding: 9px 16px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 3px;
            font-size: 15px;
            font-family: 'Overpass', sans-serif;
            font-weight: 900;
            
            }
            
            label[for="descriptions"] {
                font-size: 15px;
                padding-left: 10px;
                padding-right: 15px;
                padding-top: 0px;
            }

            label[for="copyright"] {
                
                padding-left: 350px;
                font-size: 20px;
                text-align: center;
               
                
            }

            input[type=checkbox] {
                
                height: 20px;
                width: 20px;
            }

            

        </style>
    </head>
    <body>
    
    </form>

        <a href="view.php">
        <img src="icons/gallery.png" style="width:100px;height:100px;">
        </a>
        <div class="title">
        <p>UPLOAD YOUR PIC HERE</p>
        
        </diV>
        <?php if (isset($_GET['error'])): ?>
            <p><?php echo $_GET['error']; ?></p>
        <?php endif ?>
            <form action="upload.php"
                method="post"
                enctype="multipart/form-data">
                
                <input type="file"
                    name="my_image">
                <input type="submit"
                id="submitButton"
                name="submit"
                value="Upload">
             <label for="descriptions">Description:</label><input type="text" name="descriptions" id="descriptions"><br>
             <label for="copyright">Is this your image?</label>
             <input type="checkbox" value="copyright" name="message">
             
            <form action="view.php" method="post">
                
            
            </form>
    </body>
</html>