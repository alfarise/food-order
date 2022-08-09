<template>

  <div class="container mx-auto px-4">
    <NavbarComponent></NavbarComponent>
    <h1 class="text-right text-3xl">hallo</h1>
  </div>
</template>

<script>
import NavbarComponent from '../components/Navbar.vue';
export default {
  components : {
    NavbarComponent
  }
};
</script>

<style type = "text/tailwindcss">

@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
* {
  /* border: 1px solid red; */
  font-family: 'Roboto', sans-serif;
}

</style>
