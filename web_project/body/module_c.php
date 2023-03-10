<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/page6/module_c.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha512-4J+Qfom3qP3ZBno7JXwnhN2Q2Bm+CKI8ykp+1yTDkscg/UsxGrCY9X/VoNfPY+6Pz/Z6rJr6RdUrzAgIYcLTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="../js/module_c.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-BZpL7IVeObLy18pTpku8FdHcTGhliYbnhGQF+vcfFJLWfZvBXlFyNn/gtHaP8Wz/ozHvGbN2Q+BeN0X8WYo1vQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js" integrity="sha512-HbRl6YEMBLcUfrnmSGFVFrI2ldC3q0QJQ2zGmbRACMh4Z4e4YB3GXq3bFjO8OncW0GvPztlmvj0oFCc8xE0Wug==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <title>Module C: Ansible</title>
</head>
<body>
    <?php require "../blocks/header.php" ?>
    <p><a href="../pages/page_6.php" class="w-10 btn btn-lg btn-outline-primary">Назад:</a></p>

    <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md-5 col-lg-6 order-md-2">

            <!-- Image -->
            <img src="../img/ansible_docker.jpg" class="img-fluid mw-md-150 mw-lg-130 mb-6 mb-md-0 aos-init aos-animate" alt="..." data-aos="fade-up" data-aos-delay="100">

          </div>
          <div class="col-12 col-md-7 col-lg-6 order-md-1 aos-init aos-animate" data-aos="fade-up">

            <!-- Heading -->
            <h1 class="display-4 text-center text-md-start">
            Модуль С: Автоматизация развёртывания приложения
            </h1>

            <!-- Text -->
            <p class="lead text-center text-md-start text-muted mb-6 mb-lg-8">
              Один из вариантов решения задания Регионального Чемпионата
            </p>

            <!-- Buttons -->
            <div class="text-center text-md-start">
              <a href="#automatization" class="btn btn-primary shadow lift me-1">
                Посмотреть <i class="fe fe-arrow-right d-none d-md-inline ms-3"></i>
              </a>
              <a href="#doc" class="btn btn-primary-soft lift">
                Документация
              </a>
            </div>

          </div>
        </div>
      </div>    
      <br>

      <div class="d-flex flex-wrap">
        <div class="card mb-4 rounded-3 shadow-sm" style="width: 100%;">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
            <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"></use></svg>
            </div>
            <h3 class="fs-2">Описание заданиия:</h3>
            <p style="text-indent: 20px;">В рамках данного задания по автоматизации развёртывания приложения от Вас требуется создание сценария настройки инфраструктуры с использованием программного обеспечения Ansible. Конечной целья является функционирование обозначенных сервисов при развёртывании вашего сценария на эталонном стенде.</p>            
            <p style="text-indent: 20px;">В вашем распоряжении тестовый стенд состоящий из 4 виртуальных машины под управлением Ubuntu 20.04: Project_1, Project_2, Project_3, Project_Deployer.</p>
            <br>
            <p style="text-indent: 20px;">Исходные файлы размещены в Git-репозитории: </p>
            <p style="text-indent: 70px;">https://github.com/Jeniston14/wsr-skillcloud</p>
            <br>
            <p style="text-indent: 20px;">Обратите внимание, что проверка будет производиться путём клонирования вашего репозитория на проверочный стенд, с последующим запуском playbook-сценария. Продумайте то, что необходимо для его выполнения. </p>
            <p style="text-indent: 20px;">После выполнения задания, вам требуется собрать все необходимые файлы, который необходимы для выполнения первой части задания и отправить плейбук с зависимостями на свой GitHub аккаунт.</p>
            <p style="text-indent: 20px;">Создайте в вашем репозитории файл read.me и укажите дополнительную информацию по запуску вашего плейбука. Реализация второй части задания допустима на текущей инфраструктуре, но никто не возражает в качестве её автоматизации.</p>
        </div>
      </div>

        <div class="d-flex flex-wrap">
          <div class="card mb-4 rounded-3 shadow-sm" style="width: 100%;">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
              <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"></use></svg>
            </div>
            <h3 class="fs-2" id="automatization">Автоматизация базовой конфигурации виртуальных машин:</h3>
            <p style="text-indent: 20px;">В первой части вам необходимо реализовать Ansible playbook для автоматизации базовой конфигурации виртуальных машин. Контролирубщим является Project_deployer.</p>
            <p style="text-indent: 20px;">Выполните клонирование Git-репозитория в корневую директорию узла Project_Deployer.</p>
            <p style="text-indent: 20px;">Ansible playbook должен выполнять следующие задачи конфигурации:</p>
            
            <div class="instructions">
                <ul>
                    <li>Обновить списки пакетов, выполнить установку curl.</li>
                    <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_task1(event)">показать код:</a></strong></p>
                    <pre id="task1" style="display: none;">
                        <code>
