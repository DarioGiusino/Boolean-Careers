<script>
import FooterTop from './footer/FooterTop.vue';
import FooterBottom from './footer/FooterBottom.vue';
export default {
    components: { FooterTop, FooterBottom },
    props: { lists: Array }
}
</script>

<template>
    <footer-top></footer-top>
    <footer-bottom></footer-bottom>
</template>

<style>

</style>