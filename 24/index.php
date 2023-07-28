<?php
    if(!empty($_FILES)) {
        echo $_FILES;

        // Переместить загруженный файл в нужную папку
        move_uploaded_file($_FILES['file']['tmp_name'], 'upload/' . $_FILES['file']['name']);
    }
    // $_FILES - все файлы загруженные через формы попадают в суперглобальную переменную $_FILES
    // суперглобальные видны и доступы везде и внутри функций

    // $_SERVER - вся информация о сервере

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- По умолчанию форма не может отправлять файлы, нужен атрибут enctype="multipart/form-data"


    -->
    <form action="/24/index.php" enctype="multipart/form-data">
        <input type="file" name="file">
        <button>Отправить</button>
    </form>
</body>
</html>