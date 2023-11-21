<script>
import { courses } from '../../data';
import BaseCard from '../generics/BaseCard.vue';
export default {
    name: 'Latest Courses',
    components: { BaseCard },
    data() {
        return { courses }
    }
}
</script>

<template>
    <!-- # latest courses row -->
    <section class="container">
        <h1 class="fw-semibold mb-5">Latest Courses</h1>
        <div class="row row-cols-4">
            <div v-for="course in courses" :key="course.title" class="col">
                <base-card :image="course.image" :title="course.title" :teacher="course.teacher" :price="course.price"
                    button-color="red-btn" button-label="View Course"><font-awesome-icon
                        icon="fa-solid fa-eye" /></base-card>
            </div>
        </div>
    </section>
</template>

<style scoped lang="scss">
@use '../../assets/scss/partials/variables.scss' as *;

section {
    color: $text-grey-10;
    padding: 3rem 0;
    margin-bottom: 3rem;
}
</style>