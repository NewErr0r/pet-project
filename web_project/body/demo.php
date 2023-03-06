<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>DEMO</title>
</head>
<body>
    <?php require "../blocks/header.php" ?>    

    <div class="d-flex flex-wrap">
        
        <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Модуль 1: Выполнение работ по проектированию сетевой инфраструктуры</h4><br>
            </div>
            <div class="card-body">
                <img src="../img/tux.png" class="img-thumbnail" style="display: block; margin-left: auto; margin-right: auto; max-width: 500px; max-height: 500px;"">
                <a href="DEMO/module_1.php" class="w-100 btn btn-lg btn-outline-primary">Подробнее</a>          
            </div>
        </div>

        <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Модуль 2: Организация сетевого администрирования</h4><br>
            </div>
            <div class="card-body">
                <img src="../img/tux.png" class="img-thumbnail" style="display: block; margin-left: auto; margin-right: auto; max-width: 500px; max-height: 500px;">
                <a href="DEMO/module_2.php" class="w-100 btn btn-lg btn-outline-primary">Подробнее</a>          
            </div>
        </div>

        <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Модуль 3: Эксплуатация объектов сетевой инфраструктуры</h4><br>
            </div>
            <div class="card-body">
                <img src="../img/tux.png" class="img-thumbnail" style="display: block; margin-left: auto; margin-right: auto; max-width: 500px; max-height: 500px;">
                <a href="DEMO/module_3.php" class="w-100 btn btn-lg btn-outline-primary">Подробнее</a>          
            </div>
        </div>

    </div>   

    <p><a href="../pages/page_6.php" class="w-100 btn btn-lg btn-outline-primary">Назад:</a></p>

    <?php require "../blocks/footer.php" ?>
</body>
</html>