- name: Update package lists, perform curl installation
  apt: 
    name: 'curl'
    state: latest
    update_cache: true
                        </code>
                    </pre>

                    <li>Активировать межсетевой экран UFW. Разрешить порты TCP 80,8080,1834</li>
                    <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_task2(event)">показать код:</a></strong></p>
                    <pre id="task2" style="display: none;">
                        <code>
- name: Activate the UFW firewall, allow TCP ports 80,8080,1834
  ufw:
    rule: allow
    port: '{{ item }}'
    proto: tcp 
    state: enabled
  loop: 
    - '22'
    - '80'
    - '8080'
    - '1834'
                        </code>
                    </pre>
                    <p style="text-indent: 20px;"><i>Так же необходимо разрешить 22 порт, чтобы не потерять доступ к виртуальным машинам на момент выполнения сценария!</i></p>

                    <li>Изменить конфигурационный файл SSH.</li>
                    <ul><li>Порт подключения должен быть 1834</li></ul>
                    <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_task3(event)">показать код:</a></strong></p>
                    <pre id="task3" style="display: none;">
                        <code>
- name: Change the SSH configuration file | Connection port should be 1834
  lineinfile:
    dest: "/etc/ssh/sshd_config"
    regexp: "^Port"
    line: 'Port 1834'
                        </code>
                    </pre>
                    <ul><li>Разрешить авторизацию по публичному ключу</li></ul>
                    <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_task4(event)">показать код:</a></strong></p>
                    <pre id="task4" style="display: none;">
                        <code>
- name: Change SSH configuration file | Allow public key authorization
  lineinfile:
    dest: "/etc/ssh/sshd_config"
    line: '{{ item }}'
  loop: 
    - RSAAuthentication yes
    - PubkeyAuthentication yes
    - AuthorizedKeysFile     %h/.ssh/authorized_keys
                        </code>
                    </pre>

                    <li>Создать пользователей для доступа к виртуальным машинам. Для каждого пользователя необходимо разместить публичный ключ</li>
                    <br>
                    <p><i>Исходя из соображений безопасности, файл со списком пользователей, паролей и публичными ключами расположенный в директории Users/privileges.yml Git-репозитория, зашифрован при помощи Ansible Vault. Используйте пароль gK2VEOxxEK9n для дешифрования файла.</i></p>
                    <pre># ansible-vault decrypt Users/privileges.yml - команда для дешифрования файла</pre>
                    <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_task5(event)">показать код:</a></strong></p>
                    <pre id="task5" style="display: none;">
                        <code>
- name: Create users to access virtual machines
  ansible.builtin.user:
    name: "{{ item.username }}"
    password: "{{ item.userpass }}"
  loop:
     - { username: 'Webdeveloper', userpass: 'S52we9V6QTp7' }
     - { username: 'Devopsengineer', userpass: 'dHy6sKGHsj2T' }
     - { username: 'Projectmanager', userpass: 'oP92ugMSaCbe' }
     
