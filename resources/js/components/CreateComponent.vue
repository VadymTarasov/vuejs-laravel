<template>
    <div>
        <form>
            <div class="mb-3">
                <input type="text" class="form-control" id="name" v-model="name" placeholder="name">
            </div>
            <div class="mb-3">
                <input type="number" class="form-control" id="age" v-model="age" placeholder="age">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="job" v-model="job" placeholder="job">
            </div>
            <div class="mb-3">
                <input @click.prevent="addPerson" class="btn btn-primary" value="add">
            </div>
            <SomeComponent :obj="obj"></SomeComponent>
        </form>
    </div>
</template>

<script>

import SomeComponent from "./SomeComponent";
export default {
    name: "CreateComponent",
    components: {SomeComponent},
    data() {
        return {
            name: null,
            age: null,
            job: null,
            obj:{
        color: 'black',
        number: 20,
        isPublished: true
            }
        }
    },
    methods: {
        addPerson() {
                         // console.log(this.name, this.age, this.job)
            axios.post('/api/people', {name: this.name, age: this.age, job: this.job})
            .then(res => {
                this.name = null
                    this.age = null
                    this.job = null
                console.log(res);
            })

        }
    },
    comments:{
        SomeComponent
    }
}

</script>

<style scoped>
</style>
