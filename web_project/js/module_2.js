function toggleCodeBlock() {
    var link = event.target;
    var blockId = link.innerText.toLowerCase() + '-block';
    var block = document.getElementById(blockId);
    if (block.style.display === 'block') {
      block.style.display = 'none';
    } else {
      block.style.display = 'block';
    }
  
    event.preventDefault();
  }
  
  $(document).ready(function() {
    $('.expand-btn').click(function(e) {
      e.preventDefault();
      var instructions = $(this).closest('.card').next('.instructions');
      instructions.slideToggle();
      $(this).toggleClass('active');
      if (instructions.is(':visible')) {
        $(this).text('Свернуть: ');
        $(this).find('use').attr('xlink:href', '#chevron-down');
      } else {
        $(this).text('Развернуть: ');
        $(this).find('use').attr('xlink:href', '#chevron-right');
      }
    });
  });


//
function toggleCodeBlock_rtr_l_ssh(event) {
    event.preventDefault();
    var menu = document.getElementById("menu_rtr-l_ssh");
    if (menu.style.display === "none") {
      menu.style.display = "block";
    } else {
      menu.style.display = "none";
    }
  }

function toggleCodeBlock_isp_dns(event) {
    event.preventDefault();
    var menu = document.getElementById("isp_dns");
    if (menu.style.display === "none") {
      menu.style.display = "block";
    } else {
      menu.style.display = "none";
    }
  }

function toggleCodeBlock_srv_dns(event) {
    event.preventDefault();
    var menu = document.getElementById("menu_srv_dns");
    if (menu.style.display === "none") {
      menu.style.display = "block";
    } else {
      menu.style.display = "none";
    }
  }

function toggleCodeBlock_isp_ntp(event) {
    event.preventDefault();
    var menu = document.getElementById("isp_ntp");
    if (menu.style.display === "none") {
      menu.style.display = "block";
    } else {
      menu.style.display = "none";
    }
  }

function toggleCodeBlock_srv_ntp(event) {
    event.preventDefault();
    var menu = document.getElementById("menu_srv_ntp");
    if (menu.style.display === "none") {
      menu.style.display = "block";
    } else {
      menu.style.display = "none";
    }
  }

function toggleCodeBlock_srv_smb(event) {
    event.preventDefault();
    var menu = document.getElementById("menu_srv_smb");
    if (menu.style.display === "none") {
      menu.style.display = "block";
    } else {
      menu.style.display = "none";
    }
  }

function toggleCodeBlock_srv_mount(event) {
    event.preventDefault();
    var menu = document.getElementById("menu_srv_mount");
    if (menu.style.display === "none") {
      menu.style.display = "block";
    } else {
      menu.style.display = "none";
    }
  }

function toggleCodeBlock_srv_ca(event) {
    event.preventDefault();
    var menu = document.getElementById("menu_srv_ca");
    if (menu.style.display === "none") {
      menu.style.display = "block";
    } else {
      menu.style.display = "none";
    }
  }

function toggleCodeBlock_web_l_docker(event) {
    event.preventDefault();
    var menu = document.getElementById("web_l_docker");
    if (menu.style.display === "none") {
      menu.style.display = "block";
    } else {
      menu.style.display = "none";
    }
  }

function toggleCodeBlock_web_r_docker(event) {
    event.preventDefault();
    var menu = document.getElementById("web_r_docker");
    if (menu.style.display === "none") {
      menu.style.display = "block";
    } else {
      menu.style.display = "none";
    }
  }

function toggleCodeBlock_rtr_l_docker(event) {
    event.preventDefault();
    var menu = document.getElementById("menu_rtr_l_docker");
    if (menu.style.display === "none") {
      menu.style.display = "block";
    } else {
      menu.style.display = "none";
    }
  }

function toggleCodeBlock_rtr_r_docker(event) {
    event.preventDefault();
    var menu = document.getElementById("menu_rtr_r_docker");
    if (menu.style.display === "none") {
      menu.style.display = "block";
    } else {
      menu.style.display = "none";
    }
  }

function toggleCodeBlock_srv_create_ca(event) {
    event.preventDefault();
    var menu = document.getElementById("menu_srv_create_ca");
    if (menu.style.display === "none") {
      menu.style.display = "block";
    } else {
      menu.style.display = "none";
    }
  }

function toggleCodeBlock_web_l_nginx(event) {
    event.preventDefault();
    var menu = document.getElementById("web_l_nginx");
    if (menu.style.display === "none") {
      menu.style.display = "block";
    } else {
      menu.style.display = "none";
    }
  }

function toggleCodeBlock_cli_ca(event) {
    event.preventDefault();
    var menu = document.getElementById("cli_ca");
    if (menu.style.display === "none") {
      menu.style.display = "block";
    } else {
      menu.style.display = "none";
    }
  }
