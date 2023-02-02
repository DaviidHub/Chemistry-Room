<template>
    <div class="mx-3">
        <p class="text-left">Medio acido</p>
        <div class="divMedioAcido">
            <div v-for="(galdera, index) in galderaAcido" class="m-3">
                <p>{{ galdera }}</p>
                <input
                    @blur="addRespuesta"
                    v-model="inputRespuestaA[index]"
                    class="inp"
                />
            </div>
        </div>
    </div>

    <div class="mx-3">
        <p class="text-left">Medio basico</p>
        <div class="divMedioBasico">
            <div v-for="(galdera, index) in galderaBasico" class="m-3">
                <p>{{ galdera }}</p>
                <input
                    @blur="addRespuesta"
                    v-model="inputRespuestaB[index]"
                    class="inp"
                />
            </div>
        </div>
    </div>
</template>

<script>
// FROGA 4 VUE
export default {
    mounted() {
        this.numAleatoriosNoRepes(this.numerosAcido, 4, 15, 1);
        this.numAleatoriosNoRepes(this.numerosBasicos, 4, 25, 16);
        this.cargarDatos(
            this.galderaAcido,
            this.respuesta,
            this.numerosAcido,
            0,
            1
        );
        this.cargarDatos(
            this.galderaBasico,
            this.respuesta,
            this.numerosBasicos,
            2,
            3
        );
        this.vidasPerdidas.splice(
                  this.vidasPerdidas.lastIndexOf(true),
                  1,
                  false
              );
    },
    data() {
        return {
            numerosAcido: [],
            numerosBasicos: [],
            galderaAcido: [],
            galderaBasico: [],
            respuesta: [],
            respuestasJuntas: [],
            inputRespuestaA: [],
            inputRespuestaB: [],
            correcto: [],
            bool: false,
            vidasPerdidas:
                localStorage.getItem("lifes") === null
                    ? [true, true, true, true]
                    : JSON.parse(localStorage.getItem("lifes")),
        };
    },
    methods: {
        /**
         *
         * @param {Array} arrayGaldera
         * @param {Array} arrayErantzuna
         * @param {Int} zenbaki
         * @param {Array} jsonPregunta
         * @param {Array} jsonRespuesta
         */
        cargarDatos(
            arrayGaldera,
            arrayErantzuna,
            zenbaki,
            jsonPregunta,
            jsonRespuesta
        ) {
            fetch("../public/php/datosFroga4.php", {
                method: "POST",
                body: "#Datos4",
            })
                .then((response) => response.json())
                .then((data) => {
                    for (let i = 0; zenbaki.length > i; i++) {
                        arrayGaldera.push(data[jsonPregunta][zenbaki[i]]);
                        arrayErantzuna.push(data[jsonRespuesta][zenbaki[i]]);
                    }
                });
        },
        /**
         *
         * @param {Int} kant
         * @param {Int} max
         * @param {Int} min
         * @param {Array} array
         */
        numAleatoriosNoRepes(array, kant, max, min) {
            let i = 0;
            while (i < kant) {
                let num = Math.round(Math.random() * (max - min));
                if (!array.includes(num)) {
                    array.push(num);
                    i++;
                }
            }
        },
        addRespuesta() {
            this.respuestasJuntas = [
                ...this.inputRespuestaA,
                ...this.inputRespuestaB,
            ];

            if (this.respuestasJuntas.length == 8) {
                if (this.comprobacionArray) {
                    Swal.fire({
                        icon: "success",
                        title: "Zorionak",
                        text:
                            "Irabazi duzu jokoa. Gogoratu zenbakia: " +
                            localStorage.getItem("codRand")[3],
                        background: "#21605D",
                        color: "white",
                        confirmButtonColor: "#339476",
                    }).then((value) => {
                        this.gorde();
                        window.location.href = "./froga5";
                    });
                    console.log(this.comprobacionArray);
                } else {
                    let vidas = this.vidasPerdidas.every((value) => {
                        return value === false;
                    });

                    if (vidas) {
                        Swal.fire({
                            icon: "error",
                            title: "Bizitzak",
                            text: "amaitu egin dira",
                            background: "#21605D",
                            color: "white",
                            confirmButtonColor: "#339476",
                        }).then((value) => {
                            location.href = "./orriNagusi";
                        });
                    } else {
                        Swal.fire({
                            icon: "error",
                            title: "Oops",
                            text: "Zerbait ez dago ondo",
                            background: "#21605D",
                            color: "white",
                            confirmButtonColor: "#339476",
                        });
                    }

                    localStorage.removeItem("lifes");
                    localStorage.setItem(
                        "lifes",
                        JSON.stringify(this.vidasPerdidas)
                    );

                    this.vidasPerdidas.splice(
                        this.vidasPerdidas.lastIndexOf(true),
                        1,
                        false
                    );
                }
            }
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
        comprobacionArray() {
            console.log("BASE DE DATOS", this.respuesta);
            console.log("INPUT RESPUESTAS", this.respuestasJuntas);
            // let kont = 0;
            // this.bool = false;

            return this.respuesta.every((elemento, index) => {
                elemento == this.respuestasJuntas[index];
            });
        },
    },
};
</script>
