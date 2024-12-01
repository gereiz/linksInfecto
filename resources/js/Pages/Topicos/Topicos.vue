<script setup>
import { ref, onMounted, watch } from 'vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

const props = defineProps(['topicos', 'topicosArray'])


const columns = [
    { data: 'title' },
    { data: 'id_subcategory' },
    { data: 'id' },
];

</script>


<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Tópicos
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <DataTable
                            :data="topicosArray"
                            :columns="columns"
                        >
                            <thead>
                                <tr>
                                    <th>Titulo</th>
                                    <th>id_Subcategoria</th>
                                    <th>ID</th>
                                </tr>
                            </thead>

                        </DataTable>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
