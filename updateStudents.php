<?php

include_once('db.php');



$id = $_POST['Id'];
$pib = $_POST['Description'];
$image = addslashes(file_get_contents($_FILES['Imuge']['tmp_name']));

$sql = "UPDATE publication SET Description ='$pib', Image ='$image' WHERE id='$id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }




include_once("showStudents.php");
?>
