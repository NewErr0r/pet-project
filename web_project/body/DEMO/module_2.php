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
# apt install -y chrony
                        
# vim <strong><a href="#" data-toggle="modal" data-target="#isp_chrony_conf">/etc/chrony/chrony.conf</a></strong>   
    #pool 2.debian.pool.ntp.org iburst      <- закомментировать
    server 127.0.0.1 iburst prefer
    hwtimestamp *
    local stratum 3
    allow 4.4.4.0/24
    allow 3.3.3.0/24

# systemctl restart chronyd                            
              </pre>
              <code>
                <p style="text-indent: 20px;">CLI</p>
                <pre>
powershell 
    
# New-NetFirewallRule -DisplayName "NTP" -Direction Inbound -LocalPort 123 -Protocol UDP -Action Allow

# Start-Service W32Time
# w32tm /config /manualpeerlist:3.3.3.1 /syncfromflags:manual /reliable:yes /update
# Restart-Service W32Time

# Set-Service -Name W32Time -StartupType Automatic
                </pre>
              </code>
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
# apt install -y chrony

# vim /etc/chrony/chrony.conf
    #pool 2.debian.pool.ntp.org iburst      <- закомментировать
    server 4.4.4.1 iburst prefer
    allow 192.168.100.0/24
    allow 172.16.100.0/24
    allow 10.20.30.0/30

# systemctl restart chronyd 
              </pre>
              <code>
              <p style="text-indent: 20px;">Настройка клиентов NTP RTR-L | RTR-R | WEB-L | WEB-R (Debian):</p>
              <pre>
# apt install -y chrony

# vim /etc/chrony/chrony.conf
    #pool 2.debian.pool.ntp.org iburst      <- закомментировать
    server ntp.int.demo.wsr iburst prefer
    allow 172.16.100.0/24
    allow 192.168.200.0/24

# systemctl restart chronyd
              </pre>
              <p style="text-indent: 20px;">Настройка клиентов NTP RTR-L | RTR-R(Cisco):</p>
              <pre>
# ntp server ntp.int.demo.wsr
              </pre>
              </code>
            </code>
          </div>

          <div id="instructions-windows-srv_ntp" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для WindowsServer:</p>
            <code>
              <pre>
powershell

# New-NetFirewallRule -DisplayName "NTP" -Direction Inbound -LocalPort 123 -Protocol UDP -Action Allow

# w32tm /query /status
# Start-Service W32Time
# w32tm /config /manualpeerlist:4.4.4.1 /syncfromflags:manual /reliable:yes /update
# Restart-Service W32Time 
              </pre>
              <code>
              <p style="text-indent: 20px;">Настройка клиентов NTP RTR-L | RTR-R | WEB-L | WEB-R (Debian):</p>
              <pre>
# apt install -y chrony

# vim /etc/chrony/chrony.conf
    #pool 2.debian.pool.ntp.org iburst      <- закомментировать
    server ntp.int.demo.wsr iburst prefer
    allow 172.16.100.0/24
    allow 192.168.200.0/24

# systemctl restart chronyd
              </pre>
              <p style="text-indent: 20px;">Настройка клиентов NTP RTR-L | RTR-R(Cisco):</p>
              <pre>
# ntp server ntp.int.demo.wsr
              </pre>
              </code>
            </code>
          </div>
          

          <p style="text-indent: 20px;"><strong>2.5.</strong> Реализуйте файловый SMB-сервер на базе SRV</p>
          <p style="text-indent: 70px;">a. Сервер должен предоставлять доступ для обмена файлами серверам WEB-L и WEB-R;</p>
          <p style="text-indent: 70px;">b. Сервер, в зависимости от ОС, использует следующие каталоги для хранения файлов:</p>
          <p style="text-indent: 70px;">− /mnt/storage для система на базе Linux;</p>
          <p style="text-indent: 70px;">− Диск R:\ для систем на базе Windows;</p>
          <p style="text-indent: 70px;">c. Хранение файлов осуществляется на диске (смонтированном по указанным выше адресам), реализованном по технологии RAID типа “Зеркало”;</p>

            <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_srv_smb(event)">SRV</a></strong></p>

          <div id="menu_srv_smb" style="display:none;">
            <ul>
              <li><a href="#" id="debianLink" data-instruction="Инструкция для Debian" onclick="toggleInstructions_srv_smb(event)">Показать для Debian:</a></li>
              <li><a href="#" id="ciscoLink" data-instruction="Инструкция для WindowsServer" onclick="toggleInstructions_srv_smb(event)">Показать для WindowsServer:</a></li>
            </ul>
          </div>
        
          <div id="instructions-debian-srv_smb" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для Debian:</p>
            <code>
              <p style="text-indent: 20px;">RAID0:</p>
            <pre>
