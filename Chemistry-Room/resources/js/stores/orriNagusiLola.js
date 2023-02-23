import {
    defineStore
} from "pinia";

export const useCounterStore = defineStore("lifes", {
    getters: {},
    actions: {

        orriNagusi() {

            Swal.fire({
                icon: "info",
                title: "Amore eman",
                text: "Amore eman nahi duzu eta orri nagusira joan?",
                background: "#21605D",
                color: "white",
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: 'Amore eman',
                denyButtonText: `Jarraitu jolasten`,
                confirmButtonColor: "#339476",
            }).then((value) => {

            });
        }
    },
});
