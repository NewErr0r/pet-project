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
function toggleCodeBlock_rtr_l_ipsec(event) {
  event.preventDefault();
  var menu = document.getElementById("menu_rtr-l_ipsec");
  if (menu.style.display === "none") {
    menu.style.display = "block";
  } else {
    menu.style.display = "none";
  }
}

function toggleCodeBlock_rtr_r_ipsec(event) {
    event.preventDefault();
    var menu = document.getElementById("menu_rtr-r_ipsec");
    if (menu.style.display === "none") {
      menu.style.display = "block";
    } else {
      menu.style.display = "none";
    }
  }

function toggleCodeBlock_rtr_r_acl(event) {
    event.preventDefault();
    var menu = document.getElementById("menu_rtr-r_acl");
    if (menu.style.display === "none") {
      menu.style.display = "block";
    } else {
      menu.style.display = "none";
    }
  }

function toggleCodeBlock_rtr_l_acl(event) {
    event.preventDefault();
    var menu = document.getElementById("menu_rtr-l_acl");
    if (menu.style.display === "none") {
      menu.style.display = "block";
    } else {
      menu.style.display = "none";
    }
  }

//
function toggleInstructions_rtr_l_ipsec(event) {
    event.preventDefault();
    var instruction = $(event.target).data('instruction');
    if (instruction === 'Инструкция для Debian') {
      $('#instructions-cisco-rtr-l_ipsec').hide();
      $('#instructions-debian-rtr-l_ipsec').show();
    } else if (instruction === 'Инструкция для CiscoCSR') {
      $('#instructions-debian-rtr-l_ipsec').hide();
      $('#instructions-cisco-rtr-l_ipsec').show();
    }
    var menu = document.getElementById("menu_rtr-l_ipsec");
    menu.style.display = "none";
  }

function toggleInstructions_rtr_r_ipsec(event) {
    event.preventDefault();
    var instruction = $(event.target).data('instruction');
    if (instruction === 'Инструкция для Debian') {
      $('#instructions-cisco-rtr-r_ipsec').hide();
      $('#instructions-debian-rtr-r_ipsec').show();
    } else if (instruction === 'Инструкция для CiscoCSR') {
      $('#instructions-debian-rtr-r_ipsec').hide();
      $('#instructions-cisco-rtr-r_ipsec').show();
    }
    var menu = document.getElementById("menu_rtr-r_ipsec");
    menu.style.display = "none";
  }

function toggleInstructions_rtr_r_acl(event) {
    event.preventDefault();
    var instruction = $(event.target).data('instruction');
    if (instruction === 'Инструкция для Debian') {
      $('#instructions-cisco-rtr-r_acl').hide();
      $('#instructions-debian-rtr-r_acl').show();
    } else if (instruction === 'Инструкция для CiscoCSR') {
      $('#instructions-debian-rtr-r_acl').hide();
      $('#instructions-cisco-rtr-r_acl').show();
    }
    var menu = document.getElementById("menu_rtr-r_acl");
    menu.style.display = "none";
  }

function toggleInstructions_rtr_l_acl(event) {
    event.preventDefault();
    var instruction = $(event.target).data('instruction');
    if (instruction === 'Инструкция для Debian') {
      $('#instructions-cisco-rtr-l_acl').hide();
      $('#instructions-debian-rtr-l_acl').show();
    } else if (instruction === 'Инструкция для CiscoCSR') {
      $('#instructions-debian-rtr-l_acl').hide();
      $('#instructions-cisco-rtr-l_acl').show();
    }
    var menu = document.getElementById("menu_rtr-l_acl");
    menu.style.display = "none";
  }
