<script setup lang="ts">
import axios from 'axios';
import { onMounted } from 'vue';




onMounted(() =>
  getAllCars()
)

async function getAllCars() {

  try {

    const response = await axios.get('http://my-app.test/api/cars');
    console.log(response.data)

  } catch (error) {
    console.log(error)
  }


}


</script>

<template>

  <div class="container-fluid">
    <div class="row bg-image"
      style="background-image: url(https://images.unsplash.com/photo-1511994477422-b69e44bd4ea9?q=80&w=3479&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);">
      <div class="col-12">
        <div class="d-flex justify-content-center">
          <div class="fs-1 fw-bold text-danger">
            Let's hope this works!
          </div>
        </div>
      </div>
    </div>
  </div>

</template>



<style scoped>
.bg-image {

  min-height: 40dvh;
  background-position: center;
}
</style>
