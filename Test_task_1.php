<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test_task_1</title>
</head>

<body>

<?php
    $articleLink = 'https://www.php.net/manual/ru/intro-whatis.php';
    $articleText = file_get_contents('article.txt'); //переменная хранящая исходный текст статьи
    $aclean = preg_replace('/[\x00-\x1F\x7F]/u', '', $articleText);
    $articlePreview = mb_substr($aclean, 0, 200) . "...";

    $words = explode(' ', $articlePreview);
    $co = count($words);

    foreach ($words as $key => $word) {

        if ($key == $co - 3)
            echo '<a href="' . $articleLink . '">';

        if ($key == $co - 1)
            echo $word;
        else
            echo $word . ' ';

        if ($key == $co - 1)
            echo '<a>';
    }
?>

</body>

</html>