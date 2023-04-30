<?php 



session_start();
error_reporting(0);
include 'config.php';

if( empty($_SESSION['id']) ){
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
                    <a href="dashboard_influencer.php">
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
                        <span class="ti-face-smile"></span>
                        <span>Edite De Profil</span>
                    </a>
                </li>
                <li>
                    <a href="voir_nouveau_message.php">
                        <span class="ti-bell"></span>
                        <span>Voir Les Nouveau message</span>
                    </a>
                </li>
                <li>
                    <a href="#">
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
            

            <section class="recent">
                <div class="activity-grid">
                    <div class="activity-card">
                        <h3>Envoie un message a une marques</h3>
                        
                        <div class="table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Comptes Facebook</th>
                                        <th>Comptes Instagram</th>
                                        <th>Envoie</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $ret=mysqli_query($conn,"select * from marque");
                                    $cnt=1;
                                    while($row=mysqli_fetch_array($ret))
                                    {?>
                                    <tr>
                                        <td><?php echo $cnt;?></td>
                                        <td><?php echo $row['nom'];?></td>
                                        <td><?php echo $row['comptes_facebook'];?></td>
                                        <td><?php echo $row['comptes_instagram'];?></td>
                                        <td>
                                            <?php $brandid = $row['id']?>
                                            <?php $brandnom = $row['nom']?>
                                            <?php echo '<h3><a href="zone_pour_envoie_message.php?brandid='.$brandid.'&&brandnom='.$brandnom.'">Envoie un message</a></h3>';?>
                                        </td>
                                    </tr>
                                    <?php $cnt=$cnt+1; }?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>
            </section>
            
            
            
        </main>
        
    </div>
    
</body>
</html>