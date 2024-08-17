$(document).ready(function() {
    $('.hero-text').waypoint(function(direction) {
      if (direction === 'down') {
        $(this.element).addClass('animate__fadeInUp');
      } else {
        $(this.element).removeClass('animate__fadeInUp');
      }
    }, {
      offset: '70%' // Ajusta este valor según la posición deseada para que comience la animación
    });
  });
  