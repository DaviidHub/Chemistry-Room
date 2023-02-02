<template>
   
   <input id="kodeInput" v-model="kodea" placeholder="KODE" type="number"/>

    <input id="kodeBidali" type="submit"  value="BIDALI" @click="comprobarDatos()">
</template>

<script>

export default {

  data() {
      return {
          kodea: '',
          kodigoLocal: localStorage.getItem('codRand'),
      }
  },
  methods: {
        comprobarDatos(){
            if(this.kodea == this.kodigoLocal){
                Swal.fire({
                            icon: "success",
                            title: "Oso ondo!",
                            text: "Kodea ondo sartu duzu",
                            background: "#21605D",
                            color: "white",
                            confirmButtonColor: "#339476",
                        }).then((result) => {
                            this.gorde();
                            window.location.href = "./froga5";
                        });
            }else{
                Swal.fire({
                            icon: "error",
                            title: "Txarto!",
                            text: "Kodea txarto sartu duzu",
                            background: "#21605D",
                            color: "white",
                            confirmButtonColor: "#339476",
                        });
            }
        },
        gorde() {
            localStorage.clear();
            let minuto = document.getElementById("min").innerHTML;
            let segundo = document.getElementById("sec").innerHTML;
            localStorage.setItem("min", minuto);
            localStorage.setItem("sec", segundo);
        },
  }
};
</script>
