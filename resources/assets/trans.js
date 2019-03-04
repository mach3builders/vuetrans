const get = (obj, path, defaultValue) => path.split(".")
.reduce((a, c) => (a && a[c] ? a[c] : (defaultValue || null)), obj)

const VueTrans = {
    install (Vue, options) {
        Vue.prototype.trans = function (string, params) {
            let value = get(window.m3lang, string)

            if(params){
                Object.keys(params).forEach(function (key) {
                    value = value.replace(`:${key}`, params[key])
                })
            }

            return value;
        }
    }
}

export default VueTrans;
