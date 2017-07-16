<template>
  <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <span class="navbar-brand tag-logo hidden-sm hidden-xs">
            <img src="images/app-logo.jpg" />
          </span>
          <span class="navbar-brand mobile-logo hidden-md hidden-lg">
            <img src="images/mobile-logo.jpg" />
          </span>
        </div>
      </div><!-- /.container-fluid -->
    </nav>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