# apt install mdadm

# mdadm --zero-superblock --force /dev/sd{b,c}
# wipefs --all --force /dev/sd{b,c}
# mdadm --create --verbose /dev/md1 -l 1 -n 2 /dev/sd{b,c}
# mkfs.ext4 /dev/md0

# mkdir /mnt/storage
# chmod 777 /mnt/storage
# echo /dev/md1 /mnt ext4 defaults 1 2 >> /etc/fstab
# mount -a
              </pre>
              <code>
                <p style="text-indent: 20px;">SMB:</p>
                <pre>
# apt install -y samba

# vim /etc/samba/smb.conf

<strong><a href="#" data-toggle="modal" data-target="#srv_deb_smb">посмотреть</a></strong>

# systemctl restart smbd
                </pre>
              </code>
            </code>
          </div>

          <div id="instructions-windows-srv_smb" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для WindowsServer:</p>
            <code>
              <p style="text-indent: 20px;">RAID0:</p>
              <pre>
<img src="../../img/srv-win-raid1.png">
              </pre>
              <pre>
<img src="../../img/srv-win-raid2.png">
              </pre>
              <pre>
<img src="../../img/srv-win-raid3.png">
              </pre>
              <pre>
<img src="../../img/srv-win-raid4.png">
              </pre>
              <pre>
<img src="../../img/srv-win-raid5.png">
              </pre>
              <pre>
<img src="../../img/srv-win-raid6.png">
              </pre>
            <code>
              <code>
              <p style="text-indent: 20px;">SMB:</p>
              <pre>
<img src="../../img/srv-win-smb1.png">
              </pre>
              <pre>
<img src="../../img/srv-win-smb2.png">
              </pre>
              <pre>
<img src="../../img/srv-win-smb3.png">
              </pre>
              </code>
            </code>
            </code>
          </div>

          <p style="text-indent: 20px;"><strong>2.6.</strong> Сервера WEB-L и WEB-R должны использовать службу, настроенную на SRV, для обмена файлами между собой:</p>
          <p style="text-indent: 70px;">a. Служба файлового обмена должна позволять монтирование в виде стандартного каталога Linux;</p>
          <p style="text-indent: 70px;">- Разделяемый каталог должен быть смонтирован по адресу /opt/share;</p>
          <p style="text-indent: 70px;">b. Каталог должен позволять удалять и создавать файлы в нем для всех пользователей;</p>


            <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_srv_mount(event)">WEB-L | WEB-R</a></strong></p>

          <div id="menu_srv_mount" style="display:none;">
            <ul>
              <li><a href="#" id="debianLink" data-instruction="Инструкция для Debian" onclick="toggleInstructions_srv_mount(event)">Показать для анонимного доступа:</a></li>
              <li><a href="#" id="ciscoLink" data-instruction="Инструкция для WindowsServer" onclick="toggleInstructions_srv_mount(event)">Показать для доступа через пользователя:</a></li>
            </ul>
          </div>
        
          <div id="instructions-debian-srv_mount" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для анонимного доступа:</p>
            <code>
            <pre>
# apt install -y cifs-utils

# mkdir /opt/share
# chmod 777 /opt/share
# echo //SRV/r /opt/share cifs guest 0 0 >> /etc/fstab
# mount -a
            </pre>
            </code>
          </div>

          <div id="instructions-windows-srv_mount" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для доступа через пользователя:</p>
            <code>
              <pre>
