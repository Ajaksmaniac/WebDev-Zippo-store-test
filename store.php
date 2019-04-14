<!DOCTYPE html>
<html>
    <head>
        <title>Zippo RS</title>
        <!--<link href="css/style.css" rel="stylesheet" type="text/css">-->
        <link href="css/store.css" rel="stylesheet" type="text/css">
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
                      <div id="store-cart-container">
                            <a id="cart"><img id="shoping-cart-icon" src="img/shoping-cart-icon.png"></a>
                            <p id="cart-value" value="0">0 RSD</p>
                            
                            
                     </div>
                       
                    </div>
                    
                </div>
                <div class="topnav">
                        <a href="index.html">Home</a>
                        <a class="active" href="store.php">Store</a>
                        <a href="contact.html">Contact</a>
                        <a href="about.html">About</a>
                        <span id="search-span"><img id="search-icon"src="img/search-icon.png" alt="Loading.."></span>
                        <input id="search-bar"type="text" name="search" placeholder="Pretraga artikala..." value="" autocomplete="off" autocomplete2="off">
                        
                </div> 

                
                
            </div>
            <div id="middle-container">
            <?php
             
                $DatabaseServerName = "localhost";
                $DatabaseUserName = "root";
                $DatabasePassword = "";
                $DatabaseName ="zippo rs";

                $DBConnection = mysqli_connect($DatabaseServerName, $DatabaseUserName,$DatabasePassword, $DatabaseName);


              
               class lighter {
                    
                    private $image_path;
                    private $price;
                    private $ligher_id;
                   
                //konstruktor za klasu
                 /* function lighter($num_in, $cena_in){
                    $this->num = $num_in;
                    $this->cena = $cena_in;
                       
                   }*/



                   function construct($image_path_in, $price_in, $ligher_id_in){
                    $this->image_path = $image_path_in;
                    $this->price = $price_in;
                    $this->lighter_id = $ligher_id_in;
                   }
                   function openForm(){
                       //header('location: cart.php');
                       echo "print";
                   }
                   function addThumbnail(){
                        echo '<div class="zippo">
                        <a id="open" href="description.php?id='.$this->lighter_id .'"  ><img src="'.$this->image_path.'"></a>
                        
                        <p>Price: '.$this->price .' RSD</p>
                        <button id="addToCart"name="button" value='.$this->price.' class="add-to-cart-button button" type="button" onClick="getValue(this)">Add to cart</button></div>';

                   }
               
               } 



               if(!$DBConnection){
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
               }
               

                    $SQL_lighter = "SELECT id, name, price, description, image_path FROM lighter;";
                    $result = mysqli_query($DBConnection, $SQL_lighter);
                    while($fieldInfo = mysqli_fetch_assoc($result)){
                        
                         $id = $fieldInfo['id'];
                         
                         $price = $fieldInfo['price'];
                        
                         $image_path = $fieldInfo['image_path'] ;

                         $zippo = new lighter();
                         $zippo->construct($image_path, $price, $id);
                         $zippo->addThumbnail();
               
 
                    }
                


               
              



               
           /* 
            for( $i = 1; $i<=iterator_count($fi); $i++ ) {
                //$zipo = new lighter($num, $cena);
                $zippo = new lighter();
                $zippo->construct($num, $cena);
                $zippo->addThumbnail();
              
             }
           */
             
           
             mysqli_close($DBConnection);
            
            ?>
    
                
            </div>
            
            <script src="scripts/korpa.js"></script>        
    </body>
</html>
