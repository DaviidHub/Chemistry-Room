<template>
    <article
        v-for="(izena, index) in izena1"
        :id="unicos1[index]"
        class="col-4 mb-3 divIzena drop"
        @drop="drop"
        @dragover="allowDrop"
    >
        <p>{{ izena }}</p>
    </article>

    <section v-for="(desk, index) in desk1">
        <p
            :id="unicos1[index]"
            class="drag1"
            @dragstart="drag"
            draggable="true"
        >
            {{ desk }}
        </p>
    </section>
</template>
<script>
export default {
    name: "froga1",
    mounted() {
        this.cargarDatos();
        this.numAleatoriosNoRepes(6, 25, 0, this.numeros1);
        this.numAleatoriosNoRepes(1, 9999, 1000, this.codRand);
        localStorage.clear();
        localStorage.setItem("codRand", this.codRand);
    },

    data() {
        return {
            koloreDefault: "#21605D",
            koloreTxarto: "#E73C37",
            vidasPerdidas: [true, true, true, false],
            izena1: [],
            desk1: [],
            numeros1: [],
            unicos1: [],
            codRand: [],
            div: "",
            p: "",
            correctos: 0,
        };
    },
    methods: {
        // Llama a un php para que le devuelva los datos de la database y los guarda en sus respectivos arrays
        cargarDatos() {
            fetch("../public/php/datosFroga1.php", {
                method: "POST",
                body: "#Datos1",
            })
                .then((response) => response.json())
                .then((data) => {
                    localStorage.setItem("pistak", data[2]);
                    for (let i = 0; this.numeros1.length > i; i++) {
                        this.unicos1.push(this.numeros1[i]);
                        this.izena1.push(data[0][this.numeros1[i]]);
                        this.desk1.push(data[1][this.numeros1[i]]);
                    }
                });
        },

        /**
         * Numero aleatorio entre el 0 y 25 y lo guarda en numeros1
         *
         * @param {Int} kant
         * @param {Int} max
         * @param {Int} min
         * @param {Array} array
         */
        numAleatoriosNoRepes(kant, max, min, array) {
            let i = 0;
            while (i < kant) {
                let num = Math.round(Math.random() * (max - min) + min);
                if (!array.includes(num)) {
                    array.push(num);
                    i++;
                }
            }
        },
        //DRAG
        drag(e) {
            this.div = e.target;
            this.p.style.backgroundColor = this.koloreDefault;
        },
        // DROP
        drop(e) {
            e.preventDefault();
            e.target.appendChild(this.div);
            this.p = e.target;
            if (this.p.textContent === undefined) {
                this.p.style.backgroundColor = this.koloreDefault;
            }
            this.solucion();
        },
        allowDrop(e) {
            e.preventDefault();
        },
        // Comprueba que el parrafo que mueves va con el div
        solucion() {
            if (this.div.id === this.p.id) {
                // Correcto
                this.p.style.backgroundColor = this.koloreDefault;

                if (this.correctos != 5) {
                    this.correctos++;
                } else {
                    this.vidasPerdidas.splice(
                        this.vidasPerdidas.indexOf(false),
                        1,
                        true
                    );
                    Swal.fire({
                        icon: "success",
                        title: "Zorionak",
                        text:
                            "Irabazi duzu jokoa. Gogoratu zenbakia: " +
                            localStorage.getItem("codRand")[0],
                        background: "#21605D",
                        color: "white",
                        confirmButtonColor: "#339476",
                    }).then((value) => {
                        this.gorde();
                        window.location.href = "./froga2";
                    });
                }
            } else {
                // Incorrecto
                let vidas = this.vidasPerdidas.every((value) => {
                    return value === false
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

                this.p.style.backgroundColor = this.koloreTxarto;
            }
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
};
</script>
