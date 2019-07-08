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
        ],
        dogName: () => {
            if(window.App.CurrentDog.Name)
                return window.App.CurrentDog.Name;
            else
                return '';
        }
    },
    methods: {
        dogDoAction: function(event) {
            switch(event)
            {
                // use the twitter share
                case 'share':
                    window.open('https://www.twitter.com/share?url=' + window.location.href +
                        '&amp;text=Look at this adorable dog '+ window.App.CurrentDog.Name +'!');
                    break;

                case 'notify':
                    this.notifyDialog = true;
                    break;

                default:
                    console.error('No Implemented Action for: '+ event);
                    break;
            }
        }
    },
    data() {
        return {
            notifyDialog: false
        }
    }
});