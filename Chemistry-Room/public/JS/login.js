let inputMail, mailBool;

const vm = {
    mounted() {
        this.cargarPersonas();
    },
    data() {
        return {
            personas: []
        }
    },
    methods: {
        cargarPersonas() {
            document.querySelector('#submitLogin').addEventListener("click", (e) => {
                let inputMail = document.querySelector('#inputMail').value;
                e.preventDefault();
                fetch("../public/PHP/mail.php", {
                        method: "POST",
                        body: '#formLogin'
                    }).then(response => response.json())
                    .then(data => {
                        data.forEach(databaseMail => {
                            if ( inputMail != "" && databaseMail != inputMail) {
                                mailBool = true
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Maila ez dago erregistratuta',
                                    footer: '<a href="./registro">Erregistratu</a>'
                                })
                            }
                        })
                    });
                if (mailBool) {
                    document.querySelector('#formLogin').submit();
                }
            });
        }
    }
};
Vue.createApp(vm).mount('#formLogin')
