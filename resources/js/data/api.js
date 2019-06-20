import axios from "axios";
import {getToken} from "../data/localStorage";
import store from '../store/index';

export function fetchLogin() {
    let state = store.state.login;
    return post('/api/v1/panel/login', {
        username: state.username,
        password: state.password
    });
}


export function fetchCars(){
    return get ('/api/v1/panel/read-all-cars')
}



export function post(url,creds) {
    return axios.post(url, creds, {
            headers: {
                Authorization: getToken()
            }
        }
    );

}

export function get(url) {
    return axios.get(url, {
            headers: {
                Authorization: getToken()
            }
        }
    );
}
