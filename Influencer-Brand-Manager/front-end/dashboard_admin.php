<?php 



session_start();
error_reporting(0);
include 'config.php';

if( empty($_SESSION['id']) )
    {	
header('location: ../index.php');
}


$id = $_SESSION['id'];
$email = $_SESSION['email'];


$sql = "SELECT COUNT(id) AS 'Total Influencer' FROM influencer";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$Totale_influencer = $row['Total Influencer'];


$sql = "SELECT COUNT(id) AS 'Total Marque' FROM marque";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$Totale_marque = $row['Total Marque'];


$sql = "SELECT COUNT(id) AS 'Total Partenariant' FROM partenariant_entre_influencer_et_marque";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$Totale_Partenariant = $row['Total Partenariant'];





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
                <span>Dashboard</span>
            </h3> 
            <label for="sidebar-toggle" class="ti-menu-alt"></label>
        </div>
        
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="#">
                        <span class="ti-home"></span>
                        <span>Home</span>
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
            
            <h2 class="dash-title">Bonjour Admin</h2>
            
            <div class="dash-cards" style="margin-top: 100px;">
                
                <div class="card-single" style="height: 150px; margin-bottom: 20px;">
                    <div class="card-body">
                        <div>
                            <h5>Nombre des marques registre est : <span><?= $Totale_marque ?></span></h5>
                        </div>
                    </div>
                    <div class="card-footer">
                        <h5 style="font-size: 27px;"><a href="manage_marque.php">Voir détails</a></h5>
                    </div>
                </div>
                
                <div class="card-single" style="height: 150px; margin-bottom: 20px;">
                    <div class="card-body">
                        <div>
                            <h5>Nombre des influncer registre est : <span><?= $Totale_influencer ?></span></h5>
                        </div>
                    </div>
                    <div class="card-footer">
                        <h5 style="font-size: 27px;"><a href="manage_influencer.php">Voir détails</a></h5>
                    </div>
                </div>

                <div class="card-single" style="height: 150px; margin-bottom: 20px;">
                    <div class="card-body">
                        <div>
                            <h5>Nombre des partenariant entre l'influencer et la marque  est : <span><?= $Totale_Partenariant ?></span></h5>
                        </div>
                    </div>
                    <div class="card-footer">
                        <h5 style="font-size: 27px;"><a href="manage_Partenariant.php">Voir détails</a></h5>
                    </div>
                </div>

                <div class="card-single" style="height: 150px; margin-bottom: 20px;">
                    <div class="card-body">
                        <div>
                            <h5>Voir les demandes de suppression de compte de influencer</span></h5>
                        </div>
                    </div>
                    <div class="card-footer">
                        <h5 style="font-size: 27px;"><a href="demande_de_supprision_de_compte_influncer.php">Voir détails</a></h5>
                    </div>
                </div>

                <div class="card-single" style="height: 150px; margin-bottom: 20px;">
                    <div class="card-body">
                        <div>
                            <h5>Voir les demandes de suppression de compte de marque</span></h5>
                        </div>
                    </div>
                    <div class="card-footer">
                        <h5 style="font-size: 27px;"><a href="demande_de_supprision_de_compte_marque.php">Voir détails</a></h5>
                    </div>
                </div>
            </div>
            
            
            
            
        </main>
        
    </div>
    
</body>
</html>