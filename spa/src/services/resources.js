import Vue from 'vue';
import VueResource from 'vue-resource';

Vue.use(VueResource);
require('./interceptors');

export class Jwt{
    static accessToken(email, password){
        return Vue.http.post('http://localhost:8000/api/login', {
            email,
            password
        });
    }

    static refreshToken(){
        return Vue.http.post('http://localhost:8000/api/refresh_token');
    }
}

const Time = Vue.resource('http://localhost:8000/api/times');
const User = Vue.resource('http://localhost:8000/api/user')
export {Time,User};