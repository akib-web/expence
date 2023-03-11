<template>
    <div>
        <AddItem />
    </div>
</template>
<script>

import AddItem from '../components/expence/AddItem.vue';
import ListItem from '../components/expence/ListItem.vue';
export default {
    mounted(){
        console.log('expence page loaded');
    },
    components:{
        AddItem,
        ListItem
    }
}
</script>
