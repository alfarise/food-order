<template>
    <div>
        <navbar-component></navbar-component>

        <div
          class="w-full relative overflow-hidden bg-no-repeat bg-cover"
          style="
            background-image: url('https://images.pexels.com/photos/958545/pexels-photo-958545.jpeg');
            height: 640px;
          "
          >

          <div class="absolute top-1/2 left-0 w-full overflow-hidden text-center -translate-y-1/2">
            <h1 class="text-8xl font-bold text-cyan-600 my-5">FoodyOrdy.</h1>
            <h5 class="text-3xl font-bold text-cyan-600 my-5">Quick, Easy, and Don't Know</h5>
            <a href="#" class="inline-block bg-white p-3 my-5">Start Now</a>
          </div>
        </div>

        <div class="block h-96 w-5/6 mx-auto mt-5">
          <div class="flex justify-between">
            <div class="inline pt-10 pl-10 mx-1">
              <h1 class="mb-1 text-5xl font-bold bg-gradient-to-r from-cyan-300 to-indigo-900 bg-clip-text text-transparent">FoodyOrdy.</h1>
              <h1 class="mb-1 text-4xl font-bold bg-gradient-to-r from-cyan-300 to-indigo-900 bg-clip-text text-transparent">EASY PEASY</h1>
              <h1 class="mb-1 text-4xl font-bold bg-gradient-to-r from-cyan-300 to-indigo-900 bg-clip-text text-transparent">TO ORDER !</h1>
              <h1 class="mb-1 text-4xl font-bold bg-gradient-to-r from-cyan-300 to-indigo-900 bg-clip-text text-transparent">OUR FOOD</h1>
              <p class="bg-gradient-to-r from-black to-black bg-clip-text text-transparent">New technology designed to help you order food <br>Quickly without looking at the menu at the cashier.</p>
            </div>
            <div class="inline pt-10 mx-1">
                <img
                    class="h-80 w-80 pr-14"
                    src="../assets/picture1.png"
                    alt=""/>
            </div>
          </div>
        </div>
    </div>
</template>

<script>
import NavbarComponent from "../components/Navbar.vue";

export default {
    components: {
        NavbarComponent,
    },
};
</script>

<style type="text/tailwindcss"></style>
