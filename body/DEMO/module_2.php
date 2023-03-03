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
    
    <script src="../../js/module_2.js"></script>
    <title>Module_2</title>
</head>
<body>
    <?php require "../../blocks/header.php" ?>    

    <div class="d-flex flex-wrap">
    
        <div class="card mb-4 rounded-3 shadow-sm" style="width: 100%;">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
            <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"></use></svg>
        </div>

            <h3 class="fs-2">1. Администрирование локальных вычислительных сетей и принятие мер по устранению возможных сбоев</h3>
            <p style="text-indent: 20px;"><strong>Сетевая связность.</strong><br>В рамках данного модуля требуется обеспечить сетевую связность между регионами работы приложения, а также обеспечить выход ВМ в имитируемую сеть “Интернет”.</p>
            <a href="#" class="icon-link d-inline-flex align-items-center expand-btn">
            Развернуть:
            <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
            </a>
        </div>
        
            <div class="instructions">
            <p style="text-indent: 20px;"><strong>1.1.</strong> Сети, подключенные к ISP, считаются внешними:</p>
            <p style="text-indent: 70px;">- Запрещено прямое попадание трафика из внутренних сетей во внешние и наоборот;</p>

            <code>
                <pre>
# Выполнено ранее
                </pre>
            </code>

            <p style="text-indent: 20px;"><strong>1.2.</strong> Обеспечьте настройку служб SSH региона Left:</p>
            <p style="text-indent: 70px;">a. Подключения со стороны внешних сетей по протоколу к платформе управления трафиком RTR-L на порт 2244 должны быть перенаправлены на ВМ Web-L;</p>
            <p style="text-indent: 70px;">b. Подключения со стороны внешних сетей по протоколу к платформе управления трафиком RTR-L на порт 2222 должны быть перенаправлены на ВМ WEB-R.</p>

            <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_rtr_l_ssh(event)">RTR-L</a></strong></p>

              <div id="menu_rtr-l_ssh" style="display:none;">
                <ul>
                  <li><a href="#" id="debianLink" data-instruction="Инструкция для Debian" onclick="toggleInstructions_rtr_l_ssh(event)">Показать для Debian:</a></li>
                  <li><a href="#" id="ciscoLink" data-instruction="Инструкция для CiscoCSR" onclick="toggleInstructions_rtr_l_ssh(event)">Показать для CiscoCSR:</a></li>
                </ul>
              </div>

              <div id="instructions-debian-rtr-l_ssh" style="display:none;">
                <p style="text-indent: 20px;">Инструкция для Debian:</p>
                <code>
                  <pre>
# firewall-cmd --permanent --zone=dmz --add-forward-port=port=2244:proto=tcp:toport=22:toaddr=192.168.200.100
# firewall-cmd --permanent --zone=dmz --add-forward-port=port=2222:proto=tcp:toport=22:toaddr=172.16.100.100
# firewall-cmd --reload
                  </pre>
                  <p style="text-indent: 20px;">Так же включаем доступ для root по ssh для WEB-L и WEB-R:</p>
                  <pre>
# vim /etc/ssh/sshd_config
    ...
    PermitRootLogin yes
    ...

# systemctl restart sshd
                  </pre>
                </code>
              </div>

              <div id="instructions-cisco-rtr-l_ssh" style="display:none;">
                <p style="text-indent: 20px;">Инструкция для CiscoCSR:</p>
                <code>
                  <pre>
# ip nat inside source static tcp 192.168.200.100 22 4.4.4.100 2244
# ip nat inside source static tcp 172.16.100.100 22 4.4.4.100 2222
                  </pre>
                  <p style="text-indent: 20px;">Так же включаем доступ для root по ssh для WEB-L и WEB-R:</p>
                  <pre>
# vim /etc/ssh/sshd_config
    ...
    PermitRootLogin yes
    ...

