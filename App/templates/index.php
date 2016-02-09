<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class = "container">
<header><h1>Hello, world!</h1></header>
<nav>
    <p><a href="/../index.php">На главную</a></p>
    <p><a href="/App/Controllers/admin.php">Админка</a></p>
</nav>

<?php foreach($this->users as $user): ?>
<div class = "panel panel-default">
    <div class = "panel-heading"><?php echo $user->name; ?></div>
    <div class = "panel-body"><?php echo $user->email; ?></div>
</div>

<?php endforeach; ?>

<?php foreach ($news as $article): ?>
    <article>
        <h2><a href = "/App/Controllers/article.php?id=<?php echo $article->id; ?>"><?php echo $article->name; ?></a></h2>
        <div><?php echo $article->text; ?></div>
    </article>
    <p>Автор - <?php echo $article->author; ?></p>
<?php endforeach; ?>

</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>