//
function toggleInstructions_rtr_l_ssh(event) {
    event.preventDefault();
    var instruction = $(event.target).data('instruction');
    if (instruction === 'Инструкция для Debian') {
      $('#instructions-cisco-rtr-l_ssh').hide();
      $('#instructions-debian-rtr-l_ssh').show();
    } else if (instruction === 'Инструкция для CiscoCSR') {
      $('#instructions-debian-rtr-l_ssh').hide();
      $('#instructions-cisco-rtr-l_ssh').show();
    }
    var menu = document.getElementById("menu_rtr-l");
    menu.style.display = "none";
  }

function toggleInstructions_srv_dns(event) {
    event.preventDefault();
    var instruction = $(event.target).data('instruction');
    if (instruction === 'Инструкция для Debian') {
      $('#instructions-windows-srv_dns').hide();
      $('#instructions-debian-srv_dns').show();
    } else if (instruction === 'Инструкция для WindowsServer') {
      $('#instructions-debian-srv_dns').hide();
      $('#instructions-windows-srv_dns').show();
    }
    var menu = document.getElementById("menu_srv_dns");
    menu.style.display = "none";
  }

function toggleInstructions_srv_ntp(event) {
    event.preventDefault();
    var instruction = $(event.target).data('instruction');
    if (instruction === 'Инструкция для Debian') {
      $('#instructions-windows-srv_ntp').hide();
      $('#instructions-debian-srv_ntp').show();
    } else if (instruction === 'Инструкция для WindowsServer') {
      $('#instructions-debian-srv_ntp').hide();
      $('#instructions-windows-srv_ntp').show();
    }
    var menu = document.getElementById("menu_srv_ntp");
    menu.style.display = "none";
  }

function toggleInstructions_srv_smb(event) {
    event.preventDefault();
    var instruction = $(event.target).data('instruction');
    if (instruction === 'Инструкция для Debian') {
      $('#instructions-windows-srv_smb').hide();
      $('#instructions-debian-srv_smb').show();
    } else if (instruction === 'Инструкция для WindowsServer') {
      $('#instructions-debian-srv_smb').hide();
      $('#instructions-windows-srv_smb').show();
    }
    var menu = document.getElementById("menu_srv_smb");
    menu.style.display = "none";
  }

function toggleInstructions_srv_mount(event) {
    event.preventDefault();
    var instruction = $(event.target).data('instruction');
    if (instruction === 'Инструкция для Debian') {
      $('#instructions-windows-srv_mount').hide();
      $('#instructions-debian-srv_mount').show();
    } else if (instruction === 'Инструкция для WindowsServer') {
      $('#instructions-debian-srv_mount').hide();
      $('#instructions-windows-srv_mount').show();
    }
    var menu = document.getElementById("menu_srv_mount");
    menu.style.display = "none";
  }

function toggleInstructions_srv_ca(event) {
    event.preventDefault();
    var instruction = $(event.target).data('instruction');
    if (instruction === 'Инструкция для Debian') {
      $('#instructions-windows-srv_ca').hide();
      $('#instructions-debian-srv_ca').show();
    } else if (instruction === 'Инструкция для WindowsServer') {
      $('#instructions-debian-srv_ca').hide();
      $('#instructions-windows-srv_ca').show();
    }
    var menu = document.getElementById("menu_srv_ca");
    menu.style.display = "none";
  }

function toggleInstructions_rtr_l_docker(event) {
    event.preventDefault();
    var instruction = $(event.target).data('instruction');
    if (instruction === 'Инструкция для Debian') {
      $('#instructions-windows-rtr_l_docker').hide();
      $('#instructions-debian-rtr_l_docker').show();
    } else if (instruction === 'Инструкция для CiscoCSR') {
      $('#instructions-debian-rtr_l_docker').hide();
      $('#instructions-windows-rtr_l_docker').show();
    }
    var menu = document.getElementById("menu_rtr_l_docker");
    menu.style.display = "none";
  }

function toggleInstructions_rtr_r_docker(event) {
    event.preventDefault();
    var instruction = $(event.target).data('instruction');
    if (instruction === 'Инструкция для Debian') {
      $('#instructions-windows-rtr_r_docker').hide();
      $('#instructions-debian-rtr_r_docker').show();
    } else if (instruction === 'Инструкция для CiscoCSR') {
      $('#instructions-debian-rtr_r_docker').hide();
      $('#instructions-windows-rtr_r_docker').show();
    }
    var menu = document.getElementById("menu_rtr_r_docker");
    menu.style.display = "none";
  }

function toggleInstructions_srv_create_ca(event) {
    event.preventDefault();
    var instruction = $(event.target).data('instruction');
    if (instruction === 'Инструкция для Debian') {
      $('#instructions-windows-srv_create_ca').hide();
      $('#instructions-debian-srv_create_ca').show();
    } else if (instruction === 'Инструкция для WindowsServer') {
      $('#instructions-debian-srv_create_ca').hide();
      $('#instructions-windows-srv_create_ca').show();
    }
    var menu = document.getElementById("menu_srv_create_ca");
    menu.style.display = "none";
  }
