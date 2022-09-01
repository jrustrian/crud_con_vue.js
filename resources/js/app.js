

require('./bootstrap');

window.Vue = require('vue').default;



// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))





new Vue({
    el: '#crud',
    created: function () {
        this.getKeeps();
    },
    data: {
        Keeps: []
    },
    methods: {
        getKeeps: function () {
            var urlKeeps = 'customers';
            axios.get(urlKeeps).then(response => {
                this.keeps = response.data
            });
        },
        deleteKeep: function(keep) {
            var url = 'customers/' + keep.id;
            axios.delete(url).then(response => {
                this.getKeeps();
            });
        }


    }

});
