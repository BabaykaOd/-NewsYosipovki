<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Новости Йосиповки</title>
</head>
<body>

<?php foreach ($items as $item): ?>
    <article>
        <h1><?php echo $item->title; ?></h1>
        <div><?php echo $item->info_news; ?></div>
        <div><?php echo $item->id_news; ?></div>
        <div><?php echo $item->author_id; ?></div>
    </article>
<?php endforeach; ?>

</body>
</html>