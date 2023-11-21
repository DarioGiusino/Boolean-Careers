<script>
import AppHeader from './components/AppHeader.vue';
import AppMain from './components/AppMain.vue';
import AppNav from './components/AppNav.vue';
import AppFooter from './components/AppFooter.vue';
import { headerLinks, comics } from './data/index.js';
export default {
  name: 'Comics Site',
  data() {
    return { headerLinks, comics }
  },
  components: { AppHeader, AppMain, AppNav, AppFooter }
}
</script>

<template>
  <app-header :links="headerLinks"></app-header>
  <app-main :comics="comics"></app-main>
  <app-nav></app-nav>
  <app-footer></app-footer>
</template>

<style lang="scss">
@use './assets/scss/style.scss';
</style>