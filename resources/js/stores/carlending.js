import {defineStore} from 'pinia';

export const carlendingStore = defineStore('carlending',{

    state: ()=>{
        return{
            form:{
                brand:'',
                model:'',
                year_bought:'',
                status: ''
            },
            carlendings:[]
        }
    },
        actions:{
            save(){
                let{form} = this;
                axios.post('/save-carlending',form).then(({data})=>{
                    this.$reset();
                    this.getter();
                });
            },
            getter(){
               // let{form} = this;
                axios.post('/get-carlendings').then(({data})=>{
                    this.carlendings = data;
                })
        },
        editCarlending(carr){
            this.form ={...carr};
        },
        deleteCarlending(carr){
            if(confirm('Are you sure you want to delete this')){
                axios.post('/delete-carlending',carr).then(({data})=>{
                    this.getter();
                })
            }

        }
    }

})
