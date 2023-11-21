<script>
import BaseButton from '../generics/BaseButton.vue';
export default {
    name: 'Footer Social Links',
    components: { BaseButton }
}
</script>

<template>
    <!-- upper logo -->
    <header class="mb-4">
        <img class="w-50" src="../../assets/img/theme_eduprime_logo.png" alt="edu logo">
    </header>

    <!-- central description -->
    <main class="mb-4">
        <p class="mb-0 fw-light">
            EduPrime is the most versatile WordPress theme for educational purposes, showcasing universities, courses,
            secondary schools etc.
        </p>
    </main>

    <!-- social links -->
    <footer>
        <base-button class="social-btn"><font-awesome-icon icon="fa-brands fa-facebook-f" /></base-button>
        <base-button class="social-btn"><font-awesome-icon icon="fa-brands fa-twitter" /></base-button>
        <base-button class="social-btn"><font-awesome-icon icon="fa-brands fa-instagram" /></base-button>
    </footer>
</template>

<style scoped lang="scss">
@use '../../assets/scss/partials/variables.scss' as *;

.social-btn {
    background-color: transparent;
    color: $text-white-2;
    border-color: $border-yellow-1;
    padding: 5px 5px;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    margin-right: 10px;

    &:hover {
        background-color: $bg-white-2;
        color: $text-green;
        border-color: $border-grey;
    }
}
</style>