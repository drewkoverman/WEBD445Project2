<template>
  <section class="frameworks text-center">
    <div class="container">
      <div class="row">
        <h3>{{ title }}</h3>
        <a href="#"><img src="images/vue.png"  /></a>
        <a href="#"><img src="images/bootstrap.png"  /></a>
        <a href="#"><img src="images/jquery.png"  /></a>
      </div>
    </div>
  </section>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
