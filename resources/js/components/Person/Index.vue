<template>

    <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">age</th>
                <th scope="col">job</th>
                <th scope="col">edit</th>
                <th scope="col">delete</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="person in people">
                <th scope="row">{{person.id}}</th>
                <td>
                    <router-link :to="{ name: 'person.show', params: {id: person.id }}">{{person.name}}</router-link>
                </td>
                <td>{{person.age}}</td>
                <td>{{person.job}}</td>
                <td>
                    <router-link :to="{name: 'person.edit', params:{id: person.id}}">edit</router-link>
                </td>
                <td>
                    <a @click.prevent="deletePerson(person.id)" href="#" class="btn btn-outline-danger">delete</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

</template>

<script>
export default {
    name: "Index",
    data(){
      return{
          people: null
      }
    },
    mounted() {
        this.getPeople()
    },
    methods: {
        getPeople(){
            axios.get('/api/people')
            .then(res => {
                this.people = res.data.data
            })
        },
        deletePerson(id){
            axios.delete(`/api/people/${id}`)
            .then( res => {
                this.getPeople()
            })
        }
    }
}
</script>

<style scoped>

</style>
