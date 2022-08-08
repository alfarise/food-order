import Router from 'vue-router';
import Welcome from '../views/pages/Welcome.vue';

const router = new Router({
    mode: 'history',
    routes: [
        {
            path: '/app/*',
            component: Welcome,
            name: 'welcome',
        },  
    ],
});

export {
    Router,
    router
};
