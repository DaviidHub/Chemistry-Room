<template>
    <div
        class="d-flex flex-column position-absolute bottom-0 end-0 justify-content-end align-items-center"
    >
        <div v-if="show">
            <div class="bocadilloPista d-flex justify-content-center">
                <h2 class="pistaText p-3 text-justify">
                    {{ pista }}
                </h2>
            </div>
        </div>
        <div v-else class="bombilla">
            <a @click="showHide">
                <img src="../../../public/multimedia/bombilla.svg" alt="" />
            </a>
        </div>
        <img
            id="maskotaJuego"
            src="../../../public/multimedia/quimica.png"
            alt=""
        />
    </div>
</template>

<script>
export default {
    mounted() {
        this.loadLocalStorage();
    },
    data() {
        return {
            show: false,
            intervalTime: "",
            time: 0,
            intervalLocalStorage: "",
            contador: 0,
            pistaFroga: {},
        };
    },
    methods: {
        showHide() {
            this.show = !this.show;
            this.timer();
        },
        timer() {
            const SELF = this;
            if (this.time < 10) {
                this.intervalTime = setInterval(function () {
                    if (SELF.time < 10) {
                        SELF.time++;
                    } else {
                        SELF.showHide();
                        SELF.time = 0;
                        clearInterval(SELF.intervalTime);
                    }
                }, 1000);
            }
        },
        /**
         *
         * @param {String} name
         */
        getWindowName() {
            let index =
                window.location.pathname[window.location.pathname.length - 1];
            this.pista = this.pistaFroga[index] || "Error";
        },
        loadLocalStorage() {            
            if (localStorage.getItem("pistas") === null ) {
                const SELF = this;
                SELF.intervalLocalStorage = setInterval(() => {
                    SELF.contador++;
                    if (SELF.contador === 2) {
                        SELF.pistaFroga = {
                            1: localStorage.getItem("pistak").split(",")[0],
                            2: localStorage.getItem("pistak").split(",")[1],
                            3: localStorage.getItem("pistak").split(",")[2],
                            4: localStorage.getItem("pistak").split(",")[3],
                            5: localStorage.getItem("pistak").split(",")[4],
                            6: localStorage.getItem("pistak").split(",")[5],
                        };
                        SELF.getWindowName();
                    } else if (SELF.contador === 3) {
                        clearInterval(SELF.intervalLocalStorage);
                    }
                }, 1000);
            } else {
                this.pistaFroga = {
                    1: localStorage.getItem("pistak").split(",")[0],
                    2: localStorage.getItem("pistak").split(",")[1],
                    3: localStorage.getItem("pistak").split(",")[2],
                    4: localStorage.getItem("pistak").split(",")[3],
                    5: localStorage.getItem("pistak").split(",")[4],
                    6: localStorage.getItem("pistak").split(",")[5],
                };
            }
        },
    },
};
</script>
