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
    
    <script src="../../js/module_3.js"></script>
    <title>Module_3</title>
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
            <h3 class="fs-2">1. Установка, настройка, эксплуатация и обслуживание технических и программно-аппаратных средств компьютерных сетей</h3>
            <p style="text-indent: 20px;"><strong>Конфигурация виртуальных частных сетей</strong></p>
            <a href="#" class="icon-link d-inline-flex align-items-center expand-btn">
            Развернуть:
            <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
            </a>
        </div>

        
        <div class="instructions">
            <p style="text-indent: 20px;"><strong>1.1.</strong> Защита туннеля должна обеспечиваться с помощью IPsec между платформами RTR-L и RTR-R.</p>
            <p style="text-indent: 70px;">a) Используйте аутентификацию по общему ключу.</p>
            <p style="text-indent: 70px;">b) Параметры IPsec произвольные.</p>

            <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_rtr_l_ipsec(event)">RTR-L</a></strong></p>

          <div id="menu_rtr-l_ipsec" style="display:none;">
            <ul>
              <li><a href="#" id="debianLink" data-instruction="Инструкция для Debian" onclick="toggleInstructions_rtr_l_ipsec(event)">Показать для Debian:</a></li>
              <li><a href="#" id="ciscoLink" data-instruction="Инструкция для CiscoCSR" onclick="toggleInstructions_rtr_l_ipsec(event)">Показать для CiscoCSR:</a></li>
            </ul>
          </div>
          
          <div id="instructions-debian-rtr-l_ipsec" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для Debian:</p>
            <code>
              <pre>
# apt install -y strongswan
# systemctl enable --now strongswan

# vim /etc/ipsec.conf
<strong><a href="#" data-toggle="modal" data-target="#ipsec_rtr_l">показать:</a></strong>
              </pre>
              <pre>
# vim /etc/ipsec.secrets
<strong><a href="#" data-toggle="modal" data-target="#ipsec_secret_rtr_l">показать:</a></strong>
              </pre>
              <pre>
# systemctl restart strongswan
              </pre>
            </code>
          </div>
          
          <div id="instructions-cisco-rtr-l_ipsec" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для CiscoCSR:</p>
            <code>
              <pre>
# crypto isakmp policy 1
# encr aes
# authentication pre-share
# hash sha256
# group 14

# crypto isakmp key TheSecretMustBeAtLeast13bytes address 5.5.5.100
# crypto isakmp nat keepalive 5

# crypto ipsec transform-set TSET  esp-aes 256 esp-sha256-hmac
# mode tunnel

# crypto ipsec profile VTI
# set transform-set TSET

# interface Tunnel1
# tunnel mode ipsec ipv4
# tunnel protection ipsec profile VTI
              </pre>
            </code>
          </div>

          <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_rtr_r_ipsec(event)">RTR-R</a></strong></p>

          <div id="menu_rtr-r_ipsec" style="display:none;">
            <ul>
              <li><a href="#" id="debianLink" data-instruction="Инструкция для Debian" onclick="toggleInstructions_rtr_r_ipsec(event)">Показать для Debian:</a></li>
              <li><a href="#" id="ciscoLink" data-instruction="Инструкция для CiscoCSR" onclick="toggleInstructions_rtr_r_ipsec(event)">Показать для CiscoCSR:</a></li>
            </ul>
          </div>
          
          <div id="instructions-debian-rtr-r_ipsec" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для Debian:</p>
            <code>
              <pre>
# apt install -y strongswan
# systemctl enable --now strongswan

# vim /etc/ipsec.conf
<strong><a href="#" data-toggle="modal" data-target="#ipsec_rtr_r">показать:</a></strong>
              </pre>
              <pre>
# vim /etc/ipsec.secrets
<strong><a href="#" data-toggle="modal" data-target="#ipsec_secret_rtr_r">показать:</a></strong>
              </pre>
              <pre>
# systemctl restart strongswan
              </pre>
              <pre>
# <strong><a href="#" data-toggle="modal" data-target="#ipsec_status">ipsec status</a></strong>
              </pre>
            </code>
          </div>
          
          <div id="instructions-cisco-rtr-r_ipsec" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для CiscoCSR:</p>
            <code>
              <pre>
# crypto isakmp policy 1
# encr aes
# authentication pre-share
# hash sha256
# group 14

