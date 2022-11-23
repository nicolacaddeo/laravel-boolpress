<template>
    <div>
        <div v-if="loading"> Loading... </div>

        <div v-else-if="!postDetail" class="posts-container">
            <PostListComponent :posts="posts" @selectedPost="viewPost" />
        </div>

        <div v-else>
            <ShowPostComponent :post="postDetail" />
            <button @click="postDetail = undefined">Back</button>
        </div>
    </div>
</template>

<script>
import ShowPostComponent from './ShowPostComponent.vue';
import PostListComponent from './PostListComponent.vue';

export default {
    name: 'PostsComponent',
    components: {
        ShowPostComponent,
        PostListComponent
    },

    data() {
        return {
            posts: [],
            postDetail: undefined,
            loading: true
        };
    },

    mounted() {
        axios.get('/api/posts').then(({ data }) => {
            if (data.success) {
                this.posts = data.results;
            }

            this.loading = false;
        })
    },

    methods: {
        viewPost(id) {
            axios.get('/api/posts/' + id).then(response => {
                console.log(response);
                this.postDetail = response.data.success ? response.data.results : undefined;
            }).catch(e => {
                console.log(e);
            })
        }
    },
};
</script>

<style lang="scss" scoped>
.posts-container {
    padding: 2rem;


}
</style>


