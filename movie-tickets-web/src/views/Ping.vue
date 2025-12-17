<template>
  <div>
    <h1>{{ message }}</h1>
    <button @click="testPing">Test API</button>
  </div>
</template>

<script lang="ts" setup>
import { ref } from 'vue';
import axios from '../api/axios';

const message = ref('');

async function testPing() {
  try {
    const res = await axios.get('/api/ping');
    message.value = JSON.stringify(res.data);
  } catch (err) {
    message.value = 'Error: ' + err;
  }
}
</script>
