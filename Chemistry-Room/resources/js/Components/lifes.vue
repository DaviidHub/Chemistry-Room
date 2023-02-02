<template>
    <div v-for="vida in LIFES.lifes">
        <img
            v-if="vida"
            src="../../../public/multimedia/life.png"
            alt=""
            width="57"
        />
        <img
            v-else
            src="../../../public/multimedia/life_lose.png"
            alt=""
            width="57"
        />
    </div>
    <!-- <button @click="LIFES.removeLife">Remove life</button> -->
</template>

<script setup>
import { useCounterStore } from "@/stores/lifes";
const LIFES = useCounterStore();
LIFES.getLocalStorage();
</script>
