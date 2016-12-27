import Vue from 'vue';
import JwtToken from './jwt-token';
import store from '../store';
import router from '../router';

Vue.http.interceptors.push((request, next) => {
    request.headers.set('Authorization', JwtToken.getAuthorizationHeader());
    next();
});

Vue.http.interceptors.push((request, next) => {
    next(response => {
        if (response.status === 401) { //token expirado
            return JwtToken.refreshToken()
                .then(() => {
                    return Vue.http(request);
                }).catch(() => {
                store.commit('unauthenticated');
                router.push({name: 'auth.login'});
            });
        }
    });
});