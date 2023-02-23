let inputMail;

const vm = {
    mounted() {
        this.cargarPersonas();
    },
    data() {
        return {
            personas: [],
            mailBool: true,
        };
    },
    methods: {
        cargarPersonas() {
            const url = "../public/php/mail.php";
            const promesa = fetch(url);

            promesa.then((respuesta) => {
                respuesta.json().then((datos) => {
                    this.personas = datos;
                });
            });

            document
                .querySelector("#submitRegister")
                .addEventListener("click", this.compararMail);
        },
        compararMail(e) {
            inputMail = document.querySelector("#inputMail").value;
            e.preventDefault();

            this.personas.forEach((databaseMail) => {
                if (databaseMail === inputMail) this.mailBool = false;
            });
            if (!this.mailBool) {
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Maila registratuta dago",
                    footer: '<a class="footerSwal" href="./">Login</a>',
                    background: '#21605D',
                    color: 'white',
                    confirmButtonColor: "#339476",
                }).then((this.mailBool = true));
            } else {
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Te has registrado',
                    showConfirmButton: false,
                    timer: 1500,
                    background: '#21605D',
                    color: 'white',
                    confirmButtonColor: "#339476",
                  }).then(valor => 
                    document.querySelector("#formRegister").submit()
                  );
            }

        },
    },
};
Vue.createApp(vm).mount("#formRegister");
