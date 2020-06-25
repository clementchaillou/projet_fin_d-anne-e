/* ---------------- Animation header ------------------ */
const nav = document.querySelector('.heading');

let scrollPos = 0;

function checkPosition() {
    let windowY = window.scrollY;
    if (windowY < scrollPos){
        nav.classList.add('is-visible');
        nav.classList.remove('is-hidden');
    }else {
        nav.classList.add('is-hidden');
        nav.classList.remove('is-visible');
    }
    scrollPos = windowY;
}
addEventListener('scroll', checkPosition);

/*const app = new Vue({
    el:'#app',
    created(){
        this.import()
    },
    data: {
        product: [],
        update: null,
        query: ''
    },
    methods: {
        import() {
            const uri = encodeURIComponent(this.query)
            fetch(this.query ? `./helpers?product=${uri}` : 'helpers.php')
                .then(res => res.json())
                .then(json => {
                    this.product = json
                })
                .catch(err => console.error(err))
        },
        typing(){
            clearTimeout(this.update)
            this.update = setTimeout(() => {
                this.product = []
                this.import()
            }, 750)
        }
    },
})*/