# apt install -y cifs-utils

# mkdir /opt/share
# chmod 777 /opt/share
# echo //SRV/r /opt/share cifs users,credentials=/etc/samba/sabmacreds,file_mode=0777,dir_mode=0777 0 0 >> /etc/fstab

# vim /etc/samba/sabmacreds
    username=smb
    password=P@ssw0rd

# chmod 600 /etc/samba/sabmacreds
# chown root: /etc/samba/sabmacreds    

# mount -a
              </pre>
              </code>
          </div>

          <p style="text-indent: 20px;"><strong>2.7.</strong> Выполните настройку центра сертификации на базе SRV:</p>
          <p style="text-indent: 70px;">b. В случае применения решения на базе Linux используется центр сертификации типа OpenSSL и располагается по адресу /var/ca;</p>
          <p style="text-indent: 70px;">c. Выдаваемые сертификаты должны иметь срок жизни не менее 300 дней;</p>
          <p style="text-indent: 70px;">d. Параметры выдаваемых сертификатов:</p>
          <p style="text-indent: 70px;">- Страна RU;</p>
          <p style="text-indent: 70px;">- Организация DEMO.WSR;</p>
          <p style="text-indent: 70px;">- Прочие поля (за исключением CN) должны быть пусты;</p>


            <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_srv_ca(event)">SRV</a></strong></p>

          <div id="menu_srv_ca" style="display:none;">
            <ul>
              <li><a href="#" id="debianLink" data-instruction="Инструкция для Debian" onclick="toggleInstructions_srv_ca(event)">Показать для WindowsServer:</a></li>
              <li><a href="#" id="ciscoLink" data-instruction="Инструкция для WindowsServer" onclick="toggleInstructions_srv_ca(event)">Показать для Debian:</a></li>
            </ul>
          </div>
      
          <div id="instructions-debian-srv_ca" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для WindowsServer:</p>
            <code>
            <pre>
powershell:

# Install-WindowsFeature -Name AD-Certificate, ADCS-Web-Enrollment -IncludeManagementTools
# Install-AdcsCertificationAuthority -CAType StandaloneRootCa -CACommonName "Demo.wsr" -force
# Install-AdcsWebEnrollment -Confirm -force

# New-SelfSignedCertificate -subject "localhost" 
# Get-ChildItem cert:\LocalMachine\My
# Move-item Cert:\LocalMachine\My\XFX2DX02779XFD1F6F4X8435A5X26ED2X8DEFX95 -destination Cert:\LocalMachine\Webhosting\

# New-IISSiteBinding -Name 'Default Web Site' -BindingInformation "*:443:" -Protocol htts -CertificateThumbPrint XFX2DX02779XFD1F6F4X8435A5X26ED2X8DEFX95 
# Start-WebSite -Name "Default Web Site"

# Get-CACrlDistributionPoint | Remove-CACrlDistributionPoint -force    
# Get-CAAuthorityInformationAccess |Remove-CAAuthorityInformationAccess -force

# Restart-Service CertSrv  
            </pre>
            <code>
              <p style="text-indent: 20px;">Далее через оснастку "Центр сертификации"</p>
              <pre>
<img src="../../img/srv-win-ca1.png">
              </pre>
              <pre>
<img src="../../img/srv-win-ca2.png">
              </pre>
            </code>
            </code>
          </div>

          <div id="instructions-windows-srv_ca" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для Debian:</p>
            <code>
              <pre>
# mkdir /var/ca
# cd /var/ca

