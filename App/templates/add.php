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
    <?php if(isset($errors)): ?>
    <?php foreach($errors as $el):; ?>
            <div class = "alert alert-danger">
                <?php echo $el->getMessage(); ?>
            </div>
    <?php endforeach; ?>
    <?php endif; ?>
    <header><h1>Hello, world!</h1></header>
    <nav>
        <p><a href="/">На главную</a></p>
        <p><a href="Controllers/Admin/Index">Админка</a></p>
    </nav>

   <!-- <form action="/App/Controllers/add.php" method = "POST">-->
    <form action="/Admin/Save" method = "POST">
        <input type="text" name = "name">
        <input type="text" name = "text">
        <input type="submit">
    </form>

</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html