# crypto isakmp key TheSecretMustBeAtLeast13bytes address 4.4.4.100
# crypto isakmp nat keepalive 5

# crypto ipsec transform-set TSET  esp-aes 256 esp-sha256-hmac
# mode tunnel

# crypto ipsec profile VTI
# set transform-set TSET

# interface Tunnel1
# tunnel mode ipsec ipv4
# tunnel protection ipsec profile VTI
              </pre>
            </code>
          </div>
        </div>
    </div>

          <div class="card mb-4 rounded-3 shadow-sm" style="width: 100%;">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
            <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"></use></svg>
        </div>
            <h3 class="fs-2">2. Установка, настройка, эксплуатация и обслуживание сетевых конфигураций.</h3>
            <p style="text-indent: 20px;"><strong>Настройка списков контроля доступа</strong></p>
            <a href="#" class="icon-link d-inline-flex align-items-center expand-btn">
            Развернуть:
            <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
            </a>
        </div>

        
        <div class="instructions">
        <p style="text-indent: 20px;"><strong>2.1.</strong> Платформа управления трафиком RTR-R выполняет контроль входящего трафика согласно следующим правилам:</p>
        <p style="text-indent: 70px;">a. Разрешаются подключения к портам HTTP и HTTPS для всех клиентов;</p>
        <p style="text-indent: 70px;">b. Разрешаются подключения к портам HTTP и HTTPS для всех клиентов;</p>
        <p style="text-indent: 70px;">- Порты необходимо для работы настраиваемых служб</p>
        <p style="text-indent: 70px;">c. Разрешается работа выбранного протокола организации защищенной связи;</p>
        <p style="text-indent: 70px;">- Разрешение портов должно быть выполнено по принципу “необходимо и достаточно”</p>
        <p style="text-indent: 70px;">d. Разрешается работа протоколов ICMP;</p>
        <p style="text-indent: 70px;">e. Разрешается работа протокола SSH;</p>
        <p style="text-indent: 70px;">f. Прочие подключения запрещены;</p>
        <p style="text-indent: 70px;">g. Для обращений в платформам со стороны хостов, находящихся внутри регионов, ограничений быть не должно;</p>


        
        <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_rtr_r_acl(event)">RTR-R</a></strong></p>
        <div id="menu_rtr-r_acl" style="display:none;">
            <ul>
              <li><a href="#" id="debianLink" data-instruction="Инструкция для Debian" onclick="toggleInstructions_rtr_r_acl(event)">Показать для Debian:</a></li>
              <li><a href="#" id="ciscoLink" data-instruction="Инструкция для CiscoCSR" onclick="toggleInstructions_rtr_r_acl(event)">Показать для CiscoCSR:</a></li>
            </ul>
          </div>
          
          <div id="instructions-debian-rtr-r_acl" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для Debian:</p>
            <code>
              <pre>
# firewall-cmd --permanent --zone=dmz --add-port= {2601,2604,2600,123,53}/tcp
# firewall-cmd --permanent --zone=dmz --add-port={53,123,4500,500}/udp
# firewall-cmd --permanent --zone=dmz --add-service={http,https,dns,ssh,ntp,ipsec}

# firewall-cmd --permanent --zone=trusted --add-service=ntp

# firewall-cmd --permanent --zone=internal --add-protocol={gre,ospf,esp}
# firewall-cmd --permanent --zone=internal --add-port={443,123,53}/tcp
# firewall-cmd --permanent --zone=internal --add-port={4500,500,53}/udp
# firewall-cmd --permanent --zone=internal --add-service={gre,mdns,ssh,ntp,samba-client,ipsec}

# firewall-cmd --reload
              </pre>
            </code>
          </div>
          
          <div id="instructions-cisco-rtr-r_acl" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для CiscoCSR:</p>
            <code>
              <pre>
# ip access-list extended Rnew
# permit tcp any any established
# permit tcp any host 5.5.5.100 eq 80 
# permit tcp any host 5.5.5.100 eq 443 
# permit tcp any host 5.5.5.100 eq 2244 
# permit udp host 4.4.4.100 host 5.5.5.100 eq 500
# permit esp any any
# permit icmp any any

