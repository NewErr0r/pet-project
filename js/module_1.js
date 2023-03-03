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


//
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
function toggleCodeBlock_rtr_l(event) {
  event.preventDefault();
  var menu = document.getElementById("menu_rtr-l");
  if (menu.style.display === "none") {
    menu.style.display = "block";
  } else {
    menu.style.display = "none";
  }
}

function toggleCodeBlock_rtr_r(event) {
  event.preventDefault();
  var menu = document.getElementById("menu_rtr-r");
  if (menu.style.display === "none") {
    menu.style.display = "block";
  } else {
    menu.style.display = "none";
  }
}

function toggleCodeBlock_srv(event) {
  event.preventDefault();
  var menu = document.getElementById("menu_srv");
  if (menu.style.display === "none") {
    menu.style.display = "block";
  } else {
    menu.style.display = "none";
  }
}

function toggleCodeBlock_isp_ipv4(event) {
  event.preventDefault();
  var menu = document.getElementById("isp-block_ipv4");
  if (menu.style.display === "none") {
    menu.style.display = "block";
  } else {
    menu.style.display = "none";
  }
}

function toggleCodeBlock_rtr_l_ipv4(event) {
  event.preventDefault();
  var menu = document.getElementById("menu_rtr-l_ipv4_ipv4");
  if (menu.style.display === "none") {
    menu.style.display = "block";
  } else {
    menu.style.display = "none";
  }
}

function toggleCodeBlock_rtr_r_ipv4(event) {
  event.preventDefault();
  var menu = document.getElementById("menu_rtr-r_ipv4");
  if (menu.style.display === "none") {
    menu.style.display = "block";
  } else {
    menu.style.display = "none";
  }
}

function toggleCodeBlock_srv_ipv4(event) {
  event.preventDefault();
  var menu = document.getElementById("menu_srv_ipv4");
  if (menu.style.display === "none") {
    menu.style.display = "block";
  } else {
    menu.style.display = "none";
  }
}

function toggleCodeBlock_web_l_ipv4(event) {
  event.preventDefault();
  var menu = document.getElementById("web-l-block-ipv4");
  if (menu.style.display === "none") {
    menu.style.display = "block";
  } else {
    menu.style.display = "none";
  }
}

function toggleCodeBlock_web_r_ipv4(event) {
  event.preventDefault();
  var menu = document.getElementById("web-r-block-ipv4");
  if (menu.style.display === "none") {
    menu.style.display = "block";
  } else {
    menu.style.display = "none";
  }
}

function toggleCodeBlock_cli_ipv4(event) {
  event.preventDefault();
  var menu = document.getElementById("cli-block-ipv4");
  if (menu.style.display === "none") {
    menu.style.display = "block";
  } else {
    menu.style.display = "none";
  }
}

function toggleCodeBlock_rtr_l_static_route(event) {
  event.preventDefault();
  var menu = document.getElementById("menu_rtr-l_ipv4_static_route");
  if (menu.style.display === "none") {
    menu.style.display = "block";
  } else {
    menu.style.display = "none";
  }
}

function toggleCodeBlock_rtr_r_static_route(event) {
  event.preventDefault();
  var menu = document.getElementById("menu_rtr-r_ipv4_static_route");
  if (menu.style.display === "none") {
    menu.style.display = "block";
  } else {
    menu.style.display = "none";
  }
}

function toggleCodeBlock_isp_icmp_forward(event) {
  event.preventDefault();
  var menu = document.getElementById("isp_icmp_forward");
  if (menu.style.display === "none") {
    menu.style.display = "block";
  } else {
    menu.style.display = "none";
  }
}

function toggleCodeBlock_rtr_l_pat(event) {
  event.preventDefault();
  var menu = document.getElementById("menu_rtr-l_ipv4_pat");
  if (menu.style.display === "none") {
    menu.style.display = "block";
  } else {
    menu.style.display = "none";
  }
}

function toggleCodeBlock_rtr_r_pat(event) {
  event.preventDefault();
  var menu = document.getElementById("menu_rtr-r_ipv4_pat");
  if (menu.style.display === "none") {
    menu.style.display = "block";
  } else {
    menu.style.display = "none";
  }
}

function toggleCodeBlock_rtr_l_gre(event) {
  event.preventDefault();
  var menu = document.getElementById("menu_rtr-l_gre");
  if (menu.style.display === "none") {
    menu.style.display = "block";
  } else {
    menu.style.display = "none";
  }
}

