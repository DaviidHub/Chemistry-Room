let man= [];
// FROGA 3 VUE
const vmFroga3 = {
    mounted() {
        this.cargarDatos();
        this.numAleatoriosNoRepes(1);
    },
    data() {
        return {
            izena3: [],
            numeros3: [],
            palabras: [],
            letras3: [],
            guiones: '',
            printear: ''
        }
    },
    methods: {
        cargarDatos() {
            fetch("../public/php/datosFroga3.php", {
                    method: "POST",
                    body: '#Datos3'
                }).then(response => response.json())
                .then(data => {
                    for (let i = 0; this.numeros3.length > i; i++) {
                        this.izena3.push(data[this.numeros3[i]]);
                        this.palabras =  this.izena3[0].split(' ');

                        this.letras3.push(this.palabras[0].split(''));
                        this.letras3.push(this.palabras[1].split(''));

                          this.guiones = this.palabras.map(guion =>  Array(guion.length).join('_ ') )
                        //   this.printear = this.guiones[0] +  + this.guiones[1];
                   }
                });
        },
        numAleatoriosNoRepes(kant) {
            let i = 0;
            while (i < kant) {
                let num = Math.round(Math.random() * (24 - 0) + 0);
                if (!this.numeros3.includes(num)) {
                    this.numeros3.push(num);
                    i++;
                }
            }
        }
    }
};
Vue.createApp(vmFroga3).mount('#Datos3')