- name: A public key must be placed for each user
  authorized_key:
    user: "{{ item }}"
    state: present
    key: "{{ id_rsa_pub }}"
  loop: 
    - Webdeveloper
    - Devopsengineer
    - Projectmanager
  vars:
    id_rsa_pub: "ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABgQCovvBkeLIDsvbCyQsMWtPWVgGVKcwAqRONiBJ9JyrVCQbruyMPutatjSlhNpYXKLlP4BXHrGrmAVqeI155li1fkNP5Il7viHRE0HvA3M2extNGDDCiX5f5OlIeT9p/D9OHvWWozLjN2NAGEW24feuzKPZb6Kyv2W3yHbiIU3wt8v50VAIA2+PAfElHp1jplGHQLmYuT6Cc26Pn3WYXZ8t8oU77T6Ki5qDG5V5DVZI3Ym5gqqXXtJYzET9piJvO6qiIcgljtOGlUH9H9QNLEbuF+RKIhL3pFAnF8S79Km2A3j9KFZw6prDR6/VeMffMrNSZLeYztzDGEzm35uz5q6j+qrKsuA4SfpbSOcBwaariOoKpb6JfogoJRgCqxR5O1AKR/Oqhdk6JOlKJk+tIXFmOczH7da/W93f8KGGve4iHRvz/e3vYA7exXIVkD8mc/VmIoT1kqh/uNGia/adnyCgvMpL8JXLJgY2DThpjHslUr0RTEpQJTLTka3D43YV37kM=
                        </code>
                    </pre>

                    <li>Выполнить установку пакета Docker</li>
                    <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_task6(event)">показать код:</a></strong></p>
                    <pre id="task6" style="display: none;">
                        <code>
- name: Install the Docker package | Install aptitude
  apt:
    name: aptitude
    state: latest
    update_cache: true

- name: Install the Docker package | Install required system packages
  apt:
    pkg:
      - apt-transport-https
      - ca-certificates
      - curl
      - software-properties-common
      - python3-pip
      - virtualenv
      - python3-setuptools
    state: latest
    update_cache: true

- name: Install the Docker package | Add Docker GPG apt Key
  apt_key:
    url: https://download.docker.com/linux/ubuntu/gpg
    state: present

- name: Install the Docker package | Add Docker Repository
  apt_repository:
    repo: deb https://download.docker.com/linux/ubuntu focal stable
    state: present

- name: Install the Docker package | Update apt and install docker-ce
  apt:
    name: docker-ce
    state: latest
    update_cache: true

- name: Install the Docker package | Install Docker Module for Python
  pip:
    name: docker
                        </code>
                    </pre>

                    <li>Запустить скрипт установки docker-compose</li>
                    <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_task7(event)">показать код:</a></strong></p>
                    <pre id="task7" style="display: none;">
                        <code>
- name: Run the docker-compose installation script
  script: ./wsr-skillcloud/docker-compose.sh  
                        </code>
                    </pre>

                    <li>Создайте директорию /skillcloud-nginx, скопируйте файлы необходимые для сборки образов, а также index.html и nginx.conf файлы</li>
                    <br>
                    <p><i>Поскольку в дальнейшем планируется автоматизация развёртывания приложения, то необходимо зарание заполнить файл "nginx.conf" ip-адресами виртуальных машин. И создать необходимую структуру каталогов в директории /skillcloud-nginx</i></p>
                    <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_task8(event)">показать код:</a></strong></p>
                    <pre id="task8" style="display: none;">
                        <code>
- name: Create a directory /skillcloud-nginx
  file:
    path: /skillcloud-nginx
    state: directory

- name: Copying files needed to build images
  copy:
    src: ./wsr-skillcloud/docker-compose.yml
    dest: /skillcloud-nginx

