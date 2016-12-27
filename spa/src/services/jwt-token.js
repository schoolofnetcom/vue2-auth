import SessionStorage from './session-storage';
import {Jwt} from './resources';

export default {
    get token() {
        return SessionStorage.get('token')
    },
    set token(value) {
        return value ? SessionStorage.set('token', value) : SessionStorage.remove('token');
    },
    accessToken(email, password){
        return Jwt.accessToken(email, password).then((response) => {
            this.token = response.data.token;
        });
    },
    refreshToken(){
        return Jwt.refreshToken().then(response => {
            this.token = response.data.token;
            return response;
        })
    },
    getAuthorizationHeader(){
        return `Bearer ${this.token}`;
    }
}