# openssl req -newkey rsa:4096 -keyform PEM -keyout ca.key -x509 -days 3650 -outform PEM -out ca.cer
              </pre>
              <code>
                <p style="text-indent: 20px;">Далее отвечаем на вопросы согласно <strong><a href="#" data-toggle="modal" data-target="#srv_deb_ca">заданию:</a></strong></p>
              </code>
              </code>
          </div>
        </div>

        <div class="card mb-4 rounded-3 shadow-sm" style="width: 100%;">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
            <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"></use></svg>
        </div>
            <h3 class="fs-2">3. Взаимодействие со специалистами смежного профиля при разработке методов, средств и технологий применения объектов профессиональной деятельности</h3>
            <p style="text-indent: 20px;"><strong>Инфраструктура веб-приложения.</strong><br>Данный блок подразумевает установку и настройку доступа к веб- приложению, выполненному в формате контейнера Docker.</p>
            <a href="#" class="icon-link d-inline-flex align-items-center expand-btn">
            Развернуть:
            <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
            </a>
        </div>

        <div class="instructions">
        <p style="text-indent: 20px;"><strong>3.1.</strong> Образ Docker (содержащий веб-приложение) расположен на ISO-образе дополнительных материалов;</p>
          <p style="text-indent: 70px;">a. Выполните установку приложения AppDocker0;</p>
        <p style="text-indent: 20px;"><strong>3.2.</strong> Пакеты для установки Docker расположены на дополнительном ISO-образе;</p>
        <p style="text-indent: 20px;"><strong>3.3.</strong> Инструкция по работе с приложением расположена на дополнительном ISO-образе;</p>
        <p style="text-indent: 20px;"><strong>3.4.</strong> Необходимо реализовать следующую инфраструктуру приложения.</p>
          <p style="text-indent: 70px;">a. Клиентом приложения является CLI (браузер Edge);</p>
          <p style="text-indent: 70px;">b. Хостинг приложения осуществляется на ВМ WEB-L и WEB-R;</p>
          <p style="text-indent: 70px;">c. Доступ к приложению осуществляется по DNS-имени www.demo.wsr;</p>
          <p style="text-indent: 70px;">- Имя должно разрешаться во “внешние” адреса ВМ управления трафиком в обоих регионах;</p>
          <p style="text-indent: 70px;">- При необходимости, для доступа к к приложению допускается реализовать реверс-прокси или трансляцию портов;</p>
          <p style="text-indent: 70px;">d. Доступ к приложению должен быть защищен с применением технологии TLS;</p>
          <p style="text-indent: 70px;">- Необходимо обеспечить корректное доверие сертификату сайта, без применения “исключений” и подобных механизмов;</p>
          <p style="text-indent: 70px;">e. Незащищенное соединение должно переводится на защищенный канал автоматически;</p>
          <p style="text-indent: 20px;"><strong>3.5.</strong> Необходимо обеспечить отказоустойчивость приложения;</p>
            <p style="text-indent: 70px;">а. Сайт должен продолжать обслуживание (с задержкой не более 25 секунд) в следующих сценариях:</p>
            <p style="text-indent: 70px;">- Отказ одной из ВМ Web</p>
            <p style="text-indent: 70px;">- Отказ одной из ВМ управления трафиком.</p>


          <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_web_l_docker(event)">WEB-L</a></strong></p>
          <code id="web_l_docker" style="display: none;">
          <p style="text-indent: 20px;">Необходимо вставить и подмонтировать диск с образом docker</p>
              <pre>
# apt-cdrom add

# apt install -y docker-ce
# systemctl start docker
# systemctl enable docker

# mkdir /mnt/app
# mount /dev/sr1 /mnt/app
# docker load < /mnt/app/app.tar

# docker run --name app  -p 8080:5000 -d app    <- ESXi (ISO - 80)
              </pre>
          </code>

          <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_web_r_docker(event)">WEB-R</a></strong></p>
          <code id="web_r_docker" style="display: none;">
          <p style="text-indent: 20px;">Необходимо вставить и подмонтировать диск с образом docker</p>
              <pre>
# apt-cdrom add

# apt install -y docker-ce
# systemctl start docker
# systemctl enable docker

# mkdir /mnt/app
# mount /dev/sr1 /mnt/app
# docker load < /mnt/app/app.tar

