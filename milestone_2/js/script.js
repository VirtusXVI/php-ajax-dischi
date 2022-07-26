var app = new Vue(
    {
        el: "#root",
        data:{
            albums: []
        },
        methods: {
            getDatabase(){
                axios.get("http://localhost:8888/php-ajax-dischi/milestone_2/api.php")
                .then ((response) => {
                    this.albums = response.data;
                    console.log(this.albums);
                })
            }
        },
        mounted() {
            this.getDatabase();
        },
    }
)