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
    <form action="/App/Controllers/add.php" method = "POST">
        <input type="text" name = "name">
        <input type="text" name = "text">
        <input type="submit">
    </form>
    <footer>&copy; Алексей Калугин</footer>
</div>
</body>
</html>