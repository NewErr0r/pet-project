<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--    <link rel="stylesheet" href="css/style.css"> !-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>sysaHelper</title>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(92777923, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/92777923" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
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
          <img src="img/<?php echo ($i + 1)?>.jpg" class="img-thumbnail w-100" style="display: block; margin-left: auto; margin-right: auto; max-width: 100%; max-height: 100%; object-fit: cover; width: 600px; height: 350px;"> 
        </div>
        <a href="pages/page_<?php echo $i + 1 ?>.php" class="w-100 btn btn-lg btn-outline-primary">Подробнее</a>
      </div>
    </div>
  <?php endfor; ?>
</div>
    <?php require "blocks/footer.php" ?>
</body>
</html>
