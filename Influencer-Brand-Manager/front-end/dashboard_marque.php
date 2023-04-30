<?php 



session_start();
error_reporting(0);
include 'config.php';

if( empty($_SESSION['id']) )
    {	
header('location: ../index.php');
}


$id = $_SESSION['id'];
$nom = $_SESSION['nom'];



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
            
            <h2 class="dash-title">Bonjour <?= $nom ?></h2>

            
            
            <div class="dash-cards" style="margin-top: 100px;">

                <div class="card-single" style="height: 150px; margin-bottom: 20px;">
                    <div class="card-body">
                        <span class="ti-briefcase"></span>
                        <div>
                            <h5 style="font-size: 27px;"><a href="mes_partenariats_avec_influencer.php">Mes Partenariats</a></h5>
                        </div>
                    </div>
                </div>

                <div class="card-single" style="height: 150px; margin-bottom: 20px;">
                    <div class="card-body">
                        <span class="ti-briefcase"></span>
                        <div>
                            <h5 style="font-size: 27px;"><a href="demande_de_partenariats_from_influncer.php">Voir les demande de Partenariats</a></h5>
                            
                        </div>
                    </div>
                </div>
                
                <div class="card-single" style="height: 150px; margin-bottom: 20px;">
                    <div class="card-body">
                        <span class="ti-reload"></span>
                        <div>
                            <h5 style="font-size: 25px;"><a href="envoyer_message_a_une_influencer.php">Contacter un Influncer</a></h5>
                        </div>
                    </div>
                </div>
                

                <div class="card-single" style="height: 150px; margin-bottom: 20px;">
                    <div class="card-body">
                        <span class="ti-check-box"></span>
                        <div>
                            <h5 style="font-size: 25px;"><a href="cree_un_partenariat.php">Ajouter un partenariat</a></h5>
                        </div>
                    </div>
                </div>

                <div class="card-single" style="height: 150px; margin-bottom: 20px;">
                    <div class="card-body">
                        <span class="ti-briefcase"></span>
                        <div>
                            <h5 style="font-size: 25px;"><a href="demande_suppression_compte_from_marque.php">Suppression de compte</a></h5>
                        </div>
                    </div>
                </div>
            </div>
            
            
            
            
        </main>
        
    </div>
    
</body>
</html>