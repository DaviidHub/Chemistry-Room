<template>
    <span class = "position-absolute top-0 end-0">
      <span>{{ TIME.min }}</span>:<span>{{ TIME.sec }}</span>
    </span>
</template>

<script setup>
  import { useCounterStore } from '@/stores/timer'
  const TIME = useCounterStore();
</script>
