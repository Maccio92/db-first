const App = new Vue(
    {
    el: "#app",
    data: {
        cars: [],
    },
    created() {
        axios.get('http://localhost:81/db-first/controller-api.php').then((result) => {
            this.cars = result.data.results;
            console.log(this.cars);
            console.log(result);
        }).catch((error) => { console.log(error); });
    }
    }
    ); 