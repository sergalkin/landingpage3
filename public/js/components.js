Vue.component('book', {
    template: '#books',
    props: ['title', 'author', 'content']
});

new Vue ({
    el: '#app',
    data: {
        author: 'David',
        title: ' Java',
        content: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, quibusdam!',
    }
});