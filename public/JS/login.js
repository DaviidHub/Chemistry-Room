    let inputMail;

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
            document.querySelector('#submitLogin').addEventListener("click", (e) => {
                let inputMail = document.querySelector('#inputMail').value;
                e.preventDefault();
                fetch("../public/PHP/mail.php", {
                        method: "POST",
                        body: '#formLogin'
                    }).then(response => response.json())
                    .then(data => {
                        
                        data.forEach(databaseMail => {
                            console.log("mailBool FOREACH: ", this.mailBool);
                            console.log("🚀 ~ file: login.js:27 ~ document.querySelector ~ databaseMail", databaseMail)
                            console.log("🚀 ~ file: login.js:28 ~ document.querySelector ~ inputMail", inputMail)
                            if ( databaseMail == inputMail) {
                                this.mailBool = false
                                console.log("mailBool IF: ", this.mailBool);
                            }
                        })

                        if (this.mailBool) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Maila ez dago erregistratuta',
                                footer: '<a href="./registro">Erregistratu</a>'
                            })
                            this.mailBool = false;
                        } else{
                            document.querySelector('#formLogin').submit();
                        }
                    });
            });
        }
    }
};
Vue.createApp(vm).mount('#formLogin')
