<?php

// on va creer une connexion a la base de donnees
$host = "localhost";
$user = "root";
$pass = "root";
$dbname = "test";

try
{
        $dsn = "mysql:host=".$host . ";dbname=" . $dbname;
        $pdo = new PDO($dsn , $user, $pass);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        //echo "La connexion a ete etablie avec success";
}

catch(PDOException $e)
{
        echo "Pas  connexion a la base de donnees" . $e->getMessage();
}

if(isset($_POST['ajouter']))
{
    $customer= $_POST['customer'];
    $type = $_POST['type'];
    $date1 = strtr($_REQUEST['date_type'], '/', '-');
    $date = date('Y-m-d', strtotime($date1));
    $time = $_POST['time'];
    $moniteur=$_POST['moniteur'];
    $car=$_POST['car'];


    $sql = "INSERT INTO Date_plan ( customer , type , date_type , time , moniteur , car) VALUES (:customer, :type, :date_type, :time, :moniteur ,:car)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':customer', $customer);
    $stmt->bindParam(':type', $type);
    $stmt->bindParam(':date_type', $date);
    $stmt->bindParam(':time', $time);
    $stmt->bindParam(':moniteur', $moniteur);
    $stmt->bindParam(':car', $car);

    $stmt->execute();
    header('Location:indexDate.php');
}