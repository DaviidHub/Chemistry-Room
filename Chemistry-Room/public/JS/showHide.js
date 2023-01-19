const vm = {
    data() {
        return {
            show: false,
            time: 0,
            intervalTime: ''
        }
    },
    methods: {
        showHide() {
            this.show = !this.show;
            this.timer();
        }, timer() {
            const SELF = this;
            if (this.time < 10) {
                this.intervalTime = setInterval(function () { 
                    if(SELF.time < 10){
                        SELF.time++; 
                    } else {
                        SELF.showHide();
                        SELF.time = 0;
                        clearInterval(SELF.intervalTime);
                    }
                }, 1000)
            }
        }
    }
};
Vue.createApp(vm).mount('#maskota')
