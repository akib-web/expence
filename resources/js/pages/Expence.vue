<template>
    <div>
        <AddItem />

        <ListItem v-for="post in data" v-bind:key="post.id" v-bind:value="post.name" :post_id="post.id" :post_title="post.name" />

    </div>
</template>
<script>

import AddItem from '../components/expence/AddItem.vue';
import ListItem from '../components/expence/ListItem.vue';
export default {
    props: ["data"],
    mounted(){
        console.log(this.data);
    },
    components:{
        AddItem,
        ListItem
    }
}
</script>
