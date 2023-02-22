import { defineStore } from "pinia";

export const useCounterStore = defineStore("lifes", {
    state: () => ({
        lifes:  [],
        count: 1,
    }),
    getters: {},
    actions: {
        removeLife() {
            this.lifes.splice(this.lifes.length - this.count, 1, false);
            if (this.count < this.lifes.length) {
                this.count++;
                console.log("🚀 ~ file: lifes.js:26 ~ removeLife ~ this.count++;", this.count++)
            } else {
                Swal.fire({
                    icon: "error",
                    title: "Bizitzak",
                    text: "amaitu egin dira",
                    background: "#21605D",
                    color: "white",
                    confirmButtonColor: "#339476",
                }).then((value) => {
                    location.href = "./orriNagusi";
                });
            }
        },
        getLocalStorage() {
            
            setInterval(() => {
                this.lifes = localStorage.getItem("lifes") === null
                ? [true, true, true, true]
                : JSON.parse(localStorage.getItem("lifes"));
            })
        }
    },
});
