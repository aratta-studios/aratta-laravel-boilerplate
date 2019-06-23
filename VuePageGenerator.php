<?php
$val = getopt(null, ["name:"]);
if (!empty($val["name"])) {
    $fp = fopen("./resources/js/ui/pages/" . $val["name"] . ".vue", "wb");
    if ($fp == false) {
        //do debugging or logging here
    } else {
        fwrite($fp, '<template>
</template>

<script>
    import {mapActions, mapMutations, mapState} from "vuex";

    export default {
        name: "'.$val["name"].'",
        methods: {
            ...mapMutations({
//                setUsername: \''.$val["name"].'/setUsername\',
//                setPassword: \''.$val["name"].'/setPassword\',
//                togglePassword: \''.$val["name"].'/togglePassword\'
            }),
            ...mapActions({
//                login: \''.$val["name"].'/login\'
            }),
        },
        computed: {
            ...mapState({
//                isLoggedIn: state => state.login.isLoggedIn,
//                pending: state => state.'.$val["name"].'.pending,
//                showPassword: state => state.'.$val["name"].'.showPassword,
//                password: state => state.'.$val["name"].'.password,
//                username: state => state.'.$val["name"].'.username

            })

        }
    }
</script>
');
        fclose($fp);
    }

    $fp = fopen("./resources/js/store/" . $val["name"] . ".js", "wb");
    if ($fp == false) {
        //do debugging or logging here
    } else {
        fwrite($fp, '
import router from \'../router\';
        
const state = {
//    isLoggedIn: !!getToken(),
//    pending: false,
//    showPassword: false,
//    password: \'\',
//    username: \'\'
};

// getters
const getters = {
//    isLoggedIn: state => {
//        return state.isLoggedIn
//    }
};

// actions
const actions = {

//    login({commit}) {
//        commit(\'login\');
//        fetchLogin().then(jsonResponse => {
//            saveToken(jsonResponse.headers.authorization);
//            commit(\'loginSuccess\');
//            router.push(\'/\')
//        });
//    },
//    logout({commit}) {
//        return new Promise((resolve, reject) => {
//            commit(\'logout\');
//            removeToken();
//            resolve()
//        })
//    }
};

// mutations
const mutations = {
//    [\'login\'](state) {
//        state.pending = true;
//    },
//    [\'loginSuccess\'](state) {
//        state.isLoggedIn = true;
//        state.pending = false;
//    },
//    [\'logout\'](state) {
//        state.isLoggedIn = false;
//    }
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}
');
        fclose($fp);
    }
//     $fr = fopen("./resources/js/store/index.js", 'rb');
//     if (FALSE === $fr) {
//         exit("Failed to open stream to URL");
//     }
//     $indexString = fread($fr,filesize("./resources/js/store/index.js"));
//     fclose($fr);
//     $fp = fopen("./resources/js/store/index.js", 'w');
//     $insertPos = strpos($indexString,"Vue.use(Vuex");
//     $modulesPos = strpos($indexString,"modules: {",273)+48;
//     $insertReplacement = "import ".$val["name"]." from './".$val["name"]."';

// ";
//     $modulesReplacement = "        ".$val["name"].",
// ";
//     $count = 0;
//     $indexString = substr_replace($indexString,$insertReplacement,$insertPos,$count);
//     $indexString = substr_replace($indexString,$modulesReplacement,$modulesPos,$count);
//     fwrite($fp, $indexString);
//     fclose($fp);

//    strpos()
//    substr_replace()

} else {
    print_r("Please enter your controller name via create:ControllerName");
}
