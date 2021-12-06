<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця Instagram</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h1>Instagram</h1>

 <?php

    include_once('db.php');

    $sql = 'SELECT * FROM Publication ';
   

    
    if($result = $mysqli->query($sql)) { 
       


        while( $row = $result->fetch_assoc() ){  
        $sql_user = "SELECT * FROM user WHERE id = '".$row['User_id']."'";
         $a = $mysqli->query($sql_user);
         $b = $a->fetch_assoc(); 

            printf('<div class="post">');
            printf('<div class="nickname">%s</div>', $b["Name"]);
            echo '<div class="post_image"><img src="data://image/jpg;base64,'.base64_encode($row['Image']).'"> </div>' ;
            
            printf('<div class="id">id %s</div><div class="like"><p class="like_count"><img src="like.svg"> <span>%s</span> </p></div>',$row['id'] , $row['Likes_count']);
            printf('<div class="post_description"><p><b>%s</b> %s</p></div>', $b["Name"] , $row['Description']);
            printf('</div>'); 
     };

        printf("</table>");
        /*Звільняємо пам'ять*/
        $result->close();
    };

    /*Закриваємо з'єднання*/
    $mysqli->close();
    ?> 

    <br><br><br>

    </div>
      <footer>
    <ul class="options">
        <li class="nav"><a class="a" href="insertIntoStudentsForm.php">Вставити рядок</a></li> 
        <li class="nav"><a class="a" href="updateStudentsForm.php">Змінити рядок</a></li>
        <li class="nav"><a class="a" href="deleteFromStudentsForm.php">Видалити рядок</a></li>
        <li class="nav"><a class="a" href="index.html">На головну</a><br></li>
    </ul>
</footer>
</body>
</html>
