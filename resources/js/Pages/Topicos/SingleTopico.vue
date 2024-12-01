<script setup>
import { ref, onMounted, watch } from 'vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

const props = defineProps(['topicoObj'])


</script>


<template>

<h1 v-html="topicoObj[0]" class="text-xl text-center font-semibold my-6"></h1>

<div v-html="topicoObj[3]" class="text-justify mx-4 mb-10"></div>

</template>
