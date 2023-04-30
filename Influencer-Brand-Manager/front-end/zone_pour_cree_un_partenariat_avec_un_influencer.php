<?php 



session_start();
error_reporting(0);
include 'config.php';

if( empty($_SESSION['id']) ){
header('location: ../index.php');
}



$id = $_SESSION['id'];
$nom = $_SESSION['nom'];


$influencerid = $_GET['influencerid'];
$influencernom = $_GET['influencernom'];



if (isset($_POST['submit'])) {


	$montant = $_POST['montant'];
	$duree = $_POST['duree'];
    $date_experation = $_POST['date_experation'];

    $sql = "INSERT INTO partenariant_from_marque (id_influenceur, id_marque, montant, duree, date_experation)
            VALUES ('$influencerid','$id','$montant', '$duree','$date_experation')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('info bien stoke')</script>";
    } else {
        echo "<script>alert('Woops! Something Wrong Went.')</script>";
    }

}





?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="../css/page.css">
</head>
<body>
    
    <input type="checkbox" id="sidebar-toggle">
    
    <div class="sidebar">
        <div class="sidebar-header">
            <h3 class="brand">
                <span>Dashboard de <?php $brandid ?></span>
            </h3> 
            <label for="sidebar-toggle" class="ti-menu-alt"></label>
        </div>
        
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="dashboard_marque.php">
                        <span class="ti-home"></span>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="profil_marque.php">
                        <span class="ti-clipboard"></span>
                        <span>Profil</span>
                    </a>
                </li>
                <li>
                    <a href="edite_profil_marque.php">
                        <span class="ti-face-smile"></span>
                        <span>Edite De Profil</span>
                    </a>
                </li>
                <li>
                    <a href="voir_message_de_influencer.php">
                        <span class="ti-bell"></span>
                        <span>Voir Les Nouveau message</span>
                    </a>
                </li>
                <li>
                    <a href="envoyer_message_a_une_influencer.php">
                        <span class="ti-face-smile"></span>
                        <span>envoyer message</span>
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <span class="ti-settings"></span>
                        <span>Se déconnecter</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    
    
    <div class="main-content">
        
        <main>


        <h1>Remplire les information de contra avec <?= $influencernom ?></h1>

        <form action="" method="POST" style="margin-top: 80px;">
            <!-- <textarea name="contenet" id="biography" cols="80" rows="10" placeholder="tapez ici"></textarea> -->
            
            
        </form>
            

            <div class="container">
            <form action="" method="POST" class="login-email">

            
                <div class="input-group">
                <label for="">montant : </label>
                    <input type="number" placeholder="montant" name="montant" value="" required>
                </div>
                <div class="input-group">
                    <label for="">la duree du contrat (en jour) : </label>
                    <input type="number" placeholder="la duree du contrat (en joure)" name="duree" value="" required>
                </div>
                <div class="input-group">
                    <label for="">la date d'experation de partenariat : </label>
                    <input type="date" placeholder="la date d'experation de contra" name="date_experation" value="" required>
                </div>
                

            <div>
                <button style="margin-top: 20px; margin-left: 220px;" name="submit" class="btn">cree</button>
            </div>
        </div>
            
        

            
            
            
            
        </main>
        
    </div>
    
</body>
</html>