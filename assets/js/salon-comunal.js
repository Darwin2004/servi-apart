document.addEventListener("DOMContentLoaded", function () {
  // Obtén una referencia al elemento de entrada de fecha
  var diaReservaInput = document.getElementById("dia_reserva");

  // Inicializa el calendario de pignose
  $('.year-calendar').pignoseCalendar({
      select: function (date, context) {
          // Convierte la fecha seleccionada a un formato legible
          var selectedDate = moment(date).format('YYYY-MM-DD');
          diaReservaInput.value = selectedDate;

          // Agrega una declaración de consola para verificar si se ejecuta
          console.log("Fecha seleccionada: " + selectedDate);
      }
  });
});
