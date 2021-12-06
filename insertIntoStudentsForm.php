<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Вставка даних</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        include_once("showStudents.php")    
    ?>

    <form action="insertIntoStudents.php" method="post" enctype="multipart/form-data">
        <label>Нікнейм</label><input name="Name" type="text"><br>
        <label>Опис</label><input name="Description" type="text"><br>
        <input  name="Image" type="file" accept="image/jpeg,image/png">
        <input type="submit" value="Вставити рядок">
    </form>



</body>
</html>
