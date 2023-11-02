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
   <title>Order</title>

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



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />

</head>

<br />

<div class="container">
    <div class="row">

        <div class="col">
            <img id="profile-pic" class="img-fluid" src="images/banner.png" alt="Banner" />
        </div>
    </div> <br />

    <div class="row">
        <div class="col-3">
            <div class="card">
                <img class="img-card-top" src="images/pie.jpg" alt="card image" />
                <div class="card-body">
                    <h5 class="card-title">Pie Susu</h5>
                    <p class="card-text center">
                        Pie susu merupakan makanan khas Bali yang memiliki tekstur renyah di pinggir 
                        dan lembut di tengah. Isian pada pie terdapat buah-buahan dan daging.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <img class="img-card-top" src="images/risoles.jpg" alt="card image" />
                <div class="card-body">
                    <h5 class="card-title">Risoles</h5>
                    <p class="card-text center">
                        Risoles adalah pastri berisi daging, biasanya daging cincang, dan sayuran yang 
                        dibungkus dadar, dan digoreng setelah dilapisi tepung panir dan kocokan telur ayam.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <img class="img-card-top rounded" src="images/ondeonde.jpg" alt="card image" />
                <div class="card-body">
                    <h5 class="card-title">Onde-onde</h5>
                    <p class="card-text center">
                        Onde-Onde merupakan jajanan pasar yang mempunyai bentuk bulat berwarna 
                        keemasan dan ditaburi biji wijen. Onde-Onde berisikan kacang hijau yang manis.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <img class="img-card-top" src="images/serabi.jpg" alt="card image" />
                <div class="card-body">
                    <h5 class="card-title">Serabi</h5>
                    <p class="card-text center">
                        Serabi merupakan kue tradisional yang memiliki kerak tipis kecoklatan pada bagian pinggirnya. 
                        Serabi akan disajikan dengan santan kental yang dituangkan saat serabi dalam keadaan setengah matang.

                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<br /><br />

<?php
    include 'footer.php';
?>