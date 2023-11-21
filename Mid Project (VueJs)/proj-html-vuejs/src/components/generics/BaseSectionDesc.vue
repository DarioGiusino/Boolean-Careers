<script>
export default {
    name: 'Section Description',
    props: { title: String, paragraph: String }
}
</script>

<template>
    <section>
        <h1>{{ title }}</h1>
        <p>{{ paragraph }}</p>
        <!-- slot for eventually a button -->
        <slot></slot>
    </section>
</template>

<style scoped lang="scss">
@use '../../assets/scss/partials/variables.scss' as *;

section {
    color: $text-grey-10;

    h1 {
        font-weight: 700;
        margin-bottom: 1.75rem;
    }

    p {
        margin-bottom: 1.75rem;
    }
}
</style>