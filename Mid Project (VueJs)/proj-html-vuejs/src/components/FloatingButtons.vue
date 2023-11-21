<script>
import BaseButton from './generics/BaseButton.vue';
export default {
    name: 'Floating Buttons',
    components: { BaseButton }
}
</script>

<template>
    <!-- # go to header button -->
    <base-button class="go-up-btn"><a href="#app-header"><font-awesome-icon icon="fa-solid fa-angle-up"
                class="go-up-icon" /></a></base-button>

    <!-- # themes labels -->
    <div class="theme-labels">
        <base-button class="theme-label mb-2" button-label="Purchase Theme"><img src="../assets/svg/svg-3.svg"
                alt="purchase icon"></base-button>
        <base-button class="theme-label" button-label="Related Themes"><img src="../assets/svg/svg-2.svg"
                alt="related icon"></base-button>
    </div>

</template>

<style scoped lang="scss">
@use '../assets/scss/partials/variables.scss' as *;

.go-up-btn {
    background-color: $bg-yellow;
    border: none;
    color: $text-white-1;
    box-shadow: 0px 1px 5px 0px $bg-black-2;


    position: fixed;
    bottom: 1.5rem;
    right: 1.5rem;

    width: 30px;
    height: 30px;
    border-radius: 50%;
    padding: 5px 5px;

    .go-up-icon {
        position: relative;
        right: .5px;
        bottom: 2px;
    }
}

.theme-labels {
    position: fixed;
    bottom: 1.5rem;
    left: 1.5rem;

    display: flex;
    flex-direction: column;

    .theme-label {
        font-size: 12px;
        padding: 5px 15px;
        border-radius: 5px;
        box-shadow: 0px 5px 10px 0px $bg-black-2;

        background-color: $bg-grey-1;
        color: $text-grey-1;

        display: flex;
        align-items: center;

        img {
            width: 10px;
            margin-right: 0.2rem;
        }
    }
}
</style>