- name: Create a directory /skillcloud-nginx/{site,balance}
  file:
    path: /skillcloud-nginx/{{ item }}
    state: directory
  loop:
    - site
    - balance

- name: Copying files needed to build images
  copy:
    src: ./wsr-skillcloud/{{ item.src }}
    dest: /skillcloud-nginx/{{ item.dest }}/Dockerfile
  loop:
     - { src: Dockerfile-site, dest: site }
     - { src: Dockerfile-balance, dest: balance }
     

- name: Copying files needed to build images
  copy:
    src: ./wsr-skillcloud/{{ item.src }}
    dest: /skillcloud-nginx/{{ item.dest }}
  loop:
    - { src: index.html, dest: site}
    - { src: nginx.conf, dest: balance }
                        </code>
                    </pre>

                    <li>Перезапустить SSH и UFW</li>
                    <br>
                    <p><i>Внимание! Ранее порт для подключения по SSH был поменен на 1834, поэтому после перезапуска службы SSH доступ будет потерян. Что бы этого недотустить необходимо после перезагрузки службы явным образом указать новый порт, через set_fact </i></p>
                    <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_task9(event)">показать код:</a></strong></p>
                    <pre id="task9" style="display: none;">
                        <code>
- name: Restart UFW 
  service: 
    name: ufw
    state: restarted 

- name: Restart SSH 
  service: 
    name: sshd 
    state: restarted 

- name: Change ssh port to 1834
  set_fact:
    ansible_port: 1834
                        </code>
                    </pre>

                    <li>Выполнить перезагрузку виртуальных машин</li>
                    <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_task10(event)">показать код:</a></strong></p>
                    <pre id="task10" style="display: none;">
                        <code>
- name: Reboot virtual machines
  reboot:
                        </code>
                    </pre>        
                
                
                  </ul>
            </div>
          </div>
        </div>

        <div class="d-flex flex-wrap">
          <div class="card mb-4 rounded-3 shadow-sm" style="width: 100%;">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
              <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"></use></svg>
            </div>

            <h3 class="fs-2">Развёртывание отказоустойчивости веб-сервера на базе Nginx: </h3>
            <p style="text-indent: 20px;"><i>Допускается ручное выполнения данной части задания, посредством сборки docker образов из Dockerfile, а также запуск docker контейнеров при помощи docker-compose</i></p>
            <p style="text-indent: 20px;"><strong>Но никто не запрещает автоматизировать данный процесс.</strong></p>
            
            <div class="instructions">
              <ul>
                <li>Выполнить сборку образов на виртуальных машинах, используя Dockerfile в директории skillcloud-nginx.</li>
                <ul><li>Задайте теги при сборке образов, site:site и balance:balance</li></ul>
                <br>
                <p><i>Для автоматизации данной части задания создаётся второй сценарий, поэтому необходимо явно указать порт для подключения по ssh,а так же для работы с модулем docker_image указать интерпретатор python</i></p>
                <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_task11(event)">показать код:</a></strong></p>
                    <pre id="task11" style="display: none;">
                        <code>
- name: Change ssh port to 1834
  set_fact:
    ansible_port: 1834

- name: Change ansible_python_interpreter 
  set_fact:
    ansible_python_interpreter: /usr/bin/python3

- name: Build images on a VM using Dockerfile in the skillcloud-nsinx directory
  docker_image:
    name: '{{ item.name }}'
    build:
      path: /skillcloud-nginx/{{ item.path }}
  loop: 
    - { name: site, path: site }
    - { name: balance, path: balance }
                        </code>
                    </pre>

                <li>Запустить docker-compose.yml для сборки контейнеров.</li>
                <br>
                <p><i>Для работы модуля docker_compose необходимо установить docker-compose для python. Ранее в первом сценарии была выполнена установка пакета "pip", поэтому выполнить можно черег него.</i></p>
                <p style="text-indent: 20px;"><strong><a href="#" onclick="toggleCodeBlock_task12(event)">показать код:</a></strong></p>
                    <pre id="task12" style="display: none;">
                        <code>
