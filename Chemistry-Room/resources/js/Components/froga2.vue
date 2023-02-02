<template>
    <div v-for="(item, i) in selecciones">
        <div class="area-tarjeta" @click="seleccionartarjeta(item)">
            <div class="tarjeta" :id="'tarjeta' + item">
                <div class="cara superior">
                    <img
                        class="imagenes"
                        src="multimedia/memorama/LogoCarta.png"
                    />
                </div>
                <div class="cara trasera" :id="'trasera' + item">
                    <img
                        v-if="item < 6"
                        class="imagenes"
                        v-bind:src="iconos[item]"
                    />
                    <p v-else>{{ textos[Number(item) - 6] }}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        this.numAleatoriosNoRepes(6);
        this.generarTablero();
        this.cargarDatos();
        this.vidasPerdidas.splice(
                  this.vidasPerdidas.lastIndexOf(true),
                  1,
                  false
              );
    },
    data() {
        return {
            iconos: [],
            numeros2: [],
            textos: [],
            unicos: [],
            ids: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
            selecciones: [],
            elegidos: [],
            contador: 0,
            vidasPerdidas:
                localStorage.getItem("lifes") === null
                    ? [true, true, true, true]
                    : JSON.parse(localStorage.getItem("lifes")),
        };
    },
    methods: {
        cargarDatos() {
            axios
                .get("../public/php/datosFroga2.php")
                .then((response) => response.data)
                .then((data) => {
                    for (let i = 0; this.numeros2.length > i; i++) {
                        this.unicos.push(this.numeros2[i]);
                        this.textos.push(data[0][this.numeros2[i]]);
                        this.iconos.push(data[1][this.numeros2[i]]);
                    }
                });
        },
        /**
         *
         * @param {Int} kant
         */
        numAleatoriosNoRepes(kant) {
            let i = 0;
            while (i < kant) {
                let num = Math.round(Math.random() * (45 - 0) + 0);
                if (!this.numeros2.includes(num)) {
                    this.numeros2.push(num);
                    i++;
                }
            }
        },
        generarTablero() {
            // Generar ids automaticamente
            this.selecciones = this.ids.sort(function () {
                return Math.random() - 0.5;
            });
        },
        seleccionartarjeta(i) {
            let tarjeta = document.getElementById("tarjeta" + i);

            if (tarjeta.style.transform != "rotateY(180deg)") {
                tarjeta.style.transform = "rotateY(180deg)";
                this.elegidos.push(i);
            }
            if (this.elegidos.length == 2) {
                this.deseleccionar(this.elegidos);
                this.elegidos = [];
            }
        },
        deseleccionar(selecciones) {
            setTimeout(() => {
                let trasera1 = selecciones[0];
                let trasera2 = selecciones[1];

                trasera1 = trasera1 > 5 ? trasera1 - 6 : trasera1;
                trasera2 = trasera2 > 5 ? trasera2 - 6 : trasera2;

                if (trasera1 != trasera2) {
                    console.log(this.vidasPerdidas);
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

                    let tarjeta1 = document.getElementById(
                        "tarjeta" + selecciones[0]
                    );
                    let tarjeta2 = document.getElementById(
                        "tarjeta" + selecciones[1]
                    );
                    tarjeta1.style.transform = "rotateY(0deg)";
                    tarjeta2.style.transform = "rotateY(0deg)";
                } else {
                    this.contador++;
                    if (this.contador === 6) {
                        Swal.fire({
                            icon: "success",
                            title: "Zorionak",
                            text:
                                "Irabazi duzu jokoa. Gogoratu zenbakia: " +
                                localStorage.getItem("codRand")[1],
                            background: "#21605D",
                            color: "white",
                            confirmButtonColor: "#339476",
                        }).then((value) => {
                            this.gorde();
                            window.location.href = "./froga3";
                        });
                    } else {
                        document.getElementById(
                            "trasera" + selecciones[0]
                        ).style.background = "#339476";
                        document.getElementById(
                            "trasera" + selecciones[1]
                        ).style.background = "#339476";
                    }
                }
            }, 1000);
        },
        gorde() {
            let minuto = document.getElementById("min").innerHTML;
            let segundo = document.getElementById("sec").innerHTML;
            let vidas = JSON.stringify(this.vidasPerdidas);

            localStorage.setItem("min", minuto);
            localStorage.setItem("sec", segundo);
            localStorage.setItem("lifes", vidas);
        },
    },
    computed: {},
};
</script>
