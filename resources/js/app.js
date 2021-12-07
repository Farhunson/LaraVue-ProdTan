require('./bootstrap');

window.Vue = require('vue');

// import dependecies tambahan
import VueRouter from 'vue-router';
import VueAxios from 'vue-axios';
import Axios from 'axios';
import vuetify from './plugins/vuetify';
import PrismicVue from 'prismic-vue';
import linkResolver from './prismic/link-resolver';

Vue.use(VueRouter,VueAxios,Axios);

// import file yang dibuat tadi
import App from './App.vue';
import Create from './components/Create.vue';
import Read from './components/Read.vue';
import Update from './components/Update.vue';
import Home from './views/Home.vue'
import Contact_us from './views/Contact_us.vue'
import Privacy_policy from './views/Privacy_Policy.vue'
import Terms_condition from './views/Terms_Condition.vue'


// Add this before the new Vue instance

Vue.use(PrismicVue, {
    endpoint: window.prismic.endpoint,
    linkResolver
});

	


// membuat router

// Vue.use(VueRouter)

const routes = [

    {
        name: 'read',
        path: '/read',
        component: Read
    },
    {
        name: 'create',
        path: '/create',
        component: Create
    },
    {
        name: 'update',
        path: '/detail/:id',
        component: Update
    },
    {
        path: '/',
        name: 'Home',
        component: Home
    },
    {
        path: '/Terms_Condition',
        name: 'Terms Condition',
        component: Terms_condition
    },
    {
       path: '/Contact_us',
       name: 'Contact Us',
       component: Contact_us
    },
    {
        path: '/Privacy_Policy',
        name: 'Privacy Policy',
        component: Privacy_policy
    },    
]

// default router laravue
const router = new VueRouter({ mode: 'history', routes: routes });

// const router = new VueRouter({
//     routes
// })

// default app laravue
new Vue(Vue.util.extend({ router,vuetify }, App)).$mount("#app");

// new Vue({router,vuetify,render: h => h(App)}).$mount('#app')