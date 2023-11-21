<script>
export default {
    name: 'University Year'
}
</script>

<template>
    <!-- # title and grey icon -->
    <header class="text-center pt-4 d-flex flex-column align-items-center">
        <figure class="section-icon">
            <img src="../../assets/img/Clock-and-Bell.png" alt="clock">
        </figure>
        <h1 class="fw-bold">University Year</h1>
    </header>

    <!-- # year timeline -->
    <main>
        <div class="container">
            <!-- top timeline -->
            <div class="top-timeline row justify-content-end">
                <div class="col-4 text-center me-4">
                    <h5 class="mb-3">Demo Classes</h5>
                    <p class="fw-light">In the first week, students try to accomodate with the teaching style and choose
                        their optional
                        courses.</p>
                </div>
                <div class="col-4 text-center ms-5">
                    <h5 class="mb-3">Graduation Day</h5>
                    <p class="fw-light">On the day of graduation, all students gather for the ceremony and then network
                        and party among
                        others.</p>
                </div>
            </div>

            <!-- image timeline -->
            <figure>
                <img src="../../assets/img/Timeline-Item.png" alt="timeline">
            </figure>

            <!-- bottom timeline -->
            <div class="bottom-timeline row">
                <div class="col-4 text-center me-4">
                    <h5 class="mb-3">Orientation</h5>
                    <p class="fw-light">First Day of the university year, all students gather for the opening ceremony
                        and then network wirh others.</p>
                </div>
                <div class="col-4 text-center ms-5">
                    <h5 class="mb-3">Evaluation</h5>
                    <p class="fw-light">At the end of a semester, students take a general evaluation test for every
                        subject they're learning.</p>
                </div>
            </div>
        </div>
    </main>

</template>

<style scoped lang="scss">
@use '../../assets/scss/partials/variables.scss' as *;

header {
    background-color: $bg-green-1;
    color: $text-white-1;
}

main {
    background-color: $bg-green-1;
    color: $text-white-1;
    padding: 3rem 0;

    .top-timeline {
        margin-right: 5.5rem;
    }

    .bottom-timeline {
        margin-left: 5.5rem;
    }

    figure img {
        margin: 0 auto;
    }
}
</style>