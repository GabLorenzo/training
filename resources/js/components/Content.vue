<script setup>
import {carlendingStore} from '@/stores/carlending';
const carlending = carlendingStore();
carlending.getter();

</script>
<template>
    <div>
        <table>
            <thead>
                <th>#</th>
                <th>Brand</th>
                <th>Model</th>
                <th>YearBought</th>
                <th>Status</th>
                <th>Actions</th>
            </thead>
            <tbody>
                <tr v-for="(cars,i) in carlending.cars" :key="i">
                    <td>{{ ++i }}</td>
                    <td>{{cars.brand}}</td>
                    <td>{{cars.model}}</td>
                    <td>{{cars.year_bought}}</td>
                    <td>{{cars.status}}</td>
                    <td>
                        <button @click="carlending.editCarlending(cars)">Edit</button>
                        <button @click="carlending.deleteCarlending(cars)">Delete</button>

                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</template>
