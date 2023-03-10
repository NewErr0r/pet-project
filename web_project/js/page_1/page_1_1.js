$(document).ready(function() {
    // скрыть/показать блок с рекомендациями по клику на кнопку
    $('#toggle-btn-1').on('click', function(e) {
      e.preventDefault();
      $('#suggestions-container-1').slideToggle();
      // изменить текст кнопки на основе текущего состояния отображения блока
      $(this).text(function(i, text){
        return text === "Скрыть" ? "Базовые инфруструктурные службы: " : "Скрыть";
      })
    });
  });

$(document).ready(function() {
    $('#toggle-btn-2').on('click', function(e) {
      e.preventDefault();
      $('#suggestions-container-2').slideToggle();
      $(this).text(function(i, text){
        return text === "Скрыть" ? "Хранение данных: " : "Скрыть";
      })
    });
  });
