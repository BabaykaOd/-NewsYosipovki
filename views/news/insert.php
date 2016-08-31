<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Добавить новость</title>
</head>
<body>
<form action="/index.php" method="post">
    <input type="text" name="title">
    <input type="text" name="info_news">
    <?php $_GET['ctrl'] = 'News' ?>
    <?php $_GET['ctrl'] = 'insert' ?>
    <input type="submit" value="Отправить">
</form>
</body>
</html>