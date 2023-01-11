let numeros = [];
let unicos = [];
const vm = {
    mounted() {
        this.cargarDatos();
        this.numAleatoriosNoRepes(6);
    },
    data() {
        return {
            izena: [],
            desk: []
        }
    },
    methods: {
        cargarDatos() {
            fetch("../public/php/datosFroga1.php", {
                    method: "POST",
                    body: '#Datos'
                }).then(response => response.json())
                .then(data => {

                    for (let i = 0; numeros.length > i; i++) {
                        unicos.push(numeros[i]);
                        this.izena.push(data[0][numeros[i]]);
                        this.desk.push(data[1][numeros[i]]);
                    }
                    // console.log(unicos)
                    console.log(this.izena)
                    console.log(this.desk)
                });

        },
        numAleatoriosNoRepes(kant) {
            let i = 0;
            while (i < kant) {
                let num = Math.round(Math.random() * (25 - 0) + 0);
                if (!numeros.includes(num)) {
                    numeros.push(num);
                    i++;
                }
            }
        }
    }
};
Vue.createApp(vm).mount('#Datos')
