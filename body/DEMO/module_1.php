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
    
    <script src="../../js/module_1.js"></script>
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
            <p style="text-indent: 20px;"><strong>Виртуальные машины и коммутация</strong><br>Необходимо выполнить создание и базовую конфигурацию виртуальных машин.</p>
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
          <p style="text-indent: 20px;"><strong>1.2.</strong>Имена хостов в созданных ВМ должны быть установлены в соответствии со схемой.</p>
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
# hostnamectl set hostname WEB-L
            </pre> 
          </code>
          <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock()">WEB-R</a></strong></p>
          <code id="web-r-block" style="display: none;">
            <pre>
# hostnamectl set hostname WEB-R
            </pre> 
          </code>
          <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock()">CLI</a></strong></p>
          <code id="cli-block" style="display: none;">
            <pre>
powershell:
# Rename-Computer -NewName CLI
# Restart-Computer
            </pre> 
          </code>

          <p style="text-indent: 20px;"><strong>1.3.</strong> Адресация должна быть выполнена в соответствии с <strong><a href="#" data-toggle="modal" data-target="#table-modal">Таблицей 1</a></strong></p>
          <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_isp_ipv4(event)">ISP</a></strong></p>
          <code id="isp-block_ipv4" style="display: none;">
          <p style="text-indent: 20px;"><strong><a href="#" data-toggle="modal" data-target="#connect-disk">подключить</a></strong> debian-11.2.0-amd64-BD-1 </p>
            <pre>
# apt-cdrom add
# apt install vim -y

# vim <a href="#" data-toggle="modal" data-target="#isp-set-ipv4">/etc/network/interfaces</a></strong>
    auto ens192
    iface ens192 inet static
    address 4.4.4.1
    netmask 255.255.255.0

    auto ens224
    iface ens224 inet static
    address 5.5.5.1
    netmask 255.255.255.0

    auto ens256
    iface ens256 inet static
    address 3.3.3.1
    netmask 255.255.255.0
    dns-search demo.wsr

# systemctl restart networking.service
            </pre> 
          </code>
          
          <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_rtr_l_ipv4(event)">RTR-L</a></strong></p>

          <div id="menu_rtr-l_ipv4_ipv4" style="display:none;">
            <ul>
              <li><a href="#" id="debianLink" data-instruction="Инструкция для Debian" onclick="toggleInstructions_rtr_l_ipv4(event)">Показать для Debian:</a></li>
              <li><a href="#" id="ciscoLink" data-instruction="Инструкция для CiscoCSR" onclick="toggleInstructions_rtr_l_ipv4(event)">Показать для CiscoCSR:</a></li>
            </ul>
          </div>
          
          <div id="instructions-debian-rtr-l_ipv4" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для Debian:</p>
            <code>
            <p style="text-indent: 20px;"><strong><a href="#" data-toggle="modal" data-target="#connect-disk">подключить</a></strong> debian-11.2.0-amd64-BD-1 </p>
            <pre>
# apt-cdrom add
# apt install vim -y

# vim <a href="#" data-toggle="modal" data-target="#rtr-l-deb-set-ipv4">/etc/network/interfaces</a></strong>
    auto ens192
    iface ens192 inet static
    address 4.4.4.100
    netmask 255.255.255.0
    gateway 4.4.4.1

    auto ens224
    iface ens224 inet static
    address 192.168.200.254
    netmask 255.255.255.0
    dns-search int.demo.wsr
    dns-nameservers 192.168.200.200

# systemctl restart networking.service
              </pre>
            </code>
          </div>
          
          <div id="instructions-cisco-rtr-l_ipv4" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для CiscoCSR:</p>
            <code>
              <pre>
# interface Gi1 
# ip address 4.4.4.100 255.255.255.0
# no shutdown
# exit

# interface Gi2
# ip address 192.168.200.254 255.255.255.0
# no shutdown
# exit

