let numeros1 = [];
let unicos1 = [];
const vmFroga1 = {
    mounted() {
        this.cargarDatos();
        this.numAleatoriosNoRepes(6);
    },
    data() {
        return {
            izena1: [],
            desk1: []
        }
    },
    methods: {
        cargarDatos() {
            fetch("../public/php/datosFroga1.php", {
                    method: "POST",
                    body: '#Datos'
                }).then(response => response.json())
                .then(data => {

                    for (let i = 0; numeros1.length > i; i++) {
                        unicos1.push(numeros1[i]);
                        this.izena1.push(data[0][numeros1[i]]);
                        this.desk1.push(data[1][numeros1[i]]);
                    }
                    // console.log(unicos1)
                    console.log(this.izena1)
                    console.log(this.desk1)
                });
        },
        numAleatoriosNoRepes(kant) {
            let i = 0;
            while (i < kant) {
                let num = Math.round(Math.random() * (25 - 0) + 0);
                if (!numeros1.includes(num)) {
                    numeros1.push(num);
                    i++;
                }
            }
        }
    }
};
 Vue.createApp(vmFroga1).mount('#Datos1')
