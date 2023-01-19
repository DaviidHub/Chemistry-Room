
// FROGA 4 VUE
let numeros4 = [];
let unicos4 = [];
const vmFroga4 = {
    mounted() {
        this.cargarDatos();
        this.numAleatoriosNoRepes(8);
    },
    data() {
        return {
            galdera4: [],
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

                    for (let i = 0; numeros4.length > i; i++) {
                        unicos4.push(numeros4[i]);
                        this.galdera4.push(data[0][numeros4[i]]);
                        this.erantzuna4.push(data[1][numeros4[i]]);
                    }
                    // console.log(unicos1)
                    console.log(this.galdera4)
                    console.log(this.erantzuna4)
                });
        },
        numAleatoriosNoRepes(kant) {
            let i = 0;
            while (i < kant) {
                let num = Math.round(Math.random() * (25 - 0) + 0);
                if (!numeros4.includes(num)) {
                    numeros4.push(num);
                    i++;
                }
            }
        }
    }
};
 Vue.createApp(vmFroga4).mount('#Datos4')


