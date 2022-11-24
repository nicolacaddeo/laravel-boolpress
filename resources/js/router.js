import Vue from "vue";
import VueRouter from 'vue-router';

import PostsComponent from './components/PostsComponent';
import NotFoundComponent from './components/NotFoundComponent';

Vue.use(VueRouter);

const router = new VueRouter({

    routes: [
        { path: '/', component: PostsComponent },
        { path: '/*', component: NotFoundComponent }
    ]
});

export default router;
