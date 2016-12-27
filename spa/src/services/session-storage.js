export default {
    set(key, value){
        window.sessionStorage[key] = value;
        return window.sessionStorage[key];
    },
    get(key, defaultValue){
        return window.sessionStorage[key] || defaultValue;
    },
    setObject(key, value){
        window.sessionStorage[key] = JSON.stringify(value);
        return this.getObject(key);
    },
    getObject(key){
        return JSON.parse(window.sessionStorage[key] || null);
    },
    remove(key){
        window.sessionStorage.removeItem(key);
    }
};