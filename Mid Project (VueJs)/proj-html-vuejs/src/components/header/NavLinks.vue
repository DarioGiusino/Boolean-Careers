<script>
export default {
    name: 'Navbar',
    props: { links: Array }
}
</script>

<template>
    <ul>
        <li v-for="link, i in links" :key="i"><a href="#">{{ link }}</a></li>
        <!-- slot for eventually a button -->
        <slot></slot>
    </ul>
</template>

<style scoped lang="scss">
@use '../../assets/scss/partials/variables.scss' as *;

ul {
    margin-bottom: 0;
    list-style-type: none;
    display: flex;
    align-items: center;
    gap: 20px;

    li:first-child {
        color: $text-yellow;
    }

    li:nth-child(1):after,
    li:nth-child(2):after,
    li:nth-child(4):after,
    li:nth-child(5):after {
        content: '\25BC';
        font-size: 0.5rem;
        margin-left: 0.3rem;
        vertical-align: middle;
    }
}
</style>