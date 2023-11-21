<script>
export default {
    name: 'AppHeader',
    props: { links: Array }
}
</script>

<template>
    <header class="container">
        <figure>
            <img src="../assets/img/dc-logo.png" alt="Dc logo">
        </figure>

        <nav>
            <ul>
                <li v-for="link in links" :key="link.text"><a :href="link.url" :class="{ 'current': link.current }">{{
                    link.text
                }}</a></li>
            </ul>
        </nav>
    </header>
</template>

<style lang="scss" scoped>
@use '../assets/scss/partials/variables' as *;
@use '../assets/scss/partials/mixins' as *;

header {
    @include flex('between', 'center');
    height: $height-s;

    img {
        transform: scale(0.5);
    }

    nav {
        height: 100%;

        ul {
            @include list-reset;
            @include flex('around', 'center');
            height: 100%;

            li {
                @include flex('center', 'center');
                height: 100%;

                a {
                    @include flex('center', 'center');
                    font-weight: bold;
                    font-size: 14px;
                    height: 100%;
                    padding: 0px 10px;
                    border-bottom: 5px solid transparent;

                    &.current {
                        color: $blue;
                        border-color: $blue;
                    }
                }

            }
        }
    }
}
</style>