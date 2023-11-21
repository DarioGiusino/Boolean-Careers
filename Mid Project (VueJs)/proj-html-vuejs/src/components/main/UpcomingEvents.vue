<script>
import BaseCard from '../generics/BaseCard.vue';
import BaseButton from '../generics/BaseButton.vue';
import { events } from '../../data';
export default {
    name: 'Upcoming Events',
    components: { BaseCard, BaseButton },
    data() {
        return { events }
    }
}
</script>

<template>
    <!-- # title and grey icon -->
    <header class="text-center pt-4 d-flex flex-column align-items-center">
        <figure class="section-icon">
            <img src="../../assets/img/upcoming-events-calendar-icon.png" alt="clock">
        </figure>
        <h1 class="fw-bold">Upcoming Events</h1>
    </header>

    <!-- #coaching cards -->
    <main>
        <div class="container">
            <div class="row row-cols-3">
                <div v-for="event in events" :key="event.date" class="col">
                    <base-card :title="event.title" :date="event.date" :paragraph="event.text" button-color="red-btn"
                        button-label="Find More"><font-awesome-icon icon="fa-solid fa-plus" /></base-card>
                </div>
            </div>
        </div>
    </main>

    <!-- # view all events button -->
    <footer>
        <base-button button-label="View All Events" class="yellow-btn"></base-button>
    </footer>
</template>

<style scoped lang="scss">
@use '../../assets/scss/partials/variables.scss' as *;

header,
main,
footer {
    background-color: $bg-green-1;
    color: $text-white-1;
}

main {
    padding: 3rem 0;
}

footer {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 3rem 0;
}
</style>