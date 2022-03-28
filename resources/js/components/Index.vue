<template>
<div>
    <router-link :to="{ name: 'person.index' }">People</router-link>
    <router-link :to="{ name: 'person.create'}">Create add</router-link>
    <router-view></router-view>
</div>
</template>

<script>
export default {
    name: "Index",
    components: {}

}
</script>

<style scoped>

</style>
