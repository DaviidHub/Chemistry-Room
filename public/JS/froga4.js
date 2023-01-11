let numeros = [];
let galderak = [];
let erantzunak = [];

const vm = {
    mounted() {
        this.cargarDatos();
        this.numAleatorios();
    },
    methods: {
        cargarDatos() {
            fetch("../public/php/datosFroga4.php", {
                    method: "POST",
                    body: '#Datos'
                }).then(response => response.json())
                .then(data => {
                    for (let i = 0; i < 6; i++) {
                       
                        console.log(numeros[i])
                        galderak.push(data[0][numeros[i]])
                        erantzunak.push(data[1][numeros[i]])

                       
                    }
                });

        },
        numAleatorios() {
            for (let i = 0; i < 6; i++) {
                let num = Math.round(Math.random() * (28 - 0) + 0);
                numeros.push(num);
            }
        }
    },
};
Vue.createApp(vm).mount('#Datos')
