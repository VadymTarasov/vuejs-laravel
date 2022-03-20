<template>
<div>
    blablabla
   <SinglePostComponent></SinglePostComponent>
    <div>
        Name: {{name}}
    </div>
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

    components: {SinglePostComponent},
    comments: {
        SinglePostComponent

    }
}
</script>

<style scoped>

</style>
