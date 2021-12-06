<?php

include_once('db.php');

$user = "SELECT * FROM user";
$pib = $_POST['Name'];
$gr = $_POST['Description']; 
$image = addslashes(file_get_contents($_FILES['Image']['tmp_name']));
$sql_user = NULL;

if ( $t = $mysqli->query($user)) 
{   
    $nickname = False ;
    while ($a = $t->fetch_assoc() ) {

        
        if ($a['Name'] == $pib) {
            printf('Nickname : %s занятый <br><br>', $a['Name'] ) ;
            $nickname = True;
        }
        
    }
    if (!$nickname) {
        $sql_user = "INSERT INTO user (Name) VALUES ('$pib')";
    }
}
$sql = "INSERT INTO Publication (Description, Image) VALUES ('$gr', '$image')";



    if ($mysqli->query($sql_user)) {
    $a = $mysqli->query($user);
     while ($b = $a->fetch_assoc()) {
       if ($b['Name'] == $pib) {
           $id = $b['id'];
           $sql = "INSERT INTO Publication (Description, Image, User_id) VALUES ('$gr', '$image', '$id')";
           $mysqli->query($sql);
        } 
    }
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


include_once("showStudents.php");

?>
