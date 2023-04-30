<?php 



session_start();
error_reporting(0);
include 'config.php';

if( empty($_SESSION['id']) ){
header('location: ../index.php');
}



if(isset($_GET['id'])){

    $marque_id=$_GET['id'];
    
    $msg = mysqli_query($conn,"delete from marque where id='$marque_id'");

    $msg2 = mysqli_query($conn,"delete from message_suppression_compte_from_marque where marque_id='$marque_id'");

    $msg3 = mysqli_query($conn,"delete from partenariant_entre_influencer_et_marque where id_marque='$marque_id'");

    $msg4 = mysqli_query($conn,"delete from message_de_marque where marque_id='$influencer_id'");

    $msg5 = mysqli_query($conn,"delete from message_de_influencer where marque_id='$influencer_id'");

    if($msg && $msg2 && $msg3 && $msg4 && $msg5)
    {
    echo "<script>alert('Data deleted');</script>";
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
            
            <h2 class="dash-title">Les Demende de supprision de compte des Marques</h2>
            
            
            
            
            <section class="recent">
                <div class="activity-grid">
                    <div class="activity-card">
                        <h3>Les message</h3>
                        
                        <div class="table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom de marque</th>
                                        <th>Message</th>
                                        <th>Delet</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $ret = mysqli_query($conn,"select * from message_suppression_compte_from_marque");
                                $cnt=1;
                                while($row = mysqli_fetch_array($ret))
                                {?>
                                <tr>
                                    <td><?php echo $cnt;?></td>
                                    <?php $marque_id = $row['marque_id']?>
                                    

                                    <?php $ret_sr = mysqli_query($conn,"select * from marque where id ='$marque_id'");?>
                                    <?php $row_sr = mysqli_fetch_array($ret_sr)?>


                                    <td><?php echo $row_sr['nom'];?></td>

                                    <td><?php echo $row['contene'];?></td>
                                    <td>
                                        <a href="demande_de_supprision_de_compte_marque.php?id=<?php echo $marque_id;?>" onClick="return confirm('Do you really want to delete');">Delet</a>
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