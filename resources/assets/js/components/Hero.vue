<template>
  <section  class="jumbotron hero" style="background-image: url('images/hero.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-7">
            <h1 v-html="title">{{ title }}</h1>
            <p v-html="desc">{{ desc }}</p>
          </div>
        </div>
      </div>
    </section>
</template>

<script>
    export default {
        props: ['title', 'desc']
    }
</script>
