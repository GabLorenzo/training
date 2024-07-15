<script setup>
import {carlendingStore} from '@/stores/carlending.js';
import {storeToRefs} from 'pinia';

const carlending = carlendingStore();
const {form} = storeToRefs(carlending);
</script>
<template>
    <div>
        <div>
            <label for="">Brand:</label>
            <input type = "text" v-model = "form.brand">
        </div>
        <div>
            <label for="">Model:</label>
            <input type = "text" v-model = "form.model">
        </div>
        <div>
            <label for="">Year Bought:</label>
            <input type = "text" v-model = "form.year_bought">
        </div>
        <div>
            <label for="">Status:</label>
            <input type = "text" v-model = "form.status">
        </div>
        <div>
            <button @click="carlending.save()">Save</button>
        </div>
    </div>
</template>
