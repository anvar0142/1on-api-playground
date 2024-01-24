<script setup>
import {onMounted, ref} from "vue";
    const message = ref('hi1')
    Echo.channel('real-time-message-channel')
    .listen('RealTimeMessage', (e) => {
        message.value = e.message
    });
</script>

<template>
    <div>
        {{message}}
    </div>
</template>

<style scoped>

</style>
