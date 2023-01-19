// FROGA 4 VUE
const vmFroga4 = {
    mounted() {
        this.cargarDatos();
        this.numAleatoriosNoRepes(4);
    },
    data() {
        return {
            numeros4: [],
            unicos4: [],
            galdera4: [],
            respuestaInput4: [],
            erantzuna4: []
        }
    },
    methods: {
        cargarDatos() {
            fetch("../public/php/datosFroga4.php", {
                    method: "POST",
                    body: '#Datos4'
                }).then(response => response.json())
                .then(data => {
                    console.log("🚀 ~ file: froga4.js:29 ~ cargarDatos ~ data", data)
                    for (let i = 0; this.numeros4.length > i; i++) {
                        this.galdera4.push(data[0][this.numeros4[i]]);
                        this.respuestaInput4.push(data[0][this.numeros4[i]]);

                    }
                    console.log("🚀 ~ file: froga4.js:26 ~ cargarDatos ~ galdera4", this.galdera4)
                });
        },
        numAleatoriosNoRepes(kant) {
            let i = 0;
            while (i < kant) {
                let num = Math.round(Math.random() * (20 - 0) + 0);
                if (!this.numeros4.includes(num)) {
                    this.numeros4.push(num);
                    i++;
                }
            }
        }
    }
};
 Vue.createApp(vmFroga4).mount('#Datos4')
