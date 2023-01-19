// FROGA 6 VUE
const vmFroga6 = {
    mounted() {
        this.cargarDatos();
        this.numAleatoriosNoRepes(5);
    },
    data() {
        return {
            numeros6: [],
            respuestaInput6: [],
            izena6: []
        }
    },
    methods: {
        cargarDatos() {
            fetch("../public/php/datosFroga6.php", {
                    method: "POST",
                    body: '#Datos6'
                }).then(response => response.json())
                .then(data => {
                    for (let i = 0; this.numeros6.length > i; i++) {
                        this.izena6.push(data[0][this.numeros6[i]]);
                        this.respuestaInput6.push(data[0][this.numeros6[i]]);
                    }
                });
        },
        numAleatoriosNoRepes(kant) {
            let i = 0;
            while (i < kant) {
                let num = Math.round(Math.random() * (25 - 0) + 0);
                if (!this.numeros6.includes(num)) {
                    this.numeros6.push(num);
                    i++;
                }
            }
        }
    }
};
 Vue.createApp(vmFroga6).mount('#Datos6')
