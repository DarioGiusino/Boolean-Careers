<script>
import BaseButton from '../generics/BaseButton.vue';
import BaseSectionDesc from '../generics/BaseSectionDesc.vue';
export default {
    name: 'Presentation Row',
    components: { BaseButton, BaseSectionDesc },
    props: {
        icon: String,
        image: String,
        title: String,
        paragraph: String,
        buttonColor: String,
        buttonLabel: String,
        direction: String
    },
    methods: {
        // build image 
        buildImage(path) {
            //build src
            const url = new URL(`../../assets/img/${path}`, import.meta.url);

            //return src
            return url.href;
        },
    }
}
</script>

<template>
    <div class="container">
        <div class="row" :class="direction">
            <div class="col-8">
                <!-- grey icon -->
                <figure v-if="icon" class="section-icon">
                    <img :src="buildImage(icon)" :alt="icon">
                </figure>
                <!-- description -->
                <base-section-desc :title="title" :paragraph="paragraph">
                    <base-button :class="buttonColor" :button-label="buttonLabel"></base-button>
                </base-section-desc>
            </div>
            <div class="col-4">
                <!-- big image -->
                <img :src="buildImage(image)" :alt="image">
            </div>
        </div>
    </div>
</template>

<style scoped lang="scss">
.container {
    padding: 3rem 0;
}
</style>