# systemctl restart sshd
                  </pre>
                </code>
              </div>
            </div>

        <div class="card mb-4 rounded-3 shadow-sm" style="width: 100%;">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
            <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"></use></svg>
        </div>
            <h3 class="fs-2">2. Администрирование сетевых ресурсов в информационных системах</h3>
            <p style="text-indent: 20px;"><strong>Инфраструктурные службы.</strong><br>В рамках данного модуля необходимо настроить основные инфраструктурные службы и настроить представленные ВМ на применение этих служб для всех основных функций.</p>
            <a href="#" class="icon-link d-inline-flex align-items-center expand-btn">
            Развернуть:
            <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
            </a>
        </div>

        <div class="instructions">
          <p style="text-indent: 20px;"><strong>2.1.</strong> Выполните настройку первого уровня DNS-системы стенда:</p>
          <p style="text-indent: 70px;">a. Используется ВМ ISP;</p>
          <p style="text-indent: 70px;">b. Обслуживается зона demo.wsr.</p>
          <p style="text-indent: 70px;">- Наполнение зоны должно быть реализовано в соответствии с <strong><a href="#" data-toggle="modal" data-target="#table_2">Таблицей 2;</a></strong></p>
          <p style="text-indent: 70px;">c. Сервер делегирует зону int.demo.wsr на SRV;</p>
          <p style="text-indent: 70px;">- Поскольку SRV находится во внутренней сети западного региона, делегирование происходит на внешний адрес маршрутизатора данного региона.</p>
          <p style="text-indent: 70px;">- Маршрутизатор региона должен транслировать соответствующие порты DNS- службы в порты сервера SRV.</p>
          <p style="text-indent: 70px;">d. Внешний клиент CLI должен использовать DNS-службу, развернутую на ISP, по умолчанию;</p>

          <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_isp_dns(event)">ISP</a></strong></p>
          <code id="isp_dns" style="display: none;">
              <pre>
# apt install -y bind9

# mkdir /opt/dns
# cp /etc/bind/db.local /opt/dns/demo.db
# chown -R bind:bind /opt/dns

# vim <strong><a href="#" data-toggle="modal" data-target="#named_conf_options">/etc/bind/named.conf.options</a></strong>
    options {
        directory "/var/cache/bind";
        dnssec-validation no;
        allow-query { any; };
        listen-on-v6 { any; };
    };

# vim <strong><a href="#" data-toggle="modal" data-target="#named_conf_default_zones">/etc/bind/named.conf.default-zones</a></strong>
    zone "demo.wsr" {
        type master;
        allow-transfer { any; };
        file "/opt/dns/demo.db";
    };

# vim /opt/dns/demo.db
<strong><a href="#" data-toggle="modal" data-target="#demo_db">посмотреть</a></strong>

# systemctl restatr bind9
# reboot
              </pre>
              <code>
                <p style="text-indent: 20px;">Проброс портов dns на RTR-L (Debian)</p>
                <pre>
# rewall-cmd --permanent --zone=dmz --add-forward-port=port=53:proto={tcp,udp}:toport=53:toaddr=192.168.200.200
# firewall-cmd --reload
                </pre>
              </code>
              <code>
                <p style="text-indent: 20px;">Проброс портов dns на RTR-L (CiscoCSR)</p>
                <pre>
# ip nat inside source static tcp 192.168.200.200 53 4.4.4.100 53
# ip nat inside source static udp 192.168.100.200 53 4.4.4.100 53                  
                </pre>
              </code>
            </code> 
          </code>


          <p style="text-indent: 20px;"><strong>2.2.</strong> Выполните настройку второго уровня DNS-системы стенда;</p>
          <p style="text-indent: 70px;">a. Используется ВМ SRV;</p>
          <p style="text-indent: 70px;">b. Обслуживается зона int.demo.wsr;</p>
          <p style="text-indent: 70px;">- Наполнение зоны должно быть реализовано в соответствии с <strong><a href="#" data-toggle="modal" data-target="#table_2">Таблицей 2;</a></strong></p>
          <p style="text-indent: 70px;">c. Обслуживаются обратные зоны для внутренних адресов регионов</p>
          <p style="text-indent: 70px;">- Имена для разрешения обратных записей следует брать из Таблицы 2;</p>
          <p style="text-indent: 70px;">d. Сервер принимает рекурсивные запросы, исходящие от адресов внутренних регионов;</p>
          <p style="text-indent: 70px;">- Обслуживание клиентов(внешних и внутренних), обращающихся к к зоне int.demo.wsr, должно производится без каких либо ограничений по адресу источника;</p>
          <p style="text-indent: 70px;">e. Внутренние хосты регионов (равно как и платформы управления трафиком) должны использовать данную DNS-службу для разрешения всех запросов имен;</p>

            <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_srv_dns(event)">SRV</a></strong></p>

          <div id="menu_srv_dns" style="display:none;">
            <ul>
              <li><a href="#" id="debianLink" data-instruction="Инструкция для Debian" onclick="toggleInstructions_srv_dns(event)">Показать для Debian:</a></li>
              <li><a href="#" id="ciscoLink" data-instruction="Инструкция для WindowsServer" onclick="toggleInstructions_srv_dns(event)">Показать для WindowsServer:</a></li>
            </ul>
          </div>
        
          <div id="instructions-debian-srv_dns" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для Debian:</p>
            <code>
            <pre>
