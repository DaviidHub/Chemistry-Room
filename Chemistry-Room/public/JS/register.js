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
            document.querySelector('#submitRegister').addEventListener("click", (e) => {
                let inputMail = document.querySelector('#inputMail').value;
                e.preventDefault();
                fetch("../public/PHP/mail.php", {
                        method: "POST",
                        body: '#formRegister'
                    }).then(response => response.json())
                    .then(data => {
                        data.forEach(databaseMail => {
                            if (databaseMail == inputMail) {
                                mailBool = true
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Maila erregistratuta dago',
                                    footer: '<a href="./web">Login</a>'
                                })
                            }
                        })
                    });
                if (mailBool) {
                    document.querySelector('#formRegister').submit();
                }
            });
        }
    }
};
Vue.createApp(vm).mount('#formRegister')
