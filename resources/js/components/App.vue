<template>
  <div class="container">
    <div class="row justify-content-center">
      <meu-menu />

      <transition name="pagina">
        <router-view></router-view>
      </transition>
    </div>
  </div>
</template>

<script>
import Menu from "./shared/Menu.vue";

export default {
  components: {
    "meu-menu": Menu,
  }
};
</script>

<style>


  .pagina-enter, .pagina-leave-active {
    opacity: 0;
  }

  .pagina-enter-active, .pagina-leave-active {
    transition:  opacity .5s;
  }

</style>
