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
        include_once("showStudents.php");    
    ?>

<form action="updateStudents.php" method="post" enctype="multipart/form-data">
        <label>ІД публікації</label><input name="Id" type="text"><br>
        <label>Фотографія</label><input  name="Imuge" type="file" accept="image/jpeg,image/png"><br>
        <label>Опис</label><input name="Description" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>