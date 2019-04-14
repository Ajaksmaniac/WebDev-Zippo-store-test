<div id="Box">
            <p>Transaction infomaration</p>
            <div class="alert alert-success">
                <strong>Success!</strong>
            </div>
            <dl class="dl-horizontal">
                <dt>Order&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ID:</dt>
                <dd><?php echo rand(0, 1000); ?></dd>

                <dt>Order Name:</dt>
                <dd>Zippo</dd>

                <dt>Order&nbsp;&nbsp; Date:</dt>
                <dd><?php
                    
                    
                    echo date("d/m/Y");
                
                ?>
                </dd>
                <dt>&nbsp;Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</dt>

                <dd><?php
                 
                    $cena = $_GET['theTotal'];
                    $kolicina = $_GET['kolicina'];
                    
                    if(isset($_POST['email'],$_POST['firstName'],$_POST['lastName'],$_POST['adress'], $_POST['nacin-placanja'])){
                        $email = $_POST['email'];
                        $firstName = $_POST['firstName'];
                        $lastName = $_POST['lastName'];
                        $adress = $_POST['adress'];
                        $payment = $_POST['nacin-placanja'];
                        
                        
                   }
                    echo $cena . " RSD";
                    
                ?>
                </dd>
                <dt>Quantity&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</dt>
                <dd><?php echo $kolicina ;?></dd>
                <dt>Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</dt>
                <dd><?php echo $email; ?></dd>
                <dt>First name:&nbsp;&nbsp;&nbsp;</dt>
                <dd><?php echo $firstName; ?></dd>
                <dt>Last name:&nbsp;&nbsp;&nbsp;&nbsp;</dt>
                <dd><?php echo $lastName; ?></dd>
                <dt>Adress:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</dt>
                <dd><?php echo $adress; ?></dd>
                <dt>Status:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</dt>
                <dd>Succes</dd>
                <dt>&nbsp;&nbsp; Payment:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</dt>
                <dd><?php echo $payment; ?></dd>
                <dt>&nbsp;&nbsp; <b>Continue shoping</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;</dt>
                <dd><a href="index.html"> HOME</a></dd>
                

            </dl>
</div>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
        #Box {
            border: 1px solid red;
            width:400px;
            margin-left: 40%;
            margin-top: 10%;
        }

        p {
            width:200px;
            margin-left: 40%;
            display: block;
        }

        dl dt {
            margin-left: 0;
        }
</style>