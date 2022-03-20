<template>
<div>
    blablabla
   <SinglePostComponent></SinglePostComponent>
    <div>
        Name: {{name}}
    </div>
    <button @click="sayHello">Hello</button>
    <button @click="sayHi">Hi</button>
</div>
</template>

<script>


import SinglePostComponent from "./SinglePostComponent";
export default {
    name: "PostComponent",

    data() {
        return {
            name: "vadym",
            age: 30
        }
    },
    methods:{
        sayHello(){
            console.log("Hello")

        },
        sayHi(){
            console.log("Hi")
        },

    },

    components: {SinglePostComponent},
    comments: {
        SinglePostComponent

    }
}
</script>

<style scoped>

</style>
