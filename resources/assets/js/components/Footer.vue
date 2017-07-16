<template>
  <footer class="text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p>
            Copyright &copy; {{ year | YYYY }} {{ owner }}
          </p>
        </div>
      </div>
    </div>
  </footer>
</template>

<script>
    export default {
        props: ['year', 'owner'],
        date: function() {
          return {
            year: '',
            date: new Date()
          }
        },
        filters: {
          YYYY: function(date) {
            return moment(date).format('YYYY')
          }
        }
    }
</script>
