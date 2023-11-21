<script>
import BaseInputText from '../generics/BaseInputText.vue';
import BaseButton from '../generics/BaseButton.vue';
import { footerButtons } from '../../data'
export default {
    name: 'FooterCategories',
    components: { BaseInputText, BaseButton },
    data() {
        return { footerButtons }
    }
}
</script>

<template>
    <!-- input text -->
    <base-input-text placeholder="Search..."><font-awesome-icon class="me-1 footer-input-icon"
            icon="fa-solid fa-magnifying-glass" /></base-input-text>

    <!-- search categories -->
    <section class="my-4 text-end">
        <h5 class="mb-3">Search categories</h5>
        <base-button v-for="button in footerButtons" :key="button.label" :button-label="button.label"
            class="footer-btn"></base-button>
        <p class="mb-0 mt-3">ModelTheme. All rights reserved.</p>
    </section>


</template>

<style scoped lang="scss">
@use '../../assets/scss/partials/variables.scss' as *;

.footer-btn .footer-input-icon {
    position: relative;
    left: 2px;
}

.footer-btn {
    color: $text-white-2;
    background-color: transparent;
    border-color: $border-white-1;
    font-weight: 300;
    font-size: 13px;
    padding: 5px 10px;
    margin-left: 0.5rem;
    margin-bottom: 0.5rem;

    &:hover {
        background-color: $bg-white-2;
        color: $text-green;
        border-color: $border-grey;
    }
}

p {
    color: $text-yellow;
}
</style>