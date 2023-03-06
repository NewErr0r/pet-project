<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>39WSI</title>
</head>
<body>
    <?php require "../blocks/header.php" ?>    
    <div class="d-flex flex-wrap">
        <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
                <h4 class="my-0 fw-normal">DEMO</h4><br>
            </div>
            <div class="card-body">
                <img src="../img/demo.jpg" class="img-thumbnail">
                <a href="../body/demo.php" class="w-100 btn btn-lg btn-outline-primary">Подробнее</a>          
            </div>
        </div>

        <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Модуль С: Автоматизация развёртывания приложения</h4>
            </div>
            <div class="card-body">
                <img src="../img/module_C.png" class="img-thumbnail">
                <a href="../body/module_c.php" class="w-100 btn btn-lg btn-outline-primary">Подробнее</a>          
            </div>
        </div>       
    </div>

    <p><a href="../index.php" class="w-100 btn btn-lg btn-outline-primary">Назад:</a></p>

    <?php require "../blocks/footer.php" ?>
</body>
</html>
