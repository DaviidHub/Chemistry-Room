<template>
    <table class="Cientificos">
        <tr v-for="(galdera, index) in cientificos" class="cuadrado">
            <td class="tdCientificos">
                <h3 class="h3cientificos">{{ galdera }}</h3>
            </td>
            <td class="tdCientificos">
                <input
                    @blur="addRespuesta"
                    v-model="inputRespuesta[index]"
                    class="nombreQuimico"
                    type="text"
                />
            </td>
        </tr>
    </table>

    <div id="div" class="text-center position-absolute top-0 end-0">
        <div
            id="arriba"
            class="d-flex justify-content-center align-items-center"
        >
            Soluzioa
        </div>
        <div id="abajo">
            <input
                id="emaitzaFinal"
                @blur="solucion"
                v-model="respuestaSolucion"
                type="text"
            />
        </div>
    </div>
</template>

<script>
// FROGA 4 VUE
export default {
    mounted() {
        this.numAleatoriosNoRepes(this.numeros5, 1, 15, 1);
        this.numAleatoriosNoRepes(this.numeros6, 4, 25, 16);
        this.cargarDatos(
            this.cientificos,
            this.respuestas,
            this.numeros5,
            0,
            1
        );
        this.cargarDatos(
            this.cientificos,
            this.respuestas,
            this.numeros6,
            2,
            3
        );
    },
    data() {
        return {
            numeros5: [],
            numeros6: [],
            cientificos: [],
            respuestaSolucion: "",
            inputRespuesta: [],
            respuestas: [],
            divSolucion: "",
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
            this.divSolucion = document.getElementById("div").style.display =
                "none";
            fetch("../public/php/datosFroga6.php", {
                method: "POST",
                body: "#Datos6",
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
         * @param {Array} array
         * @param {Int} kant
         * @param {Int} max
         * @param {Int} min
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
            if (this.inputRespuesta.length == 5) {
                this.comprobacionArray;
                if (this.bool) {
                    Swal.fire({
                        icon: "success",
                        title: "Ondooo",
                        text: "Orain jarri erantzun zuzena",
                        background: "#21605D",
                        color: "white",
                        confirmButtonColor: "#339476",
                    });
                    this.divSolucion = document.getElementById(
                        "div"
                    ).style.display = "block";
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
                        this.vidasPerdidas.splice(
                            this.vidasPerdidas.lastIndexOf(true),
                            1,
                            false
                        );
                        Swal.fire({
                            icon: "error",
                            title: "Oops",
                            text: "Zerbait ez dago ondo",
                            background: "#21605D",
                            color: "white",
                            confirmButtonColor: "#339476",
                        });
                    }
                }

                localStorage.removeItem("lifes");
                localStorage.setItem(
                    "lifes",
                    JSON.stringify(this.vidasPerdidas)
                );
            }
        },
        solucion() {
            if (this.respuestas[0] == this.respuestaSolucion) {
                Swal.fire({
                    icon: "success",
                    title: "Zorionak",
                    text: "Irabazi duzu jokoa",
                    background: "#21605D",
                    color: "white",
                    confirmButtonColor: "#339476",
                }).then((value) => {
                    window.location.href = "./irabaziOrria";
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
        },
    },
    computed: {
        /**
         *
         * @returns {Boolean}
         */
        comprobacionArray() {
            let kont = 0;
            this.bool = false;
            this.respuestas.forEach((elemento) => {
                if (elemento == this.inputRespuesta[kont]) {
                    kont++;
                    if (kont == 5) {
                        this.bool = true;
                    }
                }
                return this.bool;
            });
        },
    },
};
</script>