<a href="#" data-toggle="modal" data-target="#rtr-l-csr-set-ipv4">посмотреть</a></strong>
              </pre>
            </code>
          </div>

          <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_rtr_r_ipv4(event)">RTR-R</a></strong></p>

          <div id="menu_rtr-r_ipv4" style="display:none;">
            <ul>
              <li><a href="#" id="debianLink" data-instruction="Инструкция для Debian" onclick="toggleInstructions_rtr_r_ipv4(event)" >Показать для Debian:</a></li>
              <li><a href="#" id="ciscoLink" data-instruction="Инструкция для CiscoCSR" onclick="toggleInstructions_rtr_r_ipv4(event)">Показать для CiscoCSR:</a></li>
            </ul>
          </div>
          
          <div id="instructions-debian-rtr-r_ipv4" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для Debian:</p>
            <code>
            <p style="text-indent: 20px;"><strong><a href="#" data-toggle="modal" data-target="#connect-disk">подключить</a></strong> debian-11.2.0-amd64-BD-1 </p>
            <pre>
# apt-cdrom add
# apt install vim -y

# vim <a href="#" data-toggle="modal" data-target="#rtr-r-deb-set-ipv4">/etc/network/interfaces</a></strong>
    auto ens192
    iface ens192 inet static
    address 5.5.5.100
    netmask 255.255.255.0
    gateway 5.5.5.1

    auto ens224
    iface ens224 inet static
    address 172.16.100.254
    netmask 255.255.255.0
    dns-search int.demo.wsr
    dns-nameservers 192.168.200.200

# systemctl restart networking.service
              </pre>
            </code>
          </div>
          
          <div id="instructions-cisco-rtr-r_ipv4" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для CiscoCSR:</p>
            <code>
              <pre>
# interface Gi1 
# ip address 5.5.5.100 255.255.255.0
# no shutdown
# exit

# interface Gi2
# ip address 172.16.100.254 255.255.255.0
# no shutdown
# exit

<a href="#" data-toggle="modal" data-target="#rtr-r-csr-set-ipv4">посмотреть</a></strong>
              </pre>
            </code>
          </div>

          <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_srv_ipv4(event)">SRV</a></strong></p>

          <div id="menu_srv_ipv4" style="display:none;">
            <ul>
              <li><a href="#" id="debianLink" data-instruction="Инструкция для Debian" onclick="toggleInstructions_srv_ipv4(event)">Показать для Debian:</a></li>
              <li><a href="#" id="ciscoLink" data-instruction="Инструкция для WindowsServer" onclick="toggleInstructions_srv_ipv4(event)">Показать для WindowsServer:</a></li>
            </ul>
          </div>
        
          <div id="instructions-debian-srv_ipv4" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для Debian:</p>
            <code>
            <p style="text-indent: 20px;"><strong><a href="#" data-toggle="modal" data-target="#connect-disk">подключить</a></strong> debian-11.2.0-amd64-BD-1 </p>
            <pre>
# apt-cdrom add
# apt install vim -y

# vim <a href="#" data-toggle="modal" data-target="#srv-deb-set-ipv4">/etc/network/interfaces</a></strong>
    auto ens192
    iface ens192 inet static
    address 192.168.200.200/24
    gateway 192.168.200.254
    dns-search int.demo.wsr
    dns-nameservers 192.168.200.200
    dns-nameservers 4.4.4.1

# systemctl restart networking.service
              </pre>
            </code>
          </div>

          <div id="instructions-windows-srv_ipv4" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для WindowsServer:</p>
            <code>
              <pre>
<a href="#" data-toggle="modal" data-target="#srv-win-set-ipv4">посмотреть</a></strong>
              </pre>
            </code>
          </div>

          <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_web_l_ipv4(event)">WEB-L</a></strong></p>
          <code id="web-l-block-ipv4" style="display: none;">
          <p style="text-indent: 20px;"><strong><a href="#" data-toggle="modal" data-target="#connect-disk">подключить</a></strong> debian-11.2.0-amd64-BD-1 </p>
            <pre>
# apt-cdrom add
# apt install vim -y

# vim <a href="#" data-toggle="modal" data-target="#web-l-set-ipv4">/etc/network/interfaces</a></strong>
    auto ens192
    iface ens192 inet static
    address 192.168.200.100
    netmask 255.255.255.0
    gateway 192.168.200.254
    dns-nameservers 192.168.200.200
    dns-search int.demo.wsr

# systemctl restart networking.service
              </pre>
            </code>
          <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_web_r_ipv4(event)">WEB-R</a></strong></p>
          <code id="web-r-block-ipv4" style="display: none;">
          <p style="text-indent: 20px;"><strong><a href="#" data-toggle="modal" data-target="#connect-disk">подключить</a></strong> debian-11.2.0-amd64-BD-1 </p>
            <pre>
