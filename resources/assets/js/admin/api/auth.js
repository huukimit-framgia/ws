/**
 * Created by kimnh on 02/04/2017.
 */
export default {
    login: credentials => axios.post('/api/login', credentials),
    check: () => axios.get('/api/auth/check')
}
