<script setup>
import {studentStore} from '@/stores/student';
const student = studentStore()
student.getter();

</script>
<template>
    <div>
        <table>
            <thead>
                <th>#</th>
                <th>Name</th>
                <th>Course</th>
                <th>Actions</th>
            </thead>
        <tbody>
            <tr v-for="(stud,i) in student.students" :key="i">
                <td>{{  ++i }}</td>
                <td>{{ stud.name }}</td>
                <td>{{ stud.course }}</td>
                <td>
                    <button @click="student.editStudent(stud)">Edit</button>
                    <button @click="student.deleteStudent(stud)">Delete</button>
                </td>

            </tr>

        </tbody>
        </table>
    </div>
</template>
