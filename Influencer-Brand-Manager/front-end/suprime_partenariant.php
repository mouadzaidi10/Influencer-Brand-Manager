<?php 



session_start();
error_reporting(0);
include 'config.php';

if( empty($_SESSION['id']) ){
header('location: ../index.php');
}


    $id_influenceur = $_GET['id_influenceur'];
    $id_marque = $_GET['id_marque'];

    $sql = "DELETE FROM partenariant_from_marque WHERE id_influenceur = $id_influenceur AND id_marque = $id_marque";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Wow! partenariant est suprimer.')</script>";
        header('location: mes_partenariats.php');
    } else {
        echo "<script>alert('Woops! Something Wrong Went.')</script>";
        header('location: mes_partenariats.php');
    }



?>