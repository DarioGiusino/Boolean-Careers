<script>
import PokeCard from './PokeCard.vue';
import AppLoader from './AppLoader.vue';
import SelectFilter from './SelectFilter.vue';
import TextFilter from './TextFilter.vue';
import { store } from '../data/store';
export default {
    components: { PokeCard, AppLoader, SelectFilter, TextFilter },
    data() {
        return store
    },
    props: { pokeTypes: Array },
    methods: {
        onSelect(type) {
            this.$emit('type-selected', type)
        },

        onWrite(word) {
            this.$emit('change-word', word)
        }
    },
    emits: ['type-selected', 'change-word']
}
</script>

<template>
    <main class="container">

        <!-- search pokemon by type -->
        <p class="mb-0">Filtra Pokemon per tipo</p>
        <select-filter :list="pokeTypes" @selected="onSelect"></select-filter>

        <!-- search pokemon by text -->
        <p class="mb-0">Filtra Pokemon per nome</p>
        <text-filter @change-word="onWrite"></text-filter>

        <!-- loader -->
        <app-loader v-if="isLoading"></app-loader>
        <div v-else class="row row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-3">
            <poke-card v-for="pokemon in pokemons" :key="pokemon._id" :img="pokemon.imageUrl" :name="pokemon.name"
                :type1="pokemon.type1" :type2="pokemon.type2" :weight="pokemon.weight" :height="pokemon.height"
                :hp="pokemon.hp" :atk="pokemon.atk" :sp-atk="pokemon.sp_atk" :def="pokemon.def" :sp-def="pokemon.sp_def"
                :spd="pokemon.spd"></poke-card>
        </div>
    </main>
</template>

<style>

</style>