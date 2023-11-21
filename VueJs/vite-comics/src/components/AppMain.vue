<script>
import Jumbo from './main/Jumbo.vue'
import ComicCard from './main/ComicCard.vue'
export default {
    components: { Jumbo, ComicCard },
    props: { comics: Array }
}
</script>

<template>
    <main>
        <jumbo></jumbo>
        <div class="container">
            <h3>current series</h3>
            <div class="card-container">
                <comic-card v-for="comic in comics" :key="comic.series" :comic="comic"></comic-card>
            </div>
            <button>load more</button>
        </div>
    </main>
</template>

<style lang="scss" scoped>
@use '../assets/scss/partials/mixins' as *;
@use '../assets/scss/partials/variables' as *;

main {
    background-color: #1c1c1c;
    color: #fff;

    .container {
        position: relative;
        text-align: center;

        h3 {
            position: absolute;
            top: -20px;
            left: 0;
            padding: 5px 10px;
            background-color: $blue;
            text-transform: uppercase;
        }

        .card-container {
            @include flex('start', 'stretch');
            flex-wrap: wrap;
            padding: 20px;

            .comic-card {
                flex-basis: calc(100% / 6);
                padding: 5px;

                figure {
                    height: 170px;
                    overflow: hidden;
                }

                p {
                    margin-top: 10px;
                    text-transform: uppercase;
                    font-size: 12px;
                }
            }
        }

        button {
            font-weight: bold;
            text-transform: uppercase;
            border: none;
            color: #fff;
            background-color: $blue;
            padding: 10px 15px;
            margin-bottom: 20px;
        }
    }
}
</style>