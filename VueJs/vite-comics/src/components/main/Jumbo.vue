<script>
export default {}
</script>

<template>
    <section id="jumbo"></section>
</template>

<style lang="scss" scoped>
@use '../../assets/scss/partials/mixins' as *;

#jumbo {
    background-image: url('../../assets/img/jumbotron.jpg');
    @include background-reset;
    height: 350px;
}
</style>