# apt-cdrom add
# apt install vim -y

# vim <a href="#" data-toggle="modal" data-target="#web-r-set-ipv4">/etc/network/interfaces</a></strong>
    auto ens192
    iface ens192 inet static
    address 172.16.100.100
    netmask 255.255.255.0
    gateway 172.16.100.254
    dns-nameservers 192.168.200.200
    dns-search int.demo.wsr

# systemctl restart networking.service
              </pre>
            </code> 
          </code>
          <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_cli_ipv4(event)">CLI</a></strong></p>
          <code id="cli-block-ipv4" style="display: none;">
              <pre>
<a href="#" data-toggle="modal" data-target="#cli-set-ipv4">посмотреть</a></strong>
              </pre>
          </code>

          <p style="text-indent: 20px;"><strong>1.4.</strong>Обеспечьте ВМ дополнительными дисками, если таковое необходимо в соответствии с <strong><a href="#" data-toggle="modal" data-target="#table-modal">Таблицей 1</a></strong></p>
          <p style="text-indent: 20px;"><strong><a href="#" data-toggle="modal" data-target="#connect-disks-srv">Показать скриншот</a></strong>.</p>

        </div>
    
        <div class="card mb-4 rounded-3 shadow-sm" style="width: 100%;">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
            <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"></use></svg>
        </div>
            <h3 class="fs-2">2. Осуществление выбора технологии, инструментальных средств и средств вычислительной техники при организации процесса разработки и исследования объектов профессиональной деятельности</h3>
            <p style="text-indent: 20px;"><strong>Сетевая связанность</strong></p>
            <p style="text-indent: 20px;"><strong>Конфигурация виртуальных частных сетей</strong></p>
            <p style="text-indent: 20px;"><strong>Настройка маршрутизации</strong></p>
            <a href="#" class="icon-link d-inline-flex align-items-center expand-btn">
            Развернуть:
            <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
            </a>
        </div>

        <div class="instructions">
          <p style="text-indent: 20px;"><strong>2.1.</strong> Настройте статический маршрут по умолчанию на маршрутизаторах RTR-L и RTR-R.</p>

          <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_isp_icmp_forward(event)">ISP</a></strong></p>
          <code id="isp_icmp_forward" style="display: none;">
          <p style="text-indent: 20px;">systemctl disable --now apparmor - удаляет из автозагрузки и выключает apparmor (selinux, но на Debian) – ОТКЛЮЧИТЬ НА ВСЕХ МАШИНАХ.</p>
              <pre>
# systemctl disable --now apparmor
# echo net.ipv4.ip_forward=1 >> /etc/sysctl.conf
# <a href="#" data-toggle="modal" data-target="#isp-sysctl-p">sysctl -p</a></strong>
              </pre>
            </code> 
          </code>
          
          <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_rtr_l_static_route(event)">RTR-L</a></strong></p>

          <div id="menu_rtr-l_ipv4_static_route" style="display:none;">
            <ul>
              <li><a href="#" id="debianLink" data-instruction="Инструкция для Debian" onclick="toggleInstructions_rtr_l_static_route(event)">Показать для Debian:</a></li>
              <li><a href="#" id="ciscoLink" data-instruction="Инструкция для CiscoCSR" onclick="toggleInstructions_rtr_l_static_route(event)">Показать для CiscoCSR:</a></li>
            </ul>
          </div>
          
          <div id="instructions-debian-rtr-l_static_route" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для Debian:</p>
            <p style="text-indent: 20px;">Будет задан позднее, через пакет frr.</p>
            <p style="text-indent: 20px;">Необходимо включить перессылку пакетов, отключить apparmor</p>
            <code>
            <pre>
# systemctl disable --now apparmor
# echo net.ipv4.ip_forward=1 >> /etc/sysctl.conf
# <a href="#" data-toggle="modal" data-target="#rtr-l-sysctl-p">sysctl -p</a></strong>
              </pre>
            </code>
          </div>
          
          <div id="instructions-cisco-rtr-l_static_route" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для CiscoCSR:</p>
            <code>
              <pre>
