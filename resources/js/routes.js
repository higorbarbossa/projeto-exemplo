
import createClient from './components/client/Create.vue';
import listClient from './components/client/List.vue';

import Content from './components/Content.vue';

export const routes = [

    { path: '/vue', component: Content, name: 'Content' },

    { path: '/vue/client/create', component: createClient, name: 'Create Brand' },
    { path: '/vue/client/list', component: listClient, name: 'List Brand' },

];
