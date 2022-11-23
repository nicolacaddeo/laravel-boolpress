<template>
    <div>
        <ol>
            <li v-for="post in posts" :key="post.id" @click="viewPost(post.id)">
                {{ post.title }}
            </li>
        </ol>
    </div>
</template>

<script>
export default {
    name: 'PostListComponent',

    data() {
        return {

        };
    },
    props: {
        posts: Array
    },

    mounted() {

    },

    methods: {
        viewPost(id) {
            this.$emit('selectedPost', id);
        }
    },
};
</script>

<style lang="scss" scoped>
ol {
    li {
        cursor: pointer;
    }
}
</style>
