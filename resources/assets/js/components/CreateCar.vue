<template>
  <div>
    <h1>Create An Car</h1>
    <form v-on:submit.prevent="addCar">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Car Brand:</label>
            <input type="text" class="form-control" v-model="car.brand">
          </div>
        </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Car Model:</label>
              <input type="text" class="form-control" v-model="car.model">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Car Price:</label>
              <input type="text" class="form-control col-md-6" v-model="car.price" />
            </div>
          </div>
        </div><br />
        <div class="form-group">
          <button class="btn btn-primary">Add Car</button>
        </div>
    </form>
  </div>
</template>
<script>
  export default {
    data(){
        return{
          car:{}
        }
    },
    methods: {
      addCar(){
        let uri = 'http://laravelcar.localhost.com/cars';
        this.axios.post(uri, this.car).then((response) => {
          this.$router.push({name: 'DisplayCar'})
        })
    }
  }
}
</script>