# ip route 0.0.0.0 0.0.0.0 4.4.4.1
              </pre>
            </code>
          </div>

          <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_rtr_r_static_route(event)">RTR-R</a></strong></p>

          <div id="menu_rtr-r_ipv4_static_route" style="display:none;">
            <ul>
              <li><a href="#" id="debianLink" data-instruction="Инструкция для Debian" onclick="toggleInstructions_rtr_r_static_route(event)">Показать для Debian:</a></li>
              <li><a href="#" id="ciscoLink" data-instruction="Инструкция для CiscoCSR" onclick="toggleInstructions_rtr_r_static_route(event)">Показать для CiscoCSR:</a></li>
            </ul>
          </div>
          
          <div id="instructions-debian-rtr-r_static_route" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для Debian:</p>
            <p style="text-indent: 20px;">Будет задан позднее, через пакет frr.</p>
            <p style="text-indent: 20px;">Необходимо включить перессылку пакетов, отключить apparmor</p>
            <code>
            <pre>
# systemctl disable --now apparmor
# echo net.ipv4.ip_forward=1 >> /etc/sysctl.conf
# <a href="#" data-toggle="modal" data-target="#rtr-r-sysctl-p">sysctl -p</a></strong>
              </pre>
            </code>
          </div>
          
          <div id="instructions-cisco-rtr-r_static_route" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для CiscoCSR:</p>
            <code>
              <pre>
# ip route 0.0.0.0 0.0.0.0 5.5.5.1
              </pre>
            </code>
          </div>

          <p style="text-indent: 20px;"><strong>2.2.</strong> Настройте динамическую трансляцию портов (PAT):</p>
          <p style="text-indent: 70px;">- На маршрутизаторе RTR-L настройте динамическую трансляцию портов (PAT) для сети 192.168.200.0/24 в соответствующие адреса исходящего интерфейса</p>
          <p style="text-indent: 70px;">- На маршрутизаторе RTR-R настройте динамическую трансляцию портов (PAT) для сети 172.16.100.0/24 в соответствующие адреса исходящего интерфейса.</p>        
          <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_rtr_l_pat(event)">RTR-L</a></strong></p>

          <div id="menu_rtr-l_ipv4_pat" style="display:none;">
            <ul>
              <li><a href="#" id="debianLink" data-instruction="Инструкция для Debian" onclick="toggleInstructions_rtr_l_pat(event)">Показать для Debian:</a></li>
              <li><a href="#" id="ciscoLink" data-instruction="Инструкция для CiscoCSR" onclick="toggleInstructions_rtr_l_pat(event)">Показать для CiscoCSR:</a></li>
            </ul>
          </div>
          
          <div id="instructions-debian-rtr-l_pat" style="display:none;">
          <p style="text-indent: 20px;">Инструкция для Debian:</p>
            <code>
            <pre>
# apt install -y firewalld

# firewall-cmd --permanent --zone=dmz --add-interface=ens192
# firewall-cmd --permanent --zone=dmz --add-masquerade
# firewall-cmd --permanent --zone=trusted --add-interface=ens224
# firewall-cmd --reload

<a href="#" data-toggle="modal" data-target="#rtr-l-firewalld">посмотреть</a></strong>
              </pre>
            </code>
          </div>
          
          <div id="instructions-cisco-rtr-l_pat" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для CiscoCSR:</p>
            <code>
              <pre>
# access-list 1 permit 192.168.200.0 0.0.0.255
# ip nat inside source list 1 interface Gi1 overload
    
# interface Gi1
# ip nat outside
# exit
# interface Gi2
# ip nat inside
# exit

<a href="#" data-toggle="modal" data-target="#rtr-l-csr-pat">посмотреть</a></strong>
              </pre>
            </code>
          </div>

          <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_rtr_r_pat(event)">RTR-R</a></strong></p>

          <div id="menu_rtr-r_ipv4_pat" style="display:none;">
            <ul>
              <li><a href="#" id="debianLink" data-instruction="Инструкция для Debian" onclick="toggleInstructions_rtr_r_pat(event)">Показать для Debian:</a></li>
              <li><a href="#" id="ciscoLink" data-instruction="Инструкция для CiscoCSR" onclick="toggleInstructions_rtr_r_pat(event)">Показать для CiscoCSR:</a></li>
            </ul>
          </div>
          
          <div id="instructions-debian-rtr-r_pat" style="display:none;">
          <p style="text-indent: 20px;">Инструкция для Debian:</p>
            <code>
            <pre>
