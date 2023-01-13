// FROGA 1 VUE
let letra5 = [];
let letra6 = [];
let unicos1 = [];
const vmFroga6 = {
    mounted() {
        this.cargarDatos();
        this.numAleatoriosLetra5(6);
    },
    data() {
        return {
            izena1: []
        }
    },
    methods: {
        cargarDatos() {
            fetch("../public/php/datosFroga6.php", {
                    method: "POST",
                    body: '#Datos6'
                }).then(response => response.json())
                .then(data => {

                    for (let i = 0; letra5.length > i; i++) {
                        unicos1.push(letra5[i]);
                        this.izena1.push(data[0][letra5[i]]);
                    }
                    // console.log(unicos1)
                    console.log(this.izena1)
                });

        },
        numAleatoriosLetra5(kant) {
            let i = 0;
            while (i < kant) {
                let num = Math.round(Math.random() * (15 - 0) + 0);
                if (!letra5.includes(num)) {
                    letra5.push(num);
                    i++;
                }
            }
        },
    }
};
Vue.createApp(vmFroga6).mount('#Datos6')
