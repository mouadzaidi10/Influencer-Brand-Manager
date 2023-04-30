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
$logo = $_SESSION['logo'];
$chiffre_affaire = $_SESSION['chiffre_affaire'];
$email = $_SESSION['email'];
$comptes_facebook = $_SESSION['comptes_facebook'];
$comptes_instagram = $_SESSION['comptes_instagram'];



if (isset($_POST['submit'])) {

	$new_nom = $_POST['nom'];
    $new_logo = $_POST['logo'];
    $new_chiffre_affaire = $_POST['chiffre_affaire'];
    $new_email = $_POST['email'];
    $new_comptes_facebook = $_POST['comptes_facebook'];
    $new_comptes_instagram = $_POST['comptes_instagram'];




    $sql = "UPDATE marque SET nom = '$new_nom', logo = '$new_logo', chiffre_affaire = '$new_chiffre_affaire', email = '$new_email', comptes_facebook = '$new_comptes_facebook', comptes_instagram = '$new_comptes_instagram' WHERE id = $id";
   
    // $result = mysqli_query($conn, $sql);

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Record updated successfully')</script>";
    } else {
        echo "<script>alert('Error updating record:  . $conn->error')</script>";
    }


    $nom = $_POST['nom'];
    $logo = $_POST['logo'];
    $chiffre_affaire = $_POST['chiffre_affaire'];
    $email = $_POST['email'];
    $comptes_facebook = $_POST['comptes_facebook'];
    $comptes_instagram = $_POST['comptes_instagram'];

    $_SESSION['nom'] = $nom;
    $_SESSION['logo'] = $logo;
    $_SESSION['chiffre_affaire'] = $chiffre_affaire;
    $_SESSION['email'] = $email;
    $_SESSION['comptes_facebook'] = $comptes_facebook;
    $_SESSION['comptes_instagram'] = $comptes_instagram;
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
                <span>Dashboard</span>
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
                    <a href="#">
                        <span class="ti-face-smile"></span>
                        <span>Modifier Votre Profil</span>
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
            
            <h2 class="dash-title">Edite profil de <?= $nom ?></h2>
            




            <div class="tab-pane" id="edit">
                    <form class="mouad" method="POST">
                        <table>
                            <tr>
                                <div class="form-group row">
                                    <td><label class="Nom">Nom</label></td>
                                    <div class="col-lg-9">
                                        <td><input class="form-control" type="text" name="nom" value="<?= $nom?>"></td>
                                    </div>
                                </div>
                            </tr>

                            <tr>
                            <div class="form-group row">
                                <td><label class="col-lg-3 col-form-label form-control-label">Logo</label></td>
                                <div class="col-lg-9">
                                    <td><input class="form-control" type="file" name="logo" value="<?= $logo?>"></td>
                                </div>
                            </div>
                            </tr>

                            <tr>
                            <div class="form-group row">
                                <td><label class="col-lg-3 col-form-label form-control-label">Chiffre d'affaire</label></td>
                                <div class="col-lg-9">
                                    <td><input class="form-control" type="number" name="chiffre_affaire" value="<?= $chiffre_affaire?>"></td>
                                </div>
                            </div>
                            </tr>

                            <tr>
                            <div class="form-group row">
                                <td><label class="col-lg-3 col-form-label form-control-label">Email</label>
                                <div class="col-lg-9">
                                    <td><input class="form-control" type="email" name="email" value="<?= $email?>"></td>
                                </div>
                            </div>
                            </tr>

                            <tr>
                            <div class="form-group row">
                                <td><label class="col-lg-3 col-form-label form-control-label">Comptes Facebook</label></td>
                                <div class="col-lg-9">
                                    <td><input class="form-control" type="text" name="comptes_facebook" value="<?= $comptes_facebook?>"></td>
                                </div>
                            </div>
                            </tr>

                            <tr>
                            <div class="form-group row">
                                <td><label class="col-lg-3 col-form-label form-control-label">Comptes Instagram</label></td>
                                <div class="col-lg-9">
                                    <td><input class="form-control" type="text" name="comptes_instagram" value="<?= $comptes_instagram?>"></td>
                                </div>
                            </div>
                            </tr>

                            <div class="input-group">
                                <td><button name="submit" class="btn">Register</button></td>
                            </div>
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