# systemctl disable --now apparmor
# apt install -y bind9             

# mkdir /opt/dns
# cp /etc/bind/db.local /opt/dns/int.demo.db
# cp /etc/bind/db.127 /opt/dns/200.168.192.in-addr.arpa.db
# cp /etc/bind/db.127 /opt/dns/100.16.172.in-addr.arpa.db
# chown -R bind:bind /opt/dns

# vim <strong><a href="#" data-toggle="modal" data-target="#deb_named_conf_options">/etc/bind/named.conf.options</a></strong>
    options {
        directory "/var/cache/bind";
        dnssec-validation no;
        allow-query { any; };
        listen-on-v6 { any; };
    };

# vim <strong><a href="#" data-toggle="modal" data-target="#deb_named_conf_default_zones">/etc/bind/named.conf.default-zones</a></strong>

    zone "int.demo.wsr" {
        type master;
        allow-transfer { any; };
        file "/opt/dns/int.demo.db";
    };

    zone "200.168.192.in-addr.arpa" {
        type master;
        allow-transfer { any; };
        file "/opt/dns/200.168.192.in-addr.arpa.db";
    };

    zone "100.16.172.in-addr.arpa" {
        type master;
        allow-transfer { any; };
        file "/opt/dns/100.16.172.in-addr.arpa.db";
    };

# vim /opt/dns/int.demo.db
<strong><a href="#" data-toggle="modal" data-target="#deb_int_demo_db">посмотреть</a></strong>

# vim /opt/dns/200.168.192.in-addr.arpa.db
<strong><a href="#" data-toggle="modal" data-target="#deb_arpa1_db">посмотреть</a></strong>

# vim /opt/dns/100.16.172.in-addr.arpa.db
<strong><a href="#" data-toggle="modal" data-target="#deb_arpa2_db">посмотреть</a></strong>

# systemctl restatr bind9
# reboot
              </pre>
            </code>
            <code>
                <p style="text-indent: 20px;">На  RTR-L | RTR-R | WEB-L | WEB-R (Debian)</p>
                <pre>
# vim /etc/resolv.conf
    search int.demo.wsr
    nameserver 192.168.200.200
                </pre>
                <p style="text-indent: 20px;">На  RTR-L | RTR-R (CiscoCSR)</p>
                <pre>
# ip name-server 192.168.200.200
# ip domain name int.demo.wsr
                </pre>
            </code>
          </div>

          <div id="instructions-windows-srv_dns" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для WindowsServer:</p>
            <code>
              <pre>
powershell:

# Install-WindowsFeature -Name DNS -IncludeManagementTools 
                                
# Add-DnsServerPrimaryZone -Name "int.demo.wsr" -ZoneFile "int.demo.wsr.dns"
# Add-DnsServerPrimaryZone -NetworkId 192.168.200.0/24 -ZoneFile "int.demo.wsr.dns"
# Add-DnsServerPrimaryZone -NetworkId 172.16.100.0/24 -ZoneFile "int.demo.wsr.dns"
                                
# Add-DnsServerResourceRecordA -Name "web-l" -ZoneName "int.demo.wsr" -AllowUpdateAny -IPv4Address "192.168.200.100" -CreatePtr 
# Add-DnsServerResourceRecordA -Name "WEB-R" -ZoneName "int.demo.wsr" -AllowUpdateAny -IPv4Address "172.16.100.100" -CreatePtr 
# Add-DnsServerResourceRecordA -Name "SRV" -ZoneName "int.demo.wsr" -AllowUpdateAny -IPv4Address "192.168.200.200" -CreatePtr 
# Add-DnsServerResourceRecordA -Name "rtr-l" -ZoneName "int.demo.wsr" -AllowUpdateAny -IPv4Address "192.168.200.254" -CreatePtr 
# Add-DnsServerResourceRecordA -Name "rtr-r" -ZoneName "int.demo.wsr" -AllowUpdateAny -IPv4Address "172.16.100.254" -CreatePtr
 
# Add-DnsServerResourceRecordCName -Name "webapp" -HostNameAlias "web-l.int.demo.wsr" -ZoneName "int.demo.wsr"
# Add-DnsServerResourceRecordCName -Name "webapp" -HostNameAlias "WEB-R.int.demo.wsr" -ZoneName "int.demo.wsr"
# Add-DnsServerResourceRecordCName -Name "ntp" -HostNameAlias "SRV.int.demo.wsr" -ZoneName "int.demo.wsr"
# Add-DnsServerResourceRecordCName -Name "dns" -HostNameAlias "SRV.int.demo.wsr" -ZoneName "int.demo.wsr"

