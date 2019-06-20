import Vue from "vue"
import VueRouter from "vue-router"
import LoginPage from './ui/pages/login';
import PanelPage from './ui/pages/panel';
import Dashboard from './ui/pages/dashboard'
import Sample from './ui/pages/sample'
// import store from './store/index';

Vue.use(VueRouter);

function guard(to, from, next){
    // if(store.state.login.isLoggedIn === true) {
        // or however you store your logged in state
        next(); // allow to enter route
    // } else{
    //     next('/login'); // go to '/login';
    // }
}

export default new VueRouter({
    mode: 'history',

    routes: [
        {
            path: '',
            name: 'Main',
            component: PanelPage,
            beforeEnter: guard,
            children: [{
                path: 'dashboard',
                components: {
                    default: Dashboard,
                }
            },
                {
                    path: 'accounting',
                    components: {
                        default: Sample,
                    },
                    props: {
                        default: {
                            title: 'Architect',
                            description:'Elon musk',
                            image: 'https://storage.googleapis.com/neris/public/images/types/famous/analysts_INTJ_elon_musk.svg?v=2'
                        }
                    }
                },
                {
                    path: 'trips',
                    components: {
                        default: Sample,
                    },
                    props: {
                        default: {
                            title: 'Advocate',
                            description:'Nelson Mandela',
                            image: 'https://storage.googleapis.com/neris/public/images/types/famous/diplomats_INFJ_nelson_mandela.svg?v=2'
                        }
                    }
                },
                {
                    path: 'drivers',
                    components: {
                        default: Sample,
                    },
                    props: {
                        default: {
                            title: 'Campaigner',
                            description:'RM',
                            image: 'https://storage.googleapis.com/neris/public/images/types/famous/diplomats_ENFP_RM_Kim_Nam-joon.svg?v=2'
                        }
                    }
                },
                {
                    path: 'customers',
                    components: {
                        default: Sample
                    },
                    props: {
                        default: {
                            title: 'Logistician',
                            description:'George Washington',
                            image: 'https://storage.googleapis.com/neris/public/images/types/famous/sentinels_ISTJ_george_washington.svg?v=2'
                        }
                    }
                },
                {
                    path: 'operators',
                    components: {
                        default: Sample
                    },
                    props: {
                        default: {
                            title: 'Virtuoso',
                            description:'Clint Eastwood',
                            image: 'https://storage.googleapis.com/neris/public/images/types/famous/explorers_ISTP_clint_eastwood.svg?v=2'
                        }
                    }
                },
                {
                    path: 'settings',
                    components: {
                        default: Sample
                    },
                    props: {
                        default: {
                            title: 'Logician',
                            description:'Bill Gates',
                            image: 'https://storage.googleapis.com/neris/public/images/types/famous/analysts_INTP_bill_gates.svg?v=2'
                        }
                    }
                },
                {
                    path: 'messaging',
                    components: {
                        default: Sample
                    },
                    props: {
                        default: {
                            title: 'Commander',
                            description:'Steve Jobs',
                            image: 'https://storage.googleapis.com/neris/public/images/types/famous/analysts_ENTJ_steve_jobs.svg?v=2'
                        }
                    }
                },
                {
                    path: 'about',
                    components: {
                        default: Sample
                    },
                    props: {
                        default: {
                            title: 'Mediator',
                            description:'William Shakespeare',
                            image: 'https://storage.googleapis.com/neris/public/images/types/famous/diplomats_INFP_william_shakespeare.svg?v=2'
                        }
                    }
                }]
        },
        {
            path: '/login',
            name: 'Login',
            component: LoginPage
        }
    ]
})
