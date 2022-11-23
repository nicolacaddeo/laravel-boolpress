<template>
    <div>
        <div>
            <ol>
                <li v-for="post in posts" :key="post.id" @click="viewPost(post.id)">
                    {{ post.title }}
                </li>
            </ol>
        </div>
        <div class="pages">
            <button @click="getPage(paginatedPosts.prev_page_url)">Previous</button>

            Pagina: {{ currentPage }} di {{ totalPage }}

            <button @click="getPage(paginatedPosts.next_page_url)">Next</button>
        </div>
    </div>
</template>

<script>
export default {
    name: 'PostListComponent',

    data() {
        return {

        }
    },

    props: {
        paginatedPosts: Object
    },

    computed: {
        posts() {
            return this.paginatedPosts.data;
        },
        currentPage() {
            return this.paginatedPosts.current_page;
        },
        totalPage() {
            return this.paginatedPosts.total;
        }
    },

    mounted() {

    },

    methods: {
        viewPost(id) {
            this.$emit('selectedPost', id);
        },
        getPage(url) {
            this.$emit('requestPage', url);
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
