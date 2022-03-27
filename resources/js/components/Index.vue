<template>
<div>
    <router-link to="/posts">posts</router-link>
    <router-link to="/tags">tags</router-link>
    <router-view></router-view>

</div>
</template>

<script>
export default {
    name: "Index"
}
</script>

<style scoped>

</style>
