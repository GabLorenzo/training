import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler.js';
import App from '@/components/App.vue';
import Layout from '@/layouts/Layout.vue';
import { createPinia } from 'pinia'
import{ createRouter, createWebHistory} from 'vue-router';
import routes from '@/routes';

const pinia = createPinia();

const router = createRouter({
    history: createWebHistory(),
    routes,
});

const app = createApp({});

app.use(router);

app.use(pinia);
app.component('main-layout', Layout);
app.mount('#app');
