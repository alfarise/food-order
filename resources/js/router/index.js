import Router from 'vue-router';
import Welcome from '../views/pages/Welcome.vue';
import Dashboard from '../views/pages/Dashboard.vue';
import NotFound from '../views/pages/NotFound.vue';

const router = new Router({
    mode: 'history',
    routes: [ 
        {
            path: '/app/welcome',
            component: Welcome,
            name: 'welcome',
        },
        {
            path: '/app/dashboard',
            component: Dashboard,
            name: 'dashboard',
        },
        {
            path: '/app/*',
            component: NotFound,
            name: 'Not Found',
        }, 
    ],
});

export {
    Router,
    router
};
