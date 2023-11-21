<script>
export default {
    props: { comic: Object }
}
</script>

<template>
    <div class="comic-card">
        <figure>
            <img :src="comic.thumb" :alt="comic.type">
        </figure>
        <div class="card-text">
            <h4>{{ comic.series }}</h4>
            <sub>{{ comic.price }}</sub>
        </div>
    </div>
</template>

<style lang="scss" scoped>
.comic-card {
    flex-basis: calc(100% / 6);
    padding: 5px;
    margin: 25px 0;
    text-align: start;

    figure {
        height: 170px;
        overflow: hidden;
    }

    .card-text {
        margin-top: 10px;
        text-transform: uppercase;
        font-size: 12px;
    }
}
</style>