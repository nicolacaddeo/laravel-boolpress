<template>
    <div>
        <div v-if="loading"> Loading... </div>

        <div v-else-if="!postDetail" class="posts-container">
            <PostListComponent :paginatedPosts="posts" @selectedPost="viewPost" @requestPage="loadPage" />
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
            posts: undefined,
            postDetail: undefined,
            loading: true
        };
    },

    mounted() {
        this.loadPage('/api/posts');
    },

    methods: {
        viewPost(id) {
            axios.get('/api/posts/' + id).then(response => {
                console.log(response);
                this.postDetail = response.data.success ? response.data.results : undefined;
            }).catch(e => {
                console.log(e);
            })
        },
        loadPage(url) {
            axios.get(url).then(({ data }) => {
                if (data.success) {
                    console.log(data);
                    console.log('clicked');
                    this.posts = data.results;
                }

                this.loading = false;
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


