<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />

    <title>Основы администрирования</title>
</head>
<body>
    <?php require "../../blocks/header.php" ?>

    <?php
    $suggestions1 = array(
        array("name" => "Active Directory", "username" => "active_directory"),
        array("name" => "FreeIPA", "username" => "freeipa"),
        array("name" => "DNS", "username" => "dns"),
        array("name" => "DHCP", "username" => "dhcp"),
        array("name" => "NTP", "username" => "ntp"),
        array("name" => "SSH", "username" => "ssh")
    );
    ?>
    
    <div class="my-1 p-4 bg-body rounded shadow-sm">
        <h6 class="border-bottom pb-2 mb-0" style="font-size: 20px;">
            <a href="#" id="toggle-btn-1">Базовые инфруструктурные службы:</a>
        </h6>
        <div id="suggestions-container-1" style="display: none;">
            <?php foreach($suggestions1 as $suggestion1): ?>
            <div class="d-flex text-muted pt-3">
                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                    <div class="d-flex justify-content-between">
                        <strong class="text-dark" style="font-size: 20px;"><?php echo $suggestion1['name']; ?></strong>
                        <a href="instructions/<?php echo $suggestion1['username']; ?>.php">Посмотреть</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>


    <?php
    $suggestions2 = array();
    for ($i = 0; $i < 7; $i++) {
      $suggestions2[$i] = array("name" => "", "username" => "");
    }
    $suggestions2[0]["name"] = "SMB";
    $suggestions2[1]["name"] = "NFS";
    $suggestions2[2]["name"] = "FTP";
    $suggestions2[3]["name"] = "iSCSI";
    $suggestions2[4]["name"] = "LVM";
    $suggestions2[5]["name"] = "ownCloud";
    $suggestions2[6]["name"] = "Nextcloud";
    ?>

    <div class="my-1 p-4 bg-body rounded shadow-sm">
        <h6 class="border-bottom pb-2 mb-0" style="font-size: 20px;">
            <a href="#" id="toggle-btn-2">Хранение данных:</a>
        </h6>
        <div id="suggestions-container-2" style="display: none;">
            <?php foreach($suggestions2 as $suggestion2): ?>
            <div class="d-flex text-muted pt-3">
                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                    <div class="d-flex justify-content-between">
                        <strong class="text-dark" style="font-size: 20px;"><?php echo $suggestion2['name']; ?></strong>
                        <a href="#">Посмотреть</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
   

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../../js/page_1/page_1_1.js"></script>

    <?php require "../../blocks/footer.php" ?>
</body>
</html>
