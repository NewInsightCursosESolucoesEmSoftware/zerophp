<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $this->title ?></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">

            <?=app\lib\Mensagem::getMessage()?>
            
            <?php include $this->view ?>

        </div>

    </body>
</html>