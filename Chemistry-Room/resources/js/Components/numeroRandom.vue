<template>
<button @click="znbk.numAleatoriosNoRepes">BOTONASO</button>
<h1> {{ znbk.numero }}</h1>
</template>


<script setup>
    import { useCounterStore } from '@/stores/numeroRandom.js'
    const znbk = useCounterStore(); 
</script>6