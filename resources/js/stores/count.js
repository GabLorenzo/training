import {defineStore} from 'pinia';

export const countStore = defineStore('count',{

    state: () => {
        return{
            counts: 0
        }
    },
        actions:{

        }
})
