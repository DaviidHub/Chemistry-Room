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
                .querySelector("#submitLogin")
                .addEventListener("click", this.compararMail);
        },
        compararMail(e) {
            inputMail = document.querySelector("#inputMail").value;
            e.preventDefault();

            this.personas.forEach((databaseMail) => {
                if (databaseMail === inputMail) this.mailBool = false;
            });
            if (this.mailBool) {
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Maila ez dago erregistratuta",
                    footer: '<a href="./registro">Erregistratu</a>',
                }).then((this.mailBool = true));
            } else {
                document.querySelector("#formLogin").submit();
            }
        },
    },
};
Vue.createApp(vm).mount("#formLogin");