function toggleCodeBlock_rtr_r_gre(event) {
  event.preventDefault();
  var menu = document.getElementById("menu_rtr-r_gre");
  if (menu.style.display === "none") {
    menu.style.display = "block";
  } else {
    menu.style.display = "none";
  }
}

function toggleCodeBlock_rtr_l_ospf(event) {
  event.preventDefault();
  var menu = document.getElementById("menu_rtr-l_ospf");
  if (menu.style.display === "none") {
    menu.style.display = "block";
  } else {
    menu.style.display = "none";
  }
}

function toggleCodeBlock_rtr_r_ospf(event) {
  event.preventDefault();
  var menu = document.getElementById("menu_rtr-r_ospf");
  if (menu.style.display === "none") {
    menu.style.display = "block";
  } else {
    menu.style.display = "none";
  }
}



//
function toggleInstructions_rtr_l(event) {
  event.preventDefault();
  var instruction = $(event.target).data('instruction');
  if (instruction === 'Инструкция для Debian') {
    $('#instructions-cisco-rtr-l').hide();
    $('#instructions-debian-rtr-l').show();
  } else if (instruction === 'Инструкция для CiscoCSR') {
    $('#instructions-debian-rtr-l').hide();
    $('#instructions-cisco-rtr-l').show();
  }
  var menu = document.getElementById("menu_rtr-l");
  menu.style.display = "none";
}

function toggleInstructions_rtr_r(event) {
  event.preventDefault();
  var instruction = $(event.target).data('instruction');
  if (instruction === 'Инструкция для Debian') {
    $('#instructions-cisco-rtr-r').hide();
    $('#instructions-debian-rtr-r').show();
  } else if (instruction === 'Инструкция для CiscoCSR') {
    $('#instructions-debian-rtr-r').hide();
    $('#instructions-cisco-rtr-r').show();
  }
  var menu = document.getElementById("menu_rtr-r");
  menu.style.display = "none";
}

function toggleInstructions_srv(event) {
  event.preventDefault();
  var instruction = $(event.target).data('instruction');
  if (instruction === 'Инструкция для Debian') {
    $('#instructions-windows-srv').hide();
    $('#instructions-debian-srv').show();
  } else if (instruction === 'Инструкция для WindowsServer') {
    $('#instructions-debian-srv').hide();
    $('#instructions-windows-srv').show();
  }
  var menu = document.getElementById("menu_srv");
  menu.style.display = "none";
}

function toggleInstructions_rtr_l_ipv4(event) {
  event.preventDefault();
  var instruction = $(event.target).data('instruction');
  if (instruction === 'Инструкция для Debian') {
    $('#instructions-cisco-rtr-l_ipv4').hide();
    $('#instructions-debian-rtr-l_ipv4').show();
  } else if (instruction === 'Инструкция для CiscoCSR') {
    $('#instructions-debian-rtr-l_ipv4').hide();
    $('#instructions-cisco-rtr-l_ipv4').show();
  }
  var menu = document.getElementById("menu_rtr-l_ipv4_ipv4");
  menu.style.display = "none";
}

function toggleInstructions_rtr_r_ipv4(event) {
  event.preventDefault();
  var instruction = $(event.target).data('instruction');
  if (instruction === 'Инструкция для Debian') {
    $('#instructions-cisco-rtr-r_ipv4').hide();
    $('#instructions-debian-rtr-r_ipv4').show();
  } else if (instruction === 'Инструкция для CiscoCSR') {
    $('#instructions-debian-rtr-r_ipv4').hide();
    $('#instructions-cisco-rtr-r_ipv4').show();
  }
  var menu = document.getElementById("menu_rtr-r_ipv4");
  menu.style.display = "none";
}

function toggleInstructions_srv_ipv4(event) {
  event.preventDefault();
  var instruction = $(event.target).data('instruction');
  if (instruction === 'Инструкция для Debian') {
    $('#instructions-windows-srv_ipv4').hide();
    $('#instructions-debian-srv_ipv4').show();
  } else if (instruction === 'Инструкция для WindowsServer') {
    $('#instructions-debian-srv_ipv4').hide();
    $('#instructions-windows-srv_ipv4').show();
  }
  var menu = document.getElementById("menu_srv_ipv4");
  menu.style.display = "none";
}

function toggleInstructions_rtr_l_static_route(event) {
  event.preventDefault();
  var instruction = $(event.target).data('instruction');
  if (instruction === 'Инструкция для Debian') {
    $('#instructions-cisco-rtr-l_static_route').hide();
    $('#instructions-debian-rtr-l_static_route').show();
  } else if (instruction === 'Инструкция для CiscoCSR') {
    $('#instructions-debian-rtr-l_static_route').hide();
    $('#instructions-cisco-rtr-l_static_route').show();
  }
  var menu = document.getElementById("menu_rtr-l_ipv4_static_route");
  menu.style.display = "none";
}


