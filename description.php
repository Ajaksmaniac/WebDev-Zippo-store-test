
<!DOCTYPE html>
<html>
    <head>
        <title>Zippo RS</title>
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    </head>

    <body>

        <div id="wrapper-main">
            <div id="header">
               
                <div id="header-mid" class="clearfix">
                    <div id="header-mid-left" class="header-middle">
                             
   
                    </div>
                    <div id="header-mid-mid" class="header-middle">
                            <img id="logo" src="img/zippo-logo.png">
                    </div>
                    <div id="header-mid-right" class="header-middle">
                        
                       
                    </div>
                    
                </div>
                <div class="topnav">
                        <a class="active" href="index.html">Home</a>
                        <a href="store.php">Store</a>
                        <a href="contact.html">Contact</a>
                        <a href="about.html">About</a>
                        <span id="search-span"><img id="search-icon"src="img/search-icon.png" alt="Loading.."></span>           
                        <input id="search-bar"type="text" name="search" placeholder="Pretraga artikala..." value="" autocomplete="off" autocomplete2="off">
                      </div> 

                
                
            </div>
            <div id="middle-container">
                <div id="middle-container-advertisement">
                <?php
                $DatabaseServerName = "localhost";
                $DatabaseUserName = "root";
                $DatabasePassword = "";
                $DatabaseName ="zippo rs";

                $DBConnection = mysqli_connect($DatabaseServerName, $DatabaseUserName,$DatabasePassword, $DatabaseName);


                $id = $_GET['id'];

                $SQL_lighter = "SELECT id, name, price, description, image_path FROM lighter WHERE id=$id";
                $result = mysqli_query($DBConnection, $SQL_lighter);
                while($fieldInfo = mysqli_fetch_assoc($result)){
                        
                    $id = $fieldInfo['id'];
                    $name = $fieldInfo['name'];
                    $price = $fieldInfo['price'];
                    $description = $fieldInfo['description'];
                    $image_path = $fieldInfo['image_path'] ;

                        echo "<img src=".$image_path."></br>";
                        echo "Name: " . $name . "</br>";
                        echo "Description: " . $description;
                        
              

                   }


?>

                </div>    
                
            </div>
            
            <script src="scripts/slider.js"></script> 
    </body>
</html>
