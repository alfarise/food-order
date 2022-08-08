import Router from 'vue-router';
import Welcome from '../views/pages/Welcome.vue';
import NotFound from '../views/pages/NotFound.vue';

const router = new Router({
    mode: 'history',
    routes: [ 
        {
            path: '/app/dashboard',
            component: Welcome,
            name: 'welcome',
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
