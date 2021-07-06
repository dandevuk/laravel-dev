<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="app.css">
<title>Posts</title>
<body>
    <?php foreach ($posts as $post) : ?>
        <article>
            <?= $post ?>
        </article>
    <?php endforeach ?>
</body>
</html>