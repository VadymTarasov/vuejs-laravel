<template>
<div>
    blablabla
   <SinglePostComponent></SinglePostComponent>
</div>
</template>

<script>


import SinglePostComponent from "./SinglePostComponent";
export default {
    name: "PostComponent",
    components: {SinglePostComponent},
    comments: {
        SinglePostComponent

    }
}
</script>

<style scoped>

</style>
