<script>
import BaseInputText from '../generics/BaseInputText.vue';
export default {
    name: 'Newsletter',
    components: { BaseInputText }
}
</script>

<template>
    <div class="container">
        <div class="row row-cols-2 align-items-center">
            <div class="col">
                <h2 class="mb-0">Subscribe Now to Our Newsletter !</h2>
            </div>
            <div class="col">
                <base-input-text placeholder="Email address..."><font-awesome-icon
                        icon="fa-solid fa-paper-plane" /></base-input-text>
            </div>
        </div>
    </div>
</template>

<style scoped lang="scss">
h2 {
    font-weight: 500;
}
</style>