function toggleInstructions_rtr_r_static_route(event) {
  event.preventDefault();
  var instruction = $(event.target).data('instruction');
  if (instruction === 'Инструкция для Debian') {
    $('#instructions-cisco-rtr-r_static_route').hide();
    $('#instructions-debian-rtr-r_static_route').show();
  } else if (instruction === 'Инструкция для CiscoCSR') {
    $('#instructions-debian-rtr-r_static_route').hide();
    $('#instructions-cisco-rtr-r_static_route').show();
  }
  var menu = document.getElementById("menu_rtr-r_ipv4_static_route");
  menu.style.display = "none";
}

function toggleInstructions_rtr_l_pat(event) {
  event.preventDefault();
  var instruction = $(event.target).data('instruction');
  if (instruction === 'Инструкция для Debian') {
    $('#instructions-cisco-rtr-l_pat').hide();
    $('#instructions-debian-rtr-l_pat').show();
  } else if (instruction === 'Инструкция для CiscoCSR') {
    $('#instructions-debian-rtr-l_pat').hide();
    $('#instructions-cisco-rtr-l_pat').show();
  }
  var menu = document.getElementById("menu_rtr-l_ipv4_pat");
  menu.style.display = "none";
}

function toggleInstructions_rtr_r_pat(event) {
  event.preventDefault();
  var instruction = $(event.target).data('instruction');
  if (instruction === 'Инструкция для Debian') {
    $('#instructions-cisco-rtr-r_pat').hide();
    $('#instructions-debian-rtr-r_pat').show();
  } else if (instruction === 'Инструкция для CiscoCSR') {
    $('#instructions-debian-rtr-r_pat').hide();
    $('#instructions-cisco-rtr-r_pat').show();
  }
  var menu = document.getElementById("menu_rtr-r_ipv4_pat");
  menu.style.display = "none";
}

function toggleInstructions_rtr_l_gre(event) {
  event.preventDefault();
  var instruction = $(event.target).data('instruction');
  if (instruction === 'Инструкция для Debian') {
    $('#instructions-cisco-rtr-l_gre').hide();
    $('#instructions-debian-rtr-l_gre').show();
  } else if (instruction === 'Инструкция для CiscoCSR') {
    $('#instructions-debian-rtr-l_gre').hide();
    $('#instructions-cisco-rtr-l_gre').show();
  }
  var menu = document.getElementById("menu_rtr-l_gre");
  menu.style.display = "none";
}

function toggleInstructions_rtr_r_gre(event) {
  event.preventDefault();
  var instruction = $(event.target).data('instruction');
  if (instruction === 'Инструкция для Debian') {
    $('#instructions-cisco-rtr-r_gre').hide();
    $('#instructions-debian-rtr-r_gre').show();
  } else if (instruction === 'Инструкция для CiscoCSR') {
    $('#instructions-debian-rtr-r_gre').hide();
    $('#instructions-cisco-rtr-r_gre').show();
  }
  var menu = document.getElementById("menu_rtr-r_gre");
  menu.style.display = "none";
}

function toggleInstructions_rtr_l_ospf(event) {
  event.preventDefault();
  var instruction = $(event.target).data('instruction');
  if (instruction === 'Инструкция для Debian') {
    $('#instructions-cisco-rtr-l_ospf').hide();
    $('#instructions-debian-rtr-l_ospf').show();
  } else if (instruction === 'Инструкция для CiscoCSR') {
    $('#instructions-debian-rtr-l_ospf').hide();
    $('#instructions-cisco-rtr-l_ospf').show();
  }
  var menu = document.getElementById("menu_rtr-l_ospf");
  menu.style.display = "none";
}

function toggleInstructions_rtr_r_ospf(event) {
  event.preventDefault();
  var instruction = $(event.target).data('instruction');
  if (instruction === 'Инструкция для Debian') {
    $('#instructions-cisco-rtr-r_ospf').hide();
    $('#instructions-debian-rtr-r_ospf').show();
  } else if (instruction === 'Инструкция для CiscoCSR') {
    $('#instructions-debian-rtr-r_ospf').hide();
    $('#instructions-cisco-rtr-r_ospf').show();
  }
  var menu = document.getElementById("menu_rtr-r_ospf");
  menu.style.display = "none";
}
