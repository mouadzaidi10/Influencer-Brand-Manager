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
    $prenom = $_SESSION['prenom'];
    $age = $_SESSION['age'];
    $email = $_SESSION['email'];
    $comptes_facebook = $_SESSION['comptes_facebook'];
    $comptes_instagram = $_SESSION['comptes_instagram'];


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
                    <a href="dashboard_influencer.php">
                        <span class="ti-home"></span>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="ti-clipboard"></span>
                        <span>Profil</span>
                    </a>
                </li>
                <li>
                    <a href="edite_profil_influncer.php">
                        <span class="ti-face-smile"></span>
                        <span>Modifier Votre Profil</span>
                    </a>
                </li>
                <li>
                    <a href="voir_nouveau_message.php">
                        <span class="ti-bell"></span>
                        <span>Voir Les Nouveau message</span>
                    </a>
                </li>
                <li>
                    <a href="envoyer_message.php">
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
            
            <h2 class="dash-title">Profil de <?= $nom ?> <?= $prenom ?></h2>
            




            <div class="tab-pane" id="edit">
                    <form>
                        <table>
                            <tr>
                            <div class="form-group row">
                                <td><label class="col-lg-3 col-form-label form-control-label">Nom</label></td>
                                <div class="col-lg-9">
                                <td><input class="form-control" type="text" value="<?= $nom?>" readonly></td>
                                </div>
                            </div>
                            </tr>

                            <tr>
                            <div class="form-group row">
                            <td><label class="col-lg-3 col-form-label form-control-label">Prenom</label></td>
                                <div class="col-lg-9">
                                <td><input class="form-control" type="text" value="<?= $prenom?>" readonly></td>
                                </div>
                            </div>
                            </tr>

                            <tr>
                            <div class="form-group row">
                            <td><label class="col-lg-3 col-form-label form-control-label">Age</label></td>
                                <div class="col-lg-9">
                                <td><input class="form-control" type="number" value="<?= $age?>" readonly></td>
                                </div>
                            </div>
                            </tr>

                            <tr>
                            <div class="form-group row">
                            <td><label class="col-lg-3 col-form-label form-control-label">Email</label></td>
                                <div class="col-lg-9">
                                <td><input class="form-control" type="email" value="<?= $email?>" readonly></td>
                                </div>
                            </div>
                            </tr>

                            <tr>
                            <div class="form-group row">
                            <td><label class="col-lg-3 col-form-label form-control-label">Comptes Facebook</label></td>
                                <div class="col-lg-9">
                                <td><input class="form-control" type="text" value="<?= $comptes_facebook?>" readonly></td>
                                </div>
                            </div>
                            </tr>

                            <tr>
                            <div class="form-group row">
                            <td><label class="col-lg-3 col-form-label form-control-label">Comptes Instagram</label></td>
                                <div class="col-lg-9">
                                <td><input class="form-control" type="text" value="<?= $comptes_instagram?>" readonly></td>
                                </div>
                            </div>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
      </div>
      </div>
        
    </div>
</div>




            
            
        </main>
        
    </div>
    
</body>
</html>