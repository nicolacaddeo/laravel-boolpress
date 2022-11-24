<template>
    <div class="nav">
        <ul>
            <li v-for="link in navLinks" :key="link.id">
                <router-link :to="link.url">
                    {{ link.name }}
                </router-link>
            </li>
        </ul>
    </div>
</template>

<script>
import { navLinks } from '../data/nav_links.js';

export default {
    name: 'NavComponent',

    data() {
        return {
            navLinks
        };
    },

    mounted() {

    },

    methods: {

    },
};
</script>

<style lang="scss" scoped>

</style>
