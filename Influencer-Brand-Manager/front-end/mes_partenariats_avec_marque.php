<?php 



session_start();
error_reporting(0);
include 'config.php';

if( empty($_SESSION['id']) ){
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
                <span>Dashboard de <?php $brandid ?></span>
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
            
            <h2 class="dash-title">Les partenariant de <?= $nom ?></h2>
            
            
            
            
            <section class="recent">
                <div class="activity-grid">
                    <div class="activity-card">
                        <h3>Les partenariant</h3>
                        
                        <div class="table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>From</th>
                                        <th>montant</th>
                                        <th>duree</th>
                                        <th>date d'experation</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $ret = mysqli_query($conn,"select * from partenariant_entre_influencer_et_marque where id_influenceur = '$id'");
                                $cnt=1;
                                while($row = mysqli_fetch_array($ret))
                                {?>
                                <tr>
                                    <td><?php echo $cnt;?></td>
                                    <?php $id_source = $row['id_marque']?>

                                    <?php $ret_sr = mysqli_query($conn,"select * from marque where id ='$id_source'");?>
                                    <?php $row_sr = mysqli_fetch_array($ret_sr)?>

                                    <td><?php echo $row_sr['nom'];?></td>

                                    <td><?php echo $row['montant'] . " DH";?></td>
                                    <td><?php echo $row['duree'] . " joure";?></td>
                                    <td><?php echo $row['date_experation'];?></td>
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