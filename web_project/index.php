<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--    <link rel="stylesheet" href="css/style.css"> !-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>sysaHelper</title>
</head>
<body>
    <?php require "blocks/header.php" ?>    
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 align-items-stretch">
  <?php 
    $words = array("Linux", "Сети", "Windows", "Автоматизация", "DevOps", "39WSI");
    $word_index = 0;
    for($i = 0; $i <6; $i++):
      $word = $words[$word_index];
      $word_index++;
      if($word_index >= count($words)){
          $word_index = 0;
      }
  ?>
    <div class="col mb-4">
      <div class="card rounded-3 shadow-sm h-100">
        <div class="card-header py-3">
          <h4 class="my-0 fw-normal"><?php echo $word ?></h4>
        </div>
        <div class="card-body">
          <img src="img/<?php echo ($i + 1)?>.jpg" class="img-thumbnail w-100"> 
        </div>
        <a href="pages/page_<?php echo $i + 1 ?>.php" class="w-100 btn btn-lg btn-outline-primary">Подробнее</a>
      </div>
    </div>
  <?php endfor; ?>
</div>
    <?php require "blocks/footer.php" ?>
</body>
</html>
