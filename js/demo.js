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
