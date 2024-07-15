<script setup>
//import {countStore} from '@/stores/count.js';
//import { storeToRefs } from 'pinia';

//const count = countStore();
//const {counts} = storeToRefs(count);
import Form from '@/components/Form.vue'
import Table from '@/components/Table.vue'
</script>
<template>
    <div>
        <main-layout>
        <Form />
        <Table />
        </main-layout>
        <!--{{ counts }}-->
    </div>
</template>
