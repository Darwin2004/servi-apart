function handleMutation(mutationList, observer) {
  for(mutation of mutationList){
    if(mutation.type === 'childList'){
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
    }
  }
}

const options = {
  childList: true,
  attributes: true,
  subtree: true
}

const observer = new MutationObserver(handleMutation)

observer.observe(document.body, options);