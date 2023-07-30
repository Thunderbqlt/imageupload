<!DOCTYPE html>

<html>
    <head>
        <title>Upload-image</title>
        <link rel="stylesheet" href="style.css">
        <style>
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

            p {
                padding-bottom: 100px;
            }
        </style>
    </head>
    <body>
        <p>UPLOAD YOUR PIC HERE</p>
        <?php if (isset($_GET['error'])): ?>
            <p><?php echo $_GET['error']; ?></p>
        <?php endif ?>
            <form action="upload.php"
                method="post"
                enctype="multipart/form-data">
                
                <input type="file"
                    name="my_image">
                
                <input type="submit"
                name="submit"
                value="Upload">
            
            </form>
    </body>
</html>