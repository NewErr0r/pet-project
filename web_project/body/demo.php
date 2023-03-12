<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!---    <link rel="stylesheet" href="../css/style.css"> !--->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>DEMO</title>
</head>
<body>

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
  
    <?php require "../blocks/header.php" ?>    

<div class="d-flex flex-wrap mx-4 mb-4">
  <div class="card col-md-4 rounded-3 shadow-sm flex-fill">
    <div class="card-header py-3">
      <h4 class="my-0 fw-normal">Модуль 1: Выполнение работ по проектированию сетевой инфраструктуры</h4>
    </div>
    <div class="card-body d-flex align-items-center justify-content-center">
      <img src="../img/tux.png" class="img-thumbnail img-fluid" style="display: block; margin-left: auto; margin-right: auto; max-width: 300%; max-height: 300px;">         
    </div>
    <a href="DEMO/module_1.php" class="w-100 btn btn-lg btn-outline-primary mt-3">Подробнее</a> 
  </div>

  <div class="card col-md-4 rounded-3 shadow-sm flex-fill">
    <div class="card-header py-3">
      <h4 class="my-0 fw-normal">Модуль 2: Организация сетевого администрирования</h4>
    </div>
    <div class="card-body d-flex align-items-center justify-content-center">
      <img src="../img/tux.png" class="img-thumbnail img-fluid" style="display: block; margin-left: auto; margin-right: auto; max-width: 300%; max-height: 300px;">         
    </div>
    <a href="DEMO/module_2.php" class="w-100 btn btn-lg btn-outline-primary mt-3">Подробнее</a> 
  </div>

  <div class="card col-md-4 rounded-3 shadow-sm flex-fill">
    <div class="card-header py-3">
      <h4 class="my-0 fw-normal">Модуль 3: Эксплуатация объектов сетевой инфраструктуры</h4>
    </div>
    <div class="card-body d-flex align-items-center justify-content-center">
      <img src="../img/tux.png" class="img-thumbnail img-fluid" style="display: block; margin-left: auto; margin-right: auto; max-width: 300%; max-height: 300px;">         
    </div>
    <a href="DEMO/module_3.php" class="w-100 btn btn-lg btn-outline-primary mt-3">Подробнее</a> 
  </div>
</div>

    <p><a href="../pages/page_6.php" class="w-100 btn btn-lg btn-outline-primary">Назад:</a></p>

    <?php require "../blocks/footer.php" ?>
</body>
</html>
