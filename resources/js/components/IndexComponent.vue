<template>
    <div>
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
            <tr v-for="person in people">
                <th scope="row">{{person.id}}</th>
                <td>{{person.name}}</td>
                <td>{{person.age}}</td>
                <td>{{person.job}}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    name: "IndexComponent",
    data() {
        return {
            people: null

        }
    },
    mounted() {
        this.getPeople()
    },
    methods: {
        getPeople(){
            axios.get('/api/people')
            .then(res =>{
                this.people = res.data
            })
        }
    }
}

</script>

<style scoped>
</style>
