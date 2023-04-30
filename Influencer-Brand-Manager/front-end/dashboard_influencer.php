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
$prenom = $_SESSION['prenom'];




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
                    <a href="profil_influencer.php">
                        <span class="ti-clipboard"></span>
                        <span>Profil</span>
                    </a>
                </li>
                <li>
                    <a href="edite_profil_influncer.php">
                        <span class="ti-agenda"></span>
                        <span>Modifier Votre Profil</span>
                    </a>
                </li>
                <li>
                    <a href="voir_nouveau_message.php">
                        <span class="ti-bell"></span>
                        <span>Voir Les messages</span>
                    </a>
                </li>
                <li>
                    <a href="envoyer_message.php">
                        <span class="ti-book"></span>
                        <span>Envoyer message</span>
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
            
            <h2 class="dash-title">Bonjour <?= $nom ?> <?= $prenom ?></h2>
            
            <div class="dash-cards" style="margin-top: 100px;">

                <div class="card-single" style="height: 150px; margin-bottom: 20px;">
                    <div class="card-body">
                        <span class="ti-briefcase"></span>
                        <div>
                            <h5 style="font-size: 27px;"><a href="mes_partenariats_avec_marque.php">Mes Partenariats</a></h5>
                        </div>
                    </div>
                </div>

                <div class="card-single" style="height: 150px; margin-bottom: 20px;">
                    <div class="card-body">
                        <span class="ti-check-box"></span>
                        <div>
                            <h5 style="font-size: 27px;"><a href="demande_de_partenariats_from_marque.php">Les demandes des Partenariats</a></h5>
                            
                        </div>
                    </div>
                </div>

                <div class="card-single" style="height: 150px; margin-bottom: 20px;">
                    <div class="card-body">
                        <span class="ti-comment"></span>
                        <div>
                            <h5 style="font-size: 25px;"><a href="envoyer_message.php">Contacter une marque</a></h5>
                        </div>
                    </div>
                </div>

                <div class="card-single" style="height: 150px; margin-bottom: 20px;">
                    <div class="card-body">
                        <span class="ti-briefcase"></span>
                        <div>
                            <h5 style="font-size: 25px;"><a href="cree_un_partenariat_avec_marque.php">Ajouter une partenariat</a></h5>
                        </div>
                    </div>
                </div>


                <div class="card-single" style="height: 150px; margin-bottom: 20px;">
                    <div class="card-body">
                        <span class="ti-briefcase"></span>
                        <div>
                            <h5 style="font-size: 25px;"><a href="demande_suppression_compte_from_influencer.php">Suppression de compte</a></h5>
                        </div>
                    </div>
                </div>

            </div>
            
            
        </main>
        
    </div>
    
</body>
</html>