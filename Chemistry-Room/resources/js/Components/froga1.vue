<template>
  <article :id="unicos1[index]" v-for="(izena, index) in izena1" class="col-4 mb-3 divIzena drop" @drop="drop" @dragover="allowDrop">
    <p>{{izena}}</p>
  </article>

    <section v-for="(desk, index) in desk1">
      <p :id="unicos1[index]" @dragstart="drag" class="drag1" draggable="true">{{desk}}</p>
    </section>

</template>
<script>

export default {
  mounted() {
      this.cargarDatos();
      this.numAleatoriosNoRepes(6);
  },
  data() {
      return {
          koloreDefault: '#21605D',
          koloreTxarto: '#E73C37',
          izena1: [],
          desk1: [],
          numeros1 : [],
          unicos1: [],
          pista1: '',
          div: '',
          p: '',
          correctos: 0
      }
  },
  methods: {
    // Llama a un php para que le devuelva los datos de la database y los guarda en sus respectivos arrays
      cargarDatos() {
          fetch("../public/php/datosFroga1.php", {
                  method: "POST",
                  body: '#Datos1'
              }).then(response => response.json())
              .then(data => {
                for (let i = 0; this.numeros1.length > i; i++) {
                  this.unicos1.push(this.numeros1[i]);
                  this.izena1.push(data[0][this.numeros1[i]]);
                  this.desk1.push(data[1][this.numeros1[i]]);
                }
                this.pista1 = (data[2][0]);
              });
      },
      // Numero aleatorio entre el 0 y 25 y lo guarda en numeros1
      numAleatoriosNoRepes(kant) {
          let i = 0;
          while (i < kant) {
              let num = Math.round(Math.random() * (25 - 0) + 0);
              if (!this.numeros1.includes(num)) {
                  this.numeros1.push(num);
                  i++;
              }
          }
      },
      //DRAG
      drag(e) {
        this.div = e.target;
        this.p.style.backgroundColor = this.koloreDefault;
      },
      // DROP
      drop(e) {
        e.preventDefault();
        e.target.appendChild(this.div);
        this.p = e.target;
        if (this.p.textContent === undefined){
          this.p.style.backgroundColor = this.koloreDefault;
        }
        this.solucion();
      },
      allowDrop(e) {
        e.preventDefault();
      },
      // Comprueba que el parrafo que mueves va con el div
      solucion(){
        if(this.div.id == this.p.id){ // Correcto
          this.p.style.backgroundColor = this.koloreDefault;
          this.correctos != 5 ? this.correctos++ : window.location.href = './froga2';
        } else { // Incorrecto
          this.p.style.backgroundColor = this.koloreTxarto;
          LIFES.removeLife;
        }
      }
  }
};
</script>