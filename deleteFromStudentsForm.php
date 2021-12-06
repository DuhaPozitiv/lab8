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

<form class="form" action="deleteFromStudents.php" method="post">
        <label >ІД публікації яку видаляємо</label>
        <input class="form_line" name="id" type="text"><br>
        <input type="submit" value="Видалити рядок">
</form>

</body>
</html>