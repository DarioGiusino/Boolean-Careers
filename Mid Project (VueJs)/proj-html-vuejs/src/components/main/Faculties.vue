<script>
import { faculties } from '../../data';
import BaseButton from '../generics/BaseButton.vue';
import BaseSectionDesc from '../generics/BaseSectionDesc.vue';
export default {
    name: 'Faculties section',
    data() {
        return {
            currentIndex: 0,
            faculties
        }
    },
    components: { BaseButton, BaseSectionDesc },
    methods: {
        // build image src for faculties
        facultyImage(path) {
            //build src
            const url = new URL(`../../assets/img/${path}`, import.meta.url);

            //return src
            return url.href;
        },

        //method to change faculty description 
        changeFaculty(target) {
            this.currentIndex = target;
        }
    }
}
</script>

<template>
    <!-- # title & desc header -->
    <header class="text-center">
        <h1 class="mb-4">Faculties available at EduPrime</h1>
        <p class="mb-4">A single universisty with a load of courses tailored to satisfy any student's needs.</p>
    </header>

    <main>
        <!-- # cards -->
        <div class="line">
            <div class="container">
                <div class="row row-cols-5 justify-content-center">
                    <div v-for="faculty, i in faculties" :key="faculty.name" @click="changeFaculty(i)"
                        class="col faculty-card" :class="{ active: currentIndex === i }">
                        <img :src="facultyImage(faculty.icon)" :alt="faculty.name">
                        <p>{{ faculty.name }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- # faculty description -->
        <div class="container">
            <div v-for="faculty, i in faculties" :key="faculty.name" v-show="currentIndex === i"
                class="row p-5 pb-0 justify-content-center">
                <div class="col-4">
                    <img :src="facultyImage(faculty.image)" :alt="faculty.name">
                </div>
                <div class="col-6">
                    <base-section-desc class="p-4 faculty-desc" :title="faculty.name"
                        paragraph="Learning from world-leading academics and practitioners, you'll not only receive an outstanding grounding in the theory of law, but you will be able to understand how those principles are applied in practice through a range of student-led activities and competitions.">
                        <base-button class="red-btn" buttonLabel="Read More"></base-button></base-section-desc>
                </div>
            </div>
        </div>
    </main>
</template>

<style scoped lang="scss">
@use '../../assets/scss/partials/variables.scss' as *;

.line {
    box-shadow: 0 0 15px -10px $fill-black;

    .faculty-card {
        width: 15%;
        padding: 1rem 1.5rem;
        border: 0.1px solid $border-white-4;
        text-align: center;
        color: $text-green;
        font-weight: 500;
        text-transform: capitalize;
        cursor: pointer;

        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;

        position: relative;

        img {
            width: 60%;
        }

        p {
            margin: 0.5rem 0 0 0;
        }

    }
}

.faculty-desc {
    color: $text-grey-5;
}

.active {
    background-color: $bg-green-1;

    img {
        filter: invert(1)
    }

    p {
        color: $text-white-1;
    }

    &::after {
        content: '\25BC';
        color: $bg-green-1;
        position: absolute;
        bottom: -15px;
        left: 50%;
        transform: translate(-50%, 0);
    }

}
</style>