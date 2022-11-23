<template>
    <div>
        <div v-if="loading"> Loading... </div>
        <div v-else class="posts-container">
            <ol>
                <li v-for="post in posts" :key="post.id">
                    <a href="#">{{ post.title }}</a>
                </li>
            </ol>
        </div>
    </div>
</template>

<script>
export default {
    name: 'PostsComponent',

    data() {
        return {
            posts: [],
            loading: true
        };
    },

    mounted() {
        axios.get('/api/posts').then(({ data }) => {
            if (data.success) {
                this.posts = data.results;
            }
            this.loading = false;
            console.log(this.posts);
        })
    },

    methods: {

    },
};
</script>

<style lang="scss" scoped>
.posts-container {
    padding: 2rem;
}
</style>


