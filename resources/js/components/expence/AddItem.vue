<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ item.name }}</div>

                    Add income.{{ item.name }}
                    <div class="card-body">
                        <input  type="text" v-model="item.name" >
                    </div>
                    <button @click="showName()">clicked me</button>
                    <ListItem v-for="post in posts" v-bind:key="post.id" :post_id="post.id" :post_title="post.title" />
                </div>
            </div>
        </div>
    </div>
</template>
<!-- npm i vue-loader

npm install vue-router vue-axios -->
<script>
import ListItem from './ListItem.vue';

    export default {
    // props: ["post_title","post_id"],
    mounted() {
        console.log("Component mounted.");
    },
    data() {
        return {
            item: {
                name: ""
            },
            posts: [
                { id: 1, title: 'My journey with Vue' },
                { id: 2, title: 'Blogging with Vue' },
                { id: 3, title: 'Why Vue is so fun' }
            ]
        };
    },
    methods: {
        showName() {
            this.posts.push({id:this.posts.length+1,title:this.item.name})
        }
    },
    components: { ListItem }
}
</script>
