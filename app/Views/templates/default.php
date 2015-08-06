
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title><?= App::getInstance()->title;?></title>

        <!-- Bootstrap core CSS -->
        <link href="/public/css/bootstrap.css" rel="stylesheet">

    </head>

    <body>

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Project name</a>
            </div>
            <?php if(!$_SESSION): ?>
                <div class="navbar-right">
                    <a class="navbar-brand" href="?p=users.login">Login</a>
                </div>

            <?php else: ?>
                <div class="navbar-right">
                    <a class="navbar-brand" href="?p=users.disconnect">Disconnect</a>
                <!--</div>
                <div class="navbar-right">-->
                    <a class="navbar-brand" href="?p=admin.posts.index">Admin</a>
                </div>
            <?php endif; ?>
            
        </div>
    </nav>

    <div class="container">

        <div class="starter-template" style="padding-top: 100px;">
            <?= $content; ?>
        </div>

    </div><!-- /.container -->
    </body>
</html>