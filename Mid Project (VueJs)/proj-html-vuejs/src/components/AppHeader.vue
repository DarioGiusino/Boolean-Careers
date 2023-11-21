<script>
import NavLinks from './header/NavLinks.vue';
import BaseButton from './generics/BaseButton.vue';
import Jumbotron from './header/Jumbotron.vue';
export default {
    name: 'App Header',
    components: { NavLinks, BaseButton, Jumbotron },
    data() {
        return {
            headerLinks: ['Home', 'Courses', 'About Us', 'News', 'Pages', 'Contact', 'Purchase'],
            currentBG: 1,
        }
    },
    methods: {
        rotateBG() {
            setInterval(() => {
                this.currentBG++
                if (this.currentBG > 3) {
                    this.currentBG = 1;
                }
            }, 4000);
        }
    },
    mounted() {
        this.rotateBG()
    }
}
</script>

<template>
    <header>
        <!-- # header bg slider -->
        <img v-if="currentBG === 1" class="bg-image" src="../assets/img/theme_slider1_bg-1.jpg" alt="bg-1">
        <img v-if="currentBG === 2" class="bg-image" src="../assets/img/theme_slider2_bg-1.jpg" alt="bg-2">
        <img v-if="currentBG === 3" class="bg-image" src="../assets/img/theme_slider3_bg-1.jpg" alt="bg-3">

        <!-- # upper navbar -->
        <nav class="d-flex justify-content-between align-items-center">
            <!-- left logo -->
            <a href="#">
                <img class="header-logo" src="../assets/img/theme_eduprime_logo.png" alt="edu prime logo">
            </a>

            <!-- right navbar -->
            <nav-links class="links" :links="headerLinks">
                <base-button class="nav-button yellow-btn" button-label="view courses"></base-button>
            </nav-links>
        </nav>

        <!-- # jumbotron -->
        <jumbotron title="Key to your success">
            <p class="jumbo-paragraph">EduPrime is the most versatile WordPress theme for educational purposes,
                showcasing
                universities, courses, secondary schools etc.</p>
        </jumbotron>

        <!-- # wave -->
        <div class="header-wave"></div>
    </header>
</template>

<style scoped lang="scss">
@use '../assets/scss/partials/variables.scss' as *;

header {
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    color: $text-white-1;
    position: relative;
    overflow: hidden;

    .bg-image {
        position: absolute;
        z-index: -1;
        width: 100%;
    }

    nav {
        padding: 1.25rem;
        background-color: $bg-green-2;

        .header-logo {
            width: 16rem;
        }

        .links {
            font-weight: 500;

            .nav-button {
                text-transform: uppercase;
                font-size: 13px;
                padding: 10px 30px;
            }
        }
    }

    .jumbo-paragraph {
        margin-bottom: 0;
        width: 35rem;
        font-weight: 300;
    }

    .header-wave {
        height: 10rem;
        background-color: $bg-green-2;
        background-size: cover;
        background-image: url('../assets/img/Wave-1.png');
    }
}
</style>