# apt install -y firewalld

# firewall-cmd --permanent --zone=dmz --add-interface=ens192
# firewall-cmd --permanent --zone=dmz --add-masquerade
# firewall-cmd --permanent --zone=trusted --add-interface=ens224
# firewall-cmd --reload

<a href="#" data-toggle="modal" data-target="#rtr-r-firewalld">посмотреть</a></strong>
              </pre>
            </code>
          </div>
          
          <div id="instructions-cisco-rtr-r_pat" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для CiscoCSR:</p>
            <code>
              <pre>
# access-list 1 permit 172.16.100.0 0.0.0.255
# ip nat inside source list 1 interface Gi1 overload
    
# interface Gi1
# ip nat outside
# exit
# interface Gi2
# ip nat inside
# exit

<a href="#" data-toggle="modal" data-target="#rtr-r-csr-pat">посмотреть</a></strong>
              </pre>
            </code>
          </div>

          <p style="text-indent: 20px;"><strong>2.3.</strong> Между платформами RTR-L и RTR-R должен быть установлен туннель, позволяющий осуществлять связь между регионами с применением внутренних адресов со следующими параметрами:</p>
          <p style="text-indent: 70px;">a) Используйте в качестве VTI интерфейс Tunnel1</p>
          <p style="text-indent: 70px;">b) Между платформами должен быть установлен туннель, позволяющий осуществлять связь между регионами с применением внутренних адресов</p>        
          <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_rtr_l_gre(event)">RTR-L</a></strong></p>

          <div id="menu_rtr-l_gre" style="display:none;">
            <ul>
              <li><a href="#" id="debianLink" data-instruction="Инструкция для Debian" onclick="toggleInstructions_rtr_l_gre(event)">Показать для Debian:</a></li>
              <li><a href="#" id="ciscoLink" data-instruction="Инструкция для CiscoCSR" onclick="toggleInstructions_rtr_l_gre(event)">Показать для CiscoCSR:</a></li>
            </ul>
          </div>
          
          <div id="instructions-debian-rtr-l_gre" style="display:none;">
          <p style="text-indent: 20px;">Инструкция для Debian:</p>
            <code>
            <pre>
# echo ip_gre >> /etc/modules

# vim <a href="#" data-toggle="modal" data-target="#rtr-l-deb-gre">/etc/network/interfaces</a></strong>
    auto gre1
    iface gre1 mode tunnel
    address 10.10.10.1
    netmask 255.255.255.252
    mode gre
    local 4.4.4.100
    endpoint 5.5.5.100
    ttl 65

# systemctl restart networking.service
              </pre>
            </code>
          </div>
          
          <div id="instructions-cisco-rtr-l_gre" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для CiscoCSR:</p>
            <code>
              <pre>
# interface Tunne 1
# ip address 10.10.10.1 255.255.255.252
# tunnel mode gre ip
# tunnel source 4.4.4.100
# tunnel destination 5.5.5.100
# exit

<a href="#" data-toggle="modal" data-target="#rtr-l-csr-gre">посмотреть</a></strong>
              </pre>
            </code>
          </div>

          <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_rtr_r_gre(event)">RTR-R</a></strong></p>

          <div id="menu_rtr-r_gre" style="display:none;">
            <ul>
              <li><a href="#" id="debianLink" data-instruction="Инструкция для Debian" onclick="toggleInstructions_rtr_r_gre(event)">Показать для Debian:</a></li>
              <li><a href="#" id="ciscoLink" data-instruction="Инструкция для CiscoCSR" onclick="toggleInstructions_rtr_r_gre(event)">Показать для CiscoCSR:</a></li>
            </ul>
          </div>
          
          <div id="instructions-debian-rtr-r_gre" style="display:none;">
          <p style="text-indent: 20px;">Инструкция для Debian:</p>
            <code>
            <pre>
# echo ip_gre >> /etc/modules

# vim <a href="#" data-toggle="modal" data-target="#rtr-r-deb-gre">/etc/network/interfaces</a></strong>
    auto gre1
    iface gre1 mode tunnel
    address 10.10.10.2
    netmask 255.255.255.252
    mode gre
    local 5.5.5.100
    endpoint 4.4.4.100
    ttl 65

