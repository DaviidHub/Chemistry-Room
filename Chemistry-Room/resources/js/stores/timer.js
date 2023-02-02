import { defineStore } from "pinia";

export const useCounterStore = defineStore("counter", {
    state: () => ({
        min: (localStorage.getItem("min") === null) ? 59 : localStorage.getItem("min"),
        sec: (localStorage.getItem("sec") === null) ? 59 : localStorage.getItem("sec") - 1,
    }),
    actions: {
        // Metodo para hacer el temporizador de 1h
        timer() {
            // console.log(localStorage.getItem("min") + ":" + localStorage.getItem("sec"));

            // Creamos la variable SELF ya que dentro del Interval no funciona el "this"
            const SELF = this;
            //Creamos el Intervalo que se ejecutara cada 1000ms (1s) que le resta 1 a los seg y 1 a los min cuando los seg lleguen a 0
            this.temporizador = setInterval(function () {
                if (SELF.sec > 0) {
                    SELF.sec--;
                    SELF.sec = SELF.sec < 10 ? "0" + SELF.sec : SELF.sec;
                    // Entrará al IF si el tiempo llega a 0
                    if (SELF.min == 0 && SELF.sec == 0) {
                        clearInterval(SELF.temporizador);
                        Swal.fire({
                            icon: "info",
                            title: "Denbora amaituta",
                            text: "Saiatu berriro :)",
                            background: "#21605D",
                            color: "white",
                            confirmButtonColor: "#339476",
                        }).then((value) => {
                            location.href = "./orriNagusi";
                        });
                    }
                } else {
                    SELF.sec = 59;
                    SELF.min--;
                    SELF.min = SELF.min < 10 ? "0" + SELF.min : SELF.min;
                }
            }, 1000);
        }
    },
    getters: {},
});