- name: Pip install docker-compose
  pip: 
    name: docker-compose

- name: Launching docker-compose.yml for container assembly
  docker_compose:
    project_src: /skillcloud-nginx
    files:
      - docker-compose.yml 
                        </code>
                    </pre>
              </ul>
            </div>
          </div>
        </div>

        <div class="d-flex flex-wrap">
          <div class="card mb-4 rounded-3 shadow-sm" style="width: 100%;">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
              <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"></use></svg>
            </div>
            <h3 class="fs-2" id="doc">Ссылки на используемые модули ansible:</h3>
            <p><a href="https://docs.ansible.com/ansible/latest/collections/ansible/builtin/apt_module.html">ansible.builtin.apt module – Manages apt-packages</a></p>
            <p><a href="https://docs.ansible.com/ansible/latest/collections/community/general/ufw_module.html">community.general.ufw module – Manage firewall with UFW</a></p>
            <p><a href="https://docs.ansible.com/ansible/latest/collections/ansible/builtin/lineinfile_module.html">ansible.builtin.lineinfile module – Manage lines in text files</a></p>
            <p><a href="https://docs.ansible.com/ansible/latest/collections/ansible/builtin/user_module.html">ansible.builtin.user module – Manage user accounts</a></p>
            <p><a href="https://docs.ansible.com/ansible/latest/collections/ansible/posix/authorized_key_module.html">ansible.posix.authorized_key module – Adds or removes an SSH authorized key</a></p>
            <p><a href="https://docs.ansible.com/ansible/latest/collections/ansible/builtin/apt_key_module.html">ansible.builtin.apt_key module – Add or remove an apt key</a><p>
            <p><a href="https://docs.ansible.com/ansible/latest/collections/ansible/builtin/apt_repository_module.html">ansible.builtin.apt_repository module – Add and remove APT repositories</a><p>
            <p><a href="https://docs.ansible.com/ansible/latest/collections/ansible/builtin/pip_module.html">ansible.builtin.pip module – Manages Python library dependencies</a><p>
            <p><a href="https://docs.ansible.com/ansible/latest/collections/ansible/builtin/script_module.html">ansible.builtin.script module – Runs a local script on a remote node after transferring it</a><p>
            <p><a href="https://docs.ansible.com/ansible/latest/collections/ansible/builtin/file_module.html">ansible.builtin.file module – Manage files and file properties</a><p>
            <p><a href="https://docs.ansible.com/ansible/latest/collections/ansible/builtin/copy_module.html">ansible.builtin.copy module – Copy files to remote locations</a><p>
            <p><a href="https://docs.ansible.com/ansible/latest/collections/ansible/builtin/service_module.html">ansible.builtin.service module – Manage services</a><p>
            <p><a href="https://docs.ansible.com/ansible/latest/collections/ansible/builtin/reboot_module.html">ansible.builtin.reboot module – Reboot a machine</a><p>
            <p><a href="https://docs.ansible.com/ansible/latest/collections/ansible/builtin/set_fact_module.html">ansible.builtin.set_fact module – Set host variable(s) and fact(s).</a><p>
            <p><a href="https://docs.ansible.com/archive/ansible/2.3/docker_image_module.html">docker_image - Manage docker images.</a><p>
            <p><a href="https://docs.ansible.com/ansible/latest/collections/community/docker/docker_compose_module.html">community.docker.docker_compose module – Manage multi-container Docker applications with Docker Compose.</a><p>
            <p><a href="https://docs.ansible.com/ansible/latest/playbook_guide/playbooks_loops.html">Loops</a><p>
          </div>
        </div>      
    
    <p><a href="#" class="btn-scroll-to-top w-100 btn btn-lg btn-outline-primary">В начало</a></p>
    <?php require "../blocks/footer.php" ?>
</body>
</html>
