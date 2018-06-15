var app = new Vue({
    el: '#app',
    data: {
        message: 'True',
        view: true,
        message1: '',
        checked: true,
        count: 0,
        url: '',
        cleanUrl: '',
        title: 'Style',
        isRounded: false,
        sizeToggle: false,
        disabled: false,
        fontColor: '#ccc',
        backgroundColor: 'yellow',
    },
    computed: {
        styles: function () {
            return {
                color: this.fontColor,
                background: this.backgroundColor
            }
        }
    },
    methods: {
        countUp: function () {
            this.count += 1;
        },
        countDown: function () {
            this.count -= 1;
        },
        cleanerUrl: function () {
            this.cleanUrl = this.url.replace(/^https?:\/\//, '').replace(/\/$/, '')
        }
    }
});