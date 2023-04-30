<?php 



session_start();
error_reporting(0);
include 'config.php';

if( empty($_SESSION['id']) )
    {	
header('location: ../index.php');
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
                    <a href="dashboard_admin.php">
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
            
            <section class="recent">
                <div class="activity-grid">
                    <div class="activity-card">
                        <h3>Tous Les Influincer</h3>
                        
                        <div class="table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom De Influenceur</th>
                                        <th>Nom De Marque</th>
                                        <th>Montant</th>
                                        <th>Durée</th>
                                        <th>Date d'expiration</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $ret=mysqli_query($conn,"select * from partenariant_entre_influencer_et_marque");
                                $cnt=1;
                                while($row=mysqli_fetch_array($ret))
                                {?>
                                <tr>
                                    <td><?php echo $cnt;?></td>
                                    <?php $id_influenceur = $row['id_influenceur'];?>

                                    <?php $ret_in=mysqli_query($conn,"select * from influencer where id = '$id_influenceur'");
                                          $row_in=mysqli_fetch_array($ret_in)
                                    ?>


                                    <?php $id_marque = $row['id_marque'];?>
                                    <?php $ret_ma=mysqli_query($conn,"select * from marque where id = '$id_marque'");
                                          $row_ma=mysqli_fetch_array($ret_ma)
                                    ?>
                                    

                                    <td><?php echo $row_in['nom'];?> <?php echo $row_in['prenom'];?></td>
                                    <td><?php echo $row_ma['nom'];?></td>
                                    <td><?php echo $row['montant']." MAD";?></td>
                                    <td><?php echo $row['duree']." jours";?></td>
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