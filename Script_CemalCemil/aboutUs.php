<?php
error_reporting(E_ERROR);

@include 'config.php';

//ini session login buat user masuk ke halaman order
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
};
//session selesai disini

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <title>About Us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/OrderStyle.css">
</head>
<body>
   
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>

<?php include 'header.php'; ?>

    <div class="container" > 

        <div class = "row justify-content-center">
            <br/>
            <h1 id = "title">
                Our Story
            </h1> 
            
        </div>
        
        <div class="row justify-content-center">
            <p id="cerita" style= "text-align: center; font-size: medium">
                Cemal Cemil adalah website yang menjual kue tradisional dari berbagai daerah. 
                Kue ini dibuat dari bahan yang berkualitas, rasa yang enak, dan juga gizi yang cukup. 
                Cemal Cemil menawarkan kue tradisional dengan harga yang terjangkau oleh semua 
                kalangan tetapi tetap memiliki kualitas yang tinggi. Karena tujuan kami adalah ingin 
                membuat semua orang dapat merasakan kembali jajanan kue tradisional yang ada di Indonesia. 
            </p>
        </div>
        <div class="row justify-content-center">
            <p ></p>
        </div>

        <div class="row justify-content-center">
            <p class = "content">
                <h1>Find us at </h1>
            </p>
        </div>

        <div class="row justify-content-center">
            <p ></p>
        </div>

        <div class="row justify-content-center">
            <img class = "peta" src = "images/maps.png" /> 
            
            <h1 ><br /><br /> </h1>
        </div>
        <div class="row justify-content-center">
            <h1 ><br /> </h1>
        </div>
        <div class="row justify-content-center">
            <h3>Jl. Sutera Boulevard, Mekarsari, Kec. Rajeg, Kabupaten Tangerang, Banten 15540</h3>
        </div>
        <div class="row justify-content-center">
            <h1 ><br /><br /> </h1>
        </div>

        <div class="row justify-content-center">
            <p class = "content">
                <h1>Contact Us</h1>
            </p>
        </div>

        <div class="row justify-content-center"><p ></p></div>

        <div class = "row justify-content-center" id="sosmed">
            <div class = "col-1">
                <a href="https://www.instagram.com/cemalcemil_ttv/"><img  src = "images/ig.png" style= "width: 70%;" /></a>
            </div>
            <div class = "col-1">
                <a href="https://www.facebook.com/profile.php?id=100078643737889"><img  src = "images/fb.png" style= "width: 70%;"/></a>
            </div>
            <div class = "col-1">
                <a href="http://line.me/ti/p/~queenbalqiss"><img  src = "images/line.png" style= "width: 70%;"/></a>
            </div>
            <div class = "col-1">
                <a href="https://api.whatsapp.com/send?phone=6287882002003"><img  src = "images/wa.png" style= "width: 70%;"/></a>
            </div>
        </div>
        <br />
    
        <div class="row justify-content-center"><p ></p></div>
        <br />

        <div class="row justify-content-center">
            <p class = "content">
                <h1>Our Team</h1>
            </p>
        </div>

        <div class="row justify-content-center"><p ></p></div>

        <div class = "row">
            <div class="col-2"></div>
            <div class = "col-2">
                <div class = "card">
                    <img class = "img-card-top rounded"  src = "images/bella.jpg" alt = "card image" />
                    <div class = "card-body">
                        <h5 class="card-title" style= "text-align: center;">Reina</h5>
                    </div>
                </div>
            </div>
            <div class = "col-2">
                <div class = "card">
                    <img class = "img-card-top rounded"  src = "images/leon.jpg" alt = "card image" />
                    <div class = "card-body">
                        <h5 class="card-title" style= "text-align: center;">Kimi</h5>
                    </div>
                </div>
            </div>
            <div class = "col-2">
                <div class = "card">
                    <img class = "img-card-top rounded"  src = "images/melly.jpg" alt = "card image" />
                    <div class = "card-body">
                        <h5 class="card-title" style= "text-align: center;">Hotma</h5>
                    </div>
                </div>
            </div>
            <div class = "col-2">
                <div class = "card">
                    <img class = "img-card-top rounded"  src = "images/juan.jpg" alt = "card image" />
                    <div class = "card-body">
                        <h5 class="card-title" style= "text-align: center;">Juan</h5>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
    <div class="row justify-content-center"><p ></p></div>
    <div class="row justify-content-center"><p ></p></div>
</body>

<?php

include 'footer.php';

?>