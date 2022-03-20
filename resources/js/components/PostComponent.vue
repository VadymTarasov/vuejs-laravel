<template>
<div>
    blablabla
   <SinglePostComponent></SinglePostComponent>
<!--    аналог форича-->
    <div v-for="person in persons">
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
            <tr>
                <th scope="row">{{person.id}}</th>
                <td>{{person.name}}</td>
                <td>{{person.age}}</td>
                <td>{{person.job}}</td>
            </tr>
            </tbody>
        </table>

    </div>
    <button @click="sayHello">Hello</button>
    <button @click="sayHi">Hi</button>
</div>
</template>

<script>


import SinglePostComponent from "./SinglePostComponent";
export default {
    name: "PostComponent",
// Создаем переменные
    data() {
        return {
            persons:[
                {
                    id: 1,
                    name: "Vasya",
                    age: 29,
                    job: "electrical",

                },
                {
                    id: 2,
                    name: "Vadym",
                    age: 30,
                    job: "developer",

                },
                {
                    id: 3,
                    name: "Igor",
                    age: 31,
                    job: "manager",

                },
            ]
        }
    },
    //Создаем методы внутри компонента vuejs
    methods:{
        sayHello(){
            console.log("Hello")

        },
        sayHi(){
            console.log("Hi")
        },

    },
    //Вычисляемые свойства computed во vue js
    //работать с данными после инициализации
    computed:{
vadymJob(){
    return this.name + "php developer"
}

    },

    components: {SinglePostComponent},
    comments: {
        SinglePostComponent

    }
}
</script>

<style scoped>

</style>
