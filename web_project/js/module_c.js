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
function toggleCodeBlock(event, taskNumber) {
  event.preventDefault();
  var menu = document.getElementById("task" + taskNumber);
  if (menu.style.display === "none") {
    menu.style.display = "block";
  } else {
    menu.style.display = "none";
  }
}

for (var i = 1; i <= 12; i++) {
  var taskName = "task" + i;
  var functionName = "toggleCodeBlock_" + taskName;
  window[functionName] = (function(taskNum) {
    return function(event) {
      toggleCodeBlock(event, taskNum);
    }
  })(i);
}
  
//
// получаем кнопку "Вверх"
const btnScrollToTop = document.querySelector('.btn-scroll-to-top');

// добавляем обработчик клика на кнопку
btnScrollToTop.addEventListener('click', function (event) {
  event.preventDefault();
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
});
