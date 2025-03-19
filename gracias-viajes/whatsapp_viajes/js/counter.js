
carlos();
function carlos() {
    const counter1 = document.querySelector(".ifanel-section--2__contador--1");
const counter2 = document.querySelector(".ifanel-section--2__contador--2");
const counter3 = document.querySelector(".ifanel-section--2__contador--3");
    // Set the date we're counting down to
    let fecha = new Date("2022", "10", "24", "07", "30");
    let countDownDate = fecha.getTime();

    // Update the count down every 1 second
    let x = setInterval(function() {

        // Get today's date and time
        let now = new Date().getTime();

        // Find the distance between now and the count down date
        let distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        let dias = Math.floor(distance / (1000 * 60 * 60 * 24));
        let horas = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        let minutos = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        //let seconds = Math.floor((distance % (1000 * 60)) / 1000);

        if(minutos < 10){
        minutos= "0" + minutos;
        }
        if(dias < 10){
            dias= "0" + dias;
            }
            if(horas < 10){
                horas= "0" + horas;
                }
        // Display the result in the element with id="demo"
        counter1.innerHTML = dias;
        counter2.innerHTML = horas;
        counter3.innerHTML = minutos;

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            //document.getElementById("countdown_simple").innerHTML = "FINALIZADO";
        }
    }, 1000);
};