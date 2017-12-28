<template>
    <div>
        <h1>Cars</h1>

        <div class="row">
          <div class="col-md-10"></div>
          <div class="col-md-2">
            <router-link :to="{ name: 'CreateCar' }" class="btn btn-primary">Create Car</router-link>
          </div>
        </div><br />

        <table class="table table-hover">
            <thead>
            <tr>
                <td>ID</td>
                <td>Car Brand</td>
                <td>Car Model</td>
                <td>Car Price</td>
                <td>Actions</td>
            </tr>
            </thead>

            <tbody>
                <tr v-for="car in cars">
                    <td>{{ car.id }}</td>
                    <td>{{ car.brand }}</td>
                    <td>{{ car.model }}</td>
                    <td>{{ car.price }}</td>
                    <td><router-link :to="{name: 'EditCar', params: { id: car.id }}" class="btn btn-primary">Edit</router-link></td>
                    <td><button class="btn btn-danger" v-on:click="deleteCar(car.id)">Delete</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>

    export default {
        data(){
            return{
                cars: []
            }
        },

        created: function()
        {
            this.fetchCars();
        },

        methods: {
            fetchCars()
            {
              let uri = 'http://laravelcar.localhost.com/cars';
              this.axios.get(uri).then((response) => {
                  this.cars = response.data;
              });
            },
            deleteCar(id)
            {
              let uri = `http://laravelcar.localhost.com/cars/${id}`;
              this.cars.splice(id, 1);
              this.axios.delete(uri);
            }
        }
    }
</script>