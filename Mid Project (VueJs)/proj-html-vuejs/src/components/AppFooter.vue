<script>
import SocialLinks from './footer/SocialLinks.vue';
import NavLists from './footer/NavLists.vue';
import Categories from './footer/Categories.vue';
export default {
    name: 'AppFooter',
    components: { SocialLinks, NavLists, Categories }
}
</script>

<template>
    <!-- # footer -->
    <footer>
        <div class="container">
            <div class="row row-cols-3">
                <!-- ? social links (right footer) -->
                <div class="col">
                    <social-links></social-links>
                </div>

                <!-- ? nav lists (central footer) -->
                <div class="col">
                    <nav-lists></nav-lists>
                </div>

                <!-- ? categories (left footer) -->
                <div class="col">
                    <categories></categories>
                </div>
            </div>
        </div>
    </footer>
</template>

<style scoped lang="scss">
@use '../assets/scss/partials/variables.scss' as *;

footer {
    background-color: $bg-green-2;
    color: $text-white-2;
    padding: 6rem 0;
}
</style>