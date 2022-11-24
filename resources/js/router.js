import Vue from "vue";
import VueRouter from 'vue-router';

import PostsComponent from './components/PostsComponent';
import NotFoundComponent from './components/NotFoundComponent';
import ContactsComponent from './components/ContactsComponent';
import AboutComponent from './components/AboutComponent';

Vue.use(VueRouter);

const router = new VueRouter({

    routes: [
        { path: '/', component: PostsComponent },
        { path: '/about', component: AboutComponent },
        { path: '/contacts', component: ContactsComponent },
        { path: '/*', component: NotFoundComponent },
    ]
});

export default router;
