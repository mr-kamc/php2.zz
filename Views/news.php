<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Новости</title>
    <link href="/../style/style.css" rel="stylesheet">
</head>
<body>
<div id="container">
    <header><h1>Новости</h1></header>
    <nav>
        <p><a href="/../index.php">На главную</a></p>
        <p><a href="/App/Controllers/admin.php">Админка</a></p>
    </nav>
    <?php foreach ($news as $article): ?>
    <article>
        <h2><a href = "/App/Controllers/article.php?id=<?php echo $article->id; ?>"><?php echo $article->name; ?></a></h2>
        <div><?php echo $article->text ?></div>
    </article>
    <?php endforeach; ?>
    <footer>&copy; Алексей Калугин</footer>
</div>
</body>
</html>