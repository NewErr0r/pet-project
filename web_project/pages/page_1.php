<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />

    <title>Linux</title>
</head>
<body>
    <?php require "../blocks/header.php" ?>

    <div class="container-fluid">
        <div class="row">
            <?php 
                $words = array("Основы администрирования", "Работа в сетях", "Хранение данных", "Эксплуатация", "Справочник");
                $word_index = 0;
                for($i = 0; $i <5; $i++):
                    $word = $words[$word_index];
                    $word_index++;
                    if($word_index >= count($words)){
                        $word_index = 0;
                    }
            ?>
            <div class="col-md-4 min-vw-33">
                <div class="card mb-4 rounded-3 shadow-sm">
                  <div class="card-header py-3 d-flex">
                    <h4 class="my-0 fw-normal flex-grow-1 text-truncate"><?php echo $word ?></h4>
                  </div>
                  <div class="card-body">
                    <img src="../img/<?php echo ($i + 11)?>.jpg" class="img-thumbnail" style="display: block; margin-left: auto; margin-right: auto; max-width: 100%; max-height: 100%; object-fit: cover; width: 500px; height: 300px;"> 
                  </div>
                  <a href="page_1/page_1_<?php echo $i + 1 ?>.php" class="w-100 btn btn-lg btn-outline-primary">Подробнее</a>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>


    <p><a href="../index.php" class="w-100 btn btn-lg btn-outline-primary">Назад:</a></p>

    <?php require "../blocks/footer.php" ?>
</body>
</html>
