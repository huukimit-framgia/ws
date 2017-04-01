/**
 * Created by kimnh on 02/04/2017.
 */

export const auth = {
    login(credentials) {
        return Vue.http.post('/api/login', credentials);
    },
    check() {
        return Vue.http.get('/api/auth');
    }
};
