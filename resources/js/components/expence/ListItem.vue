<template>

    <div>
        <span>{{ post_id }} {{ post_title }}</span>
    </div>
</template>

<script>
    export default {
        props: ["post_title","post_id"],
        mounted() {
            console.log('Component mounted.')
        },
    }
</script>
