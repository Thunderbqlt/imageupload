<!DOCTYPE html>

<html>
    <head>
        <title>Memories</title>
        <link rel="icon" href="icons/gallery.png">
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

            .title {
                text-align: center;
                display: flex;
                justify-content: center;
            
              
            }
            .info {
                
                font-size: 30px;
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;
                flex-wrap: wrap;
                padding-left: 40vh;
                padding-right: 40vh;
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
               
                
            }

            input[type=checkbox] {
                
                height: 20px;
                width: 20px;
            }
            input[type=button]:hover {
                background-color: #d80032;
                border: none;
                color: white;
                padding: 16px 32px;
                text-decoration: none;
                margin: 4px 2px;
                cursor: pointer;
                border-radius: 3px;
                font-size: 15px;
                font-family: 'Overpass', sans-serif;
                font-weight: 900; 
            
            
            }
            input[type=button] {
                background-color: #ef233c;
                border: none;
                color: white;
                padding: 16px 32px;
                text-decoration: none;
                margin: 4px 2px;
                cursor: pointer;
                border-radius: 3px;
                font-size: 15px;
                font-family: 'Overpass', sans-serif;
                font-weight: 900; 
                
                
            }

            

        </style>
    </head>
    <body>

    </form>

<!-- This code displays information text about the project to my user -->
        <div class="title">
        <p>Memories Project</p>
        </diV>
        <div class="info">
            <p>This web-app allows you to upload images of your choice to be held on a server.   To do this click choose file, check the copyright box and click upload.</p>
        </div>
            <form action="index.php">
    <input type="submit" value="Proceed" />
</form>
    </body>
</html>