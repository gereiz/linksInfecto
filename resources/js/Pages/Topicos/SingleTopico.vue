<script setup>
import { ref, onMounted, watch } from 'vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

const props = defineProps(['topicoObj'])


</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Fira+Sans+Extra+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');


    .fira-sans-extra-condensed-thin {
    font-family: "Fira Sans Extra Condensed", sans-serif;
    font-weight: 100;
    font-style: normal;
    }

    .fira-sans-extra-condensed-extralight {
    font-family: "Fira Sans Extra Condensed", sans-serif;
    font-weight: 200;
    font-style: normal;
    }

    .fira-sans-extra-condensed-light {
    font-family: "Fira Sans Extra Condensed", sans-serif;
    font-weight: 300;
    font-style: normal;
    }

    .fira-sans-extra-condensed-regular {
    font-family: "Fira Sans Extra Condensed", sans-serif;
    font-weight: 400;
    font-style: normal;
    }

    .fira-sans-extra-condensed-medium {
    font-family: "Fira Sans Extra Condensed", sans-serif;
    font-weight: 500;
    font-style: normal;
    }

    .fira-sans-extra-condensed-semibold {
    font-family: "Fira Sans Extra Condensed", sans-serif;
    font-weight: 600;
    font-style: normal;
    }

    .fira-sans-extra-condensed-bold {
    font-family: "Fira Sans Extra Condensed", sans-serif;
    font-weight: 700;
    font-style: normal;
    }

    .fira-sans-extra-condensed-extrabold {
    font-family: "Fira Sans Extra Condensed", sans-serif;
    font-weight: 800;
    font-style: normal;
    }

    .fira-sans-extra-condensed-black {
    font-family: "Fira Sans Extra Condensed", sans-serif;
    font-weight: 900;
    font-style: normal;
    }

    .fira-sans-extra-condensed-thin-italic {
    font-family: "Fira Sans Extra Condensed", sans-serif;
    font-weight: 100;
    font-style: italic;
    }

    .fira-sans-extra-condensed-extralight-italic {
    font-family: "Fira Sans Extra Condensed", sans-serif;
    font-weight: 200;
    font-style: italic;
    }

    .fira-sans-extra-condensed-light-italic {
    font-family: "Fira Sans Extra Condensed", sans-serif;
    font-weight: 300;
    font-style: italic;
    }

    .fira-sans-extra-condensed-regular-italic {
    font-family: "Fira Sans Extra Condensed", sans-serif;
    font-weight: 400;
    font-style: italic;
    }

    .fira-sans-extra-condensed-medium-italic {
    font-family: "Fira Sans Extra Condensed", sans-serif;
    font-weight: 500;
    font-style: italic;
    }

    .fira-sans-extra-condensed-semibold-italic {
    font-family: "Fira Sans Extra Condensed", sans-serif;
    font-weight: 600;
    font-style: italic;
    }

    .fira-sans-extra-condensed-bold-italic {
    font-family: "Fira Sans Extra Condensed", sans-serif;
    font-weight: 700;
    font-style: italic;
    }

    .fira-sans-extra-condensed-extrabold-italic {
    font-family: "Fira Sans Extra Condensed", sans-serif;
    font-weight: 800;
    font-style: italic;
    }

    .fira-sans-extra-condensed-black-italic {
    font-family: "Fira Sans Extra Condensed", sans-serif;
    font-weight: 900;
    font-style: italic;
    }



</style>


<template>
<h1 v-html="topicoObj[0]" class="text-xl text-center font-semibold my-6 fira-sans-extra-condensed-regular"></h1>

<div class="text-justify mx-4 mb-10 fira-sans-extra-condensed-regular">
    <div v-html="topicoObj[3]" style="font-family: 'Fira Sans Extra Condensed', sans-serif;"></div>
</div>

</template>
