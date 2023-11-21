<script>
import AppHeader from './components/AppHeader.vue';
import AppMain from './components/AppMain.vue';
import AppFooter from './components/AppFooter.vue';
import FloatingButtons from './components/FloatingButtons.vue';
export default {
  name: 'EduPrime',
  components: { AppHeader, AppMain, AppFooter, FloatingButtons }
}
</script>

<template>
  <app-header id="app-header"></app-header>
  <app-main></app-main>
  <app-footer></app-footer>
  <floating-buttons></floating-buttons>
</template>

<style lang="scss">
@use './assets/scss/style.scss';
</style>