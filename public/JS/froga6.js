// FROGA 4 VUE
const vmFroga6 = {
    mounted() {
        this.cargarDatos6();
        this.numAleatoriosNoRepes6(4);
    },
    data() {
        return {
            numeros6: [],
            unicos6: [],
            galdera6: []
        }
    },
    methods: {
        cargarDatos6() {
            fetch("../public/php/datosFroga6.php", {
                    method: "POST",
                    body: '#Datos6'
                }).then(response => response.json())
                .then(data => {
                    for (let i = 0; this.numeros6.length > i; i++) {
                        this.galdera6.push(data[0][this.numeros6[i]]);
                    }
                });
        },
        numAleatoriosNoRepes6(kant) {
            let i = 0;
            while (i < kant) {
                let num = Math.round(Math.random() * (20 - 0) + 0);
                if (!this.numeros6.includes(num)) {
                    this.numeros6.push(num);
                    i++;
                }
            }
        }
    }
};
 Vue.createApp(vmFroga6).mount('#Datos6')
