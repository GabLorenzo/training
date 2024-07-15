<script setup>
import {studentStore} from '@/stores/student.js';
import {storeToRefs} from 'pinia';

const student = studentStore();
const {form} = storeToRefs(student);
</script>
<template>
    <div>
        <div>
            <label for="">Name:</label>
            <input type="text" v-model = "form.name">
        </div>
        <div>
            <label for="">Course:</label>
            <input type="text" v-model = "form.course">
        </div>
        <div>
            <button @click="student.save()">Save</button>
        </div>
    </div>
</template>
