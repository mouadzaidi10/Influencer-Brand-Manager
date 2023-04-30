
<?php 



session_start();
error_reporting(0);
include 'config.php';

if( empty($_SESSION['id']) ){
header('location: ../index.php');
}



$id = $_SESSION['id'];
$nom = $_SESSION['nom'];




if (isset($_POST['submit'])) {


	$contenet = $_POST['contenet'];

    $sql = "INSERT INTO message_suppression_compte_from_marque (contene, marque_id)
            VALUES ('$contenet', '$id')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('Message est envoie')</script>";
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
            
            
            
            <h1>Ecrire une demande de suppression de votre compte a admin</h1>

            <form action="" method="POST" style="margin-top: 80px;">
                <textarea name="contenet" id="biography" cols="80" rows="10" placeholder="tapez ici"></textarea>
                <br><br>
                <div>
                    <button style="margin-top: 20px; margin-left: 220px;" name="submit" class="btn">envoie</button>
                </div>
				
            </form>

            
            
            
            
        </main>
        
    </div>
    
</body>
</html>