<strong><a href="#" data-toggle="modal" data-target="#int_demo_db">посмотреть</a></strong>   
              </pre>
            </code>
            <code>
                <p style="text-indent: 20px;">На  RTR-L | RTR-R | WEB-L | WEB-R (Debian)</p>
                <pre>
# vim /etc/resolv.conf
    search int.demo.wsr
    nameserver 192.168.200.200
                </pre>
                <p style="text-indent: 20px;">На  RTR-L | RTR-R (CiscoCSR)</p>
                <pre>
# ip name-server 192.168.200.200
# ip domain name int.demo.wsr
                </pre>
            </code>
          </div>

          <p style="text-indent: 20px;"><strong>2.3.</strong> Выполните настройку первого уровня системы синхронизации времени:</p>
          <p style="text-indent: 70px;">a. Используется сервер ISP.</p>
          <p style="text-indent: 70px;">b. Сервер считает собственный источник времени верным, stratum=3;</p>
          <p style="text-indent: 70px;">c. Сервер допускает подключение только через внешний адрес соответствующей платформы управления трафиком;</p>
          <p style="text-indent: 70px;">- Подразумевается обращение SRV для синхронизации времени;</p>
          <p style="text-indent: 70px;">d. Клиент CLI должен использовать службу времени ISP;</p>


          <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_isp_ntp(event)">ISP</a></strong></p>
          <code id="isp_ntp" style="display: none;">
              <pre>
# I
              </pre>
              </code>

          <p style="text-indent: 20px;"><strong>2.4.</strong> Выполните конфигурацию службы второго уровня времени на SRV.</p>
          <p style="text-indent: 70px;">a. Сервер синхронизирует время с хостом ISP;</p>
          <p style="text-indent: 70px;">- Синхронизация с другими источникам запрещена;</p>
          <p style="text-indent: 70px;">b. Сервер должен допускать обращения внутренних хостов регионов, в том числе и платформ управления трафиком, для синхронизации времени;</p>
          <p style="text-indent: 70px;">c. Все внутренние хосты(в том числе и платформы управления трафиком) должны синхронизировать свое время с SRV;</p>

            <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_srv_ntp(event)">SRV</a></strong></p>

          <div id="menu_srv_ntp" style="display:none;">
            <ul>
              <li><a href="#" id="debianLink" data-instruction="Инструкция для Debian" onclick="toggleInstructions_srv_ntp(event)">Показать для Debian:</a></li>
              <li><a href="#" id="ciscoLink" data-instruction="Инструкция для WindowsServer" onclick="toggleInstructions_srv_ntp(event)">Показать для WindowsServer:</a></li>
            </ul>
          </div>
        
          <div id="instructions-debian-srv_ntp" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для Debian:</p>
            <code>
            <pre>
# D
              </pre>
            </code>
          </div>

          <div id="instructions-windows-srv_ntp" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для WindowsServer:</p>
            <code>
              <pre>
# W 
              </pre>
            </code>
            <code>

          </div>

        


        
        </div>

        



            
        
    <!-- Для модального окна с картинками!-->
    <div class="modal fade" id="table_2" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="table_2">Таблица 2. DNS-записи зон</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/dns_table.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>
        
        <div class="modal fade" id="named_conf_options" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="named_conf_options">named.conf.options</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/named_conf_options.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>  

        <div class="modal fade" id="named_conf_default_zones" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="named_conf_default_zones">named.conf.default-zones</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/named_conf_default_zones.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div> 

        <div class="modal fade" id="demo_db" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="demo_db">demo.db</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/isp-dns.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div> 

        <div class="modal fade" id="int_demo_db" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="int_demo_db">int.demo.db</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/srv-win-dns.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="deb_named_conf_options" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deb_named_conf_options">DNS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/srv-named-conf-options.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="deb_named_conf_default_zones" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deb_named_conf_default_zones">DNS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/srv-named-conf-default-zones.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="deb_int_demo_db" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deb_int_demo_db">DNS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/srv-deb-dns-int-demo-db.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="deb_arpa1_db" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deb_arpa1_db">DNS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/srv-deb-dns-apra200.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="deb_arpa2_db" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deb_arpa2_db">DNS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/srv-deb-dns-arpa100.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>
        
        </div>
    </div>

    <?php require "../../blocks/footer.php" ?>
</body>
</html>