# systemctl restart networking.service
              </pre>
            </code>
          </div>
          
          <div id="instructions-cisco-rtr-r_gre" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для CiscoCSR:</p>
            <code>
              <pre>
# interface Tunne 1
# ip address 10.10.10.2 255.255.255.252
# tunnel mode gre ip
# tunnel source 5.5.5.100
# tunnel destination 4.4.4.100
# exit

<a href="#" data-toggle="modal" data-target="#rtr-r-csr-gre">посмотреть</a></strong>
              </pre>
            </code>
          </div>

          <p style="text-indent: 20px;"><strong>2.4.</strong>Настройте динамическую маршрутизацию между платформами RTR-L и RTR-R.</p>
          <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_rtr_l_ospf(event)">RTR-L</a></strong></p>

          <div id="menu_rtr-l_ospf" style="display:none;">
            <ul>
              <li><a href="#" id="debianLink" data-instruction="Инструкция для Debian" onclick="toggleInstructions_rtr_l_ospf(event)">Показать для Debian:</a></li>
              <li><a href="#" id="ciscoLink" data-instruction="Инструкция для CiscoCSR" onclick="toggleInstructions_rtr_l_ospf(event)">Показать для CiscoCSR:</a></li>
            </ul>
          </div>
          
          <div id="instructions-debian-rtr-l_ospf" style="display:none;">
          <p style="text-indent: 20px;">Инструкция для Debian:</p>
            <code>
              <p style="text-indent: 20px;">подключить debian-11.2.0-amd64-BD-2</p>
            <pre>
# apt-cdrom add
# apt install -y frr

# vim /etc/frr/daemons
    ...
    ospfd=yes
    ...

# systemctl restart frr 
# systemctl enable frr   

# vtysh
# conf t
# ip route 0.0.0.0 0.0.0.0 4.4.4.1
# interface gre1
# access-list 1 permit 192.168.200.0 0.0.0.255
# router ospf
# passive-interface default
# no passive-interface gre1
# network 10.10.10.0/30 area 0
# network 192.168.200.0/24 area 0
# line vty
# do wr
# end

<a href="#" data-toggle="modal" data-target="#rtr-l-deb-ospf">посмотреть</a></strong>
              </pre>
            </code>
          </div>
          
          <div id="instructions-cisco-rtr-l_ospf" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для CiscoCSR:</p>
            <code>
              <pre>
# router eigrp 100
# network 192.168.200.0 0.0.0.255
# network 10.10.10.0 0.0.0.3

<a href="#" data-toggle="modal" data-target="#rtr-l-csr-eigrp">посмотреть</a></strong>
              </pre>
            </code>
          </div>

          <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_rtr_r_ospf(event)">RTR-R</a></strong></p>

          <div id="menu_rtr-r_ospf" style="display:none;">
            <ul>
              <li><a href="#" id="debianLink" data-instruction="Инструкция для Debian" onclick="toggleInstructions_rtr_r_ospf(event)">Показать для Debian:</a></li>
              <li><a href="#" id="ciscoLink" data-instruction="Инструкция для CiscoCSR" onclick="toggleInstructions_rtr_r_ospf(event)">Показать для CiscoCSR:</a></li>
            </ul>
          </div>
          
          <div id="instructions-debian-rtr-r_ospf" style="display:none;">
          <p style="text-indent: 20px;">Инструкция для Debian:</p>
            <code>
            <p style="text-indent: 20px;">подключить debian-11.2.0-amd64-BD-2</p>
            <pre>
# apt-cdrom add
# apt install -y frr

# vim /etc/frr/daemons
    ...
    ospfd=yes
    ...

# systemctl restart frr 
# systemctl enable frr   

# vtysh
# conf t
# ip route 0.0.0.0 0.0.0.0 5.5.5.1
# interface gre1
# access-list 1 permit 172.16.100.0 0.0.0.255
# router ospf
# passive-interface default
# no passive-interface gre1
# network 10.10.10.0/30 area 0
# network 172.16.100.0/24 area 0
# line vty
# do wr
# end

<a href="#" data-toggle="modal" data-target="#rtr-r-deb-ospf">посмотреть</a></strong>
              </pre>
            </code>
          </div>
          
          <div id="instructions-cisco-rtr-r_ospf" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для CiscoCSR:</p>
            <code>
              <pre>
