<script>
import BaseButton from './BaseButton.vue';
export default {
    name: 'BaseCard',
    components: { BaseButton },
    props: {
        image: String,
        title: String,
        paragraph: String,
        date: String,
        teacher: String,
        price: String,
        buttonColor: String,
        buttonLabel: String
    },
    methods: {
        // build image src
        cardIcon(path) {
            //build src
            const url = new URL(`../../assets/img/${path}`, import.meta.url);

            //return src
            return url.href;
        }
    }
}
</script>

<template>
    <div class="card">
        <!-- card image -->
        <figure v-if="image" class="section-icon">
            <img :src="cardIcon(image)" class="card-img-top" :alt="title">
        </figure>

        <!-- ? card body -->
        <div class="card-body">
            <!-- title -->
            <h4 class="fw-semibold">{{ title }}</h4>

            <!-- date -->
            <p v-if="date" class="mb-2"><font-awesome-icon icon="fa-solid fa-calendar-days" /> {{ date }}</p>

            <!-- paragraph -->
            <p v-if="paragraph" class="mb-2">{{ paragraph }}</p>

            <!-- teacher -->
            <p v-if="teacher" class="mb-2"><font-awesome-icon icon="fa-solid fa-user-tie" /> Teacher:
                <strong>{{ teacher }}</strong>
            </p>

            <!-- price -->
            <p v-if="price" class="mb-2"><font-awesome-icon icon="fa-solid fa-money-bill-wave" /> Price:
                <strong>{{ price }}</strong>
            </p>

            <!-- button -->
            <base-button :class="buttonColor" class="card-btn red-btn" :button-label="buttonLabel">
                <slot></slot>
            </base-button>
        </div>
    </div>
</template>

<style scoped lang="scss">
@use '../../assets/scss/partials/variables.scss' as *;

.card {
    background-color: $bg-white-1;
    box-shadow: 0 0 20px -10px $fill-black;
    color: $text-grey-9;
    text-align: center;
    padding: 0.5rem;
    position: relative;

    figure {
        margin: 0 auto;
    }

    .card-body {
        color: $text-grey-8 ;

        p {
            font-weight: 300;
        }
    }

    .card-btn {
        box-shadow: 0 0 20px -10px $fill-black;
        padding: 10px 20px;
        position: absolute;
        top: 90%;
        right: 50%;
        transform: translate(50%, 0);
    }
}
</style>