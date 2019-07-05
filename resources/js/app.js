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
                href: '/'
            },
            {
                name: 'About Us',
                href: '/about'
            },
            {
                name: 'Organizations',
                href: '/organizations'
            }
        ],
        dogActions: () => [
            {
                icon: 'share',
                title: 'Share Me!',
                action: 'share'
            },
            {
                icon: 'accessibility_new',
                title: 'Adopt Me!',
                action: 'adopt'
            },
            {
                icon: 'email',
                title: 'Get notified when i\'m adopted!',
                action: 'notify'
            },
            {
                icon: 'store',
                title: 'See Organization',
                action: 'org'
            }
        ]
    },
    methods: {
        dogDoAction: function(event) {
            console.table(event);
        }
    }
});