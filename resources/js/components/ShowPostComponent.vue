<template>
    <div>
        <h1>{{ post.title }}</h1>
        <p>{{ post.content }}</p>
    </div>
</template>

<script>
export default {
    name: 'ShowPostComponent',

    data() {
        return {

        };
    },
    props: {
        post: Object
    },

    mounted() {

    },

    methods: {

    },
};
</script>

<style lang="scss" scoped>

</style>

