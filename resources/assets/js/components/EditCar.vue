<template>
    <div>
        <h1>Update Car</h1>
        <div class="row">
          <div class="col-md-10"></div>
          <div class="col-md-2"><router-link :to="{ name: 'DisplayCar' }" class="btn btn-success">Return to Cars</router-link></div>
        </div>

        <form v-on:submit.prevent="updateCar">
            <div class="form-group">
                <label>Car Brand</label>
                <input type="text" class="form-control" v-model="car.brand">
            </div>

            <div class="form-group">
                <label>Car Model</label>
                <input type="text" class="form-control" v-model="car.model">
            </div>

            <div class="form-group">
                <label>Car Price</label>
                <input type="text" class="form-control" v-model="car.price">
            </div>

            <div class="form-group">
                <button class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</template>

<script>

    export default{
        data(){
            return{
                car:{}
            }
        },

        created: function(){
            this.getCar();
        },

        methods: {
            getCar()
            {
              let uri = `http://laravelcar.localhost.com/cars/${this.$route.params.id}/edit`;
                this.axios.get(uri).then((response) => {
                    this.car = response.data;
                });
            },

            updateCar()
            {
              let uri = 'http://laravelcar.localhost.com/cars/'+this.$route.params.id;
                this.axios.patch(uri, this.car).then((response) => {
                  this.$router.push({name: 'DisplayCar'});
                });
            }
        }
    }
</script>