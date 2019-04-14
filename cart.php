

<!DOCTYPE html>
<html>
    <head>
        <title>Zippo RS</title>
        <!--<link href="css/style.css" rel="stylesheet" type="text/css">-->
        <link href="css/store.css" rel="stylesheet" type="text/css">
        <link href="css/sendMessage.css" rel="stylesheet" type="text/css">
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
                        <a href="index.html">Home</a>
                        <a class="active" href="store.php">Store</a>
                        <a href="contact.html">Contact</a>
                        <a href="about.html">About</a>
                      <!--  <span id="search-span"><img id="search-icon"src="img/search-icon.png" alt="Loading.."></span>
                        <input id="search-bar"type="text" name="search" placeholder="Pretraga artikala..." value="" autocomplete="off" autocomplete2="off">-->
                        
                </div> 

                
                
            </div>
            <div id="middle-container">
            <div id="middle-left"></div>
		
		
			<div id="middle-middle">
						
						
					
            <?php
             $cena = $_GET['theTotal'];
             $kolicina = $_GET['kolicina'];   
            
            ?>
                            
                            
				<form id="buy-form" action="TransactionSucces.php?theTotal=<?php echo $cena?>&kolicina=<?php echo $kolicina ?>" class='buy' method="post">
							
                                    
                                    <input class='form' class='form-input'  type='text' placeholder='email' name='email'  id="buy-form-email" required >
                                    <span id='span1'></span>
                                    <br>

                                       

                                   
                                   
                                    
                                    
                                    
                                    <input class='form' class='form-input'name='firstName' type='text' placeholder='First name' id="contact-form-fnameinput" required>
                                    <span id='span2'></span>
                                    <br>
                                    <input class='form' class='form-input'name='lastName' type='text' placeholder='Last name' id='contact-form-lnameinput' required>
                                    <span id='span3'></span>
                                    <br>
                                    
                                   <input class='form' class='form-input' type='text' placeholder='adress'name='adress' id='contact-form-adress'required>
                                   <span id='span4'></span>
                                   <br>
                                    <p>Payment:</p>
                                    <input type='radio' name='nacin-placanja' value='On delivery' required> On delivery<br>
                                    <input type='radio' name='nacin-placanja' value='Credit card'> Credit card<br>
                                    <button class='form'  type='submit' placeholder='Send' id='buy-form-submit' >Confirm</button>
                                    
					</form>
		
		
			</div>
		
			<div id="middle-right"></div>

           
    
                
            </div>
            
            <script type="text/JavaScript" src="scripts/JQuery.js"></script>
            <script type="text/JavaScript" src="scripts/korpa.js"></script>
    </body>
</html>
