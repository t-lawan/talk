<template>
<div class="well well-sm">
  <h1>@{{post.user}}</h1>
</div>
</template>
<script>
    export default {
        data: {
          post:{

          }
        },
        computed: {
          href: function() {
            return "/posts/"+post.id;
          },
          id: function() {
            return "/posts"+post.id;
          },

        },
        mounted() {
            axios.get('/test').then(response => this.posts = response.data);
        },

    }
</script>
