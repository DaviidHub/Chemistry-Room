let min = 59,
    sec = 60;

const vm = {
    mounted() {
        this.timer();
    },
    data() {
        time: ""
    },
    methods: {
        timer() {
            setInterval(function () {
                if (sec > 0) {
                    sec--;
                    if (min == 0 && sec == 0) {
                        min = 00;
                        console.log("🚀 ~ file: timer.js:18 ~ min", min)
                        sec = 00;
                        swal("Ez duzu lortu", "Denbora amaitu egin da.", "error", {
                            buttons: {
                                cancel: true, //! Cambiar por logout
                                confirm: true,
                              },
                              footer: '<a href="{{ route("dashboard") }}">Dashboard</a>'
                            })
                            .then(value => {
                                if(value){
                                    //* Mover al orri nagusi
                                    //? axios.post(route('orriNagusi'));
                                }
                            });
                    }
                    document.querySelector('#sec').innerText = sec < 10 ? "0" + sec : sec;
                } else {
                    sec = 59;
                    min--;
                }
                document.querySelector('#min').innerText = min < 10 ? "0" + min : min;
            },1000 )
        }
    }
};
Vue.createApp(vm).mount('#tiempo');