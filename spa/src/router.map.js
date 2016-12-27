import TimeListComponent from './components/TimeList.vue';
import TimeJogoComponent from './components/TimeJogo.vue';
import TimeZonaComponent from './components/TimeZona.vue';
import LoginComponent from './components/Login.vue';
import LogoutComponent from './components/Logout.vue';

export default [
    {
        name: 'auth.login',
        path: '/login',
        component: LoginComponent,
        meta: {auth: false}
    },
    {
        name: 'auth.logout',
        path: '/logout',
        component: LogoutComponent,
        meta: {auth: true}
    },
    {
        name: 'time.list',
        path: '/times',
        component: TimeListComponent,
        meta: {auth: true}
    },
    {
        name: 'time.jogo',
        path: '/times/jogo',
        component: TimeJogoComponent,
        meta: {auth: true}
    },
    {
        name: 'time.zona',
        path: '/times/zona',
        component: TimeZonaComponent,
        meta: {auth: true}
    }
];