# int gi 1 
# ip access-group Rnew in
              </pre>
            </code>
          </div>

        <p style="text-indent: 20px;"><strong>2.2.</strong> Платформа управления трафиком RTR-L выполняет контроль входящего трафика согласно следующим правилам:</p>
        <p style="text-indent: 70px;">a. Разрешаются подключения к портам DNS, HTTP и HTTPS для всех клиентов;</p>
        <p style="text-indent: 70px;">-Порты необходимо для работы настраиваемых служб</p>
        <p style="text-indent: 70px;">b. Разрешается работа выбранного протокола организации защищенной связи;</p>
        <p style="text-indent: 70px;">- Разрешение портов должно быть выполнено по принципу “необходимо и достаточно”</p>
        <p style="text-indent: 70px;">c. Разрешается работа протоколов ICMP;</p>
        <p style="text-indent: 70px;">d. Разрешается работа протокола SSH;</p>
        <p style="text-indent: 70px;">e. Прочие подключения запрещены;</p>
        <p style="text-indent: 70px;">f. Для обращений к платформам со стороны хостов, находящихся внутри регионов, ограничений быть не должно.</p>

        <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_rtr_l_acl(event)">RTR-L</a></strong></p>
        <div id="menu_rtr-l_acl" style="display:none;">
            <ul>
              <li><a href="#" id="debianLink" data-instruction="Инструкция для Debian" onclick="toggleInstructions_rtr_l_acl(event)">Показать для Debian:</a></li>
              <li><a href="#" id="ciscoLink" data-instruction="Инструкция для CiscoCSR" onclick="toggleInstructions_rtr_l_acl(event)">Показать для CiscoCSR:</a></li>
            </ul>
          </div>
          
          <div id="instructions-debian-rtr-l_acl" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для Debian:</p>
            <code>
              <pre>
# firewall-cmd --permament --zone=dmz --add-service={dns,http,https,ntp,ssh,ipsec}
# firewall-cmd --permament --zone=dmz --add-protocol=esp
# firewall-cmd --permanent --zone=dmz --add-port={2601,2604,2600,123,53}/tcp
# firewall-cmd --permanent --zone=dmz --add-port={123,53,4500,500}/udp

# firewall-cmd --permanent --zone=trusted --add-service=ntp

# firewall-cmd --permanent --zone=internal --add-service={mdns,gre,ssh,samba-client,ipsec}
# firewall-cmd --permanent --zone=internal --add-port={443,123,53}/tcp
# firewall-cmd --permanent --zone=internal --add-port={123,53,4500,500}/udp
# firewall-cmd --permanent --zone=internal --add-protocol={gre,ospf,esp}

# firewall-cmd –reload
              </pre>
            </code>
          </div>
          
          <div id="instructions-cisco-rtr-l_acl" style="display:none;">
            <p style="text-indent: 20px;">Инструкция для CiscoCSR:</p>
            <code>
              <pre>
# ip access-list extended Lnew
# permit tcp any any established
# permit udp host 4.4.4.100 eq 53 any
# permit udp host 5.5.5.1 eq 123 any
# permit tcp any host 4.4.4.100 eq 80 
# permit tcp any host 4.4.4.100 eq 443 
# permit tcp any host 4.4.4.100 eq 2222 
# permit udp host 5.5.5.100 host 4.4.4.100 eq 500
# permit esp any any
# permit icmp any any

# int gi 1 
# ip access-group Lnew in
              </pre>
            </code>
          </div>
        </div>

    <div class="modal fade" id="ipsec_rtr_l" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ipsec_rtr_l">ipsec</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/ipsec_rtr_l.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="ipsec_secret_rtr_l" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ipsec_secret_rtr_l">ipsec</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/ipsec_secret_rtr_l.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="ipsec_rtr_r" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ipsec_rtr_r">ipsec</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/ipsec_rtr_r.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="ipsec_secret_rtr_r" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ipsec_secret_rtr_r">ipsec</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/ipsec_secret_rtr_r.png" alt="Таблица 1">
                </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="ipsec_status" tabindex="-1" aria-labelledby="table-modal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ipsec_status">ipsec status</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <img src="../../img/ipsec_status.png" alt="Таблица 1">
                </div>
            </div>
          </div>

        </div>

        <p><a href="../demo.php" class="w-100 btn btn-lg btn-outline-primary">Вернуться к выбору модуля:</a></p>

    <?php require "../../blocks/footer.php" ?>
</body>
</html>
