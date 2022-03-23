<template>
    <div>
        blablabla
        <SinglePostComponent></SinglePostComponent>
        <!--    аналог форича-->
        <div >
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">age</th>
                    <th scope="col">job</th>
                </tr>
                </thead>
                <tbody>
                    <tr v-for="person in persons">
                    <th scope="row">{{person.id}}</th>
                    <td>{{person.name}}</td>
                    <td>{{person.age}}</td>
                    <td>{{person.job}}</td>
                </tr>
                </tbody>
            </table>

        </div>
<!--        <button @click="sayHello">Hello</button>
        <button @click="sayHi">Hi</button>-->
    </div>
</template>

<script>
import SinglePostComponent from "./SinglePostComponent";
export default {
    name: "PostComponent",
// Создаем переменные
    data() {
        return {
            persons: null
        }
    },
    mounted() {
        this.getPersons()
    },

    methods:{
       getPersons(){
           axios.get('/persons')
           .then(res => {
               this.persons = res.data
           })
       }
    },
    //Вычисляемые свойства computed во vue js
    //работать с данными после инициализации
    computed:{
    },
    components: {SinglePostComponent},
    comments: {
        SinglePostComponent
    }
}
</script>

<style scoped>
</style>
