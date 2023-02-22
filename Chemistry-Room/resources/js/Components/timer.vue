<template>
    <span class="position-absolute top-0 end-0">
        <span id="min">{{ TIME.min }}</span
        >:<span id="sec">{{ TIME.sec }}</span>
    </span>
</template>

<script>
import { defineComponent } from "vue";
import { useCounterStore } from "../stores/timer";

export default defineComponent({
    name: "timer",

    data() {
        return {
            temporizador: "",
        };
    },
    setup() {
        const TIME = useCounterStore();
        TIME.timer();

        return { TIME };
    },
    created() {
        // this.$root.$refs.timer = this;
    },
    methods: {
        deleteLocalStorage(){
            localStorage.clear();
        }
    },
    components: {},
});
</script>