# router eigrp 100
# network 172.16.100.0 0.0.0.255
# network 10.10.10.0 0.0.0.3

<a href="#" data-toggle="modal" data-target="#rtr-r-csr-eigrp">посмотреть</a></strong>
              </pre>
            </code>
          </div>
        </div>

    <!-- Для модального окна с картинками!-->
        <div class="modal fade" id="table-modal" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="table-modal">Таблица 1. Характеристики ВМ</h5>
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

        <div class="modal fade" id="connect-disk" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="connect-disk">Подключение внешних дисков</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/connect_disks.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="isp-set-ipv4" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="isp-set-ipv4">содержимое файла /etc/network/interfaces</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/isp_set_ipv4.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="rtr-l-deb-set-ipv4" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rtr-l-deb-set-ipv4">содержимое файла /etc/network/interfaces</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/rtr-l-deb-set-ipv4.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="rtr-l-csr-set-ipv4" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rtr-l-csr-set-ipv4">Назначение сетевых параметров</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/rtr-l-csr-set-ipv4.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="rtr-r-deb-set-ipv4" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rtr-r-deb-set-ipv4">содержимое файла /etc/network/interfaces</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/rtr-r-deb-set-ipv4.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="rtr-r-csr-set-ipv4" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rtr-r-csr-set-ipv4">Назначение сетевых параметров</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/rtr-r-csr-set-ipv4.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="srv-deb-set-ipv4" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="srv-deb-set-ipv4">содержимое файла /etc/network/interfaces</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/srv-deb-set-ipv4.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="srv-win-set-ipv4" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="srv-win-set-ipv4">Назначение сетевых параметров</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/SRV_ipv4.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="web-l-set-ipv4" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="web-l-set-ipv4">содержимое файла /etc/network/interfaces</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/web-l-set-ipv4.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="web-r-set-ipv4" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="web-r-set-ipv4">содержимое файла /etc/network/interfaces</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/web-r-set-ipv4.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="cli-set-ipv4" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cli-set-ipv4">Назначение сетевых параметров</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/CLI_ipv4.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="connect-disks-srv" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="connect-disks-srv">Подключение дополнительных дисков</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/SRV_disks.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="isp-sysctl-p" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="isp-sysctl-p">Включение функции перессылки пакетов</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/isp-forward-packages.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="rtr-l-sysctl-p" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rtr-l-sysctl-p">Включение функции перессылки пакетов</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/rtr-l-deb-forward-packages.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="rtr-r-sysctl-p" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rtr-r-sysctl-p">Включение функции перессылки пакетов</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/rtr-r-deb-forward-packages.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="rtr-l-firewalld" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rtr-l-firewalld">Firewalld - PAT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/rtr-l-deb-pat.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="rtr-r-firewalld" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rtr-r-firewalld">Firewalld - PAT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/rtr-r-deb-pat.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="rtr-l-csr-pat" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rtr-l-csr-pat">Firewalld - PAT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/rtr-l-csr-pat.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="rtr-r-csr-pat" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rtr-r-csr-pat">Firewalld - PAT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/rtr-r-csr-pat.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="rtr-l-deb-gre" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rtr-l-deb-gre">Настройка GRE тунеля</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/rtr-l-deb-gre.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="rtr-r-deb-gre" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rtr-r-deb-gre">Настройка GRE тунеля</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/rtr-r-deb-gre.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>
        
        <div class="modal fade" id="rtr-l-csr-gre" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rtr-l-csr-gre">Настройка GRE тунеля</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/rtr-l-csr-gre.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="rtr-r-csr-gre" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rtr-r-csr-gre">Настройка GRE тунеля</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/rtr-r-csr-gre.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="rtr-l-deb-ospf" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rtr-l-deb-ospf">Настройка динамической маршрутизации</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/rtr-l-deb-ospf.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="rtr-r-deb-ospf" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rtr-r-deb-ospf">Настройка динамической маршрутизации</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/rtr-r-deb-ospf.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="rtr-l-csr-eigrp" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rtr-l-csr-eigrp">Настройка динамической маршрутизации</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/rtr-l-csr-eigrp.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="rtr-r-csr-eigrp" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rtr-r-csr-eigrp">Настройка динамической маршрутизации</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/rtr-r-csr-eigrp.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>        
    </div>

    <?php require "../../blocks/footer.php" ?>
</body>
</html>
