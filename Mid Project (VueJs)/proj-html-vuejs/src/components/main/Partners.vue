<script>
import { partners } from '../../data';
export default {
    name: 'Partners',
    data() {
        return { partners }
    },
    methods: {
        // build image src 
        brandImage(path) {
            //build src
            const url = new URL(`../../assets/img/${path}`, import.meta.url);

            //return src
            return url.href;
        }
    }
}
</script>

<template>
    <!-- # title and desc -->
    <header class="text-center">
        <h1 class="fw-bold mb-4">Partners</h1>
        <p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to
            corporate strategy.</p>
    </header>

    <!-- # brands -->
    <section class="container">
        <div class="row row-cols-8 align-items-center">
            <div v-for="partner in partners" :key="partner.image" class="col">
                <img :src="brandImage(partner.image)" :alt="partner.image">
            </div>
        </div>
    </section>
</template>

<style scoped lang="scss">
.col {
    height: 40px;
    filter: invert(0.7);
    cursor: pointer;

    &:hover {
        filter: invert(0);
    }

    img {
        height: 100%;
        max-width: fit-content;
        margin: 0 auto;
    }
}
</style>