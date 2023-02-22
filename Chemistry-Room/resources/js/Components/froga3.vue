<template>
    <div id="ahorcado">
        <img id="horca" :src="foto" alt="image" />
        <span id="letrasMal" v-for="letra in nodoError">{{ letra }}</span>
    </div>
    <div class="datosDiv">
        <span id="palabra" v-for="guion in solucion">{{ guion }}</span>
        <input v-model="nodoLetra" type="text" class="inputLetra" />
        <button id="BidaliLetra" @click="comprobarLetra">
            <img
                id="bidaliArgazki"
                src="../../../public/multimedia/tick.png"
                alt=""
            />
        </button>
    </div>
</template>

<script>

export default {
    mounted() {
        this.cargarDatos();
        this.numAleatoriosNoRepes(1);
        this.ahorcadoFoto();
        this.vidasPerdidas.splice(
                  this.vidasPerdidas.lastIndexOf(true),
                  1,
                  false
              );
    },
    data() {
        return {
            numeros3: [],
            palabra1: [],
            palabra2: [],
            guiones1: [],
            guiones2: [],
            solucion: [],
            nodoError: [],
            nodoLetra: '',
            foto: '',
            num: 1,
            vidasPerdidas: (localStorage.getItem("lifes") === null)
                ? [true, true, true, true]
                : JSON.parse(localStorage.getItem("lifes")),
        }
    },
    methods: {
        cargarDatos() {
            fetch("../public/php/datosFroga3.php", {
                    method: "POST",
                    body: '#Datos3'
                }).then(response => response.json())
                .then(data => {
                    // Metemos la palabra en hitza
                    let hitza = (data[this.numeros3[0]].toLowerCase().split(' '));
                    // Metemos la posicion 0 en hitza1
                    let hitz1 = (hitza[0]);
                    // Metemos la posicion 0 en hitza2
                    let hitz2 = (hitza[1]);

                    // Hacemos que cada string se divida por caracter y se meta en el array
                    this.palabra1 = hitz1.split('');
                    this.palabra2 = hitz2.split('');

                    // Hacemos que por cada longitud de cada palabra nos cree en el array guiones[x]
                    // this.guiones1.push(this.crearGuiones(this.palabra1))
                    this.crearGuiones(this.palabra1, this.guiones1);
                    this.crearGuiones(this.palabra2, this.guiones2);

                    // Espacio para la separacion
                    this.guiones1.push(' ');

                    // Metemos los dos arrays en solcuion
                    this.solucion = this.guiones1.concat(this.guiones2);


                });
        },
        /**
         * 
         * @param {Int} kant 
         * @param {Array} array 
         */
        crearGuiones(kant, array) {
            // let barras = [];
            kant.forEach(letra => {
                let barras = "";
                for (let i in letra) {
                    // barras.push('_');
                    barras += "_";
                }
                array.push(barras);
            });
            // return barras;
        },
        /**
         * 
         * @param {Int} kant
         * 
         */
        numAleatoriosNoRepes(kant) {
            let i = 0;
            while (i < kant) {
                let num = Math.round(Math.random() * (24 - 0) + 0);
                if (!this.numeros3.includes(num)) {
                    this.numeros3.push(num);
                    i++;
                }
            }
        },
        comprobarLetra() {

            // Cogemos el valor de el input y lo guardamos
            this.nodoLetra = this.nodoLetra.toLowerCase().trim();

            // Comprobamos que el input no esta vacio y no es mayor a 1
            if (this.nodoLetra.length == 1) {

                let posicion = [];
                let indice = "";

                indice = this.palabra1.indexOf(this.nodoLetra);

                while (indice !== -1) {
                    posicion.push(indice);
                    indice = this.palabra1.indexOf(this.nodoLetra, indice + 1);
                }

                indice = this.palabra2.indexOf(this.nodoLetra);

                while (indice !== -1) {
                    posicion.push(indice + this.palabra1.length + 1);
                    indice = this.palabra2.indexOf(this.nodoLetra, indice + 1);
                }


                for (let pos in posicion) {
                    this.solucion.splice(posicion[pos], 1, this.nodoLetra)
                }

                if (!this.solucion.includes('_')) {
                    Swal.fire({
                        icon: "success",
                        title: "Zorionak",
                        text: "Irabazi duzu jokoa. Gogoratu zenbakia: " + localStorage.getItem("codRand")[2],
                        background: "#21605D",
                        color: "white",
                        confirmButtonColor: "#339476",
                    }).then((value) => {
                        this.gorde();
                        window.location.href = "./froga4";
                    });
                }

                if (posicion.length == 0) {
                    // Mete en nodoError la this.nodoLetra para que le salga el error en el html de que no esta
                    this.nodoError.push(this.nodoLetra);
                    // Cambiamos la foto del ahorcado
                    this.ahorcadoFoto();
                    // Sale el swal si ha gastado toda las vidas
                    if (this.num == 8) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'saiakera guztiak gastatu dituzu',
                            footer: '<a href="./froga1">Saiatu Berriro</a> ',
                            background: '#21605D',
                            color: 'white',
                            confirmButtonColor: "#339476",
                        }).then(result => {
                            if (result.isConfirmed) {
                                window.location.href = './orriNagusi';
                            }
                        })
                    }
                }
                this.nodoletra = null;
            } else {
                // Se mete si el input no es solo 1 karakter
                Swal.fire('Bakarrik karaktere bat jarri ahal da.')
            }
        },
        ahorcadoFoto() {
            // Cambia de foto de ahorcado
            this.foto = './multimedia/Ahorcado/ahorcado_' + this.num + '.png';
            this.num++;
        },
        gorde() {
            localStorage.clear();
            let minuto = document.getElementById("min").innerHTML;
            let segundo = document.getElementById("sec").innerHTML;
            localStorage.setItem("min", minuto);
            localStorage.setItem("sec", segundo);
        },
    },
    computed: {

    }
};
</script>
