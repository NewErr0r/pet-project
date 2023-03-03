<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIH0JoBb" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script src="../../js/demo.js"></script>
    <title>Module_1</title>
</head>
<body>
    <?php require "../../blocks/header.php" ?>    

    <div class="d-flex flex-wrap">
    
        <div class="card mb-4 rounded-3 shadow-sm" style="width: 100%;">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
            <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"></use></svg>
        </div>
            <h3 class="fs-2">1. Выполнение проектирования кабельной структуры компьютерной сети.</h3>
            <p><strong>Виртуальные машины и коммутация</strong><br>Необходимо выполнить создание и базовую конфигурацию виртуальных машин.</p>
            <a href="#" class="icon-link d-inline-flex align-items-center expand-btn">
            Развернуть:
            <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
            </a>
        </div>

        
        <div class="instructions">
          <p style="text-indent: 20px;"><strong>1.1.</strong> На основе предоставленных ВМ или шаблонов ВМ создайте отсутствующие виртуальные машины в соответствии со схемой.</p>
          <p style="text-indent: 20px;">a. Характеристики ВМ установите в соответствии с <strong><a href="#" data-toggle="modal" data-target="#table-modal">Таблицей 1</a></strong>.</p>
          <p style="text-indent: 20px;">b. Коммутацию (если таковая не выполнена) выполните в соответствии со схемой сети.</p>
          <p style="text-indent: 20px;"><strong><a href="#" data-toggle="modal" data-target="#create_vm-modal">Показать скриншот</a></strong>.</p>
          <p style="text-indent: 20px;"><strong>1.2.</strong> Адресация должна быть выполнена в соответствии с <strong><a href="#" data-toggle="modal" data-target="#table-modal">Таблицей 1</a></strong></p>
          <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock()">ISP</a></strong></p>
          <code id="isp-block" style="display: none;">
            <pre>
# hostnamectl set hostname ISP
            </pre> 
          </code>
          
          <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_rtr_l(event)">RTR-L</a></strong></p>

          <div id="menu_rtr-l" style="display:none;">
            <ul>
              <li><a href="#" id="debianLink" data-instruction="Инструкция для Debian" onclick="toggleInstructions_rtr_l(event)">Показать для Debian:</a></li>
              <li><a href="#" id="ciscoLink" data-instruction="Инструкция для CiscoCSR" onclick="toggleInstructions_rtr_l(event)">Показать для CiscoCSR:</a></li>
            </ul>
          </div>
          
          <div id="instructions-debian-rtr-l" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для Debian:</p>
            <code>
              <pre>
# hostnamectl set hostname RTR-L
              </pre>
            </code>
          </div>
          
          <div id="instructions-cisco-rtr-l" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для CiscoCSR:</p>
            <code>
              <pre>
# hostname RTR-L
              </pre>
            </code>
          </div>

          <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_rtr_r(event)">RTR-R</a></strong></p>

          <div id="menu_rtr-r" style="display:none;">
            <ul>
              <li><a href="#" id="debianLink" data-instruction="Инструкция для Debian" onclick="toggleInstructions_rtr_r(event)" >Показать для Debian:</a></li>
              <li><a href="#" id="ciscoLink" data-instruction="Инструкция для CiscoCSR" onclick="toggleInstructions_rtr_r(event)">Показать для CiscoCSR:</a></li>
            </ul>
          </div>
          
          <div id="instructions-debian-rtr-r" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для Debian:</p>
            <code>
              <pre>
# hostnamectl set hostname RTR-R
              </pre>
            </code>
          </div>
          
          <div id="instructions-cisco-rtr-r" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для CiscoCSR:</p>
            <code>
              <pre>
# hostname RTR-R
              </pre>
            </code>
          </div>

          <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_srv(event)">SRV</a></strong></p>

          <div id="menu_srv" style="display:none;">
            <ul>
              <li><a href="#" id="debianLink" data-instruction="Инструкция для Debian" onclick="toggleInstructions_srv(event)">Показать для Debian:</a></li>
              <li><a href="#" id="ciscoLink" data-instruction="Инструкция для WindowsServer" onclick="toggleInstructions_srv(event)">Показать для WindowsServer:</a></li>
            </ul>
          </div>
        
          <div id="instructions-debian-srv" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для Debian:</p>
            <code>
              <pre>
# hostnamectl set hostname SRV
              </pre>
            </code>
          </div>

          <div id="instructions-windows-srv" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для WindowsServer:</p>
            <code>
              <pre>
powershell:
# Rename-Computer -NewName SRV
# Restart-Computer
              </pre>
            </code>
          </div>



          <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock()">WEB-L</a></strong></p>
          <code id="web-l-block" style="display: none;">
            <pre>
# some code here
            </pre> 
          </code>
          <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock()">WEB-R</a></strong></p>
          <code id="web-r-block" style="display: none;">
            <pre>
# some code here
            </pre> 
          </code>
          <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock()">CLI</a></strong></p>
          <code id="cli-block" style="display: none;">
            <pre>
# some code here
            </pre> 
          </code>
        </div>
    </div>

        
        
        
        
        
        <div class="card mb-4 rounded-3 shadow-sm" style="width: 100%;">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
            <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"></use></svg>
        </div>
            <h3 class="fs-2">2. Осуществление выбора технологии, инструментальных средств и средств вычислительной техники при организации процесса разработки и исследования объектов профессиональной деятельности</h3>
            <p><strong>Сетевая связанность</strong></p>
            <a href="#" class="icon-link d-inline-flex align-items-center expand-btn">
            Развернуть:
            <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
            </a>
        </div>

        <div class="instructions">
          <p>2.1. Настройте статический маршрут по умолчанию на маршрутизаторах RTR-L и RTR-R.</p>
        </div>

    
    
    <!-- Для модального окна с картинкой!-->
        <div class="modal fade" id="table-modal" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="table-modal">Таблица 1</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/table_1.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="create_vm-modal" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="table-modal">виртуальные машины в соответствии со схемой</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/create_vm.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>

    
    
    
    </div>

    <?php require "../../blocks/footer.php" ?>
</body>
</html>
