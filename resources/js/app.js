import Vue from 'vue';
import Vuetify from 'vuetify';

Vue.use(Vuetify);


new Vue({
    el: '#app',
    computed: {
        currentYear: () => new Date().getFullYear(),
        loginLinks: () => ({
            name: (window.App.LoggedIn) ? 'Logout' : 'Login',
            href: (window.App.LoggedIn) ? '/logout' : '/login'
        }),
        links: () => [
            {
                name: 'Home',
                href: '/',
                key: 1,
            },
            {
                name: 'About Us',
                href: '/about',
                key: 2,
            },
            {
                name: 'Organizations',
                href: '/organizations',
                key: 3,
            }
        ]
    }
});