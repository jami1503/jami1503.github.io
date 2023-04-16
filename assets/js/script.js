$(document).ready(function() {

  // Variables para el botón y el elemento de destino
  var $buttonUp = $('.button-up');
  var $contentTable = $('.content-table');

  // Oculta el botón al principio
  $buttonUp.hide();

  // Muestra el botón al desplazarse hacia abajo
  $(window).scroll(function() {
    if ($(this).scrollTop() > ($(window).height() + 400) / 2) {
      $buttonUp.fadeIn();
    } else {
      $buttonUp.fadeOut();
    }
  });

  // Desplaza suavemente hacia arriba al hacer clic en el botón
  $buttonUp.click(function() {
    $('html, body').animate({scrollTop: $contentTable.offset().top}, 800);
    return false;
  });

});