# docker run --name app  -p 8080:5000 -d app    <- ESXi (ISO - 80)
              </pre>
          </code>

          <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_rtr_l_docker(event)">RTR-L</a></strong></p>

          <div id="menu_rtr_l_docker" style="display:none;">
            <ul>
              <li><a href="#" id="debianLink" data-instruction="Инструкция для Debian" onclick="toggleInstructions_rtr_l_docker(event)">Показать для Debian:</a></li>
              <li><a href="#" id="ciscoLink" data-instruction="Инструкция для CiscoCSR" onclick="toggleInstructions_rtr_l_docker(event)">Показать для CiscoCSR:</a></li>
            </ul>
          </div>
      
          <div id="instructions-debian-rtr_l_docker" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для Debian:</p>
            <code>
            <pre>
# firewall-cmd --permanent --zone=dmz --add-forward-port=port=80:proto=tcp:toport=80:toaddr=192.168.200.100
# firewall-cmd --permanent --zone=dmz --add-forward-port=port=443:proto=tcp:toport=443:toaddr=192.168.200.100
# firewall-cmd --reload
            </pre>
            </code>
          </div>

          <div id="instructions-windows-rtr_l_docker" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для CiscoCSR:</p>
            <code>
              <pre>
# no ip http secure-server

# ip nat inside source static tcp 192.168.200.100 80 4.4.4.100 80 
# ip nat inside source static tcp 192.168.200.100 443 4.4.4.100 443  
              </pre>
            </code>
          </div>
        

        <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_rtr_r_docker(event)">RTR-R</a></strong></p>

          <div id="menu_rtr_r_docker" style="display:none;">
            <ul>
              <li><a href="#" id="debianLink" data-instruction="Инструкция для Debian" onclick="toggleInstructions_rtr_r_docker(event)">Показать для Debian:</a></li>
              <li><a href="#" id="ciscoLink" data-instruction="Инструкция для CiscoCSR" onclick="toggleInstructions_rtr_r_docker(event)">Показать для CiscoCSR:</a></li>
            </ul>
          </div>
      
          <div id="instructions-debian-rtr_r_docker" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для Debian:</p>
            <code>
            <pre>
# firewall-cmd --permanent --zone=dmz --add-forward-port=port=80:proto=tcp:toport=80:toaddr=172.16.100.100
# firewall-cmd --permanent --zone=dmz --add-forward-port=port=443:proto=tcp:toport=443:toaddr=172.16.100.100
# firewall-cmd --reload
            </pre>
            </code>
          </div>

          <div id="instructions-windows-rtr_r_docker" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для CiscoCSR:</p>
            <code>
              <pre>
# no ip http secure-server

# ip nat inside source static tcp 172.16.100.100 80 5.5.5.100 80 
# ip nat inside source static tcp 172.16.100.100 443 5.5.5.100 443  
              </pre>
            </code>
          </div>


        <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_srv_create_ca(event)">SRV</a></strong></p>

          <div id="menu_srv_create_ca" style="display:none;">
            <ul>
              <li><a href="#" id="debianLink" data-instruction="Инструкция для Debian" onclick="toggleInstructions_srv_create_ca(event)">Показать для WindowsServer:</a></li>
              <li><a href="#" id="ciscoLink" data-instruction="Инструкция для WindowsServer" onclick="toggleInstructions_srv_create_ca(event)">Показать для Debian:</a></li>
            </ul>
          </div>
      
          <div id="instructions-debian-srv_create_ca" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для WindowsServer:</p>
            <code>
            <pre>
<img src="../../img/srv-win-create-ca1.png">
            </pre>
            <pre>
<img src="../../img/srv-win-create-ca2.png">
            </pre>
            <pre>
<img src="../../img/srv-win-create-ca3.png">
            </pre>
            <pre>
<img src="../../img/srv-win-create-ca4.png">
            </pre>
            <pre>
<img src="../../img/srv-win-create-ca5.png">
            </pre>
            <pre>
<img src="../../img/srv-win-create-ca6.png">
            </pre>
            <pre>
<img src="../../img/srv-win-create-ca7.png">
            </pre>
            <pre>
<img src="../../img/srv-win-create-ca8.png">
            </pre>
            <pre>
