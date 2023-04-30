<?php 



session_start();
error_reporting(0);
include 'config.php';

if( empty($_SESSION['id']) ){
header('location: ../index.php');
}



    $id_influenceur = $_GET['id_influenceur'];
    $id_marque = $_GET['id_marque'];
    $montant = $_GET['montant'];
    $duree = $_GET['duree'];
    $date_experation = $_GET['date_experation'];


    $sql = "INSERT INTO partenariant_entre_influencer_et_marque (id_influenceur, id_marque, montant, duree, date_experation)
			VALUES ('$id_influenceur', '$id_marque', '$montant', '$duree', '$date_experation')";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Wow! partenariant est bien enresitre.')</script>";
        $sql1 = "DELETE FROM partenariant_from_marque WHERE id_influenceur = $id_influenceur AND id_marque = $id_marque";
        $result = mysqli_query($conn, $sql1);
        header('location: demande_de_partenariats_from_marque.php');
    } else {
        echo "<script>alert('Woops! Something Wrong Went.')</script>";
        $sql1 = "DELETE FROM partenariant_from_marque WHERE id_influenceur = $id_influenceur AND id_marque = $id_marque";
        $result = mysqli_query($conn, $sql1);
        header('location: demande_de_partenariats_from_marque.php');
    }

    




?>