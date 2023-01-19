let inputMail, mailBool;

const vm = {
    mounted() {
        this.cargarPersonas();
    },
    data() {
        return {
            personas: [],
            mailBool: true
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
                                this.mailBool = false;
                            }
                        })
                        if (!this.mailBool) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Maila registratuta dago',
                                footer: '<a href="./web">Login</a>'
                            })
                            this.mailBool = true;
                        } else{
                            document.querySelector('#formRegister').submit();
                        }
                    });
            });
        }
    }
};
Vue.createApp(vm).mount('#formRegister')
