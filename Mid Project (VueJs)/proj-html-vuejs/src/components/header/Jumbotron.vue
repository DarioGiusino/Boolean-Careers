<script>
import BaseButton from '../generics/BaseButton.vue';
export default {
    name: 'JumbotronComp',
    components: { BaseButton },
    props: { title: String }
}
</script>

<template>
    <section id="jumbotron">
        <h1>{{ title }}</h1>
        <slot></slot>
        <div class="buttons">
            <base-button class="yellow-btn" button-label="Search courses">
                <font-awesome-icon class="me-1" icon="fa-solid fa-magnifying-glass" /></base-button>
            <base-button class="white-btn" button-label="Apply for university">
                <font-awesome-icon class="me-1" icon="fa-solid fa-user-plus" /></base-button>
        </div>
    </section>
</template>

<style scoped lang="scss">
@use '../../assets/scss/partials/variables.scss' as *;

#jumbotron {
    background-color: $bg-green-2;

    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;

    padding: 5rem;

    h1 {
        font-weight: 700;
        font-size: 57px;
        margin-bottom: 2rem;
    }

    .buttons {
        margin-top: 2rem;
        display: flex;
        gap: 2rem;
    }

}
</style>