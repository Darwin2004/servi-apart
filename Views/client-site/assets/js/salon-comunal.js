setTimeout(() => {
  let units = document.querySelectorAll(".pignose-calendar-unit");
  let diaReserva = document.getElementById('dia_reserva');
  units.forEach(element => {
    element.addEventListener("click", (e) => {
      let date = element.getAttribute('data-date')
      diaReserva.value = date;
    });
  });

}, 1000);