<img src="../../img/srv-win-create-ca9.png">
            </pre>
            <pre>
<img src="../../img/srv-win-create-ca10.png">
            </pre>
            <pre>
<img src="../../img/srv-win-create-ca11.png">
            </pre>
            </code>
          </div>

          <div id="instructions-windows-srv_create_ca" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для Debian:</p>
            <code>
              <p style="text-indent: 20px;">На WEB-L и WEB-R генерируем запрос на подпись Удостоверяющим Центром:</p>
              <pre>
# mkdir cert
# cd cert
# openssl genrsa -out app.key 4096
# openssl req -new -key app.key -out app.req -sha256

              </pre>
              <code>
                <p style="text-indent: 20px;">На SRV подписываем для WEB-L и WEB-R:</p>
                <pre>
# cd /var/ca
# scp root@192.168.200.100:/root/cert/app.req ./
# openssl x509 -req -in app.req -CA ca.cer -CAkey ca.key -set_serial 100 -extentions app -days 1460 -outform PEM -out app.cer -sha256
# scp app.cer root@192.168.200.100:/root/cert
# rm -f app.*

# cd /var/ca
# scp root@172.16.100.100:/root/cert/app.req ./
# openssl x509 -req -in app.req -CA ca.cer -CAkey ca.key -set_serial 100 -extentions app -days 1460 -outform PEM -out app.cer -sha256
# scp app.cer root@172.16.100.100:/root/cert
# rm -f app.*
                </pre>
              </code>
            </code>
          </div>

        <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_web_l_nginx(event)">WEB-L | WEB-R</a></strong></p>
          <code id="web_l_nginx" style="display: none;">
              <pre>
# apt install -y nginx

# cd /opt/share

# openssl pkcs12 -nodes -nocerts -in www.pfx -out www.key
# openssl pkcs12 -nodes -nokeys -in www.pfx -out www.cer

# cp /opt/share/www.key /etc/nginx/www.key
# cp /opt/share/www.cer /etc/nginx/www.cer
              </pre>
              <pre>
# vim <strong><a href="#" data-toggle="modal" data-target="#snakeoil_conf">/etc/nginx/snippets/snakeoil.conf</a></strong>
    ssl_sertificate /etc/nginx/www.cer
    ssl_certificate_key /etc/nginx/www.key
              </pre>
              <pre>
# vim <strong><a href="#" data-toggle="modal" data-target="#sites_available">/etc/nginx/sites-available/default</a></strong>
    upstream backend { 
     server 192.168.200.100:8080 fail_timeout=25; 
     server 172.16.100.100:8080 fail_timeout=25; 
    } 

    server { 
        listen 443 ssl default_server; 
        include snippers/snakeoil.config;
    
        server_name www.demo.wsr; 
    
     location / { 
      proxy_pass http://backend ;
     } 
    }

    server { 
       listen 80  default_server; 
      server_name _; 
      return 301 https://www.demo.wsr;
    
    }
              </pre>
              <pre>
# systemctl restart nginx
              </pre>
          </code>

          <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_cli_ca(event)">CLI</a></strong></p>
          <code id="cli_ca" style="display: none;">
              <pre>
# scp -P 2244 'root@4.4.4.100:/opt/share/ca.cer' C:\Users\user\Desktop\
              </pre>
          </code>
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

        <div class="modal fade" id="isp_chrony_conf" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="isp_chrony_conf">NTP</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/isp-ntp.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="srv_deb_smb" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="srv_deb_smb">SMB</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/smb.conf.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="srv_deb_ca" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="srv_deb_ca">CA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/srv-deb-ca.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="snakeoil_conf" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="snakeoil_conf">NGINX </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/snakeoil_conf.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="sites_available" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="sites_available">NGINX </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/WEB-R_nginx.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>
        
        </div>
    </div>

    <p><a href="../demo.php" class="w-100 btn btn-lg btn-outline-primary">Вернуться к выбору модуля:</a></p>

    <?php require "../../blocks/footer.php" ?>
</body>
</html>

