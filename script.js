const App = new Vue(
    {
    el: "#app",
    data: {
        cars: [],
        filtered: [],
        text: "",
    },
    created() {
        axios.get('http://localhost:81/db-first/controller-api.php').then((result) => {
            this.cars = result.data.results;
            this.filtered = result.data.results;
        }).catch((error) => { console.log(error); });
    },
    methods: {
        filter() {
            if(this.text == ''){
                this.cars = this.filtered;
            } else {
                this.cars = [];
                this.filtered.forEach(element => {
                    if((element.marca === this.text) && (element.versione === this.text)){
                    this.cars.push(element);
                    
                }
                
            });
        }
    },
    }
    })